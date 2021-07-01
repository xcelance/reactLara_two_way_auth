<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;
use App\User;
use App\Models\Proposal;
use App\Models\Portal;
use App\Models\Setting;
use App\Models\Log;
use App\Models\PortalProfile;
use App\Models\Client;
use App\Models\Invoice;
use App\Models\Questionnaire;
use Session, Mail, DB, View, Auth;
use Carbon\Carbon;

class GlobalSearchController extends Controller
{
    /**
     	* admin dashboard controller.
    */
    public function index(Request $request){

        $userid = Auth::user()->id;
        $userRole = Auth::user()->role;
        $_ass = User::whereRaw('json_contains(assigned_to, \'["'.Auth::user()->id.'"]\')')->get();
        $_assigned = $_ass->pluck('id')->toArray();

        $searchList = [];  $searchList['proposals'] = []; $searchList['clients'] = []; $searchList['invoices'] = [];
        $clients = []; $invoices = []; $_resp = ''; $status = false;

        $sval = trim($request['searchval']);
        if(!empty($sval)) {
            if($userRole == 'admin') {
                $proposals = Proposal::select('proposals.id', 'proposals.title','proposals.link')
                	->leftjoin('clients', 'proposals.client_id', '=', 'clients.id')
                	->where('clients.name', 'LIKE', '%'.$sval.'%')
                	->orWhere('proposals.title', 'LIKE', '%'.$sval.'%')
                	->orWhere('proposals.link', 'LIKE', '"%'.$sval.'%"')
                	->take(10)->orderBy('proposals.id', 'DESC');
          
                $clients    = Client::where('name', 'LIKE', '%'.$sval.'%')->orWhere('clientId', 'LIKE', '%'.$sval.'%')->orWhere('email', 'LIKE', '%'.$sval.'%')->orWhere('website', 'LIKE', '%'.$sval.'%')->take(10)->orderBy('clients.id', 'DESC')->get();
                
                $invoices    = Invoice::where('invoice_number', 'LIKE', '%'.$sval.'%')->orWhere('name', 'LIKE', '%'.$sval.'%')->orWhere('project_name', 'LIKE', '%'.$sval.'%')->orWhere('company_name', 'LIKE', '%'.$sval.'%')->orWhere('prepared_for', 'LIKE', '%'.$sval.'%')->take(10)->orderBy('invoices.id', 'DESC');
                $invoices = $invoices->get();

                $proposals = $proposals->withTrashed();
            } elseif($userRole == 'manager') {
                $proposals = Proposal::select('proposals.id', 'proposals.title','proposals.link')
                	->leftjoin('users', 'proposals.user_id', '=', 'users.id')
                	->leftjoin('clients', 'proposals.client_id', '=', 'clients.id')                	
                    ->where(function ($query) use ($_assigned) {
                        $query->where('proposals.user_id', Auth::user()->id)->orWhereIn('proposals.user_id', $_assigned); 
                    })->where(function ($query) use ($sval) {
                        $query->where('proposals.title', 'LIKE', '"%'.$sval.'%"')->orWhere('proposals.link', 'LIKE', '"%'.$sval.'%"')->orWhere('clients.name', 'LIKE', '%'.$sval.'%');
                    })->take(10)->orderBy('proposals.id', 'DESC');

                $invoices  = Invoice::where('invoices.user_id', Auth::user()->id);
                $invoices  = $invoices->where(function ($query) use ($sval) {
                    $query->where('invoices.invoice_number', 'LIKE', '%'.$sval.'%')->orWhere('invoices.name', 'LIKE', '%'.$sval.'%')->orWhere('invoices.project_name', 'LIKE', '%'.$sval.'%')->orWhere('invoices.company_name', 'LIKE', '%'.$sval.'%'); 
                })->take(10)->orderBy('invoices.id', 'DESC');
                $invoices = $invoices->get();
            }
            elseif($userRole == 'seomanager') {
                $proposals = Proposal::select('proposals.id', 'proposals.title','proposals.link')
                	->leftjoin('users', 'proposals.user_id', '=', 'users.id')
                	->leftjoin('clients', 'proposals.client_id', '=', 'clients.id')                	
                    ->where(function ($query) use ($_assigned) {
                        $query->where('proposals.user_id', Auth::user()->id)->orWhereIn('proposals.user_id', $_assigned); 
                    })->where(function ($query) use ($sval) {
                        $query->where('proposals.title', 'LIKE', '"%'.$sval.'%"')->orWhere('proposals.link', 'LIKE', '"%'.$sval.'%"')->orWhere('clients.name', 'LIKE', '%'.$sval.'%');
                    })->take(10)->orderBy('proposals.id', 'DESC');
            } elseif($userRole == 'member') {
                $proposals = Proposal::select('proposals.id', 'proposals.title','proposals.link')
                	->where('proposals.user_id', Auth::user()->id)
                	->leftjoin('clients', 'proposals.client_id', '=', 'clients.id')
                	->where('clients.name', 'LIKE', '%'.$sval.'%')
                	->orWhere(function ($query) use ($sval) {
                        $query->where('proposals.title', 'LIKE', '"%'.$sval.'%"')->orWhere('proposals.link', 'LIKE', '"%'.$sval.'%"');
                    })->take(10)->orderBy('proposals.id', 'DESC');                                
            }
            $proposals = $proposals->get();

            $proposalUrl = '/proposals/edit';
            $clientUrl = '/clients/edit';
            $invoiceUrl = '/invoices/edit';

            if(count($proposals) > 0) {
                foreach ($proposals as $key => $value) {
                    $valArr['id'] = $value->id;
                    $valArr['title'] = json_decode($value->title);
                    $valArr['link'] = $proposalUrl.'/'.base64_encode($value->id);
                    $searchList['proposals'][] = $valArr;           
                }
            }

            if($userRole == 'admin' && count($clients) > 0 ) {
                foreach ($clients as $key => $value) {
                    $valArr['id'] = $value->id;
                    $valArr['title'] = $value->name.' - ('.$value->clientId.')';
                    $valArr['link'] = $clientUrl.'/'.base64_encode($value->id);
                    $searchList['clients'][] = $valArr;           
                }
            }

            if(count($invoices) > 0 && ($userRole == 'admin' || $userRole == 'manager')) {
                foreach ($invoices as $key => $value) {
                    $valArr['id'] = $value->id;
                    $valArr['title'] = $value->name;
                    $valArr['link'] = $invoiceUrl.'/'.base64_encode($value->id);
                    $searchList['invoices'][] = $valArr;           
                }
            } 

            if(count($proposals) == 0 && count($clients) == 0 && count($invoices) == 0 && $userRole == 'admin') {
                $_resp = "";
            } elseif(count($proposals) == 0 && count($invoices) == 0 && $userRole == 'manager') {
                $_resp = "";
            } elseif(count($proposals) == 0 && ($userRole == 'seomanager' || $userRole == 'member')) {
                $_resp = "";
            } else {
                $_resp = $searchList;
                $status = true;
            }
                      
        } else {
            $_resp = "";    
        }

        return response()->json([ 'status' => $status, 'data' => $_resp ]);
    }
}

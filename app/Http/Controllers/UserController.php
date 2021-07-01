<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Models\UserInfo;
use App\Models\Setting;
use Auth, File;

class UserController extends Controller
{
    /**
     * index controller.
     *
    */
    public function index() {}

    /**
     * Uploading an image.
     *
    */ 
    protected function upload_image($file) {
        $ext = $file->getClientOriginalExtension(); 
        $filename = $file->getClientOriginalName();
        $name = pathinfo($filename,PATHINFO_FILENAME);
       
        $name = $name.'.'.$ext;
        $path = "/images/profile/".Auth::user()->id;

        if(!File::isDirectory($path)){
            File::makeDirectory($path, 0777, true, true);
        }

        $destinationPath = public_path('/images/profile/'.Auth::user()->id);
        $file->move($destinationPath, $name);

        return $path."/".$name;
    }

    /**
     * get current user profile controller.
     *
    */
    public function profile() {
    	$user = User::leftJoin('user_infos', 'users.id', '=', 'user_infos.user_id')
    		->select('users.name', 'users.email', 'user_infos.profile')
    		->where('users.id', Auth::user()->id)->first();

    	return response()->json($user);
    }

    public function updateProfile(Request $request) {
    	$profile = ''; $status = true; $message = 'Profile updated sucessfully.';
    	$user = array();
    	if($request->file('profile')) {
    		$profile = $this->upload_image($request->file('profile'));
    		if(UserInfo::where('user_id', Auth::user()->id)->count() > 0) {
    			$val = UserInfo::where('user_id', Auth::user()->id)->first();
    			if(isset($val->profile) && File::exists($val->profile)) {
    				unlink(public_path($val->profile));
    			}
    			UserInfo::where('user_id', Auth::user()->id)->update([ 'profile' => $profile ]);
    		} else {
    			$info = new UserInfo;
    			$info->user_id = Auth::user()->id;
                $info->profile = $profile;
    			$info->save();
    		}
    	}

    	$user['name'] = $request['name'];
    	if($request['password']) {
            if(strlen($request['password']) < 8) {
            	$message = 'Password must be of 8 characters.';
            	$status = false;
            } elseif (strlen($request['password_confirmation']) < 8) {
            	$message = 'Confirm password must be of 8 characters.';
            	$status = false;
            } else {
                if($request['password'] == $request['password_confirmation']) {
                    $user['password'] = bcrypt($request['password']);
                } else {
                	$message = 'Passwords does not match.';
            		$status = false;
                }
            }
        }
    	User::where('id', Auth::user()->id)->update($user);
    	$current = Auth()->user(); $u_profile = '';
    	if(isset($current->userInfo)) {
            if($current->userInfo->profile) {
                $u_profile = $current->userInfo->profile;
            }
        }

    	$data['status'] = $status;
    	$data['message'] = $message;
    	$data['user'] = array(
            'id' => $current->hashid,
            'name' => $request['name'],
            'profile' => $u_profile
        );

    	return response()->json($data);
    }

    /**
     * get basic settings.
     *
    */
    public function basicSettings() {
        die;
        $data['logo'] = Setting::where('name', 'logo')->first();
        $data['templatecolor'] = Setting::where('name', 'templatecolor')->first();

        return response()->json($data);
    }
}

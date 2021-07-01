<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    use SoftDeletes;
    public function clientInfo() {
        return $this->hasOne('App\Models\ClientInformation')->withTrashed();
    }

    public function jobCategory() {
        return $this->belongsTo('App\Models\Category','job_category');
    }

    public function proposal() {
        return $this->hasOne('App\Models\Proposal');
    }

    public function Country() {
        return $this->belongsTo('App\Models\Country','country', 'code');
    }
}

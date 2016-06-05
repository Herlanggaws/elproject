<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Eloquent;

class Owner extends Eloquent 
{
	use SoftDeletes;
	public $incrementing = false;

    protected $fillable = [
        'first_name', 'last_name', 'email', 'address', 'phone_number', 'zip_code', 'dob', 'password','owner_code',
    ];

    public function chain(){
        return $this->hasMany('App\Chain');
    }
}


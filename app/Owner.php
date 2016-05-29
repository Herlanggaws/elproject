<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Owner extends Model
{
	use SoftDeletes;

    protected $fillable = [
        'first_name', 'last_name', 'email', 'address', 'phone_number', 'zip_code', 'dob', 'password','owner_code',
    ];

    public function chain(){
        return $this->hasMany('App\Chain');
    }
}


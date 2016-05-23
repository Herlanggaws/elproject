<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    protected $fillable = [
        'first_name', 'last_name', 'email', 'address', 'phone_number', 'zip_code', 'dob', 'password'
    ];
}

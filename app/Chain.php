<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Chain extends Model
{
	use SoftDeletes;
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'about','website',
    ];

    public function productCategories(){
          return $this->hasMany('App\ProductCategory');
     }
}

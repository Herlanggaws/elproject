<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $fillable = [
     'name', 'price', 'product_category_id',
     ];

     public function productCategory()
     {
     	return $this->belongsTo('App\productCategory')->withTrashed();
     }
}

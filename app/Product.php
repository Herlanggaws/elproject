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

     /*get Category List*/
     public static function getCategoryList()
     {
          $categories = ProductCategory::all('id','name');
          $categoryList = array();

          foreach ($categories as $category)
          { 
               $categoryList= array_add($categoryList, $category->id, $category->name);
          }
          return $categoryList;
     }
}

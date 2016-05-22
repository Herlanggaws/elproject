<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductCategory extends Model
{
	use SoftDeletes;
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     protected $fillable = [
     'name', 'about', 'chain_id',
     ];

     public function chain()
     {
     	return $this->belongsTo('App\Chain')->withTrashed();
     }

     public function products(){
          return $this->hasMany('App\Product');
     }

     /*get Chain List*/
     public static function getChainList()
     {
     	$chains = Chain::all('id','name');
     	$chainList = array();

     	foreach ($chains as $chain)
     	{ 
     		$chainList= array_add($chainList, $chain->id, $chain->name);
     	}
     	return $chainList;
     }
 }

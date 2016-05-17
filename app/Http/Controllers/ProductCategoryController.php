<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ProductCategory;

class ProductCategoryController extends Controller
{
    public function index()
	{
		$productCategories = ProductCategory::orderBy('id')->paginate(10);
		return view('product_category.index', compact('productCategories'));
	}
}

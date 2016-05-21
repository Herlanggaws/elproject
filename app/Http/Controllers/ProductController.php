<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Product;

class ProductController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
	public function index()
	{
		$products = Product::orderBy('id', 'DESC')->paginate(10);
		return view('product.index', compact('products'));
	}
}

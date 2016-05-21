<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\ProductCategory;

class ProductCategoryController extends Controller
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
		$id = \Request::get('chain_id');
		$search = \Request::get('search');
		$getCategory = \Request::get('category');
		
		if (is_null($search) && is_null($getCategory) &&  is_null($id) &&  $search == "" &&  $getCategory == "" &&  $id == ""){
			$productCategories = ProductCategory::orderBy('id', 'DESC')->paginate(10);
		} else {
			$productCategories = ProductCategory::where('chain_id','=',$id)->orderBy('id', 'DESC')->paginate(10);
		}
		
		return view('product_category.index', compact('productCategories'));
	}

	public function show($id){
		$productCategory = ProductCategory::findOrFail($id);
		return view('product_category.show', compact('productCategory'));

	}


	public function create()
	{
		$chainList = ProductCategory::getChainList();
		return view('product_category.create', compact('chainList'));
	}

	public function store(Request $request){
		try {
			echo $request->chain_id;
			ProductCategory::create($request->all());
			return redirect('productCategory')->with('message', 'Data has been created!');
		} catch (\Illuminate\Database\QueryException $e) {
			return redirect('productCategory')->with('message', 'Data have been used!');
		} catch (\PDOException $e) {
			return redirect('productCategory')->with('message', 'Data dengan email tersebut sudah digunakan!');
		}
	}

	public function edit($id)
	{
		$productCateory  = ProductCategory::findOrFail($id);
		$chainList = ProductCategory::getChainList();
		return view('product_category.edit', compact('productCateory', 'chainList'));
	}

	public function update(Request $request, $id)
	{
		$productCateory  = ProductCategory::findOrFail($id);

		$productCateory ->update($request->all());

		return redirect('productCategory')->with('message', 'Data has been updated!');
	}


	public function destroy($id)
	{
		ProductCategory::destroy($id);
		return redirect('productCategory')->with('message', 'Data has been deleted!');;
	}
}

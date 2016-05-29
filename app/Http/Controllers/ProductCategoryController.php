<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\ProductCategoryRequest;
use App\ProductCategory;
use App\Chain;

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
		$search = \Request::get('search');
		$getCategory = \Request::get('category');
		
		if (is_null($search) || is_null($getCategory) || $search == "" || $getCategory == ""){
			$productCategories = ProductCategory::orderBy('id', 'DESC')->paginate(10);
		} else {
			$productCategories = ProductCategory::where($getCategory,'like','%'.$search.'%')->orderBy('id', 'DESC')->paginate(10);
		}
		$category = array(''=>'category', 'id'=>'Id', 'name'=>'Name', 'chain_id'=>'Chain Id');
		return view('product_category.index', compact('productCategories', 'category'));
	}

	public function show($id){
		$productCategory = ProductCategory::findOrFail($id);
		$products = $productCategory->products()->paginate(10);
		return view('product_category.show', compact('productCategory', 'products'));

	}

	public function create()
	{
		return view('product_category.create');
	}

	public function store(ProductCategoryRequest $request){
		$chain = Chain::where('id','=',$request->input('chain_id'))->orderBy('id')->first();
		try {
			if (is_null($chain)){
				return redirect('admin/product_category')->with('message', 'Chain Id Cant Find');
			}else{
				ProductCategory::create($request->all());
				return redirect('admin/product_category')->with('message', 'Data has been created!');
			}

			
		} catch (\Illuminate\Database\QueryException $e) {
			return redirect('productCategory')->with('message', 'Data have been used!');
		} catch (\PDOException $e) {
			return redirect('productCategory')->with('message', 'Data dengan email tersebut sudah digunakan!');
		}
	}

	public function edit($id)
	{
		$productCateory  = ProductCategory::findOrFail($id);
		return view('product_category.edit', compact('productCateory'));
	}

	public function update(ProductCategoryRequest $request, $id)
	{
		$productCateory  = ProductCategory::findOrFail($id);
		$chain = Chain::where('id','=',$request->input('chain_id'))->orderBy('id')->first();

		if (is_null($chain)){
			return redirect('admin/product_category')->with('message', 'Chain Id Cant Find');
		}else{
			$productCateory ->update($request->all());
			return redirect('admin/product_category')->with('message', 'Data has been updated!');
		}

		
	}


	public function destroy($id)
	{
		ProductCategory::destroy($id);
		return redirect('admin/product_category')->with('message', 'Data has been deleted!');;
	}
}

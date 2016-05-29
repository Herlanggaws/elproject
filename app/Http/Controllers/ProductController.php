<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Product;
use App\ProductCategory;

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

  public function show($id){
    $product = Product::findOrFail($id);
    return view('product.show', compact('product'));
}

public function create(){
    return view('product.create', compact('categoryList'));
}

public function store(Request $request){
    $productCategory = ProductCategory::where('id','=',$request->input('product_category_id'))->orderBy('id')->first();
    try {
        if (is_null($productCategory)){
            return redirect('admin/product')->with('message', 'Product Category Id Cant Find');
        }else{
            Product::create($request->all());
            return redirect('admin/product')->with('message', 'Data has been created!');
        }
    } catch (\Illuminate\Database\QueryException $e) {
        return redirect('admin/product')->with('message', 'Data has been used!');
    } catch (\PDOException $e) {
        return redirect('admin/product')->with('message', 'Data has been used!');
    }
}

public function edit($id)
{
    $product = Product::findOrFail($id);
    $categoryList = Product::getCategoryList();
    return view('product.edit', compact('product', 'categoryList'));
}

public function update(Request $request, $id)
{
    $product = Product::findOrFail($id);

    $product ->update($request->all());

    return redirect('product')->with('message', 'Data has been updated!');
}

public function destroy($id)
{
    Product::destroy($id);
    return redirect('product')->with('message', 'Data has been deleted!');;
}
}


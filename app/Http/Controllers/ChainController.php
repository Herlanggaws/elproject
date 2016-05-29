<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ChainRequest;

use App\Http\Requests;

use App\Chain;
use App\Owner;

class ChainController extends Controller
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
        	$chains = Chain::orderBy('id','DESC')->paginate(10);
        } else {
        	$chains = Chain::where($getCategory,'like','%'.$search.'%')->orderBy('id', 'DESC')->paginate(10);
        }

        $category = array(''=>'category', 'id'=>'Id', 'name'=>'Name', 'website'=>'Website', 'about'=>'About', 'owner_id'=>'Owner Id');

		return view('chain.index', compact('chains','category'));
	}

	public function create()
	{
		return view('chain.create');
	}

	public function store(ChainRequest $request){
		$owner = Owner::where('id','=',$request->input('owner_id'))->orderBy('id')->first();

		try {
			
			if (is_null($owner)){
				return redirect('admin/chain')->with('message', 'Owner Id Cant Find');
			}else{
				Chain::create($request->all());
				return redirect('admin/chain')->with('message', 'Data has been created!');
			}

		} catch (\Illuminate\Database\QueryException $e) {
			return redirect('admin/chain')->with('message', 'Data have been used!');
		} catch (\PDOException $e) {
			return redirect('admin/chain')->with('message', 'Data dengan email tersebut sudah digunakan!');
		}
	}

	public function show($id)
	{
		$chain = Chain::findOrFail($id);

		if (is_null($chain)){
			return "can't find";
		}else {
			return view('chain.show', compact('chain'));	
		}

	}

	public function edit($id)
	{
		$chain = Chain::findOrFail($id);
		return view('chain.edit', compact('chain'));
	}

	public function update(ChainRequest $request, $id)
	{
		$chain = Chain::findOrFail($id);

		$chain->update($request->all());

		return redirect('admin/chain')->with('message', 'Data has been updated!');
	}


	public function destroy($id)
	{
		Chain::destroy($id);
		return redirect('admin/chain')->with('message', 'Data has been deleted!');;
	}
}

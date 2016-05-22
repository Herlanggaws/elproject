<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Chain;

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
		$chains = Chain::orderBy('id','DESC')->paginate(10);
		return view('chain.index', compact('chains'));
	}

	public function create()
	{
		return view('chain.create');
	}

	public function store(Request $request){
		try {
			Chain::create($request->all());
			return redirect('chain')->with('message', 'Data has been created!');;
		} catch (\Illuminate\Database\QueryException $e) {
			return redirect('chain')->with('message', 'Data have been used!');
		} catch (\PDOException $e) {
			return redirect('chain')->with('message', 'Data dengan email tersebut sudah digunakan!');
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

	public function update(Request $request, $id)
	{
		$chain = Chain::findOrFail($id);

		$chain->update($request->all());

		return redirect('chain')->with('message', 'Data has been updated!');
	}


	public function destroy($id)
	{
		Chain::destroy($id);
		return redirect('chain')->with('message', 'Data has been deleted!');;
	}
}

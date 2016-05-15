<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Chain;

class ChainController extends Controller
{
	public function index()
	{
		$chains = Chain::orderBy('id')->paginate(10);
		return view('chain.index', compact('chains'));
	}

	public function create()
	{
		return view('chain.create');
	}

	public function store(Request $request){
		try {

			Chain::create($request->all());
			return redirect('chain')->with('message', 'Data berhasil dibuat!');;
		} catch (\Illuminate\Database\QueryException $e) {
			return redirect('chain')->with('message', 'Data dengan email tersebut sudah digunakan!');
		} catch (\PDOException $e) {
			return redirect('chain')->with('message', 'Data dengan email tersebut sudah digunakan!');
		}
	}
}

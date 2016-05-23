<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Owner;
use Hash;

class OwnerController extends Controller
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
    	$owners = Owner::orderBy('id', 'DESC')->paginate(10);
    	return view('owner.index', compact('owners'));
    }

    public function create(){
    	return view('owner.create');
    }

    public function store(Request $request){
    	

    	try {
    		// Owner::create($request->all());
    		$owner = new Owner;
    		$owner->first_name = $request->input('first_name');
    		$owner->last_name = $request->input('last_name');
    		$owner->email = $request->input('email');
    		$owner->address = $request->input('address');
    		$owner->phone_number = $request->input('phone_number');
    		$owner->zip_code = $request->input('zip_code');
    		$owner->dob = date('Y-m-d', strtotime($request->input('dob')));
    		$owner->password = Hash::make('123456');

    		$owner->save();
    		return redirect('owner')->with('message', 'Data has been created!');;
    	} catch (\Illuminate\Database\QueryException $e) {
    		return redirect('owner')->with('message', 'Data have been used!');
    	} catch (\PDOException $e) {
    		return redirect('owner')->with('message', 'Data dengan email tersebut sudah digunakan!');
    	}
    }
}

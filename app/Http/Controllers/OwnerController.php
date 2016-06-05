<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\OwnerRequest;
use App\Owner;
use Hash;
use DateTime;

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
        $search = \Request::get('search');
        $getCategory = \Request::get('category');
        if (is_null($search) || is_null($getCategory) || $search == "" || $getCategory == ""){
            $owners = Owner::orderBy('id', 'DESC')->paginate(10);
        }else{
            $owners = Owner::where($getCategory,'like','%'.$search.'%')->orderBy('id', 'DESC')->paginate(10);
        }

        $category = array(''=>'category', 'email'=>'Email', 'first_name'=>'First Name', 'last_name'=>'last Name', 'address'=>'Address');
        return view('owner.index', compact('owners','category'));
    }



    public function create(){
    	return view('owner.create');
    }

    public function store(OwnerRequest $request){
        $now = new DateTime();

        try {
            $owner = new Owner;
            $owner->id = $request->input('first_name')[3].$now->getTimestamp();
            $owner->first_name = $request->input('first_name');
            $owner->last_name = $request->input('last_name');
            $owner->email = $request->input('email');
            $owner->address = $request->input('address');
            $owner->phone_number = $request->input('phone_number');
            $owner->zip_code = $request->input('zip_code');
            $owner->dob = date('Y-m-d', strtotime($request->input('dob')));
            $owner->password = Hash::make('123456');

            $owner->save();
            return redirect('admin/owner')->with('message', 'Data has been created!');;
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect('admin/owner')->with('message', 'Data have been used!');
        } catch (\PDOException $e) {
            return redirect('admin/owner')->with('message', 'Data dengan email tersebut sudah digunakan!');
        }
    }

    public function edit($id){
        $owner = Owner::findOrFail($id);
        return view('owner.edit', compact('owner'));
    }

    public function update(OwnerRequest $request, $id)
    {
        $now = new DateTime();
        $owner = Owner::findOrFail($id);

        $owner->first_name = $request->input('first_name');
        $owner->last_name = $request->input('last_name');
        $owner->email = $request->input('email');
        $owner->address = $request->input('address');
        $owner->phone_number = $request->input('phone_number');
        $owner->zip_code = $request->input('zip_code');
        $owner->dob = date('Y-m-d', strtotime($request->input('dob')));
        $owner->password = Hash::make('123456');

        $owner->save();

        return redirect('admin/owner')->with('message', 'Data has been updated!');
    }

    public function destroy($id)
    {
        Owner::destroy($id);
        return redirect('admin/owner')->with('message', 'Data has been deleted!');
    }

    public function show($id)
    {
        $owner = Owner::findOrFail($id);

        if (is_null($owner)){
            return "can't find";
        }else {
            return view('owner.show', compact('owner'));    
        }

    }
}

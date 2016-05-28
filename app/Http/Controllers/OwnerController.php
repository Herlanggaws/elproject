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
    	$owners = Owner::orderBy('id', 'DESC')->paginate(10);
    	return view('owner.index', compact('owners'));
    }



    public function create(){
    	return view('owner.create');
    }

    public function store(OwnerRequest $request){
        $now = new DateTime();

        try {
            $owner = new Owner;
            $owner->first_name = $request->input('first_name');
            $owner->last_name = $request->input('last_name');
            $owner->email = $request->input('email');
            $owner->address = $request->input('address');
            $owner->phone_number = $request->input('phone_number');
            $owner->zip_code = $request->input('zip_code');
            $owner->dob = date('Y-m-d', strtotime($request->input('dob')));
            $owner->password = Hash::make('123456');
            $owner->owner_code = $now->getTimestamp();

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

    public function update(Request $request, $id)
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
        $owner->owner_code = $now->getTimestamp();

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

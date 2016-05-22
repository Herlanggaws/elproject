<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Customer;

class CustomerController extends Controller
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
		$customers = Customer::orderBy('id', 'DESC')->paginate(10);
		return view('customer.index', compact('customers'));
	}
}

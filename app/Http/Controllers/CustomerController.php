<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index(){
       // return 'Welcome to Customer Controller';

       $data - Customer::all();
       return view('customer'.'index',['customers'=>$data]);
    }
}

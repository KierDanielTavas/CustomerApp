<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index(){
        return 'Hello from User Controller';
    }

    public function show($id){
        
        $data=array(
            "id"=>$id,
            "name"=>"Pogi",
            "age"=>22,
            "email"=>"pogi@gmail.com"
        );

        return view('user',$data);
    }
}

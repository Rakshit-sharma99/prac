<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StdController extends Controller
{
    //
    public function index(){
        return view('student',[
            'name'=>'rakshit',
            'course'=>'B-tech',
            'skills'=>['laravel','php','Node']    
        ]);
    }
}

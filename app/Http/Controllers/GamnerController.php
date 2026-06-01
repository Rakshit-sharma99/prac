<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GamnerController extends Controller
{

    public function showform()
    {
        return view('gamerReg');

    }
    public function submitform(Request $req)
    {
        $req->validate([
            'gamer_name'=>'required|min:3',
            'image'=>'required|image|mimes:jpg,png,jpeg|max:2048'
        ]);
    
    $name = $req->input('gamer_name');

    
    
    return back()->with('success','Gamer'.$name.'Succesfully adeed');
    }


    //
}

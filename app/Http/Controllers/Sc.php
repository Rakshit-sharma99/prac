<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Sc extends Controller
{
    //
    public function showForm(){
        return view('studentForm');
    }


    public function submitForm(Request $req){
        $req->validate([
            'name'=>'required|min:3',
            'email'=>'required|email',
 
        ]);
    
        return redirect()->route('st.form')->with('success','Student details saved');

    }
}

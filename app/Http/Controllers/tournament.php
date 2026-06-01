<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;
class tournament extends Controller
{
    //
    public function showform(){
        return view('tournament');
    }

    public function submitform(Request $req){

        $req->validate([
            'name'=>'required|min:3',
            'age'=>'required|numeric|min:18',
            'email'=>'required|email',
            'pfp'=>'required|image|mimes:jpg,png,jpeg|max:2048'


        ]);
        Mail::to($req->email)->send(new WelcomeMail());
$name = $req->input('name');

return back()->with(
    'success',
    'Gamer '.$name.' Team registerd go enjoy'
)->cookie(
    $name,
    'age',
    60
);


    }
}

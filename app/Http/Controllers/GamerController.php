<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GamerController extends Controller
{
    //

    public function profile($name, $game){
        return view('gamer',[
            'name'=> $name,
            'game'=>$game,
            'rank'=>'Mortal',
            'skills'=>['aim','sniper']
        ]);
    }

}

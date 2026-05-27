<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StdController;
use Illuminate\Http\Request;
use App\Http\Controllers\Sc;

Route::get('/student',[StdController::class,'index']);



Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello',function(){
    return "hello";
})->name('hello');
Route::get('/user/{name?}',function($name="Guest"){
    return "hello $name";

})->where('name','[a-z]+');



Route::get('/redirect',function(){
    return redirect()->route('hello');
});


Route::get('/out',function(){
    return response()->json([
        'name'=>'rakshti',
        'age'=>'12'
    ]);
});


Route::get('/blad',function(){
    return view('home');
});



//Forms

// Route::get('/form',function(){
//     return view('form');
// });
// Route::post('/submit',function(Request $req){
//     $req->validate([
//         'name'=>'required|min:3',
//         'email'=>'required|email'
//     ]);
//       return redirect('/form')->with('success','Form submitted successfully');
// });

// Route::get('/registration',function(){
//     return view('registration');
// });

Route::get('/login',function(){
    return view('loginpage');
});

Route::post('/submiting',function(Request $req){
    $req-> validate([
        'name'=>'required|min:3',
        'password'=>'required|min:6'
    ]);
    return redirect('/login')->with('success','Login Successfully');
});



Route::get('/st',[Sc::class, 'showForm'])->name('st.form');
Route::post('/st',[Sc::class, 'submitForm'])->name('st.submit');


Route::get('/jout',function(){
    return response()->json([
        "name"=>"Rakshit",
        "age"=>123,

    ]);
});

Route::get('/set-cook',function(){
    return response("cookie-set")->cookie('user','rakshit',60);
});

Route::get('/get-cook',function(Request $req){
    return $req->cookie('user');
});


































//Ca

Route::match(['get','post'],'/register',function(Request $req){
    if($req->isMethod('post')){
$req->validate([
    'name'=>'required|min:3',
    'email'=>'required|email',
    'password'=>'required|min:6'
]);
return "form submmited";
    }
    return view('register');
});
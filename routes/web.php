
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StdController;
use Illuminate\Http\Request;
use App\Http\Controllers\Sc;

use App\Http\Controllers\GamerController;
use App\Http\Middleware\CheckAge;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\movieController;
use App\Mail\WelcomeMail;
use App\Http\Controllers\GamnerController;
use App\Http\Middleware\checkaccess;


Route::get('/gamer',[GamerController::class, 'profile']);
Route::get('/gamer/{name}/{game}',[GamerController::Class, 'profile']);

//prefix
Route::prefix('/movie')->group(function(){
    Route::get('/marvel');
    Route::get('/Spiderman');
    

});


Route::name('movies.')->group(function(){
    Route::get('/dhoni')->name('dhoni');
});

Route::get('/profile',function(){
    return  "Profile";

})->Middleware(CheckAge::class);


Route::resource('mov',movieController::Class);



Route::get('/set-session',function(){
    session([
        'game'=>'valo'
    ]);
    return "Session set";
    });

Route::get('/get-session',function(){
    return session('game');

});

Route::get('/forget',function(){
    session()->forget('game');

});



Route::get('/upload',function(){

    return view('upload');

});
Route::post('/upload',function(Request $req){
    $req->validate([
        'image'=>'required|image|mimes:jpg|max:2048'
    ],[
        'image.mimes'=>'Only JPG, PNG are allowed'
    ]);
return"File uploaded succesfully";
});


Route::get('/practice',function(){
    return view('practice');
});
Route::post('/practice',function(Request $req){

    $req->validate([
        'name'=>'required|min:3',
        'email'=>'required|email',
        'profile'=>'required|image|mimes:jpg,png|max:2048'
    ],[
        'image.mimes'=>'Only Jpg , is allowed'
    ]);

    return "File Uploaded succesfully";
    
});

Route::get('/send-mail',function(){
    Mail::to('rakshitsharmalpu@gmail.com')->send(new WelcomeMail());
    return "email send";
});

Route::get('/check-mail', function () {
    return env('MAIL_USERNAME');
});


Route::get('add-gamer',function(){
    return view ('gamerReg');
});

Route::post('add-gamer',[GamnerController::class, 'submitform'])->Middleware(checkaccess::class);
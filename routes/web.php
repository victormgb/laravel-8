<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Mail\ContactEmail;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PortfolioController::class,'index']);



Auth::routes();

Route::get('/home', function(){
    return redirect('/dashboard');
})->name('home');

Route::get('/dashboard', function() {
    return view('dashboard.dashboard');
})->middleware('auth');

Route::get('/skills/{any?}', function() {
    return view('dashboard.dashboard');
})->middleware('auth');;

Route::get('/projects/{any?}', function() {
    return view('dashboard.dashboard');
})->middleware('auth');

Route::post(
    '/sendMail',
    function (Request $request) {
        // $data = [
        //     "email"=> $request->email,
        //     "name" => $request->name,
        //     "message"=>$request->message

        // ];
        $email = $request->email;
        $name = $request->name;
        $message = $request->message;

        dd($message);

        Mail::to('victormgb3099@gmail.com')->later(now(), new ContactEmail($email, $name, $message));

        return redirect()->back();
    }
)->name('sendmail');

Route::get('logout', function () {
    auth()->logout();
    session()->flush();

    return redirect('/login');
})->name('logout');

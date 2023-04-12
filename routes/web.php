<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\SentMessage;

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

Route::get('/', function () {
    return view('welcome');
});

Route::post('/submit-form', function (Request $request) {

    try {

        $save = new SentMessage();

        $save->name = $request->name;
        $save->email = $request->email;
        $save->subject = $request->subject;
        $save->mobile = $request->mobile;
        $save->message = $request->message;
        $save->save();

        return 'OK';

    } catch (Exception $e) {

        return 'Message: ' . $e->getMessage();

    }


})->name('submit-form');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




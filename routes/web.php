<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\OrganisasiController;
use App\Http\Controllers\InvestorController;
use App\Http\Controllers\UploadController;
use App\Models\organisasi_tables;
use App\Models\event_tables;

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
    return view('formlogin');
});

Route::get('/loginorganisasi', function () {
    if(session()->has("user_login")){
        return view('home');  
     }else{
         return view('loginorganisasi');
     }
});
Route::post('/loginorganisasi', [OrganisasiController::class,"login"]);

Route::get('/logininvestor', function () {
    if(session()->has("user_login")){
        return view('home');  
     }else{
         return view('logininvestor');
     }
});

Route::post('/logininvestor', [InvestorController::class,"login"]);

Route::get('/dashboard', function () {
    if(session()->has("user_login")){
        // $posts = organisasi_tables::find(session("user_login")->id)->getEvents;
        $posts = event_tables::all();
        return view('home',[
            "posts"=>$posts
    ]);  
    }else{
        session()->invalidate(); 
        return redirect("/");
    }
});

Route::get('/formregist', function () {
    if(session()->has("user_login")){
        return redirect('/dashboard'); 
     }else{
         session()->invalidate(); 
         return view('formregist');
     }
});

Route::get('/registorganisasi', function () {
    if(session()->has("user_login")){
        return redirect('/dashboard'); 
     }else{
         return view('registorganisasi');
     }
});

Route::post('/registorganisasi', [OrganisasiController::class,"store_acara"]);

Route::get('/registinvestor', function () {
    if(session()->has("user_login")){
        return redirect('/dashboard'); 
     }else{
         return view('registinvestor');
     }
});

Route::post('/registinvestor', [InvestorController::class,"store_investor"]);

Route::get('/event', function () {
    if(session()->has("user_login")){
        return view('kategorievent'); 
     }else{
         session()->invalidate(); 
         return redirect("/");
     }
});

Route::get('/musiclist', function () {
    if(session()->has("user_login")){
        return view('musiclist');
     }else{
         session()->invalidate(); 
         return redirect("/");
     }
});

Route::get('/culturelist', function () {
    if(session()->has("user_login")){
        return view('culturelist');
     }else{
         session()->invalidate(); 
         return redirect("/");
     }
});

Route::get('/gamelist', function () {
    if(session()->has("user_login")){
        return view('gamelist');
     }else{
         session()->invalidate(); 
         return redirect("/");
     }
});

Route::get("/logout",function(){
    session()->invalidate();
    return redirect("/");
});

Route::post('/uploadevent', [UploadController::class,"store_upload"]);
Route::get('/uploadevent', function () {
    return view('uploadevent');
});

Route::post('/nextupload', function (Request $request) {
    if(session()->has("user_login")){
        $validate = $request->validate([
            "judul"=>"required|max:255",
            "tanggal"=>"required|max:255",
            "tempat"=>"required|max:255",
            "gueststar"=>"required|max:255",
            "fee"=>"max:255",
            "kategori"=>"required|max:255",
            "pamflet"=>"required"
        ]);

        $path_pamflet = $request->pamflet->store('pamflet');
        session()->put("request_old",$request->request->all());
        session()->put("path_pamflet",$path_pamflet);
        return view('nextupload');
     }else{
         session()->invalidate(); 
         return redirect("/");
     }
});

Route::get('/nextupload', function () {
    if(session()->has("user_login")){
        return view('nextupload');
     }else{
         session()->invalidate(); 
         return redirect("/");
     }
});

Route::get('/detaileventmusic1', function () {
    return view('detaileventmusic1');
});

Route::get('/detaileventmusic2', function () {
    return view('detaileventmusic2');
});

Route::get('/detaileventmusic3', function () {
    return view('detaileventmusic3');
});

Route::get('/detaileventmusic4', function () {
    return view('detaileventmusic4');
});

Route::get('/detaileventculture1', function () {
    return view('detaileventculture1');
});


Route::get('/detaileventculture2', function () {
    return view('detaileventculture2');
});

Route::get('/detaileventgame1', function () {
    return view('detaileventgame1');
});

Route::get('/detaileventgame2', function () {
    return view('detaileventgame2');
});

Route::get('/detaileventgame3', function () {
    return view('detaileventgame3');
});

Route::get('/detaileventgame4', function () {
    return view('detaileventgame4');
});
<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect()->route('admin.clientes');
});

Route::any('/any', function(){
    return "Permite todo tipo de acesso http (put, delete, get, post)";
});

Route::match(['get', 'post'], '/match', function(){
    return'Permite apenas acessos definidos';
});

Route::get('/produto/{id}/{cat?}', function($id, $cat =""){
    return "O id do produto é: ".$id. "<br>". "A categoria é: ". $cat;
});

route::redirect('/sobre', '/empresa');

Route::view('/empresa','site/empresa');

Route::get('/timesnownews', function(){
    return view('news');
})->name('noticias');

Route::get('/novidades', function(){
    return redirect()->route('noticias');
});
 
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function(){

    Route::get('dashboard', function(){
        return "dashboard";
    })->name('dashboard');

    Route::get('users', function(){
        return "users";
    })->name('users');

    Route::get('clientes', function(){
        return "Clientes";
    })->name('clientes');

});

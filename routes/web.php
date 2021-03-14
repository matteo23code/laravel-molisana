<?php

use Illuminate\Support\Facades\Route;

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
    $pasta = config('pasta');
    
    return view('home',[ 
        'pastaArray' => $pasta
        ]);
    });

    
    
    Route::get('/layout', function () {
        return view('home',
            ['name' => 'Taylor']
            );
    });


Route::get('/product/{id?}', function($id = null) {
    if(empty($id)) {
        return redirect('/'); //per simulare un errore usare abort(es.404)
    }
    return view('prodotti',
        ['idProduct' => $id]
    );
});



Route::get('/product/{id}', function($id) {
    return view('prodotti',
        ['idProduct' => $id]
    );
});
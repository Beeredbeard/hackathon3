<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

// Route::get('/', 'AnimalsController@index');

Route::get('/animal/{id}', 'AnimalsController@findAnimal');

Route::get('/', 'AnimalsController@search'); //->name('search')
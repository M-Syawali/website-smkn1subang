<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeC;

Route::redirect('/', '/home');
Route::get('/home',[HomeC::class, 'index']);
Route::get('/program',[HomeC::class, 'program']); 
Route::get('/dataguru',[HomeC::class, 'dataguru']); 
Route::get('/datakelas',[HomeC::class, 'datakelas']);

<?php

use App\Http\Controllers\CategoryPostController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::redirect('/', config('filament.path') . '/admin/login');


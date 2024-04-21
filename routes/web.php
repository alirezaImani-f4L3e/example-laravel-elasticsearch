<?php

use App\Http\Controllers\ESController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ESController::class , 'index']);

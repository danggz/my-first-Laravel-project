<?php

use Illuminate\Support\Facades\Route;

Route::get('/',[\App\Http\Controllers\SiteController::class, 'index']);

// mvc
//Model -> Database interaction
//View -> User interface
//Controller -> Business logic

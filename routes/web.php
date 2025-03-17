<?php

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
    return JsonResource::make([]);
});

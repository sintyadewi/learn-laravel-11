<?php

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Route;

Route::prefix('admin/v1')->as('admin.v1.')->group(function () {
    Route::get('/', function () {
        return JsonResource::make(['test' => true]);
    });
});

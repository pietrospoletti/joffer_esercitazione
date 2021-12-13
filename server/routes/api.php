<?php

use App\Http\Controllers\OfferController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get("/offers",[OfferController::class, 'offers']);

Route::get("/offer/{id}",[OfferController::class, 'offer']);

Route::post("/addoffer",[OfferController::class, 'addoffer']);

Route::put("/edit/{id}",[OfferController::class, 'edit']);


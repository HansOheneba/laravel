<?php

use App\Http\Controllers\ListingController;
use App\Models\Listing;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
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


//All Lisitngs
Route::get('/',[ListingController::class, 'index']);

//Show Create form
Route::get('/listings/create', [ListingController::class, 'create']);

//Store Edit Form
Route::get('/listings', [ListingController::class, 'store']);

//Store listing Data 
Route::post('/listings', [ListingController::class, 'store']);

//Single listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);


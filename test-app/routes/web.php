<?php

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
Route::get('/', function () {
    return view('listings', [
        'heading' => 'Latest Listings',
        'listings' => Listing::all()
           
        
    ]);
    
});

//Single listing
Route::get('/listings/{listing}', function (Listing 
$listing) {
    return view('listing', [
        'listing' => $listing
    ]);
    

    // // Single listing
    // Route::get('/listings/{listing}', function ($listing) {
    //     try {
    //         $listing = Listing::findOrFail($listing);
    //         return view('listing', [
    //             'listing' => $listing
    //         ]);
    //     } catch (ModelNotFoundException $e) {
    //         // Handle the case when the listing is not found
    //         abort(404, 'Listing not found');
    //     }
    // });
    

});
<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    //get and show all listings
    public function index(){
        return view('listings', [
            'heading' => 'Latest Listings',
            'listings' => Listing::latest()->filter(request(['tag' , 'search']))->get()
        ]);
        
    }
    //show single listings
    public function show(Listing $listing){
        return view('listing', [
            'listing' => $listing
        ]);
    }

    //Show create form
    public function create(){
        return view('listings.create');
    }
}

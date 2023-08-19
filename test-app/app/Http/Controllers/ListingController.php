<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Symfony\Component\HttpFoundation\Session\Session;

class ListingController extends Controller
{
    //get and show all listings
    public function index(){
        return view('listings.index', [
            'heading' => 'Latest Listings',
            'listings' => Listing::latest()->filter(request(['tag' , 'search']))->simplePaginate(4)
        ]);
        
    }
    //show single listings
    public function show(Listing $listing){
        return view('listings.show', [
            'listing' => $listing
        ]);
    }

    //Show create form
    public function create(){
        return view('listings.create');
    }

    //Store Listing Data
    public function store(Request $request){
       $formFields = $request->validate([
        'title' => 'required',
        'company' => ['required', Rule::unique('listings','company')],
        'location' => 'required',
        'website' => 'required',
        'email' => ['required', 'email'],
        'tags' => 'required',
        'description' => 'required'
           ]);
           
           if($request->hasFile('logo')){
            $formFields['logo'] = $request->file('logo')->store('logos','public');
           }
        Listing::create($formFields);

        // Session::flash('message', 'Listing Created');

           return redirect('/')->with('message', 'Listing created successfully!');
    }
}

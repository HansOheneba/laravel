<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Request;

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

Route::get('/', function () {
    return view('listings', [
        'heading' => 'Latest Listings',
        'listings' =>[
            [
                'id' => 1,
                'title' => 'Listing One',
                'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolore temporibus quaerat molestiae accusamus doloribus, quam quo nostrum repellat voluptatum consequuntur a repellendus. Maiores laudantium ea illo molestias nemo, dolorum eos incidunt cupiditate delectus cum dolore voluptate numquam, aspernatur dolores tenetur? Quos ut magnam fugit quaerat mollitia aliquam laborum similique. Fuga.'
            ]
            ,
            [
                'id' => 2,
                'title' => 'Listing Two',
                'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolore temporibus quaerat molestiae accusamus doloribus, quam quo nostrum repellat voluptatum consequuntur a repellendus. Maiores laudantium ea illo molestias nemo, dolorum eos incidunt cupiditate delectus cum dolore voluptate numquam, aspernatur dolores tenetur? Quos ut magnam fugit quaerat mollitia aliquam laborum similique. Fuga.'
            ]
        ]
    ]);
    
});


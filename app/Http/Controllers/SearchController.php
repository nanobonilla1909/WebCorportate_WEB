<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class SearchController extends Controller
{
    public function show(Request $request) 
    {

    	$query = $request->input('query');

    	$products = Product::where('name', 'like', "%$query%")->get();


    }
}

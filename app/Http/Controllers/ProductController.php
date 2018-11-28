<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductCategory;

class ProductController extends Controller
{

    public function index() {


    	$products = Product::paginate(10);			


    	return view('products.index')
    		->with('products', $products);

    }


	public function search(Request $request) {


		$query = $request->input('query');

    	$products = Product::where('name', 'like', "%$query%")->paginate(10);	


    	return view('products.index')
    		->with('products', $products);

    }


    public function create() {


    	$products = Product::all();	
    	$product_categories = ProductCategory::orderBy('id')->get();		

    	return view('products.create')
    		->with(compact('product_categories'));
    }


    public function store(Request $request) {


    	// validacion de datos

    	$rules = [
    		'name' => 'required',
    		'price' => 'required|numeric|min:0'
    	];

    	$messages = [
    		'name.required' => 'El nombre es obligatorio',
    		'price.required' => 'El precio es obligatorio.',
    		'price.numeric' => 'El precio debe ser numerico',
    		'price.min' => 'El precio no puede ser negativo.'
    	];

    	$this->validate($request, $rules, $messages);


    	// graba registro

    	$product = new Product();
    	$product->name = $request->input('name');
    	$product->description = $request->input('description');
    	$product->price = $request->input('price');
    	$product->imageUrl = 'This Url will change';
    	$product->product_category_id = $request->product_category_id;
    	$product->product_type_id = 1;
    	$product->save();

    	return redirect('/products');

    }


     public function edit($id) {


    	$product = Product::find($id);			

    	return view('products.edit')->with(compact('product'));
    }



    public function update(Request $request, $id) {

    	$product = Product::find($id);
    	$product->name = $request->input('name');
    	$product->description = $request->input('description');
    	$product->price = $request->input('price');
    	$product->imageUrl = 'This Url will change';
    	$product->product_category_id = 1;
    	$product->product_type_id = 1;
    	$product->save();

    	return redirect('/products');

    }

      public function destroy($id) {


    	$product = Product::find($id);			

    	$product->delete();

    	return back();
    }



}

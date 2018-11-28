<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ProductType;


class ProductTypeController extends Controller
{

     public function index() {


    	$product_types = ProductType::paginate(10);			


    	return view('product_types.index')
    		->with('product_types', $product_types);

    }



    public function create() {


    	// $product_types = ProductTypes::all();			

    	return view('product_types.create');
    }


    public function store(Request $request) {


    	// validacion de datos

    	$rules = [
    		'name' => 'required',
    
    	];

    	$messages = [
    		'name.required' => 'El nombre es obligatorio'
    	];

    	$this->validate($request, $rules, $messages);


    	// graba registro

    	$product_type = new ProductType();
    	$product_type->name = $request->input('name');

    	$product_type->save();

    	return redirect('/product_types');

    }


     public function edit($id) {


    	$product_type = ProductType::find($id);			

    	return view('product_types.edit')->with(compact('product_type'));
    }



    public function update(Request $request, $id) {

    	$product_type = ProductType::find($id);
    	$product_type->name = $request->input('name');
    	$product_type->save();

    	return redirect('/product_types');

    }

      public function destroy($id) {


    	$product_type = ProductType::find($id);			

    	$product_type->delete();

    	return back();
    }


}


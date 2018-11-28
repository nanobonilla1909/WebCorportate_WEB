<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductCategory;


class ProductCategoryController extends Controller
{
     public function index() {


    	$product_categories = ProductCategory::paginate(10);			


    	return view('product_categories.index')
    		->with('product_categories', $product_categories);

    }



    public function create() {


    	$product_categories = Product::all();			

    	return view('product_categories.create');
    }


    public function store(Request $request) {


    	// validacion de datos

    	$rules = [
    		'name' => 'required',
    		'price' => 'required|numeric|min:0'
    	];

    	$messages = [
    		'name.required' => 'El nombre es obligatorio',
            'code.required' => 'El código es obligatorio.',
            'depth.required' => 'El nivel es obligatorio.',
    		'depth.numeric' => 'El nivel debe ser numerico',
    		'depth.min' => 'El nivel no puede ser negativo.',
            'left.required' => 'Izquierda es obligatorio.',
            'left.numeric' => 'Izquierda debe ser numerico',
            'left.min' => 'Izquierda no puede ser negativo.',
            'right.required' => 'Derecha es obligatorio.',
            'right.numeric' => 'Derecha debe ser numerico',
            'right.min' => 'Derecha no puede ser negativo.'
    	];

    	$this->validate($request, $rules, $messages);


    	// graba registro

    	$product_category = new ProductCategory();
    	$product_category->name = $request->input('name');
    	$product_category->code = $request->input('code');
    	$product_category->depth = $request->input('depth');
        $product_category->depth = $request->input('left');
        $product_category->depth = $request->input('right');

 
    	$product_category->save();

    	return redirect('/product_categories');

    }


     public function edit($id) {


    	$product_category = ProductCategory::find($id);			

    	return view('product_categories.edit')->with(compact('product_category'));
    }



    public function update(Request $request, $id) {

    	$product_category = ProductCategory::find($id);

        $product_category->name = $request->input('name');
        $product_category->code = $request->input('code');
        $product_category->depth = $request->input('depth');
        $product_category->depth = $request->input('left');
        $product_category->depth = $request->input('right');

    	$product_category->save();

    	return redirect('/product_categories');

    }

      public function destroy($id) {


    	$product_category = ProductCategory::find($id);			

    	$product_category->delete();

    	return back();
    }


}

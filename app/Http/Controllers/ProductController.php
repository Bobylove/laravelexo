<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
	public function getIndex(){
		
		$products = \App\Product::all();
		return view('products.layout', ['produits'=>$products]);
	}

	public function getShow($id){
		$product = Product::find($id);
		return view('products.show', ['product'=>$product]);
	}

	public function postSell($id){
		$product = Product::find($id);
		$product->stock--;
		$product->save();
		return back();
	}

	public function postRestock($id){
		$product = Product::find($id);
		$product->stock++;
		$product->save();
		return back();
	}

	public function getShowForm(){

		return view('products.addProduct');
	}

	public function postAdd(Request $request){
		
		$prod = new Product;
		$prod->id =  $request->id;
		$prod->name =  $request->name;
		$prod->price =  $request->price;
		$prod->stock =  $request->stock; 
		$prod->origin =  $request->origin;
		$prod->description =  $request->description;
		$prod->save();
		return back();
	}
}

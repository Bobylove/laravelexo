<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{


	public function getTotalStock(){
		
		$products = \App\Product::all();
		$totalStock = 0;
		
		foreach ($products as $value) {
			$totalStock = $totalStock + $value->stock;
			
		}
		$prod = \App\Product::all();
		$totalPrice = 0;
		foreach ($prod as $value) {
			$totalPrice =$totalPrice + $value->stock * $value->price / 100;
		}
		
		
		return view('totalStocks.totalStock', ['produits'=>$products,"totalStock"=>$totalStock, "totalprice"=>$totalPrice]);
	}

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
		$product->stock++ ;
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

	public function postDelete(Request $request){

		$productDel = Product::find($request->id);
		$productDel->delete();
		return back();

	}

	public function getEdit($id){

		$product = Product::find($id);
		return view('edits.edit', ['produit'=>$product]);
	}

	public function postEdit(Request $request){

		$product = Product::find($request->id);
		$product->name = $request->name;
		$product->price = $request->price;
		$product->stock = $request->stock;
		$product->origin = $request->origin;
		$product->description = $request->description;
		$product->save();
		return back();

	}
	

}

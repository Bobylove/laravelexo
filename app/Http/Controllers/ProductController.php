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
}

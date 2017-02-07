@extends('welcome')

@section('content')

	<h1>Ma liste de produits</h1>

@foreach ($produits as $product)

	<li>
		<a href="/products/show/{{$product->id}}">{{$product->name}}</a>
	</li>
	
@endforeach

@stop

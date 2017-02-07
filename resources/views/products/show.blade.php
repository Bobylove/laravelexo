@extends('welcome')

@section('content')

<h2>{{$product->name}}</h2>
<br>
<h2>{{$product->price / 100}}€</h2>
<br>

<br>
<div>
	<div class="ui segment">
		<h2>Stock</h2>
		<form action="/products/sell/{{$product->id}}" method="post">
		{{csrf_field()}}
			<button class="ui red button">-</button>
	
		</form>
		<h2>{{$product->stock}}</h2>
		<form action="/products/restock/{{$product->id}}" method="post">
		{{csrf_field()}}
			<button class="ui  green button">+</button>
		</form>
		
	</div>
</div>



@stop
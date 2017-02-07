@extends('welcome')

@section('content')
<table class="ui table">
	<th><h2>-produits-</h2></th>
	<th><h2>-description-</h2></th>
	<th><h2>-prix-</h2></th>
	<th><h2>-origine-</h2></th>
	<tr>
		<td><h2>{{$product->name}}</h2></td>

		<td><h2>{{$product->description}}</h2></td>

		<td><h2>{{$product->price / 100}}€</h2></td>

		<td><h2>{{$product->origin}}</h2></td>

	</tr>
</table>


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
@extends('welcome')

@section('content')
<div>
	<h1>Ma liste de produits</h1>
	<br>
	<br>
	<br>
</div>

<div class="ui two column centered grid">
	@foreach ($produits as $product)

	<div class="ui link cards">
		<div class="card">
			<a href="/products/show/{{$product->id}}"><h4>{{$product->id}}</h4></a>
			<div class="content">
				<div class="header">{{$product->name}}</div>
				<div class="description">
					{{$product->description}}
					<span class="right floated">
						{{$product->price / 100}}€
					</span>
				</div>
			</div>
			<div class="extra content">
			<form action="/edits/edit/{{$product->id}}" method="get">
					{{csrf_field()}}
					<input type="submit" value="Edit" class="ui orange button">
				</form>
				<form action="/product/delete/{{$product->id}}" method="post">
					{{csrf_field()}}
					<input type="hidden" value="{{$product->id}}">
					<input type="submit" value="suprimé" class="ui black button">
				</form>
				
			</div>
		</div>
	</div>

	@endforeach
</div>

@stop

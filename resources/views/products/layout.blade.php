@extends('welcome')

@section('content')
<div>
	<h1>Ma liste de produits</h1>
	<br>
	<br>
	<br>
</div>

<div class="ui two column centered grid">
	<div class="ui link cards">
		@foreach ($produits as $product)

		<div class="card">
			<a href="/products/show/{{$product->id}}"><h4>id : {{$product->id}}</h4></a>
			<div class="content">
				<div class="header">{{$product->name}}</div>
				<div class="description">
					{{$product->description}}
				</div>
				<div class="centered">
					{{$product->price / 100}}€
				</div>
			</div>
			<div class="extra content">
				<form action="/edits/edit/{{$product->id}}" method="get">
					{{csrf_field()}}
					<input type="submit" value="Edit" class="ui orange button">
				</form>
				<br>
				<form action="/product/delete/{{$product->id}}" method="post">
					{{csrf_field()}}
					{{ method_field('DELETE') }}
					<input type="hidden" value="{{$product->id}}">
					<input type="submit" value="suprimé" class="ui black button">
				</form>

				


			</div>
		</div>

		@endforeach
	</div>
</div>


@stop

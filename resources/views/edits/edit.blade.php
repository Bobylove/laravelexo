@extends('welcome')

@section('content')
	<h1>Edité le produit</h1>

	<form class="ui form" action="/edits/edit/{{$produit->id}}" method="post">
		{{csrf_field()}}
		{{ method_field('PUT') }}
		<input type="hidden" value="{{$produit->id}}">
		<label for="name">Nom du produit</label>
		<input type="text" id="name" name="name" value="{{$produit->name}}">
		<label for="price">Prix</label>
		<input type="text" id="price" name="price" value="{{$produit->price}}">
		<label for="origin">Origine</label>
		<input type="text" id="origin" name="origin" value="{{$produit->origin}}">
		<label for="stock">Stock</label>
		<input type="text" id="stock" name="stock" value="{{$produit->stock}}">
		<label for="description">description</label>
		<input type="text" id="description" name="description" value="{{$produit->description}}">
		<br>
		<input type="submit" class="ui green button" value="Enregistrer">

	</form>
@stop
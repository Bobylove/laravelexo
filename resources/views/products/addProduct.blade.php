@extends('welcome')

@section('content')
	<h1>Ajout nouveau produits</h1>

	<form class="ui form" action="/product/addProduct/new" method="post">
		{{csrf_field()}}
		<label for="name">Nom du produit</label>
		<input type="text" id="name" name="name" >
		<br><br>
		<label for="price">Prix</label>
		<input type="text" id="price" name="price" >
		<br><br>
		<label for="origin">Origine</label>
		<input type="text" id="origin" name="origin" >
		<br><br>
		<label for="stock">Stock</label>
		<input type="text" id="stock" name="stock" >
		<br><br>
		<label for="description">description</label>
		<input type="text" id="description" name="description">
		<br>
		<br>

		<input class="ui green button" type="submit" value="Enregistrer les nouveautés">

	</form>
	
@stop
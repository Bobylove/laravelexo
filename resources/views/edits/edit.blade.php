<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>edit</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.css">
</head>
<body>
	<br>
	<h2><a href="/">Home</a></h2>
	<br>
	<br>

	<h1>Edité le produit</h1>

	<form class="ui form" action="/edits/edit/{{$produit->id}}" method="post">
		{{csrf_field()}}
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
</body>
</html>
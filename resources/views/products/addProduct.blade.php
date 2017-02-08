<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ajout</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.7/semantic.css">
</head>
<body>
	<h1><a href="/">Home</a></h1>
	<h1>Ajout nouveau produits</h1>

	<form class="ui form" action="/product/addProduct/new" method="post">
		{{csrf_field()}}
		<label for="name">Nom du produit</label>
		<input type="text" id="name" name="name" >
		<label for="price">Prix</label>
		<input type="text" id="price" name="price" >
		<label for="origin">Origine</label>
		<input type="text" id="origin" name="origin" >
		<label for="stock">Stock</label>
		<input type="text" id="stock" name="stock" >
		<label for="description">description</label>
		<input type="text" id="description" name="description">
		<br>
		<input type="submit" value="Enregistrer les nouveautés">

	</form>
	
</body>
</html>
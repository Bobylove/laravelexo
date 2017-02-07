<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>prod</title>
</head>
<body>
	<h1>Ma liste de produits</h1>

	@foreach ($produits as $product)

	<li>{{$product->name}}</li>
	@endforeach
</body>
</html>
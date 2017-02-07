@extends('welcome')

@section('content')

<h2>{{$product->name}}</h2>
<br>
<h2>{{$product->price / 100}}€</h2>
<br>
<h2>{{$product->stock}}</h2>
<br>

@stop
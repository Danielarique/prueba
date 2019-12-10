@extends('layouts.app')

@section('title', 'Trainer')

@section('content')
	
	<img class="card-img-top rounded-circle mx-auto d-block" style="height: 200px; width: 200px; background-color: #EFEFEF; margin: 20px" src="../images/{{$trainer->avatar}}" alt="">
	<div class="text-center">
		<h5 class="card-title">{{$trainer->name}}</h5>
		<p>{{$trainer->description}}</p>
		
	</div>


@endsection
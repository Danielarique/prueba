@extends('layouts.app')

@section('title', 'Trainer')

@section('content')
	
	@include('common.success')

	<img class="card-img-top rounded-circle mx-auto d-block" style="height: 200px; width: 200px; background-color: #EFEFEF; margin: 20px" src="../images/{{$trainer->avatar}}" alt="">
	<div class="text-center">
		<h5 class="card-title">{{$trainer->name}}</h5>
		<p>{{$trainer->description}}</p>
		<a href="/trainer/{{$trainer->slug}}/edit" class="btn btn-primary">Editar</a>
		<form class="form-group" method="POST" action="/trainer/{{$trainer->slug}}">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Eliminar</button>
    	</form>
	</div>
	<modal-button></modal-button>
	<create-form-pokemon></create-form-pokemon>
	<list-of-pokemons></list-of-pokemons>


@endsection
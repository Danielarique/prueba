@extends('layouts.app')

@section('title', 'Trainer Edit')

@section('content')
	<form class="form-group" method="POST" action="/trainer/{{$trainer->slug}}" enctype="multipart/form-data">
		@method('PUT')
		@csrf
		<div class="form-group">
			<label for="">Nombre</label>
			<input type="text" name="name" value="{{$trainer->name}}" class="form-control">
		</div>

		<div class="form-group">
			<label for="">Descripción</label>
			<input type="text" name="description" value="{{$trainer->description}}" class="form-control">
		</div>

		<div class="form-group">
			<label for="">Archivo</label>
			<input type="file" name="avatar">
		</div>
		<button type="submit" class="btn btn-primary">Actualizar</button>
	</form>


@endsection
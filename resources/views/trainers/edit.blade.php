@extends('layouts.app')

@section('title', 'Trainer Edit')

@section('content')
	@if($errors->any())

		<div class="alert alert-danger">
			
			@foreach($errors->all() as $error)
				<p>{{$error}}</p>
			
			@endforeach
		</div>
	@endif
	<form class="form-group" method="POST" action="/trainer/{{$trainer->slug}}" enctype="multipart/form-data">
		@method('PUT')
		@csrf
		<div class="form-group">
			<label for="">Nombre</label>
			<input type="text" name="name"  class="form-control"  value=" {{ old('name', $trainer->name) }} ">
		</div>

		<div class="form-group">
			<label for="">Descripción</label>
			<input type="text" name="description"  class="form-control"  value=" {{ old('description', $trainer->description) }} ">
		</div>

		<div class="form-group">
			<label for="">Slug</label>
			<input type="text" name="slug"  class="form-control"  value=" {{ old('slug', $trainer->slug) }} ">
		</div>

		<div class="form-group">
			<label for="">Archivo</label>
			<input type="file" name="avatar">
		</div>
		<button type="submit" class="btn btn-primary">Actualizar</button>
	</form>


@endsection
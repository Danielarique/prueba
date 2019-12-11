@extends('layouts.app')

@section('title', 'Trainers Create')

@section('content')
	@include('common.errors')
	<form class="form-group" method="POST" action="/trainer" enctype="multipart/form-data">
		@csrf
		<div class="form-group">
			<label for="">Nombre</label>
			<input type="text" name="name"  value=" {{ old('name') }} " class="form-control">
		</div>

		<div class="form-group">
			<label for="">Descripción</label>
			<input type="text" name="description" class="form-control"  value=" {{ old('description') }}" >
		</div>

		<div class="form-group">
			<label for="">Slug</label>
			<input type="text" name="slug" class="form-control"  value=" {{ old('slug') }}" >
		</div>

		<div class="form-group">
			<label for="">Archivo</label>
			<input type="file" name="avatar"  >
		</div>
		<button type="submit" class="btn btn-primary">Guardar</button>
	</form>


@endsection
@extends('layouts.app')

@section('title', 'Trainers')

@section('content')
	
	<div class="row">
		@foreach($trainers as $trainer )
			<div class="cl-sm">
				
				<div class="card text-center" style="width: 18rem;margin-top: 70px">
					<img class="card-img-top rounded-circle mx-auto d-block" style="height: 100px; width: 100px; background-color: #EFEFEF; margin: 20px" src="../images/{{$trainer->avatar}}" alt="">
				  	<div class="card-body">
					    <h5 class="card-title">{{$trainer->name}}</h5>
					    <p class="card-text">{{$trainer->description}}</p>
					    <a href="/trainer/{{$trainer->slug}}" class="btn btn-primary">Ver más...</a>
				  	</div>
				</div>
			</div>	


		@endforeach
	</div>


@endsection
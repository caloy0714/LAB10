@extends('pets.layout')
@section('content')
<div class="pull-left">
<nav class="navbar navbar-light bg-secondary text-white">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1"><h3>Pet Register</h3></span>
  </div>
</nav>
	
</div>
</br>
</br>
<div class="row">
	<div class="col-lg-12 margin-tb">
		<div class="pull-left">
			<h3>View Record</h3>
		</div>
		<div class="pull-right">
			<a class="btn btn-primary" href="{{route('pets.index')}}">Return</a>
		</div>
	</div>
</div>
</br>



<div class="row p-3 mb-2 bg-secondary text-white">
	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="form-group">
			<strong>Name of Pet : {{$pet->name_of_pet }}</strong>
		</div>
	</div>
		<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="form-group">
			<strong>Pet Type : {{ $pet->animal_type }}</strong>
			
		</div>
	</div>
		<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="form-group">
			<strong>Owner of Pet : {{ $pet->owner_of_pet }}</strong>
			
		</div>
	</div>
		<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="form-group">
			<strong>Address of Owner : {{ $pet->address_of_owner }}</strong>
			
		</div>
	</div>
</div>
@endsection
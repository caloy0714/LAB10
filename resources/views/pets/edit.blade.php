@extends('pets.layout')

@section('content')

<div class="pull-left">
<nav class="navbar navbar-light bg-secondary text-white">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1"><h3>Pet Register</h3></span>
  </div>
</nav>
</div>


<div class="row">
	<div class="col-lg-12 margin-tb">
		<div class="pull-left">
			<h3>Edit Record</h3>
		</div>
		<div class="pull-right">
			<a class="btn btn-primary" href="{{route('pets.index')}}">Return</a>
		</div>
	</div>
</div>

@if($errors->any())
	<div class="alert alert-danger">
		<strong>Make sure your inputs are correct</strong>

		@foreach($errors->all() as $error)
		<li>{{$error}}</li>
		@endforeach
	</div>
@endif

<form action="{{ route('pets.update', $pet->id)}}" method="POST">
	@csrf
	@method('PUT')

<div class="row p-3 mb-2 bg-secondary text-white">
	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="form-group">
			<strong>Name of Pet:</strong>
			<input type="text" name="name_of_pet" class="form-control" value="{{$pet->name_of_pet}}" required>
		</div>
	</div>
		<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="form-group">
			<strong>Pet Type:</strong>
			<input type="text" name="animal_type" class="form-control" value="{{$pet->pet_type}}" required>
		</div>
	</div>
		<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="form-group">
			<strong>Owner of Pet:</strong>
			<input type="text" name="owner_of_pet" class="form-control" value="{{$pet->owner_of_pet}}" required>
		</div>
	</div>
		<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="form-group">
			<strong>Address of Owner:</strong>
			<input type="text" name="address_of_owner" class="form-control" value="{{$pet->address_of_owner}}" required>
		</div>
	</div>

<div class="col-xs-12 col-sm-12 col-md-12 text-center">
	<button type="submit" class="btn btn-primary">Save</button>
	
</div>
</div>

</form>

@endsection


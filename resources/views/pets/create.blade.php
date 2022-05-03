@extends('pets.layout')

@section('content')
<div class="row">
	<div class="col-lg-12 margin-tb">
		<div class="pull-left">
			<h3>Add Pets</h3>
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

<form action="{{ route('pets.store')}}" method="POST">
	@csrf

<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="form-group">
			<strong>Name of Pet:</strong>
			<input type="text" name="name_of_pet" class="form-control" required>
		</div>
	</div>
		<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="form-group">
			<strong>Pet Type:</strong>
			<input type="text" name="animal_type" class="form-control" required>
		</div>
	</div>
		<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="form-group">
			<strong>Owner of Pet:</strong>
			<input type="text" name="owner_of_pet" class="form-control" required>
		</div>
	</div>
		<div class="col-xs-12 col-sm-12 col-md-12">
		<div class="form-group">
			<strong>Address of Owner:</strong>
			<input type="text" name="address_of_owner" class="form-control" required>
		</div>
	</div>

<div class="col-xs-12 col-sm-12 col-md-12 text-center">
	<button type="submit" class="btn btn-primary">Submit</button>
	
</div>
</div>

</form>

@endsection


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
		<div class="pull-right">
			<a class="btn btn-success" href="{{ route('pets.create') }}">Create</a>
		</div>
	</div>
</div>

@if ($message= Session::get('success'))
	<div class="alert alert-success">
		<p>{{ $message }}</p>
	</div>
@endif

<table class="table table-success table-striped">
	<tr>
		<th>ID</th>
		<th>Name of Pet</th>
		<th>Pet type</th>
		<th>Name of Owner</th>
		<th>Address</th>
		<th>Action</th>
	</tr>
@foreach($pets as $pet)
<tr>
	<td>{{++$i}}</td>
	<td>{{$pet->name_of_pet}}</td>
	<td>{{$pet->animal_type}}</td>
	<td>{{$pet->owner_of_pet}}</td>
	<td>{{$pet->address_of_owner}}</td>

	<td>
		<form action="{{route('pets.destroy',$pet->id)}}" method="POST">
			<a href="{{route('pets.show', $pet->id)}}" class="btn btn-info"> View</a>
			<a class="btn btn-primary" href="{{route('pets.edit', $pet->id)}}">Edit</a>

			@csrf
			@method('DELETE')
			
			<button type="submit" class="btn btn-danger">Delete</button>
		</form>
	</td>
	
</tr>
@endforeach
	
</table>
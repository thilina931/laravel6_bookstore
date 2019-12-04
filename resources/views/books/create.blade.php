
@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<h3>Add New books</h3>
		</div>
	</div>

	@if ($errors->any())
	<div class="alert alert-danger">
		<strong>Whoops! </strong> There where some problem with your input. <br>
		<ul>
			@foreach ($errors as $error)
			<li>{{$error}}</li>
			@endforeach
		</ul>
	</div>
	@endif


	<form action="{{route('books.store')}}" method="post">
      @csrf
		<div class="row">
			<div class="col-md-12">
				<strong>Book category :</strong>
				<input type="text" name="category" class="form-control" placeholder="Enter Book category ">
			</div>
			<div class="col-md-12">
				<strong>Book Name :</strong>
				<input type="text" name="name" class="form-control" placeholder="Enter Book name ">
			</div>
			<div class="col-md-12">
				<strong>Book Discription :</strong>
				<textarea name="discription" class="form-control" placeholder="Enter Book discription " rows="8" cols="80"> </textarea>
			</div>

			<div class="col-md-12">
				<a href="{{route('books.index')}}" class="btn btn-sm btn-success">Back</a>
				<button type="submit" class="btn btn-sm btn-primary ">Submit</button>
			</div>
		</div>
	</form>
</div>

 @endsection

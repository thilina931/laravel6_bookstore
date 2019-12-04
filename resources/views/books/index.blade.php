@extends('layouts.app')
@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-10">
			<h3>
				Book List
			</h3>
		</div>
		<div compact="col-sm-2">
			<a class="btn btn-sm btn-success" href="{{ route('books.create') }}">Add New Book</a>
		</div>
	</div>
   @if($message = Session::get('success') )
   <div class="alert alert-success">
    <p> {{$message}} </p>
   </div>
   @endif
   <table class="table table-hover table-sm">
	<tr>
		<th width="50px"><b>NO. </b> </th>
		<th width="300px">Category</th>
		<th>Name</th>
        <th>Discription</th>
		<th width="180px">Action</th>
	</tr>
	@foreach ($BooksS as $Books)
	<tr>
		<td><b> {{++$i}}. </b></td>
		<td> {{$Books->category}} </td>
		<td> {{$Books->name}} </td>
		<td> {{$Books->discription}} </td>
		<td>
			<form action="{{ route('books.destroy', [$Books->id])  }}" method="post">
				<a class="btn btn-sm btn-success" href="{{ route('books.show' , [$Books->id]) }}">Show</a>
				<a class="btn btn-sm btn-warning" href="{{ route('books.edit' , [$Books->id]) }}">Edit</a>
				@csrf
				@method('DELETE')
				<button type="submit" class="btn btn-sm btn-danger">Delete</button>

			</form>
		</td>
	</tr>
	@endforeach

</table>

{!! $BooksS->links()  !!}


</div>

@endsection

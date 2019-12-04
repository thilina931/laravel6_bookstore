
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3>Edit books</h3>
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


        <form action="{{route('books.update',$Books->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-12">
                    <strong>Book category :</strong>
                    <input type="text" name="category" class="form-control" value="{{$Books->category}}">
                </div>
                <div class="col-md-12">
                    <strong>Book Name :</strong>
                    <input type="text" name="name" class="form-control" value="{{$Books->name}}">
                </div>
                <div class="col-md-12">
                    <strong>Book Discription :</strong>
                    <textarea class="form-control" name="discription"  rows="8" cols="80">{{$Books->discription}}</textarea>
                </div>

                <div class="col-md-12">
                    <a href="{{route('books.index')}}" class="btn btn-sm btn-success">Back</a>
                    <button type="submit" class="btn btn-sm btn-primary ">Submit</button>
                </div>
            </div>
        </form>
    </div>

@endsection

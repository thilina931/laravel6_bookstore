@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Book Details</h3>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                <strong>Book category:</strong> {{$Books->category}}
                    </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                <strong>Book Name:</strong> {{$Books->name}}
            </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                <strong>Book Discription:</strong> {{$Books->discription}}
            </div>
        </div>
            <div class="col-md-12">
                <a href="{{route('books.index')}}" class="btn btn-sm btn-success">Back</a>
            </div>

        </div>
    </div>
@endsection

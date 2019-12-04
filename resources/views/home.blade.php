@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        @if(auth()->user()->is_admin == 1)
                            <div class=”panel-heading”>Admin</div>
                        @else
                            <div class=”panel-heading”>Normal User</div>
                        @endif
                    <br>
                        <br>

                    You are logged in, {{ Auth::user()->name }}  <br>


                        <a href="{!! route('books.index') !!}">View all books</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

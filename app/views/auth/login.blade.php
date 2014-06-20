@extends('layouts.default')

@section('content')
<div class="container">
    <div class="col-md-6 col-md-offset-3">
        <h2>Welcome back</h2>
        
        @if ($errors->isEmpty() === false)
            <div class="alert alert-danger">
                <strong>Error!</strong>
                @foreach ($errors as $error)
                <p>{{ $error }}</p>
                @endforeach 
            </div>
        @endif

        {{ Former::open(route('post.login'))->rules(['email' => 'required', 'password' => 'required']) }}
        {{ Former::small_text('email')->class('form-control')->required() }}
        {{ Former::small_password('password')->class('form-control')->required() }}
        {{ Former::actions()->small_primary_submit('Login') }}
        {{ Former::close() }}
    </div>
</div>
@stop

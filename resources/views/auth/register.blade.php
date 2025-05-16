@extends('layouts.master')
@section('title')
    Register
@endsection
@section('content')

<form method="POST" action="/register">
    @csrf

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach 
        </ul>
    </div>
    @endif

    <div class="mb-3">
        <label class="form-label">Username</label>
        <input type="text" class="form-control" name="name">
    </div>
    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" class="form-control" name="email">
    </div>
    <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" class="form-control" name="password">
    </div>
    <div class="mb-3">
        <label class="form-label">Password Confirmation</label>
        <input type="password" class="form-control" name="password_confirmation">
    </div>
    <button type="register" class="btn btn-primary">Register</button>
</form>

@endsection
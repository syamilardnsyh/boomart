@extends('layouts.master')
@section('title')

@endsection

@section('content')
<body>
    <div class="container">
        <h2>Buat Akun BookMart</h2>
        <form action="/selamat">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Alamat Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Kata Sandi (maks. 20 huruf)</label>
                <input type="password" class="form-control" id="exampleInputPassword1" maxlength="20">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Ingat saya</label>
            </div>
            <button type="submit" class="btn btn-primary w-100">Daftar</button>
        </form>
        <form action="/login">
            <button type="submit" class="btn btn-primary w-100">Login</button>
        </form>
    </div>
</body>
@endsection
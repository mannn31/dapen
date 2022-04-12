@extends('layout.login')
@section('login')
<div class="card card-outline card-primary">
    <div class="card-header text-center">
        <h1><b>Registrasi</b></h1>
    </div>
    <div class="card-body">
        <form action="/register" method="post">
            @csrf
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="name" id="name" placeholder="Nama Lengkap" @error('name') is-invalid @enderror required value="{{ old('name') }}" autofocus>
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span><i class="fas fa-user"></i></span>
                    </div>
                </div>
            </div>
            <div class="input-group mb-3">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email" @error('email') is-invalid @enderror required value="{{ old('email') }}" autofocus>
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span><i class="fas fa-envelope"></i></span>
                    </div>
                </div>
            </div>
            <div class="input-group mb-3">
                <input type="password" class="form-control" name="password" id="password" placeholder="Password" @error('password') is-invalid @enderror required value="{{ old('password') }}">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span><i class="fas fa-lock"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block">Register</button>
                <p class="text-center mt-2">Sudah punya akun? <a href="/login"> Login</a> disini.</p>
            </div>
        </form>
    </div>
</div>
@endsection
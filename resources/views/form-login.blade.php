@extends('layout.login')
@section('login')
<div class="card card-outline card-primary">
    <div class="card-header text-center">
        <h1><b>LOGIN</b></h1>
    </div>
    <div class="card-body">
        <form action="/login" method="post">
            @csrf
            <div class="input-group mb-3">
                <input type="email" class="form-control" name="email" id="email" placeholder="Email" @error('email') is-invalid @enderror required value="{{ old('email') }}" autofocus>
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span><i class="fas fa-user"></i></span>
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
                <p><a href="#">I forgot my password</a></p>
                <button type="submit" class="btn btn-primary btn-block">LOGIN</button>
                <p class="text-center mt-2">Belum punya akun? <a href="/register"> Register</a> disini.</p>
            </div>
        </form>
    </div>
</div>
@endsection
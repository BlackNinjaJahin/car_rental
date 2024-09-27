@extends('layouts.auth')

@section('content')
    @include('partials._alerts')
    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="card shadow-lg" style="width: 400px;">
            <div class="card-header text-center bg-primary text-white">
                <h4>Login</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="email">Email Address</label>
                        <input class="form-control" id="email" name="email" type="email" required>
                    </div>
                    <div class="form-group mb-4">
                        <label for="password">Password</label>
                        <input class="form-control" id="password" name="password" type="password" required>
                    </div>
                    <button class="btn btn-primary w-100" type="submit">Login</button>
                    <div class="text-center mt-3">
                        <a class="btn btn-outline-success w-100" href="/register">Go to Register</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

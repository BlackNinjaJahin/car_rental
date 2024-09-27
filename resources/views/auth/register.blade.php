@extends('layouts.auth')

@section('content')
    @include('partials._alerts')
    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="card shadow-lg" style="width: 400px;">
            <div class="card-header text-center bg-success text-white">
              
                <h4>Register</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="name">Name</label>
                        <input class="form-control" id="name" name="name" type="text" value="{{ old('name') }}" required autofocus>
                        @error('name')
                            <div class="alert alert-danger my-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="email">Email Address</label>
                        <input class="form-control" id="email" name="email" type="email" value="{{ old('email') }}" required>
                        @error('email')
                            <div class="alert alert-danger my-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="phone">Phone Number</label>
                        <input class="form-control" id="phone" name="phone" type="text" value="{{ old('phone') }}" required>
                        @error('phone')
                            <div class="alert alert-danger my-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="address">Address</label>
                        <input class="form-control" id="address" name="address" type="text" value="{{ old('address') }}" required>
                        @error('address')
                            <div class="alert alert-danger my-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="password">Password</label>
                        <input class="form-control" id="password" name="password" type="password" required>
                    </div>
                    <div class="form-group mb-4">
                        <label for="password-confirm">Confirm Password</label>
                        <input class="form-control" id="password-confirm" name="password_confirmation" type="password" required>
                        @error('password')
                            <div class="alert alert-danger my-1">{{ $message }}</div>
                        @enderror
                    </div>
                    <button class="btn btn-success w-100" type="submit">Register</button>
                    <div class="text-center mt-3">
                        <a class="btn btn-outline-primary w-100" href="/login">Go to Login</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

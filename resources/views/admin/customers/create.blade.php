@extends('layouts.admin')

@section('content')
    @include('partials._alerts')
    
    <div class="d-flex justify-content-center align-items-center">
        <div class="card shadow-lg" style="width: 500px; margin-top: 40px;">
            <div class="card-header bg-primary text-white text-center">
                <h4>Add Customer</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.customers.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Customer Name</label>
                        <input class="form-control" id="name" name="name" type="text" value="{{ old('name') }}" required>
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input class="form-control" id="email" name="email" type="email" value="{{ old('email') }}" required>
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input class="form-control" id="phone" name="phone" type="text" value="{{ old('phone') }}" required>
                        @error('phone')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input class="form-control" id="address" name="address" type="text" value="{{ old('address') }}" required>
                        @error('address')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input class="form-control" id="password" name="password" type="password" required>
                        @error('password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="d-grid gap-2">
                        <button class="btn btn-success" type="submit">Add Customer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

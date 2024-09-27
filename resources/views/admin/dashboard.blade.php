@extends('layouts.admin')

@section('content')
    <div class="container mt-4">
        <h2 class="text-center mb-4">Dashboard</h2>
        <div class="row d-flex justify-content-center gap-4">

            <div class="col-md-3">
                <div class="card text-white bg-primary border-0 shadow-lg">
                    <div class="card-header text-center">
                        <h5>Total Cars</h5>
                    </div>
                    <div class="card-body text-center">
                        <h1 class="display-4">{{ $totalCars }}</h1>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card text-white bg-success border-0 shadow-lg">
                    <div class="card-header text-center">
                        <h5>Available Cars</h5>
                    </div>
                    <div class="card-body text-center">
                        <h1 class="display-4">{{ $availableCars }}</h1>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card text-white bg-warning border-0 shadow-lg">
                    <div class="card-header text-center">
                        <h5>Total Rentals</h5>
                    </div>
                    <div class="card-body text-center">
                        <h1 class="display-4">{{ $totalRentals }}</h1>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card text-white bg-danger border-0 shadow-lg">
                    <div class="card-header text-center">
                        <h5>Total Earnings</h5>
                    </div>
                    <div class="card-body text-center">
                        <h1 class="display-4">${{ number_format($totalEarnings, 2) }}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .card {
            transition: transform 0.3s;
        }

        .card:hover {
            transform: scale(1.05); /* Slightly enlarge the card on hover */
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.2);
        }

        .card-header {
            font-weight: bold;
            font-size: 1.2em;
        }

        .display-4 {
            font-size: 2.5rem; /* Increase font size for display */
            margin: 0; /* Remove default margin */
        }
    </style>
@endsection

@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <h2 class="mb-4 text-center">{{ isset($car) ? 'Edit Car' : 'Add Car' }}</h2>
        <hr>
        <form action="{{ route('admin.cars.store') }}" method="POST" enctype="multipart/form-data" class="p-4 shadow-lg rounded">
            @csrf

            <div class="form-group mb-3">
                <label class="form-label" for="name">Car Name</label>
                <input class="form-control" id="name" name="name" type="text" value="{{ $car->name ?? '' }}" required>
            </div>

            <div class="form-group mb-3">
                <label class="form-label" for="brand">Brand</label>
                <input class="form-control" id="brand" name="brand" type="text" value="{{ $car->brand ?? '' }}" required>
            </div>

            <div class="form-group mb-3">
                <label class="form-label" for="model">Model</label>
                <input class="form-control" id="model" name="model" type="text" value="{{ $car->model ?? '' }}" required>
            </div>

            <div class="form-group mb-3">
                <label class="form-label" for="year">Year of Manufacture</label>
                <input class="form-control" id="year" name="year" type="number" value="{{ $car->year ?? '' }}" required>
            </div>

            <div class="form-group mb-3">
                <label class="form-label" for="car_type">Car Type</label>
                <input class="form-control" id="car_type" name="car_type" type="text" value="{{ $car->car_type ?? '' }}" required>
            </div>

            <div class="form-group mb-3">
                <label class="form-label" for="daily_rent_price">Daily Rent Price</label>
                <input class="form-control" id="daily_rent_price" name="daily_rent_price" type="number" value="{{ $car->daily_rent_price ?? '' }}" required>
            </div>

            <div class="form-group mb-3">
                <label class="form-label" for="availability">Availability</label>
                <select class="form-control" id="availability" name="availability" required>
                    <option selected>select an option</option>
                    <option value="1" {{ (isset($car) && $car->availability == 1) ? 'selected' : '' }}>Available</option>
                    <option value="0" {{ (isset($car) && $car->availability == 0) ? 'selected' : '' }}>Not Available</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label" for="formFile">Select Car Image</label>
                
                <!-- Display the existing car image if available -->
                @if(isset($car) && $car->image)
                    <div class="mb-3">
                        <img id="preview-image-before-upload" src="{{ asset('storage/cars/'.$car->image) }}" alt="Car Image" style="width: 300px; height: 200px; object-fit: cover;">
                    </div>
                @else
                    <!-- Empty img tag for preview when no image is available -->
                    <div class="mb-3">
                        <img id="preview-image-before-upload" src="" alt="Image Preview" style="display: none; width: 300px; height: 200px; object-fit: cover;">
                    </div>
                @endif

                <input class="form-control" id="image" name="image" type="file" accept="image/*">
            </div>

            <button class="btn btn-success btn-block" type="submit">{{ isset($car) ? 'Update Car' : 'Add Car' }}</button>
        </form>
    </div>
@endsection

@section('scripts')
<script type="text/javascript">
    // JavaScript for displaying image preview
    $(document).ready(function (e) {
        $('#image').change(function(){
            let reader = new FileReader();
            
            reader.onload = (e) => {
                $('#preview-image-before-upload').attr('src', e.target.result);
                $('#preview-image-before-upload').show();  // Show the image
            }
            
            reader.readAsDataURL(this.files[0]); 
        });
    });
</script>
@endsection

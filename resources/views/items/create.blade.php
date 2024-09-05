@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="card shadow-lg" style="background-image: url('https://source.unsplash.com/random/1600x900?nature'); background-size: cover; background-position: center;">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h3>Create New Item</h3>
        </div>
        <div class="card-body bg-light bg-opacity-75">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('items.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label text-dark">Name:</label>
                    <input type="text" name="name" id="name" class="form-control form-control-lg" value="{{ old('name') }}" required>
                </div>

                <div class="mb-3">
                    <label for="quantity" class="form-label text-dark">Quantity:</label>
                    <input type="number" name="quantity" id="quantity" class="form-control form-control-lg" value="{{ old('quantity') }}" required>
                </div>

                <div class="mb-3">
                    <label for="brand" class="form-label text-dark">Brand:</label>
                    <input type="text" name="brand" id="brand" class="form-control form-control-lg" value="{{ old('brand', 'Unknown') }}">
                </div>

                <div class="mb-3">
                    <label for="status" class="form-label text-dark">Status:</label>
                    <select name="status" id="status" class="form-select form-select-lg">
                        <option value="" selected>Unknown</option>
                        <option value="broken">Broken</option>
                        <option value="used">Used</option>
                        <option value="fresh">Fresh</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary btn-lg">Create Item</button>
            </form>
        </div>
    </div>
</div>

<style>
    .card {
        border-radius: 15px;
        color: #fff;
    }
    .card-header {
        border-bottom: 1px solid rgba(255, 255, 255, 0.2);
    }
    .form-control, .form-select {
        border-radius: 12px;
        box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
        transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }
    .form-control:focus, .form-select:focus {
        border-color: #007bff;
        box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.25);
    }
    .form-label {
        font-weight: bold;
    }
    .btn-primary {
        border-radius: 20px;
        transition: background-color 0.3s ease, transform 0.3s ease;
    }
    .btn-primary:hover {
        background-color: #0056b3;
        transform: scale(1.05);
    }
    .alert {
        border-radius: 10px;
    }
</style>
@endsection

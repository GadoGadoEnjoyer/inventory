@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="card shadow-lg" style="background-image: url('https://source.unsplash.com/random/1600x900?technology'); background-size: cover; background-position: center;">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h3>Adjust Quantity for {{ $item->name }}</h3>
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

            <form action="{{ route('items.adjustQuantity', $item->id) }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="amount" class="form-label text-dark">Amount to Add/Subtract:</label>
                    <input type="number" name="amount" id="amount" class="form-control form-control-lg" required>
                    <small class="form-text text-muted">Use positive numbers to add to stock, negative numbers to subtract.</small>
                </div>

                <button type="submit" class="btn btn-primary btn-lg">Update Quantity</button>
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
    .form-control:focus {
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

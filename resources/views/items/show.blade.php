@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="card shadow-lg" style="background-image: url('https://source.unsplash.com/random/1600x900?nature'); background-size: cover; background-position: center;">
        <div class="card-header bg-primary text-white">
            <h3>Item Details</h3>
        </div>
        <div class="card-body bg-light bg-opacity-75">
            <h5 class="card-title text-dark">Name: {{ $item->name }}</h5>
            <p class="card-text text-dark">Quantity: {{ $item->quantity }}</p>
            <p class="card-text text-dark">Status: {{ $item->status }}</p>
            <p class="card-text text-dark">Brand: {{ $item->brand }}</p>

            <div class="d-flex justify-content-between">
                <a href="{{ route('items.edit', $item->id) }}" class="btn btn-warning btn-lg">Edit</a>
                <form action="{{ route('items.destroy', $item->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-lg" onclick="return confirm('Are you sure you want to delete this item?')">Delete</button>
                </form>
                <a href="{{ route('items.index') }}" class="btn btn-secondary btn-lg">Back to List</a>
            </div>
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
    .card-title, .card-text {
        font-weight: bold;
    }
    .btn {
        border-radius: 20px;
        transition: background-color 0.3s ease, transform 0.3s ease;
    }
    .btn:hover {
        transform: scale(1.05);
    }
    .btn-warning:hover {
        background-color: #e0a800;
    }
    .btn-danger:hover {
        background-color: #c82333;
    }
    .btn-secondary:hover {
        background-color: #6c757d;
    }
</style>
@endsection

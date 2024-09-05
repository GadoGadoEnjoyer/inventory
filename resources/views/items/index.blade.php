@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="card shadow-lg" style="background-image: url('https://source.unsplash.com/random/1600x900'); background-size: cover; background-position: center;">
        <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
            <h3>Items List</h3>
            <a href="{{ route('items.create') }}" class="btn btn-light btn-lg">Add New Item</a>
        </div>
        <div class="card-body bg-light bg-opacity-75">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <table class="table table-hover table-bordered">
                <thead class="bg-dark text-white">
                    <tr>
                        <th>Name</th>
                        <th>Quantity</th>
                        <th>Status</th>
                        <th>Brand</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($items as $item)
                    <tr>
                        <td><a href="{{ route('items.show', $item->id) }}" class="text-dark">{{ $item->name }}</a></td>
                        <td>{{ $item->quantity }}</td>
                        <td>{{ $item->status ?? 'Unknown' }}</td>
                        <td>{{ $item->brand }}</td>
                        <td>
                            <a href="{{ route('items.adjust', $item->id) }}" class="btn btn-warning btn-sm action-btn">Adjust</a>
                            <a href="{{ route('items.edit', $item->id) }}" class="btn btn-primary btn-sm action-btn">Edit</a>
                            <form action="{{ route('items.destroy', $item->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm action-btn" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<style>
    .card {
        border: none;
        border-radius: 15px;
        color: #fff;
    }
    .card-header {
        border-bottom: 1px solid rgba(255, 255, 255, 0.2);
    }
    .btn-light {
        border-radius: 20px;
        transition: background-color 0.3s ease, color 0.3s ease;
    }
    .btn-light:hover {
        background-color: #e0e0e0;
        color: #000;
    }
    .action-btn {
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }
    .action-btn:hover {
        transform: scale(1.05);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }
    table {
        background-color: rgba(255, 255, 255, 0.9);
        border-radius: 10px;
        overflow: hidden;
    }
</style>
@endsection

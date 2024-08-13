@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Item Details</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Name: {{ $item->name }}</h5>
            <p class="card-text">Quantity: {{ $item->quantity }}</p>
            <p class="card-text">Status: {{ $item->status }}</p>
            <p class="card-text">Brand: {{ $item->brand }}</p>
            <a href="{{ route('items.edit', $item->id) }}" class="btn btn-warning">Edit</a>
            <form action="{{ route('items.destroy', $item->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            <a href="{{ route('items.index') }}" class="btn btn-secondary">Back to List</a>
        </div>
    </div>
</div>
@endsection

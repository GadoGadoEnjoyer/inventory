@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header bg-primary text-white">
        <h3>Edit Item: {{ $item->name }}</h3>
    </div>
    <div class="card-body">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('items.update', $item->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $item->name) }}" required>
            </div>

            <div class="mb-3">
                <label for="quantity" class="form-label">Quantity:</label>
                <input type="number" name="quantity" id="quantity" class="form-control" value="{{ old('quantity', $item->quantity) }}" required>
            </div>

            <div class="mb-3">
                <label for="brand" class="form-label">Brand:</label>
                <input type="text" name="brand" id="brand" class="form-control" value="{{ old('brand', $item->brand) }}">
            </div>

            <div class="mb-3">
                <label for="status" class="form-label">Status:</label>
                <select name="status" id="status" class="form-select">
                    <option value="" {{ $item->status === null ? 'selected' : '' }}>Unknown</option>
                    <option value="broken" {{ $item->status === 'broken' ? 'selected' : '' }}>Broken</option>
                    <option value="used" {{ $item->status === 'used' ? 'selected' : '' }}>Used</option>
                    <option value="fresh" {{ $item->status === 'fresh' ? 'selected' : '' }}>Fresh</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Update Item</button>
        </form>
    </div>
</div>
@endsection

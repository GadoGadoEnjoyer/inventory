@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Inventory List</h1>
    <a href="{{ route('items.create') }}" class="btn btn-primary mb-3">Add New Item</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Quantity</th>
                <th>Status</th>
                <th>Brand</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($items as $item)
            <tr>
                <td>{{ $item->name }}</td>
                <td>{{ $item->quantity }}</td>
                <td>{{ $item->status }}</td>
                <td>{{ $item->brand }}</td>
                <td>
                    <a href="{{ route('items.show', $item->id) }}" class="btn btn-info">View</a>
                    <a href="{{ route('items.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('items.destroy', $item->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
                <td>
                    <a href="{{ route('items.adjust', $item->id) }}" class="btn btn-warning">Adjust Quantity</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Adjust Quantity for {{ $item->name }}</h1>

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

        <div class="form-group">
            <label for="amount">Amount to Add/Subtract:</label>
            <input type="number" name="amount" id="amount" class="form-control" required>
            <small class="form-text text-muted">Use positive numbers to add to stock, negative numbers to subtract.</small>
        </div>

        <button type="submit" class="btn btn-primary">Update Quantity</button>
    </form>
</div>
@endsection

@extends('layouts.app')

@section('content')

@if ($errors->any())
    <div class="error">
        <strong>Please fix the following:</strong>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="/check">
    @csrf

    <label for="current_odometer">Current Odometer</label>
    <input
        type="number"
        id="current_odometer"
        name="current_odometer"
        min="0"
        value="{{ old('current_odometer') }}"
        required
    >

    <label for="previous_change_date">Date of Previous Oil Change</label>
    <input
        type="date"
        id="previous_change_date"
        name="previous_change_date"
        value="{{ old('previous_change_date') }}"
        required
    >

    <label for="previous_change_odometer">Odometer at Previous Oil Change</label>
    <input
        type="number"
        id="previous_change_odometer"
        name="previous_change_odometer"
        min="0"
        value="{{ old('previous_change_odometer') }}"
        required
    >

    <button class="btn" type="submit">Check Oil Change</button>
</form>

@endsection
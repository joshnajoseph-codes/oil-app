@extends('layouts.app')

@section('content')

@if ($check->is_due)
    <div class="warning">
        <strong>Result:</strong> The car <strong>IS DUE</strong> for an oil change.
    </div>
@else
    <div class="success">
        <strong>Result:</strong> The car is <strong>NOT</strong> due for an oil change.
    </div>
@endif

<div class="card">
    <h3>Saved Input</h3>
    <p><strong>Current Odometer:</strong> {{ $check->current_odometer }} km</p>
    <p><strong>Date of Previous Oil Change:</strong> {{ $check->previous_change_date }}</p>
    <p><strong>Odometer at Previous Oil Change:</strong> {{ $check->previous_change_odometer }} km</p>
</div>

<a class="btn btn-secondary" href="/">Check another car</a>

@endsection

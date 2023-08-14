@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Event Details</h2>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $event->title }}</h5>
            <p class="card-text"><strong>Description:</strong> {{ $event->description }}</p>
            <p class="card-text"><strong>Date and Time:</strong> {{ $event->date_time }}</p>
            <p class="card-text"><strong>Location:</strong> {{ $event->location }}</p>
        </div>
    </div>
    <div class="mt-3">
        <a href="{{ route('events.index') }}" class="btn btn-secondary">Back to List</a>
    </div>
</div>
@endsection

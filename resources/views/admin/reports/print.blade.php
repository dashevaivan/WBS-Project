@extends('layout.printTemplate') <!-- Use a layout optimized for printing -->

@section('content')

<div class="container">
    <h2 style="font-family: Montserrat; font-weight: bold; text-align: center;">Reports with Status: {{ $status }}</h2>
    <hr>

    @foreach ($reports as $report)
        <div class="mb-4">
            <h4 style="font-family: Montserrat; font-weight: bold;">Report ID: {{ $report->id }}</h4>
            <p><strong>Reported By:</strong> {{ $report->user->full_name}}</p>
            <p><strong>Phone Number:</strong> {{ $report->user->phone_number}}</p>
            <p><strong>Violations:</strong> {{ $report->violations }}</p>
            <p><strong>Description:</strong> {{ $report->description }}</p>
            <p><strong>Status:</strong> {{ $report->status }}</p>
            <p><strong>Feedback:</strong> {{ $report->feedback }}</p>
            <hr>
        </div>
    @endforeach
</div>

<script>
    window.onload = function() {
        window.print();
    };
</script>

@endsection

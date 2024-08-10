@extends('layout.reportTemplate')

@section('content')
@include('components.back-button-dashboard')

<h1 class="card-title d-flex justify-content-center" style="font-family: Montserrat; font-weight: bold; margin-top: 40px; margin-bottom: 40px;">My Reports</h1>

<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th>Violations</th>
                <th>Status</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reports as $report)
            <tr>
                <td>{{ $report->violations }}</td>
                <td>{{ $report->status }}</td>
                <td>{{ $report->created_at->format('d/m/Y') }}</td>
                <td>
                    <a href="{{ route('reports.show', $report->id) }}" class="btn btn-info">View</a>
                </td>
            @endforeach
        </tbody>
    </table>
</div>

@endsection

@extends('layout.reportTemplate')

@section('content')
@include('components.back-button-dashboard')

<h2 class="card-title d-flex" style="font-family: Montserrat; font-weight: bold; margin-left: 30px">Violation Information</h2>

<div class="container card-subtitle d-flex justify-content-between">
    <p style="display: flex; font-style: italic; margin-left: 25px;">Tipe Pelanggaran : {{ $report->violations }}</p>
    <p style="display: flex; font-style: italic;">Status : {{ $report->status }}</p>
</div>

<p style="display: flex; font-style: italic; margin-left: 38px;">Kejadian : </p>
<div class="container card-subtitle">
    <p style="text-align: justify; margin-left: 25px;">{{ $report->description }}</p>
    
    <p style="display: flex; font-style: italic; margin-left: 25px;">Informasi Tambahan :</p>

    <!-- Feedback or Additional Information -->
    <h5 class="card-title d-flex" style="font-family: Montserrat; font-weight: bold; margin-left: 25px;">Feedback :</h5>
    <p style="text-align: justify; margin-left: 25px;">{{ $report->feedback ?? 'No feedback available yet.' }}</p>

    <!-- Edit Report Button -->
    <a href="{{ route('reports.edit', $report->id) }}" class="btn btn-primary" style="display: inline-block; border-radius: 22px; background-color: #00BCF4; font-weight: bold; text-align: center; padding: 10px 15px; margin-left: 25px;">Edit Report</a>
</div>

@endsection

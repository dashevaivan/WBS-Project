@extends('layout.reportTemplate')

@section('content')

<h2 class="card-title d-flex" style="font-family: Montserrat; font-weight: bold; margin-left: 30px">Report Details</h2>

<div class="container card-subtitle d-flex justify-content-between">
    <p style="display: flex; font-style: italic; margin-left: 25px;">Tipe Pelanggaran : {{ $report->violations }}</p>
    <p style="display: flex; font-style: italic;">Status : {{ $report->status }}</p>
</div>

<p style="display: flex; font-style: italic; margin-left: 38px;">Kejadian : </p>
<div class="container card-subtitle">
    <p style="text-align: justify; margin-left: 25px;">{{ $report->description }}</p>

    <form action="{{ route('admin.reports.update', $report->id) }}" method="POST">
        @csrf
        @method('PUT')

        <h3 style="font-family: Montserrat; font-weight: bold; font-size: 24px;">Update Status</h3>
        <select name="status" class="form-control">
            <option value="Ongoing" {{ $report->status == 'Ongoing' ? 'selected' : '' }}>Ongoing</option>
            <option value="Approved" {{ $report->status == 'Approved' ? 'selected' : '' }}>Approved</option>
            <option value="Closed" {{ $report->status == 'Closed' ? 'selected' : '' }}>Closed</option>
            <option value="Rejected" {{ $report->status == 'Rejected' ? 'selected' : '' }}>Rejected</option>
        </select>

        <h3 style="font-family: Montserrat; font-weight: bold; font-size: 24px; margin-top: 15px;">Feedback</h3>
        <textarea name="feedback" class="form-control" style="height: 200px; width: 100%;">{{ old('feedback', $report->feedback) }}</textarea>

        <div class="d-grid gap-2" style="margin-top: 15px;">
            <button type="submit" class="btn btn-primary" style="border-radius: 22px; background-color: #00BCF4; font-weight: bold; text-align: center;">Update Report</button>
        </div>
    </form>

    <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary" style="border-radius: 22px; font-weight: bold; text-align: center; padding: 10px 15px; margin-top: 15px;">Back to Dashboard</a>

</div>

@endsection

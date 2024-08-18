@extends('layout.reportTemplate')

@section('content')

<div class="container d-flex align-items-center justify-content-between" style="margin-top: 40px; margin-bottom: 40px;">
<a href="{{ route('admin.dashboard') }}" class="d-flex text-back align-items-center"><img src="{{URL('back.png')}}" alt="" width="19" height="39" style="margin-right: 0.5rem">Kembali</a>
<h2 class="card-title" style="font-family: Montserrat; font-weight: bold; text-align: center; margin-bottom: 15px; margin-left: -100px;">Report Details</h2>
<div></div>
</div>

<div class="container card-subtitle d-flex justify-content-between">
    <p style="display: flex; font-style: italic;">Reported By: {{ $report->user->full_name }} - {{ $report->user->phone_number ?? 'N/A' }}</p>
    <p style="display: flex; font-style: italic;">Status : {{ $report->status }}</p>
</div>

<div class="container card-subtitle">
<p style="display: flex; font-style: italic;">Violations: {{ $report->violations }}</p>
    <p style="display: flex; font-style: italic;">Description: </p>
    <p style="text-align: justify; margin-left: 5px;">{{ $report->description }}</p>
    @if($downloadLink)
    <p>Bukti : <a href="{{ $downloadLink }}"> {{ $report->evidence }}</a></p>
    @endif


    <form action="{{ route('admin.reports.update', $report->id) }}" method="POST">
        @csrf
        @method('PUT')

        <h3 style="font-family: Montserrat; font-weight: bold; font-size: 24px;">Update Status</h3>
        <select name="status" class="form-control">
            @foreach ($allowedStatuses as $status)
                <option value="{{ $status }}" {{ $report->status == $status ? 'selected' : '' }}>{{ $status }}</option>
            @endforeach
        </select>

        <h3 style="font-family: Montserrat; font-weight: bold; font-size: 24px; margin-top: 15px;">Feedback</h3>
        <textarea name="feedback" class="form-control" style="height: 200px; width: 100%;">{{ old('feedback', $report->feedback) }}</textarea>

        <div class="d-grid gap-2" style="margin-top: 15px;">
            <button type="submit" class="btn btn-primary" style="border-radius: 22px; background-color: #00BCF4; font-weight: bold; text-align: center;">Update Report</button>
        </div>
    </form>


</div>

@endsection

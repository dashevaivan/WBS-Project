@extends('layout.reportTemplate')

@section('content')

<div class="container d-flex align-items-center justify-content-between" style="margin-top: 40px; margin-bottom: 40px;">
    <a href="{{ url()->previous() }}" class="d-flex text-back align-items-center">
        <img src="{{URL('back.png')}}" alt="" width="19" height="39" style="margin-right: 0.5rem">Kembali
    </a>
    <h1 class="card-title" style="font-family: Montserrat; font-weight: bold; text-align: center; margin-left: -90px;">Informasi Pelanggaran</h1>
    <div></div>
</div>

<div class="container card-subtitle d-flex justify-content-between">
    <p style="display: flex; font-style: italic; margin-left: 25px; font-weight: bold;">Tipe Pelanggaran : <p style="margin-left: -55.5rem;"></p>{{ $report->violations }}</p>
    <p style="display: flex; font-style: italic; margin-right: 25px;">Status : {{ $report->status }}</p>
</div>

<p style="display: flex; font-style: italic; font-weight:bold; margin-left: 38px;">Kejadian : </p>
<div class="container card-subtitle">
    <p style="text-align: justify; margin-left: 25px;">{{ $report->description }}</p>
    
    <p style="display: flex; font-style: italic; margin-left: 25px;">Informasi Tambahan :</p>

    <!-- Feedback or Additional Information -->
    <h5 class="card-title d-flex" style="font-family: Montserrat; font-weight: bold; margin-left: 25px;">Umpan Balik :</h5>
    <p style="text-align: justify; margin-left: 25px;">{{ $report->feedback ?? 'Belum ada umpan balik.' }}</p>

    <!-- Edit Report Button -->
    <a href="{{ route('reports.edit', $report->id) }}" class="btn btn-primary" style="display: inline-block; border-radius: 22px; background-color: #00BCF4; font-weight: bold; text-align: center; padding: 10px 15px; margin-left: 25px;">Edit Report</a>
</div>

@endsection

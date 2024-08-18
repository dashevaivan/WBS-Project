@extends('layout.landinglayout')

@section('rightcontent')

<div class="container">
    <h1 style="display: flex; font-family: Montserrat; font-weight:bold; justify-content: center;">Dashboard</h1>
    <p style="display: flex;"><i>Silahkan kirim laporan anda, atau kelola laporan anda disini</i></p>
    
    <div class="d-grid gap-2 mb-4">
        <a href="{{ route('reports.create') }}" class="btn btn-primary" style="display: flex; border-radius: 22px; background-color: #00BCF4; font-weight: bold; text-align: center; display: block;">Buat Laporan</a>
    </div>

    <div class="d-grid gap-2">
        <a href="{{ route('reports.index') }}" class="btn btn-secondary" style="display: flex; border-radius: 22px; background-color: #007BFF; font-weight: bold; text-align: center; display: block;">Laporan Saya</a>
    </div>
</div>

@endsection

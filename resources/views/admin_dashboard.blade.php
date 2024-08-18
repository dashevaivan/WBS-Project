@extends('layout.landinglayout')

@section('rightcontent')

<div class="container">
    <h1 style="display: flex; font-family: Montserrat; font-weight:bold; justify-content: center;">Dashboard</h1>
    <p style="display: flex; justify-content: center;"><i>Selamat datang di Dashboard Admin.</i></p>
    
    <div class="d-grid gap-2 mb-4">
        <!-- Link to the Manage Reports page -->
        <a href="{{ route('admin.reports.index') }}" class="btn btn-primary d-flex justify-content-center align-items-center" style="display: flex; border-radius: 22px; background-color: #00BCF4; font-weight: bold; text-align: center;">Kelola Laporan</a>
    </div>
</div>

@endsection

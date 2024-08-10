@extends('layout.landinglayout')

@section('rightcontent')

<div class="container">
    <h1 style="display: flex; font-family: Montserrat; font-weight:bold;">Admin Dashboard</h1>
    <p style="display: flex;"><i>Welcome to the admin dashboard.</i></p>
    
    <div class="d-grid gap-2 mb-4">
        <!-- Link to the Manage Reports page -->
        <a href="{{ route('admin.reports.index') }}" class="btn btn-primary" style="display: flex; border-radius: 22px; background-color: #00BCF4; font-weight: bold; text-align: center;">Manage Reports</a>
    </div>
</div>

@endsection

@extends('layout.landinglayout')

@section('rightcontent')
<div class="container">
    <h1 style="display: flex; font-family: Montserrat; font-weight:bold;">Verifikasi Alamat Email Anda</h1>
    
    @if (session('message'))
        <div class="alert alert-success" role="alert">
            {{ session('message') }}
        </div>
    @endif

    <p style="display: flex; font-style: italic;">Sebelum melanjutkan, periksa email Anda untuk tautan verifikasi.</p>
    <p style="display: flex; font-style: italic;">Jika tidak menerima email tersebut, silahkan minta email baru di bawah ini.</p>

    <form method="POST" action="{{ route('verification.resend') }}">
        @csrf
        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary" style="display: flex; border-radius: 22px; background-color: #00BCF4; font-weight: bold; text-align: center; display: block;">Klik di sini untuk meminta tautan lagi</button>
        </div>
    </form>
</div>
@endsection

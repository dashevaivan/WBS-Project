@extends('layout.landinglayout')

@section('rightcontent')

<div class="container">
    <h1 style="display: flex; font-family: Montserrat; font-weight:bold;">Ubah Kata Sandi</h1>
    <p style="display: flex;"><i>Masukkan Kata Sandi Baru</i></p>
    
    <form method="POST" action="{{ route('password.update') }}">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">
        <input type="hidden" name="email" value="{{ $email }}">

        <div class="mb-3">
            <label for="password" class="form-label" style="display:flex; font-family: Montserrat">Kata Sandi Baru</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Enter new password" required>
        </div>
        <div class="mb-3">
            <label for="password_confirmation" class="form-label" style="display:flex; font-family: Montserrat">Konfirmasi kata sandi baru</label>
            <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Confirm new password" required>
        </div>
        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary" style="display: flex; border-radius: 22px; background-color: #00BCF4; font-weight: bold; text-align: center; display: block;">Kirim</button>
        </div>
    </form>

</div>

@endsection

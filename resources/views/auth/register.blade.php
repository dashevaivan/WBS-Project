@extends('layout.landinglayout')

@section('rightcontent')

<div class="container">
    <h1 style="display: flex; font-family: Montserrat; font-weight:bold;">Daftar</h1>
    <p style="display: flex;"><i>Masukkan detil dibawah untuk membuat akun.</i></p>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="mb-3">
            <label for="full_name" class="form-label" style="display: flex; font-family: Montserrat">Nama Lengkap</label>
            <input type="text" name="full_name" class="form-control @error('full_name') is-invalid @enderror" id="full_name" placeholder="Masukkan nama lengkap anda" value="{{ old('full_name') }}" required>
            @error('full_name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="phone_number" class="form-label" style="display: flex; font-family: Montserrat">Nomor telepon</label>
            <input type="text" name="phone_number" class="form-control @error('phone_number') is-invalid @enderror" id="phone_number" placeholder="Masukkan nomor telepon anda" value="{{ old('phone_number') }}" required>
            @error('phone_number')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="email" class="form-label" style="display: flex; font-family: Montserrat">Alamat Email</label>
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" aria-describedby="emailHelp" placeholder="Masukkan alamat email anda" value="{{ old('email') }}" required>
            @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="occupation" class="form-label" style="display:flex; font-family: Montserrat">Pekerjaan</label>
            <input type="text" name="occupation" class="form-control @error('occupation') is-invalid @enderror" id="occupation" placeholder="Masukkan pekerjaan anda" value="{{ old('occupation') }}" required>
            @error('occupation')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="password" class="form-label" style="display:flex; font-family: Montserrat">Kata sandi</label>
            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Buat kata sandi anda" required>
            @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="password_confirmation" class="form-label" style="display:flex; font-family: Montserrat">Konfirmasi kata sandi</label>
            <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Konfirmasi kata sandi anda" required>
        </div>
        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary" style="display: flex; border-radius: 22px; background-color: #00BCF4; font-weight: bold; text-align: center; display: block;">Daftar</button>
        </div>
    </form>
    
    <a href="{{ route('login') }}" style="display: flex; margin-bottom: 20px; margin-top: 15px; color: black;">Sudah memiliki akun? Masuk disini.</a>
</div>

@endsection

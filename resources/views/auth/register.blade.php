@extends('layout.landinglayout')

@section('rightcontent')

<div class="container">
    <h1 style="display: flex; font-family: Montserrat; font-weight:bold;">Register</h1>
    <p style="display: flex;"><i>Please fill in the details below to create an account.</i></p>

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
            <label for="full_name" class="form-label" style="display: flex; font-family: Montserrat">Full Name</label>
            <input type="text" name="full_name" class="form-control @error('full_name') is-invalid @enderror" id="full_name" placeholder="Enter your full name" value="{{ old('full_name') }}" required>
            @error('full_name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="phone_number" class="form-label" style="display: flex; font-family: Montserrat">Phone Number</label>
            <input type="text" name="phone_number" class="form-control @error('phone_number') is-invalid @enderror" id="phone_number" placeholder="Enter your phone number" value="{{ old('phone_number') }}" required>
            @error('phone_number')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="email" class="form-label" style="display: flex; font-family: Montserrat">Email address</label>
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" aria-describedby="emailHelp" placeholder="Enter your email" value="{{ old('email') }}" required>
            @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="occupation" class="form-label" style="display:flex; font-family: Montserrat">Occupation</label>
            <input type="text" name="occupation" class="form-control @error('occupation') is-invalid @enderror" id="occupation" placeholder="Enter your occupation" value="{{ old('occupation') }}" required>
            @error('occupation')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="password" class="form-label" style="display:flex; font-family: Montserrat">Password</label>
            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Create a password" required>
            @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="password_confirmation" class="form-label" style="display:flex; font-family: Montserrat">Confirm Password</label>
            <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Confirm your password" required>
        </div>
        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary" style="display: flex; border-radius: 22px; background-color: #00BCF4; font-weight: bold; text-align: center; display: block;">Register</button>
        </div>
    </form>
    
    <a href="{{ route('login') }}" style="display: flex; margin-bottom: 20px; margin-top: 15px; color: black;">Already have an account? Login here.</a>
</div>

@endsection

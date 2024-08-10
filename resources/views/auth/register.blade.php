@extends('layout.landinglayout')

@section('rightcontent')

<div class="container">
    <h1 style="display: flex; font-family: Montserrat; font-weight:bold;">Register</h1>
    <p style="display: flex;"><i>Please fill in the details below to create an account.</i></p>
    
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label" style="display: flex; font-family: Montserrat">Email address</label>
            <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter your email" required>
        </div>
        <div class="mb-3">
            <label for="occupation" class="form-label" style="display:flex; font-family: Montserrat">Occupation</label>
            <input type="text" name="occupation" class="form-control" id="occupation" placeholder="Enter your occupation" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label" style="display:flex; font-family: Montserrat">Password</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Create a password" required>
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

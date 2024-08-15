@extends('layout.landinglayout')

@section('rightcontent')
<div class="container">
    <h1 style="display: flex; font-family: Montserrat; font-weight:bold;">Verify Your Email Address</h1>
    
    @if (session('message'))
        <div class="alert alert-success" role="alert">
            {{ session('message') }}
        </div>
    @endif

    <p style="display: flex; font-style: italic;">Before proceeding, please check your email for a verification link.</p>
    <p style="display: flex; font-style: italic;">If you did not receive the email, you can request a new one below.</p>

    <form method="POST" action="{{ route('verification.resend') }}">
        @csrf
        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary" style="display: flex; border-radius: 22px; background-color: #00BCF4; font-weight: bold; text-align: center; display: block;">Click here to request another</button>
        </div>
    </form>
</div>
@endsection

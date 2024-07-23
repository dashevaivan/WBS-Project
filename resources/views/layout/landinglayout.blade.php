@extends('layout.navbar')

@section('content')

<div class="container d-flex justify-content-center">
    <div class="card text-center" style="width:1024px; height:auto; margin-top: 30px; margin-bottom: 30px; padding: 20px; border-radius:40px; box-shadow: 2px 2px 8px rgba(0,0,0,5)">
        <div class="card-body">
            <div class="row d-flex align-items-center">
                <div class="col-md-6 d-flex justify-content-center">
                    <img src="{{URL('logo.png')}}" class="img-fluid" alt="Responsive image">
                </div>
                <div class="col-md-6">
                    @yield('rightcontent')
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
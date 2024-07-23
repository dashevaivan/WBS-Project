@extends('layout.navbar')

@section('content')

<div class="container d-flex justify-content-center">
    <div class="card text-center" style="width:1024px; height:auto; margin-top: 30px; margin-bottom: 30px; border-radius: 40px; box-shadow: 2px 2px 8px rgba(0,0,0,5)">
        <div class="card-body">
            <div class="row d-flex align-items-center">
                <div class="col-md-6 d-flex justify-content-center">
                    <img src="{{URL('logo.png')}}" class="img-fluid" alt="Responsive image">
                </div>
                <div class="col-md-6">
                    <h1 class="card-title" style="font-family: 'Montserrat'; font-weight: bold; font-size: 35px;">
                        Whistleblowing System</h1>
                    <p class="card-text" style="font-style: italic; font-size: 18px;">Fraus, Corruptio, Abusus
                        Potestatis, Conflctus Intressum, Subornatio, Negligentia, Falsificatio, Inobservantia Regulorum,
                        Violatio Secretorum, etc.</p>
                    <a href="#" class="btn btn-danger"
                        style="background-color: #C00F0C; font-family: Montserrat; font-size: 13px">Report Now!</a>
                </div>
            </div>
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{URL('wbs1.png')}}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{URL('wbs2.png')}}" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev" style="background-color: black; border-radius: 50%; width: 40px; height: 40px; display: flex; align-items: center; justify-content: center;">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next" style="background-color: black; border-radius: 50%; width: 40px; height: 40px; display: flex; align-items: center; justify-content: center;">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

        </div>
    </div>
</div>



@endsection
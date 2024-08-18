<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{URL('css/style.css')}}">
    <title>WBS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-custom sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand d-flex align-items-center" href="{{route('home')}}" style="font-family: montserrat; font-weight: bold; color: #FFFFFF; font-size: 24px; letter-spacing: 0.1rem; text-shadow: 0px 3px 4px #000000;">
                <img src="{{URL('logo.png')}}" alt="Logo" width="64" height="41" class="d-inline-block align-text-top" style="margin-right: 1rem">WBS Tirta Benteng
            </a>

            <div class="d-flex flex-row-reverse">
                @if (Auth::check())
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="navbar-brand d-flex text-navbar align-items-center btn btn-link" style="text-decoration: none;">
                            <img src="{{URL('person.png')}}" alt="" width="20" height="20" style="margin-right: 0.5rem">Keluar
                        </button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="navbar-brand d-flex text-navbar align-items-center">
                        <img src="{{URL('person.png')}}" alt="" width="20" height="20" style="margin-right: 0.5rem">Masuk
                    </a>
                    <a href="{{ route('register') }}" class="navbar-brand d-flex text-navbar align-items-center">
                        <img src="{{URL('regis.png')}}" alt="" width="20" height="20" style="margin-right: 0.5rem">Daftar
                    </a>
                @endif
            </div>
        </div>
    </nav>

    @yield('content')

    <footer class="footer">
        <div class="container">
            <div class="container text-left">
                <div class="row">
                    <div class="col-sm-4">
                        About Us
                        <p>Platform Business to Business (B2B) eCommerce yang Otomatis &amp; Cerdas untuk modernisasi pengadaan di era Procurement 4.0</p>
                    </div>
                    <div class="col-sm-2">
                        Our Service
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Qui ratione facilis atque
                            laboriosam quas in nobis numquam sint vitae veniam. Voluptatibus nulla delectus inventore
                            maxime blanditiis exercitationem voluptatem quos.</p>
                    </div>
                    <div class="col-sm-2">
                        Kontak
                        <br>
                        <p>0000000000000</p>
                        <br class="2">
                        Email
                        <br>
                        <p>gmail.com</p>
                    </div>
                    <div class="col-sm-4">
                        Reach Us
                        <p>Komplek PU Prosida Bendungan 10 Kel. Mekarsari Kec. Neglasari Kota Tangerang</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 d-flex justify-content-center align-items-center">
                <img src="{{URL('logo.png')}}" alt="" width="64" height="41" class="align-items-center" style="margin-right: 0.5rem;">
                Perumda Tirta Benteng
                <br>Kota Tangerang
            </div>
            <p style="text-align: center;margin-top: 1rem;">Copyright &copy; 2024 All Rights Reserved | Perumda Tirta Benteng Kota
                Tangerang</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>

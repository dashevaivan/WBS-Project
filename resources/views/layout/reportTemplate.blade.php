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

<div class="container d-flex justify-content-center">
<div class="card" style="width: 1396px; height: auto; margin-top: 30px; margin-bottom:30px; border-radius: 40px; box-shadow: 2px 2px 8px rgba(0,0,0,5)">
  <div class="card-body">
    @yield('content')
  </div>
</div>
</div>

@yield('scripts')

</body>

</html>
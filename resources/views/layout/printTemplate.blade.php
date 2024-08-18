<!-- resources/views/layout/printTemplate.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Reports</title>
    <link rel="stylesheet" href="{{ asset('css/print.css') }}"> <!-- Optional custom styles for print -->
</head>
<body>

    @yield('content')

</body>
</html>

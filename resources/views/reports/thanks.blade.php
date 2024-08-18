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
    <div class="card text-center" style="width:1024px; height:auto; margin-top: 30px; margin-bottom: 30px; padding: 20px; border-radius:40px; box-shadow: 2px 2px 8px rgba(0,0,0,5)">
        <div class="card-body">
                <div class="d-flex justify-content-center">
                    <img src="{{URL('announce.png')}}" class="img-fluid" alt="" width="392px" height="392px">
                </div>
                <div class="justify-content-center">
                    <h2 style="font-family: Montserrat; font-weight: bold; font-size: 36px;">Terima Kasih Telah Melapor</h2>
                    <p style="font-style: italic; font-size: 24px;">Laporan diterima dan akan diinvestigasi lebih lanjut</p>
                    <p id="countdown" style="font-style: italic; font-size: 24px;">Redirecting to dashboard in 3 seconds...</p>
                </div>
        </div>
    </div>
</div>

<script>
    // Countdown and redirect to the dashboard after 3 seconds
    let countdownNumber = 3;
    const countdownElement = document.getElementById('countdown');

    const countdownInterval = setInterval(() => {
        if (countdownNumber > 1) {
            countdownNumber--;
            countdownElement.textContent = `Redirecting to dashboard in ${countdownNumber} seconds...`;
        } else {
            clearInterval(countdownInterval);
            window.location.href = "{{ route('dashboard') }}";
        }
    }, 1000); // Decrement every 1 second
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>

@extends('layout.reportTemplate')

@section('content')

<h1 class="card-title d-flex justify-content-center" style="font-family: Montserrat; font-weight: bold; margin-top: 40px; margin-bottom: 40px;">REPORT A VIOLATION</h1>

<div class="container">
    <h3 style="font-family: Montserrat; font-weight: bold; font-size: 24px;">Pelanggaran apa yang ingin anda laporkan?</h3>
    <form action="" method="POST">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="kecurangan" name="violations[]" value="Kecurangan">
                    <label class="form-check-label" for="kecurangan">Kecurangan</label>
                </div>
                <div class="col-md-4 mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="suap" name="violations[]" value="Suap">
                    <label class="form-check-label" for="suap">Suap</label>
                </div>
                <div class="col-md-4 mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="gratifikasi" name="violations[]" value="gratifikasi">
                    <label class="form-check-label" for="gratifikasi">Gratifikasi</label>
                </div>
                <div class="col-md-4 mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="pencurian" name="violations[]" value="Pencurian">
                    <label class="form-check-label" for="pencurian">Pencurian</label>
                </div>
                <div class="col-md-4 mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="korupsi" name="violations[]" value="Korupsi">
                    <label class="form-check-label" for="korupsi">Korupsi</label>
                </div>
                <div class="col-md-4 mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="customViolationCheckbox">
                    <label class="form-check-label" for="customViolationCheckbox">Lainnya:</label>
                    <input type="text" class="form-control d-inline-block w-auto ms-2" id="customViolationInput" name="violations[]">
                </div>
            </div>
        </div>
    </form>

    <h3 style="font-family: Montserrat; font-weight: bold; font-size: 24px;">Apa yang terjadi?</h3>
    <div class="form-floating" action="">
        <textarea class="form-control" id="floatingTextarea2" style="height: 200px; width: 1200px;"></textarea>
        <label for="floatingTextarea2">Jelaskan kejadian disini...</label>
    </div>

    <h3 style="font-family: Montserrat; font-weight: bold; font-size: 24px; margin-top: 15px;">Jika memungkinkan, lampirkan bukti yang mempermudah investigasi kasus</h3>
        <form action="" style="margin-bottom: 25px;">
            <input type="file">
        </form>

    <a href="" class="btn btn-primary" style="display: flex; border-radius: 22px; background-color: #00BCF4; font-weight: bold; text-align: center; display: block;">Submit</a>

</div>

@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const customViolationCheckbox = document.getElementById('customViolationCheckbox');
        const customViolationInput = document.getElementById('customViolationInput');

        customViolationInput.addEventListener('input', function() {
            customViolationCheckbox.checked = !!customViolationInput.value.trim();
        });
    });
</script>
@endsection

@extends('layout.reportTemplate')

@section('content')

<div class="container d-flex align-items-center justify-content-between" style="margin-top: 40px; margin-bottom: 40px;">
    <a href="{{ url()->previous() }}" class="d-flex text-back align-items-center">
        <img src="{{URL('back.png')}}" alt="" width="19" height="39" style="margin-right: 0.5rem">Kembali
    </a>
    <h1 class="card-title" style="font-family: Montserrat; font-weight: bold; text-align: center; margin-left: -90px;">LAPORKAN PELANGGARAN</h1>
    <div></div>
</div>


<div class="container">
    <h3 style="font-family: Montserrat; font-weight: bold; font-size: 24px;">Pelanggaran apa yang ingin anda laporkan?</h3>

    <form action="{{ route('reports.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
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
                    <input type="checkbox" class="form-check-input" id="gratifikasi" name="violations[]" value="Gratifikasi">
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

        <h3 style="font-family: Montserrat; font-weight: bold; font-size: 24px;">Apa yang terjadi?</h3>
        <div class="form-floating">
            <textarea class="form-control" id="floatingTextarea2" name="description" style="height: 200px; width: 100%;" required></textarea>
            <label for="floatingTextarea2">Jelaskan kejadian disini...</label>
        </div>

        <h3 style="font-family: Montserrat; font-weight: bold; font-size: 24px; margin-top: 15px;">Jika memungkinkan, lampirkan bukti yang mempermudah investigasi kasus</h3>
        <div class="mb-3">
            <input type="file" name="evidence" accept="pdf">
        </div>

        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary" style="border-radius: 22px; background-color: #00BCF4; font-weight: bold; text-align: center;">Kirim</button>
        </div>
    </form>

    
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

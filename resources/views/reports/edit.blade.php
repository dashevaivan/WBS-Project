@extends('layout.reportTemplate')

@section('content')

<h1 class="card-title d-flex justify-content-center" style="font-family: Montserrat; font-weight: bold; margin-top: 40px; margin-bottom: 40px;">Edit Your Report</h1>

<div class="container">
    <h3 style="font-family: Montserrat; font-weight: bold; font-size: 24px;">Pelanggaran apa yang ingin anda laporkan?</h3>

    <form action="{{ route('reports.update', $report->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="kecurangan" name="violations[]" value="Kecurangan" 
                        {{ in_array('Kecurangan', explode(', ', $report->violations)) ? 'checked' : '' }}>
                    <label class="form-check-label" for="kecurangan">Kecurangan</label>
                </div>
                <div class="col-md-4 mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="suap" name="violations[]" value="Suap" 
                        {{ in_array('Suap', explode(', ', $report->violations)) ? 'checked' : '' }}>
                    <label class="form-check-label" for="suap">Suap</label>
                </div>
                <div class="col-md-4 mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="gratifikasi" name="violations[]" value="Gratifikasi" 
                        {{ in_array('Gratifikasi', explode(', ', $report->violations)) ? 'checked' : '' }}>
                    <label class="form-check-label" for="gratifikasi">Gratifikasi</label>
                </div>
                <div class="col-md-4 mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="pencurian" name="violations[]" value="Pencurian" 
                        {{ in_array('Pencurian', explode(', ', $report->violations)) ? 'checked' : '' }}>
                    <label class="form-check-label" for="pencurian">Pencurian</label>
                </div>
                <div class="col-md-4 mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="korupsi" name="violations[]" value="Korupsi" 
                        {{ in_array('Korupsi', explode(', ', $report->violations)) ? 'checked' : '' }}>
                    <label class="form-check-label" for="korupsi">Korupsi</label>
                </div>
                <div class="col-md-4 mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="customViolationCheckbox">
                    <label class="form-check-label" for="customViolationCheckbox">Lainnya:</label>
                    <input type="text" class="form-control d-inline-block w-auto ms-2" id="customViolationInput" name="violations[]" value="{{ old('violations.5') }}">
                </div>
            </div>
        </div>

        <h3 style="font-family: Montserrat; font-weight: bold; font-size: 24px;">Apa yang terjadi?</h3>
        <div class="form-floating">
            <textarea class="form-control" id="floatingTextarea2" name="description" style="height: 200px; width: 100%;" required>{{ old('description', $report->description) }}</textarea>
            <label for="floatingTextarea2">Jelaskan kejadian disini...</label>
        </div>

        <h3 style="font-family: Montserrat; font-weight: bold; font-size: 24px; margin-top: 15px;">Jika memungkinkan, lampirkan bukti yang mempermudah investigasi kasus</h3>
        <div class="mb-3">
            <input type="file" name="evidence">
            @if ($report->evidence)
                <p>Current file: <a href="{{ asset('storage/' . $report->evidence) }}" target="_blank">View Evidence</a></p>
            @endif
        </div>

        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-primary" style="border-radius: 22px; background-color: #00BCF4; font-weight: bold; text-align: center;">Update Report</button>
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

@extends('layout.reportTemplate')

@section('content')

<div class="container">
    <div class="d-flex align-items-center mb-4">
        <img src="{{URL('report.png')}}" class="img-fluid" alt="" width="46px" height="46px">
        <h2 style="font-family: Montserrat; font-weight: bold; font-size: 36px; margin-left: 15px;">All Reports</h2>
    </div>
    
    <hr style="border: 1px solid black;">
    
    <div class="d-flex align-items-center mb-4">
        <form action="{{ route('admin.reports.index') }}" method="GET" class="d-flex me-3">
            <label for="startperiod" class="me-2">Period :</label>
            <input type="date" id="startperiod" name="startperiod" class="form-control me-2" value="{{ request('startperiod') }}">
            <label for="endperiod" class="me-2">-</label>
            <input type="date" id="endperiod" name="endperiod" class="form-control me-2" value="{{ request('endperiod') }}">
            <button type="submit" class="btn btn-primary">Filter</button>
        </form>

        <!-- Status selection and print button -->
        <div class="d-flex">
            <select name="status" id="status" class="form-control me-2">
                <option value="">Select Status</option>
                <option value="New">New</option>
                <option value="Ongoing">Ongoing</option>
                <option value="Approved">Approved</option>
                <option value="Closed">Closed</option>
                <option value="Rejected">Rejected</option>
            </select>
            <button type="button" id="printButton" class="btn btn-secondary">Print</button>
        </div>
    </div>

    @if ($reports->isEmpty())
        <div class="alert alert-warning">
            No reports found for the selected period.
        </div>
    @else
        <div class="row text-center">
            @foreach (['New', 'Ongoing', 'Approved', 'Closed', 'Rejected'] as $status)
                <div class="col status {{ strtolower($status) }}">
                    <h4 class="text-uppercase p-2 rounded" style="background-color: {{ $statusColors[$status] }}; color: white;">{{ $status }}</h4>
                    @foreach ($reports[$status] ?? [] as $report)
                        <div class="report-card mb-3 p-3 border rounded" style="background-color: {{ $statusBackgroundColors[$status] }};">
                            <a href="{{ route('admin.reports.show', $report->id) }}" style="color: {{ $statusTextColors[$status] }}; font-weight: bold;">
                                Name: {{ $report->user->full_name }} <br>
                                Phone: {{ $report->user->phone_number }} <br>
                                Date: {{ $report->created_at->format('F j, Y H:i') }} <br>
                                ID: {{ $report->id }}
                            </a>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
    @endif
</div>

<script>
    document.getElementById('printButton').addEventListener('click', function() {
        var status = document.getElementById('status').value;
        if (status) {
            // Open a new window and print only the reports with the selected status
            var url = '{{ route("admin.reports.print") }}?status=' + encodeURIComponent(status);
            var printWindow = window.open(url, '_blank');
            printWindow.onload = function() {
                printWindow.print();
            };
        } else {
            alert('Please select a status to print.');
        }
    });
</script>

@endsection

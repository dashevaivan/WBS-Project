@extends('layout.reportTemplate')

@section('content')

<div class="container">
    <div class="d-flex align-items-center mb-4">
        <img src="{{URL('report.png')}}" class="img-fluid" alt="" width="46px" height="46px">
        <h2 style="font-family: Montserrat; font-weight: bold; font-size: 36px; margin-left: 15px;">All Reports</h2>
    </div>
    
    <hr style="border: 1px solid black;">
    
    <div class="d-flex align-items-center mb-4">
        <form action="" method="GET" class="d-flex">
            <label for="startperiod" class="me-2">Period :</label>
            <input type="date" id="startperiod" name="startperiod" class="form-control me-2">
            <label for="endperiod" class="me-2">-</label>
            <input type="date" id="endperiod" name="endperiod" class="form-control me-2">
            <button type="submit" class="btn btn-primary">Filter</button>
        </form>
    </div>

    <div class="row text-center">
        <div class="col status new">
            <h4 class="text-uppercase p-2 rounded" style="background-color: #00BCD4; color: white;">New</h4>
            @foreach ($reports['New'] ?? [] as $report)
                <div class="report-card mb-3 p-3 border rounded" style="background-color: #E0F7FA;">
                    <a href="{{ route('admin.reports.show', $report->id) }}" style="color: #006064; font-weight: bold;">
                        {{ $report->user->name ?? 'Anonymous' }} - {{ $report->created_at->format('F j, Y H:i') }} <br> ID: {{ $report->id }}
                    </a>
                </div>
            @endforeach
        </div>
        
        <div class="col status ongoing">
            <h4 class="text-uppercase p-2 rounded" style="background-color: #757575; color: white;">Ongoing</h4>
            @foreach ($reports['Ongoing'] ?? [] as $report)
                <div class="report-card mb-3 p-3 border rounded" style="background-color: #CFD8DC;">
                    <a href="{{ route('admin.reports.show', $report->id) }}" style="color: #37474F; font-weight: bold;">
                        {{ $report->user->name ?? 'Anonymous' }} - {{ $report->created_at->format('F j, Y H:i') }} <br> ID: {{ $report->id }}
                    </a>
                </div>
            @endforeach
        </div>

        <div class="col status approved">
            <h4 class="text-uppercase p-2 rounded" style="background-color: #4CAF50; color: white;">Approved</h4>
            @foreach ($reports['Approved'] ?? [] as $report)
                <div class="report-card mb-3 p-3 border rounded" style="background-color: #C8E6C9;">
                    <a href="{{ route('admin.reports.show', $report->id) }}" style="color: #2E7D32; font-weight: bold;">
                        {{ $report->user->name ?? 'Anonymous' }} - {{ $report->created_at->format('F j, Y H:i') }} <br> ID: {{ $report->id }}
                    </a>
                </div>
            @endforeach
        </div>

        <div class="col status closed">
            <h4 class="text-uppercase p-2 rounded" style="background-color: #FFC107; color: white;">Closed</h4>
            @foreach ($reports['Closed'] ?? [] as $report)
                <div class="report-card mb-3 p-3 border rounded" style="background-color: #FFECB3;">
                    <a href="{{ route('admin.reports.show', $report->id) }}" style="color: #FF6F00; font-weight: bold;">
                        {{ $report->user->name ?? 'Anonymous' }} - {{ $report->created_at->format('F j, Y H:i') }} <br> ID: {{ $report->id }}
                    </a>
                </div>
            @endforeach
        </div>

        <div class="col status rejected">
            <h4 class="text-uppercase p-2 rounded" style="background-color: #F44336; color: white;">Rejected</h4>
            @foreach ($reports['Rejected'] ?? [] as $report)
                <div class="report-card mb-3 p-3 border rounded" style="background-color: #FFCDD2;">
                    <a href="{{ route('admin.reports.show', $report->id) }}" style="color: #B71C1C; font-weight: bold;">
                        {{ $report->user->name ?? 'Anonymous' }} - {{ $report->created_at->format('F j, Y H:i') }} <br> ID: {{ $report->id }}
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>

@endsection

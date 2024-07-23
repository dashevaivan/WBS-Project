@extends('layout.reportTemplate')

@section('content')

<div class="container d-flex align-items-center">
<img src="{{URL('report.png')}}" class="img-fluid" alt="" width="46px" height="46px">
<h2 style="font-family: Montserrat; font-weight: bold; font-size: 36px; margin-left: 15px;">All Reports</h2>
</div>
<hr style="border: 1px solid black;">

<div class="container d-flex align-items-center">
<form action="" style="margin-bottom: 20px;">
  <label for="date">Period :</label>
  <input type="date" id="startperiod" name="startperiod">
  <label for="date">-</label>
  <input type="date" id="endperiod" name="endperiod">

  <input type="submit">
</form>
</div>

<div class="report-status">
            <div class="status new">New</div>
            <div class="status ongoing">Ongoing</div>
            <div class="status approved">Approved</div>
            <div class="status closed">Closed</div>
            <div class="status rejected">Rejected</div>
        </div>
        <div class="reports">
            <div class="column new">
                <div class="report-card">Anonymous - July 7, 2024 13:29 <br> WBS/NO-00/01/2024</div>
                <div class="report-card">Anonymous - July 7, 2024 13:29 <br> WBS/NO-01/01/2024</div>
                <div class="report-card">Anonymous - July 7, 2024 13:29 <br> WBS/NO-01/01/2024</div>
                <div class="report-card">Anonymous - July 7, 2024 13:29 <br> WBS/NO-01/01/2024</div>
                <div class="report-card">Anonymous - July 7, 2024 13:29 <br> WBS/NO-01/01/2024</div>
            </div>
            <div class="column ongoing">
                <div class="report-card">Anonymous - July 7, 2024 13:29 <br> WBS/NO-01/01/2024</div>
                <div class="report-card">Anonymous - July 7, 2024 13:29 <br> WBS/NO-01/01/2024</div>
                <div class="report-card">Anonymous - July 7, 2024 13:29 <br> WBS/NO-01/01/2024</div>
            </div>
            <div class="column approved">
                <div class="report-card">Anonymous - July 7, 2024 13:29 <br> WBS/NO-01/01/2024</div>
                <div class="report-card">Anonymous - July 7, 2024 13:29 <br> WBS/NO-01/01/2024</div>
            </div>
            <div class="column closed">
                <div class="report-card">Anonymous - July 7, 2024 13:29 <br> WBS/NO-01/01/2024</div>
            </div>
            <div class="column rejected">
                <div class="report-card">Anonymous - July 7, 2024 13:29 <br> WBS/NO-01/01/2024</div>
            </div>
        </div>
    </div>



@endsection
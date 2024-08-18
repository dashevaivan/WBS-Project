@extends('layout.reportTemplate')

@section('content')

<div class="container d-flex align-items-center justify-content-between" style="margin-top: 40px; margin-bottom: 40px;">
<a href="{{ route('dashboard') }}" class="d-flex text-back align-items-center" ><img src="{{URL('back.png')}}" alt="" width="19" height="39" style="margin-right: 0.5rem">Kembali</a>
    <h1 class="card-title" style="font-family: Montserrat; font-weight: bold; text-align: center; margin-left: -90px;">Laporan Saya</h1>
    <div></div>
</div>


<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th>Pelanggaran</th>
                <th>Status</th>
                <th>Tanggal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reports as $report)
            <tr>
                <td>{{ $report->violations }}</td>
                <td>{{ $report->status }}</td>
                <td>{{ $report->created_at->format('d/m/Y') }}</td>
                <td>
                    <a href="{{ route('reports.show', $report->id) }}" class="btn btn-info">Tampilkan</a>
                </td>
            @endforeach
        </tbody>
    </table>
</div>

@endsection

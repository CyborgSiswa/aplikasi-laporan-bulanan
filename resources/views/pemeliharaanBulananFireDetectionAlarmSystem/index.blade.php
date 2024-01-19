@extends('layout.main')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Pemeliharaan Bulanan Fire Detection Alarm System</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('pemeliharaanBulananFireDetectionAlarmSystem.create')}}"> Create Pemeliharaan Bulanan Fire Detection Alarm System</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Id Peralatan</th>
            <th>Tanggal</th>
            <th>pemeriksaan jaringan</th>
            <th>pengetesan fungsi dan monitoring pk</th>
            <th>pengujian kinerja secara berkala</th>
            <th>keterangan</th>
            <th>id personil</th>
            <th>id pengawas</th> <th>No</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($pemeliharaanbulananfiredetectionalarmsystemes as $pemeliharaanbulananfiredetectionalarmsystem)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $pemeliharaanbulananfiredetectionalarmsystem->id_peralatan }}</td>
                <td>{{ $pemeliharaanbulananfiredetectionalarmsystem->tanggal }}</td>
                <td>{{ $pemeliharaanbulananfiredetectionalarmsystem->pemeriksaan_jaringan }}</td>
                <td>{{ $pemeliharaanbulananfiredetectionalarmsystem->pengetesan_fungsi_dan_monitoring_pk }}</td>
                <td>{{ $pemeliharaanbulananfiredetectionalarmsystem->pengujian_kinerja_secara_berkala }}</td>
                <td>{{ $pemeliharaanbulananfiredetectionalarmsystem->keterangan }}</td>
                <td>{{ $pemeliharaanbulananfiredetectionalarmsystem->id_personil }}</td>
                <td>{{ $pemeliharaanbulananfiredetectionalarmsystem->id_pengawas }}</td>
                <td>
                    <form action="#" method="POST">

                        <a class="btn btn-info" href="#">Show</a>

                        <a class="btn btn-primary" href="{{route('pemeliharaanBulananFireDetectionAlarmSystem.edit',$pemeliharaanbulananfiredetectionalarmsystem->id)}}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $pemeliharaanbulananfiredetectionalarmsystemes->links() !!}
@endsection

@extends('layout.main')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Pemeliharaan Harian Fire Detection Alarm System</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('pemeliharaanHarianFireDetectionAlarmSystem.create')}}"> Create Pemeliharaan Harian Fire Detection Alarm System</a>
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
            <th>pembersihan ups</th>
            <th>pembersihan lokasi sekitar mcfa</th>
            <th>periksa suhu dan kelembaban ruangan peralatan</th>
            <th>visual check tampilan layar control panel</th>
            <th>keterangan</th>
            <th>id personil</th>
            <th>id pengawas</th> 
            <th width="280px">Action</th>
        </tr>
        @foreach ($pemeliharaanharianfiredetectionalarmsystemes as $pemeliharaanharianfiredetectionalarmsystem)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $pemeliharaanharianfiredetectionalarmsystem->id_peralatan }}</td>
                <td>{{ $pemeliharaanharianfiredetectionalarmsystem->tanggal }}</td>
                <td>{{ $pemeliharaanharianfiredetectionalarmsystem->pembersihan_ups}}</td>
                <td>{{ $pemeliharaanharianfiredetectionalarmsystem->pembersihan_lokasi_sekitar_mcfa }}</td>
                <td>{{ $pemeliharaanharianfiredetectionalarmsystem->periksa_suhu_dan_kelembaban_ruangan_peralatan}}</td>
                <td>{{ $pemeliharaanharianfiredetectionalarmsystem->visual_check_tampilan_layar_control_panel }}</td>
                <td>{{ $pemeliharaanharianfiredetectionalarmsystem->keterangan}}</td>
                <td>{{ $pemeliharaanharianfiredetectionalarmsystem->id_personil }}</td>
                <td>{{ $pemeliharaanharianfiredetectionalarmsystem->id_pengawas }}</td>
                <td>
                    <form action="#" method="POST">

                        <a class="btn btn-info" href="#">Show</a>

                        <a class="btn btn-primary" href="{{route('pemeliharaanHarianFireDetectionAlarmSystem.edit',$pemeliharaanharianfiredetectionalarmsystem->id)}}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $pemeliharaanharianfiredetectionalarmsystemes->links() !!}
@endsection

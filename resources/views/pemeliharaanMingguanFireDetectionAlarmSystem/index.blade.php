@extends('layout.main')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Pemeliharaan Mingguan Fire Detection Alarm System</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('pemeliharaanMingguanFireDetectionAlarmSystem.create')}}"> Create Pemeliharaan Mingguan Fire Detection Alarm System</a>
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
            <th>pemeriksaan main supply voltage</th>
            <th>pemeriksaan output volatge ups</th>
            <th>pemeriksaan kabel konektor yang terhubung pada mcfa</th>
            <th>keterangan</th>
            <th>id personil</th>
            <th>id pengawas</th> 
            <th width="280px">Action</th>
        </tr>
        @foreach ($pemeliharaanmingguanfiredetectionalarmsystemes as $pemeliharaanmingguanfiredetectionalarmsystem)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $pemeliharaanmingguanfiredetectionalarmsystem->id_peralatan }}</td>
                <td>{{ $pemeliharaanmingguanfiredetectionalarmsystem->tanggal }}</td>
                <td>{{ $pemeliharaanmingguanfiredetectionalarmsystem->pemeriksaan_main_supply_voltage}}</td>
                <td>{{ $pemeliharaanmingguanfiredetectionalarmsystem->pemeriksaan_output_voltage_ups}}</td>
                <td>{{ $pemeliharaanmingguanfiredetectionalarmsystem->pemeriksaan_kabel_konektor_yang_terhubung_pada_mcfa }}</td>
                <td>{{ $pemeliharaanmingguanfiredetectionalarmsystem->keterangan}}</td>
                <td>{{ $pemeliharaanmingguanfiredetectionalarmsystem->id_personil }}</td>
                <td>{{ $pemeliharaanmingguanfiredetectionalarmsystem->id_pengawas }}</td>
                <td>
                    <form action="#" method="POST">

                        <a class="btn btn-info" href="#">Show</a>

                        <a class="btn btn-primary" href="{{route('pemeliharaanMingguanFireDetectionAlarmSystem.edit',$pemeliharaanmingguanfiredetectionalarmsystem->id)}}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $pemeliharaanmingguanfiredetectionalarmsystemes->links() !!}
@endsection

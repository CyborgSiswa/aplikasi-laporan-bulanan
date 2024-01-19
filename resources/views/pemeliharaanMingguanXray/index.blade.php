@extends('layout.main')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Pemeliharaan Mingguan Xray</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('pemeliharaanMingguanXray.create')}}"> Create Pemeliharaan Mingguan Xray</a>
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
            <th>pembersihan_dan_pemeriksaan_light_barriers</th>
            <th>pemeriksaan_protective_earth_wiring</th>
            <th>pemeriksaan_emergency_stop_switches</th>
            <th>keterangan</th>
            <th>id personil</th>
            <th>id pengawas</th> 
            <th width="280px">Action</th>
        </tr>
        @foreach ($pemeliharaanmingguanxrayes as $pemeliharaanmingguanxray)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $pemeliharaanmingguanxray->id_peralatan }}</td>
                <td>{{ $pemeliharaanmingguanxray->tanggal }}</td>
                <td>{{ $pemeliharaanmingguanxray->pembersihan_dan_pemeriksaan_light_barriers}}</td>
                <td>{{ $pemeliharaanmingguanxray->pemeriksaan_protective_earth_wiring }}</td>
                <td>{{ $pemeliharaanmingguanxray->pemeriksaan_emergency_stop_switches }}</td>
                <td>{{ $pemeliharaanmingguanxray->keterangan}}</td>
                <td>{{ $pemeliharaanmingguanxray->id_personil }}</td>
                <td>{{ $pemeliharaanmingguanxray->id_pengawas }}</td>
                <td>
                    <form action="#" method="POST">

                        <a class="btn btn-info" href="#">Show</a>

                        <a class="btn btn-primary" href="{{route('pemeliharaanMingguanXray.edit',$pemeliharaanmingguanxray->id)}}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $pemeliharaanmingguanxrayes->links() !!}
@endsection

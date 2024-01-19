@extends('layout.main')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Pemeliharaan Mingguan FIDS</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('pemeliharaanMingguanFids.create')}}"> Create Pemeliharaan Mingguan Fids</a>
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
            <th>cek koneksi jaringan server dengan client</th>
            <th>cek fids tiap tiap clients</th>
            <th>pemeriksaan kabel kabel dan konektor yang terlihat</th>
            <th>keterangan</th>
            <th>id personil</th>
            <th>id pengawas</th> 
            <th width="280px">Action</th>
        </tr>
        @foreach ($pemeliharaanmingguanfidses as $pemeliharaanmingguanfids)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $pemeliharaanmingguanfids->id_peralatan }}</td>
                <td>{{ $pemeliharaanmingguanfids->tanggal }}</td>
                <td>{{ $pemeliharaanmingguanfids->pemeriksaan_main_supply_voltage}}</td>
                <td>{{ $pemeliharaanmingguanfids->pemeriksaan_output_voltage_ups}}</td>
                <td>{{ $pemeliharaanmingguanfids->cek_koneksi_jaringan_server_dengan_client}}</td>
                <td>{{ $pemeliharaanmingguanfids->cek_fids_tiap_tiap_clients }}</td>
                <td>{{ $pemeliharaanmingguanfids->pemeriksaan_kabel_kabel_dan_konektor_yang_terlihat }}</td>
                <td>{{ $pemeliharaanmingguanfids->keterangan}}</td>
                <td>{{ $pemeliharaanmingguanfids->id_personil }}</td>
                <td>{{ $pemeliharaanmingguanfids->id_pengawas }}</td>
                <td>
                    <form action="#" method="POST">

                        <a class="btn btn-info" href="#">Show</a>

                        <a class="btn btn-primary" href="{{route('pemeliharaanmingguanFids.edit',$pemeliharaanmingguanfids->id)}}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $pemeliharaanmingguanfidses->links() !!}
@endsection

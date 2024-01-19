@extends('layout.main')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Pemeliharaan Harian FIDS</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('pemeliharaanHarianFids.create')}}"> Create Pemeliharaan Harian Fids</a>
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
            <th>pembersihan main unit</th>
            <th>pembersihan ups</th>
            <th>pembersihan lokasi sekitar peralatan</th>
            <th>periksa suhu dan kelembaban ruangan peralatan server fids</th>
            <th>keterangan</th>
            <th>id personil</th>
            <th>id pengawas</th> 
            <th width="280px">Action</th>
        </tr>
        @foreach ($pemeliharaanharianfidses as $pemeliharaanharianfids)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $pemeliharaanharianfids->id_peralatan }}</td>
                <td>{{ $pemeliharaanharianfids->tanggal }}</td>
                <td>{{ $pemeliharaanharianfids->pembersihan_main_unit}}</td>
                <td>{{ $pemeliharaanharianfids->pembersihan_ups }}</td>
                <td>{{ $pemeliharaanharianfids->pembersihan_lokasi_sekitar_peralatan}}</td>
                <td>{{ $pemeliharaanharianfids->periksa_suhu_dan_kelembaban_ruangan_peralatan_server_fids }}</td>
                <td>{{ $pemeliharaanharianfids->keterangan}}</td>
                <td>{{ $pemeliharaanharianfids->id_personil }}</td>
                <td>{{ $pemeliharaanharianfids->id_pengawas }}</td>
                <td>
                    <form action="#" method="POST">

                        <a class="btn btn-info" href="#">Show</a>

                        <a class="btn btn-primary" href="{{route('pemeliharaanHarianFids.edit',$pemeliharaanharianfids->id)}}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $pemeliharaanharianfidses->links() !!}
@endsection

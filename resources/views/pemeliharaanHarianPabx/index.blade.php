@extends('layout.main')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Pemeliharaan Harian Pabx</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('pemeliharaanHarianPabx.create')}}"> Create Pemeliharaan Harian Pabx</a>
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
            <th>pembersihan ruangan sentral operator</th>
            <th>periksa suhu dan kelembaban ruangan peralatan server pabx</th>
            <th>periksa uji coba change over unit</th>
            <th>keterangan</th>
            <th>id personil</th>
            <th>id pengawas</th> 
            <th width="280px">Action</th>
        </tr>
        @foreach ($pemeliharaanharianpabxes as $pemeliharaanharianpabx)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $pemeliharaanharianpabx->id_peralatan}}</td>
                <td>{{ $pemeliharaanharianpabx->tanggal}}</td>
                <td>{{ $pemeliharaanharianpabx->pembersihan_ruangan_sentral_operator}}</td>
                <td>{{ $pemeliharaanharianpabx->periksa_suhu_dan_kelembaban_ruangan_peralatan_server_pabx}}</td>
                <td>{{ $pemeliharaanharianpabx->periksa_uji_coba_change_over_unit}}</td>
                <td>{{ $pemeliharaanharianpabx->keterangan}}</td>
                <td>{{ $pemeliharaanharianpabx->id_personil}}</td>
                <td>{{ $pemeliharaanharianpabx->id_pengawas}}</td>
                <td>
                    <form action="#" method="POST">

                        <a class="btn btn-info" href="#">Show</a>

                        <a class="btn btn-primary" href="{{route('pemeliharaanHarianPabx.edit',$pemeliharaanharianpabx->id)}}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $pemeliharaanharianpabxes->links() !!}
@endsection

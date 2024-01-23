@extends('layout.main')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Pemeliharaan Harian Tds</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('pemeliharaanHarianTds.create')}}"> Create Pemeliharaan Harian Tds</a>
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
            <th>pembersihan ruangan peralatan server tds</th>
            <th>periksa suhu dan kelembaban ruangan peralatan server tds</th>
            <th>pembersihan bagian luar peralatan tds</th>
            <th>keterangan</th>
            <th>id personil</th>
            <th>id pengawas</th> 
            <th width="280px">Action</th>
        </tr>
        @foreach ($pemeliharaanhariantdses as $pemeliharaanhariantds)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $pemeliharaanhariantds->id_peralatan }}</td>
                <td>{{ $pemeliharaanhariantds->tanggal }}</td>
                <td>{{ $pemeliharaanhariantds->pembersihan_ruangan_peralatan_server_tds}}</td>
                <td>{{ $pemeliharaanhariantds->periksa_suhu_dan_kelembaban_ruangan_peralatan_server_tds}}</td>
                <td>{{ $pemeliharaanhariantds->pembersihan_bagian_luar_peralatan_tds}}</td>
                <td>{{ $pemeliharaanhariantds->keterangan}}</td>
                <td>{{ $pemeliharaanhariantds->id_personil }}</td>
                <td>{{ $pemeliharaanhariantds->id_pengawas }}</td>
                <td>
                    <form action="#" method="POST">

                        <a class="btn btn-info" href="#">Show</a>

                        <a class="btn btn-primary" href="{{route('pemeliharaanHarianTds.edit',$pemeliharaanhariantds->id)}}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $pemeliharaanhariantdses->links() !!}
@endsection

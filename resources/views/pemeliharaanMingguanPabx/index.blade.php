@extends('layout.main')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Pemeliharaan Mingguan Pabx</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('pemeliharaanMingguanPabx.create')}}"> Create Pemeliharaan Mingguan Pabx</a>
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
            <th>pembersihan seluruh head set</th>
            <th>pemeriksaan atau pengukuran voltage battery</th>
            <th>keterangan</th>
            <th>id personil</th>
            <th>id pengawas</th> 
            <th width="280px">Action</th>
        </tr>
        @foreach ($pemeliharaanmingguanpabxes as $pemeliharaanmingguanpabx)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $pemeliharaanmingguanpabx->id_peralatan }}</td>
                <td>{{ $pemeliharaanmingguanpabx->tanggal }}</td>
                <td>{{ $pemeliharaanmingguanpabx->pembersihan_seluruh_head_set}}</td>
                <td>{{ $pemeliharaanmingguanpabx->pemeriksaan_atau_pengukuran_voltage_battery }}</td>
                <td>{{ $pemeliharaanmingguanpabx->keterangan}}</td>
                <td>{{ $pemeliharaanmingguanpabx->id_personil }}</td>
                <td>{{ $pemeliharaanmingguanpabx->id_pengawas }}</td>
                <td>
                    <form action="#" method="POST">

                        <a class="btn btn-info" href="#">Show</a>

                        <a class="btn btn-primary" href="{{route('pemeliharaanMingguanPabx.edit',$pemeliharaanmingguanpabx->id)}}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $pemeliharaanmingguanpabxes->links() !!}
@endsection

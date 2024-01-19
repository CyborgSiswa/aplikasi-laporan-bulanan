@extends('layout.main')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Pemeliharaan Mingguan Running Text</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('pemeliharaanMingguanRunningText.create')}}"> Create Pemeliharaan Mingguan Running Text</a>
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
            <th>periksa dan bersihkan debu pada perangkat</th>
            <th>keterangan</th>
            <th>id personil</th>
            <th>id pengawas</th> 
            <th width="280px">Action</th>
        </tr>
        @foreach ($pemeliharaanmingguanrunningtextes as $pemeliharaanmingguanrunningtext)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $pemeliharaanmingguanrunningtext->id_peralatan }}</td>
                <td>{{ $pemeliharaanmingguanrunningtext->tanggal }}</td>
                <td>{{ $pemeliharaanmingguanrunningtext->periksa_dan_bersihkan_debu_pada_perangkat}}</td>
                <td>{{ $pemeliharaanmingguanrunningtext->keterangan}}</td>
                <td>{{ $pemeliharaanmingguanrunningtext->id_personil }}</td>
                <td>{{ $pemeliharaanmingguanrunningtext->id_pengawas }}</td>
                <td>
                    <form action="#" method="POST">

                        <a class="btn btn-info" href="#">Show</a>

                        <a class="btn btn-primary" href="{{route('pemeliharaanMingguanRunningText.edit',$pemeliharaanmingguanrunningtext->id)}}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $pemeliharaanmingguanrunningtextes->links() !!}
@endsection

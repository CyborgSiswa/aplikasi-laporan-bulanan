@extends('layout.main')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Pemeliharaan Mingguan Wifi</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('pemeliharaanMingguanWifi.create')}}"> Create Pemeliharaan Mingguan Wifi</a>
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
            <th>periksa bandwith wifi</th>
            <th>keterangan</th>
            <th>id personil</th>
            <th>id pengawas</th> 
            <th width="280px">Action</th>
        </tr>
        @foreach ($pemeliharaanmingguanwifies as $pemeliharaanmingguanwifi)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $pemeliharaanmingguanwifi->id_peralatan }}</td>
                <td>{{ $pemeliharaanmingguanwifi->tanggal }}</td>
                <td>{{ $pemeliharaanmingguanwifi->periksa_bandwidth_wifi}}</td>
                <td>{{ $pemeliharaanmingguanwifi->keterangan}}</td>
                <td>{{ $pemeliharaanmingguanwifi->id_personil }}</td>
                <td>{{ $pemeliharaanmingguanwifi->id_pengawas }}</td>
                <td>
                    <form action="#" method="POST">

                        <a class="btn btn-info" href="#">Show</a>

                        <a class="btn btn-primary" href="{{route('pemeliharaanMingguanWifi.edit',$pemeliharaanmingguanwifi->id)}}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $pemeliharaanmingguanwifies->links() !!}
@endsection

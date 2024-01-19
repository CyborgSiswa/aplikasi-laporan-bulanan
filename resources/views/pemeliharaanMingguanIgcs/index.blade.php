@extends('layout.main')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Pemeliharaan Mingguan Igcs</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('pemeliharaanMingguanIgcs.create')}}"> Create Pemeliharaan Mingguan Igcs</a>
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
            <th>pemeriksaan atau pengukuran voltage power supply</th>
            <th>pemeriksaan konektor konektor</th>
            <th>keterangan</th>
            <th>id personil</th>
            <th>id pengawas</th> 
            <th width="280px">Action</th>
        </tr>
        @foreach ($pemeliharaanmingguanigcses as $pemeliharaanmingguanigcs)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $pemeliharaanmingguanigcs->id_peralatan }}</td>
                <td>{{ $pemeliharaanmingguanigcs->tanggal }}</td>
                <td>{{ $pemeliharaanmingguanigcs->pemeriksaan_atau_pengukuran_voltage_power_supply}}</td>
                <td>{{ $pemeliharaanmingguanigcs->pemeriksaan_konektor_konektor }}</td>
                <td>{{ $pemeliharaanmingguanigcs->keterangan}}</td>
                <td>{{ $pemeliharaanmingguanigcs->id_personil }}</td>
                <td>{{ $pemeliharaanmingguanigcs->id_pengawas }}</td>
                <td>
                    <form action="#" method="POST">

                        <a class="btn btn-info" href="#">Show</a>

                        <a class="btn btn-primary" href="{{route('pemeliharaanMingguanIgcs.edit',$pemeliharaanmingguanigcs->id)}}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $pemeliharaanmingguanigcses->links() !!}
@endsection

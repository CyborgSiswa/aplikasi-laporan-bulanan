@extends('layout.main')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Pemeliharaan Mingguan Pas</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('pemeliharaanMingguanPas.create')}}"> Create Pemeliharaan Mingguan Pas</a>
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
            <th>pemeriksaan output voltage ups</th>
            <th>keterangan</th>
            <th>id personil</th>
            <th>id pengawas</th> 
            <th width="280px">Action</th>
        </tr>
        @foreach ($pemeliharaanmingguanpases as $pemeliharaanmingguanpas)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $pemeliharaanmingguanpas->id_peralatan }}</td>
                <td>{{ $pemeliharaanmingguanpas->tanggal }}</td>
                <td>{{ $pemeliharaanmingguanpas->pemeriksaan_main_supply_voltage}}</td>
                <td>{{ $pemeliharaanmingguanpas->pemeriksaan_output_voltage_ups }}</td>
                <td>{{ $pemeliharaanmingguanpas->keterangan}}</td>
                <td>{{ $pemeliharaanmingguanpas->id_personil }}</td>
                <td>{{ $pemeliharaanmingguanpas->id_pengawas }}</td>
                <td>
                    <form action="#" method="POST">

                        <a class="btn btn-info" href="#">Show</a>

                        <a class="btn btn-primary" href="{{route('pemeliharaanMingguanPas.edit',$pemeliharaanmingguanpas->id)}}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $pemeliharaanmingguanpases->links() !!}
@endsection

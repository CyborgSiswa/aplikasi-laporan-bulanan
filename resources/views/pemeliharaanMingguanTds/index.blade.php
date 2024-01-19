@extends('layout.main')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Pemeliharaan Mingguan TDS</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('pemeliharaanMingguanTds.create')}}"> Create Pemeliharaan Mingguan Tds</a>
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
            <th>pemeriksaan power supply 220 vac</th>
            <th>pemeriksaan dan pembersihan konektor konektor</th>
            <th>pemeriksaan fungsi software tds</th>
            <th>keterangan</th>
            <th>id personil</th>
            <th>id pengawas</th> 
            <th width="280px">Action</th>
        </tr>
        @foreach ($pemeliharaanmingguantdses as $pemeliharaanmingguantds)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $pemeliharaanmingguantds->id_peralatan }}</td>
                <td>{{ $pemeliharaanmingguantds->tanggal }}</td>
                <td>{{ $pemeliharaanmingguantds->pemeriksaan_power_supply_220_vac}}</td>
                <td>{{ $pemeliharaanmingguantds->pemeriksaan_dan_pembersihan_konektor_konektor }}</td>
                <td>{{ $pemeliharaanmingguantds->pemeriksaan_fungsi_software_tds }}</td>
                <td>{{ $pemeliharaanmingguantds->keterangan}}</td>
                <td>{{ $pemeliharaanmingguantds->id_personil }}</td>
                <td>{{ $pemeliharaanmingguantds->id_pengawas }}</td>
                <td>
                    <form action="#" method="POST">

                        <a class="btn btn-info" href="#">Show</a>

                        <a class="btn btn-primary" href="{{route('pemeliharaanMingguanTds.edit',$pemeliharaanmingguantds->id)}}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $pemeliharaanmingguantdses->links() !!}
@endsection

@extends('layout.main')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Pemeliharaan Harian Pendeteksi Metal Genggam</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('pemeliharaanHarianPendeteksiMetalGenggam.create')}}"> Create Pemeliharaan Harian Pendeteksi Metal Genggam</a>
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
            <th>pemeriksaan battery voltage</th>
            <th>keterangan</th>
            <th>id personil</th>
            <th>id pengawas</th> 
            <th width="280px">Action</th>
        </tr>
        @foreach ($pemeliharaanharianpendeteksimetalgenggames as $pemeliharaanharianpendeteksimetalgenggam)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $pemeliharaanharianpendeteksimetalgenggam->id_peralatan }}</td>
                <td>{{ $pemeliharaanharianpendeteksimetalgenggam->tanggal }}</td>
                <td>{{ $pemeliharaanharianpendeteksimetalgenggam->pembersihan_main_unit}}</td>
                <td>{{ $pemeliharaanharianpendeteksimetalgenggam->pemeriksaan_battery_voltage}}</td>
                <td>{{ $pemeliharaanharianpendeteksimetalgenggam->keterangan}}</td>
                <td>{{ $pemeliharaanharianpendeteksimetalgenggam->id_personil }}</td>
                <td>{{ $pemeliharaanharianpendeteksimetalgenggam->id_pengawas }}</td>
                <td>
                    <form action="#" method="POST">

                        <a class="btn btn-info" href="#">Show</a>

                        <a class="btn btn-primary" href="{{route('pemeliharaanHarianPendeteksiMetalGenggam.edit',$pemeliharaanharianpendeteksimetalgenggam->id)}}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $pemeliharaanharianpendeteksimetalgenggames->links() !!}
@endsection

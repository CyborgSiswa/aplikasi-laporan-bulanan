@extends('layout.main')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Pemeliharaan MIngguan Pendeteksi Metal Genggam</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('pemeliharaanMingguanPendeteksiMetalGenggam.create')}}"> Create Pemeliharaan Mingguan Pendeteksi Metal Genggam</a>
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
            <th>pemeriksaan fungsi switch atau tombol on off</th>
            <th>pemeriksaan alert system audible</th>
            <th>pemeriksaan alert system visible</th>
            <th>keterangan</th>
            <th>id personil</th>
            <th>id pengawas</th> 
            <th width="280px">Action</th>
        </tr>
        @foreach ($pemeliharaanmingguanpendeteksimetalgenggames as $pemeliharaanmingguanpendeteksimetalgenggam)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $pemeliharaanmingguanpendeteksimetalgenggam->id_peralatan }}</td>
                <td>{{ $pemeliharaanmingguanpendeteksimetalgenggam->tanggal }}</td>
                <td>{{ $pemeliharaanmingguanpendeteksimetalgenggam->pemeriksaan_fungsi_switch_atau_tombol_on_off}}</td>
                <td>{{ $pemeliharaanmingguanpendeteksimetalgenggam->pemeriksaan_alert_system_audible }}</td>
                <td>{{ $pemeliharaanmingguanpendeteksimetalgenggam->pemeriksaan_alert_system_visible }}</td>
                <td>{{ $pemeliharaanmingguanpendeteksimetalgenggam->keterangan}}</td>
                <td>{{ $pemeliharaanmingguanpendeteksimetalgenggam->id_personil }}</td>
                <td>{{ $pemeliharaanmingguanpendeteksimetalgenggam->id_pengawas }}</td>
                <td>
                    <form action="#" method="POST">

                        <a class="btn btn-info" href="#">Show</a>

                        <a class="btn btn-primary" href="{{route('pemeliharaanMingguanPendeteksiMetalGenggam.edit',$pemeliharaanmingguanpendeteksimetalgenggam->id)}}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $pemeliharaanmingguanpendeteksimetalgenggames->links() !!}
@endsection

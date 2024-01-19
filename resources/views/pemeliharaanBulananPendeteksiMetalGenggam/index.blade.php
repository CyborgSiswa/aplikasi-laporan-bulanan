@extends('layout.main')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Pemeliharaan Bulanan Pendeteksi Metal Genggam</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('pemeliharaanBulananPendeteksiMetalGenggam.create')}}"> Create Pemeliharaan Bulanan Pendeteksi Metal Genggam</a>
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
            <th>pengujian sensitivitas</th>
            <th>pengujian kinerja secara berkala dengan otp</th>
            <th>pemeriksaan peralatan dari kerusakan fisik</th>
            <th>keterangan</th>
            <th>id personil</th>
            <th>id pengawas</th> 
            <th width="280px">Action</th>
        </tr>
        @foreach ($pemeliharaanbulananpendeteksimetalgenggames as $pemeliharaanbulananpendeteksimetalgenggam)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $pemeliharaanbulananpendeteksimetalgenggam->id_peralatan }}</td>
                <td>{{ $pemeliharaanbulananpendeteksimetalgenggam->tanggal }}</td>
                <td>{{ $pemeliharaanbulananpendeteksimetalgenggam->pengujian_sensitivitas }}</td>
                <td>{{ $pemeliharaanbulananpendeteksimetalgenggam->pengujian_kinerja_secara_berkala_dengan_otp}}</td>
                <td>{{ $pemeliharaanbulananpendeteksimetalgenggam->pemeriksaan_peralatan_dari_kerusakan_fisik }}</td>
                <td>{{ $pemeliharaanbulananpendeteksimetalgenggam->keterangan }}</td>
                <td>{{ $pemeliharaanbulananpendeteksimetalgenggam->id_personil }}</td>
                <td>{{ $pemeliharaanbulananpendeteksimetalgenggam->id_pengawas }}</td>
                <td>
                    <form action="#" method="POST">

                        <a class="btn btn-info" href="#">Show</a>

                        <a class="btn btn-primary" href="{{route('pemeliharaanBulananPendeteksiMetalGenggam.edit',$pemeliharaanbulananpendeteksimetalgenggam->id)}}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $pemeliharaanbulananpendeteksimetalgenggames->links() !!}
@endsection

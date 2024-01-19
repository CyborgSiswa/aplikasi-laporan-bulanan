@extends('layout.main')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Pemeliharaan Mingguan Jaringan Fiber Optic</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('pemeliharaanMingguanJaringanFiberOptic.create')}}"> Create Pemeliharaan Mingguan Jaringan Fiber Optic</a>
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
            <th>pemeriksaan atau pembersihan converter</th>
            <th>pemeriksaan atau pembersihan odf beserta pigtail dan patchcord</th>
            <th>keterangan</th>
            <th>id personil</th>
            <th>id pengawas</th> 
            <th width="280px">Action</th>
        </tr>
        @foreach ($pemeliharaanmingguanjaringanfiberoptices as $pemeliharaanmingguanjaringanfiberoptic)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $pemeliharaanmingguanjaringanfiberoptic->id_peralatan }}</td>
                <td>{{ $pemeliharaanmingguanjaringanfiberoptic->tanggal }}</td>
                <td>{{ $pemeliharaanmingguanjaringanfiberoptic->pemeriksaan_atau_pembersihan_converter}}</td>
                <td>{{ $pemeliharaanmingguanjaringanfiberoptic->pemeriksaan_atau_pembersihan_odf_beserta_pigtail_dan_patchcord}}</td>
                <td>{{ $pemeliharaanmingguanjaringanfiberoptic->keterangan}}</td>
                <td>{{ $pemeliharaanmingguanjaringanfiberoptic->id_personil }}</td>
                <td>{{ $pemeliharaanmingguanjaringanfiberoptic->id_pengawas }}</td>
                <td>
                    <form action="#" method="POST">

                        <a class="btn btn-info" href="#">Show</a>

                        <a class="btn btn-primary" href="{{route('pemeliharaanMingguanJaringanFiberOptic.edit',$pemeliharaanmingguanjaringanfiberoptic->id)}}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $pemeliharaanmingguanjaringanfiberoptices->links() !!}
@endsection

@extends('layout.main')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Pemeliharaan Harian Gawang Pendeteksi Metal</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('pemeliharaanHarianGawangPendeteksiMetal.create')}}"> Create Pemeliharaan Harian Gawang Pendeteksi Metal</a>
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
            <th>pembersihan ups</th>
            <th>lokasi sekitar penempatan peralatan</th>
            <th>periksa main supply voltage</th>
            <th>keterangan</th>
            <th>id personil</th>
            <th>id pengawas</th> 
            <th width="280px">Action</th>
        </tr>
        @foreach ($pemeliharaanhariangawangpendeteksimetales as $pemeliharaanhariangawangpendeteksimetal)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $pemeliharaanhariangawangpendeteksimetal->id_peralatan }}</td>
                <td>{{ $pemeliharaanhariangawangpendeteksimetal->tanggal }}</td>
                <td>{{ $pemeliharaanhariangawangpendeteksimetal->pembersihan_main_unit}}</td>
                <td>{{ $pemeliharaanhariangawangpendeteksimetal->pembersihan_ups }}</td>
                <td>{{ $pemeliharaanhariangawangpendeteksimetal->lokasi_sekitar_penempatan_peralatan }}</td>
                <td>{{ $pemeliharaanhariangawangpendeteksimetal->periksa_main_supply_voltage }}</td>
                <td>{{ $pemeliharaanhariangawangpendeteksimetal->keterangan}}</td>
                <td>{{ $pemeliharaanhariangawangpendeteksimetal->id_personil }}</td>
                <td>{{ $pemeliharaanhariangawangpendeteksimetal->id_pengawas }}</td>
                <td>
                    <form action="#" method="POST">

                        <a class="btn btn-info" href="#">Show</a>

                        <a class="btn btn-primary" href="{{route('pemeliharaanHarianGawangPendeteksiMetal.edit',$pemeliharaanhariangawangpendeteksimetal->id)}}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $pemeliharaanhariangawangpendeteksimetales->links() !!}
@endsection

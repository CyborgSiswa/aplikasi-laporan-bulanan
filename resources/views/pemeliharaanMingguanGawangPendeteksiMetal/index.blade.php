@extends('layout.main')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Pemeliharaan Mingguan Gawang Pendeteksi Metal</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('pemeliharaanMingguanGawangPendeteksiMetal.create')}}"> Create Pemeliharaan Mingguan Gawang Pendeteksi Metal</a>
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
            <th>pemeriksaan alert system audible</th>
            <th>pemeriksaan alert system visible</th>
            <th>keterangan</th>
            <th>id personil</th>
            <th>id pengawas</th> 
            <th width="280px">Action</th>
        </tr>
        @foreach ($pemeliharaanmingguangawangpendeteksimetales as $pemeliharaanmingguangawangpendeteksimetal)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $pemeliharaanmingguangawangpendeteksimetal->id_peralatan }}</td>
                <td>{{ $pemeliharaanmingguangawangpendeteksimetal->tanggal }}</td>
                <td>{{ $pemeliharaanmingguangawangpendeteksimetal->pemeriksaan_alert_system_audible}}</td>
                <td>{{ $pemeliharaanmingguangawangpendeteksimetal->pemeriksaan_alert_system_visible }}</td>
                <td>{{ $pemeliharaanmingguangawangpendeteksimetal->keterangan}}</td>
                <td>{{ $pemeliharaanmingguangawangpendeteksimetal->id_personil }}</td>
                <td>{{ $pemeliharaanmingguangawangpendeteksimetal->id_pengawas }}</td>
                <td>
                    <form action="#" method="POST">

                        <a class="btn btn-info" href="#">Show</a>

                        <a class="btn btn-primary" href="{{route('pemeliharaanMingguanGawangPendeteksiMetal.edit',$pemeliharaanmingguangawangpendeteksimetal->id)}}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $pemeliharaanmingguangawangpendeteksimetales->links() !!}
@endsection

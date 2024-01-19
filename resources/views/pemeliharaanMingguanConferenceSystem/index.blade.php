@extends('layout.main')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Pemeliharaan Mingguan Conference System</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('pemeliharaanMingguanConferenceSystem.create')}}"> Create Pemeliharaan Mingguan Conference System</a>
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
            <th>periksa arus outputnya</th>
            <th>periksa dan bersihkan konektor yang terhubung</th>
            <th>periksa kabel yang terhubung</th>
            <th>keterangan</th>
            <th>id personil</th>
            <th>id pengawas</th> 
            <th width="280px">Action</th>
        </tr>
        @foreach ($pemeliharaanmingguanconferencesystemes as $pemeliharaanmingguanconferencesystem)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $pemeliharaanmingguanconferencesystem->id_peralatan }}</td>
                <td>{{ $pemeliharaanmingguanconferencesystem->tanggal }}</td>
                <td>{{ $pemeliharaanmingguanconferencesystem->periksa_arus_outputnya}}</td>
                <td>{{ $pemeliharaanmingguanconferencesystem->periksa_dan_bersihkan_konektor_yang_terhubung}}</td>
                <td>{{ $pemeliharaanmingguanconferencesystem->periksa_kabel_yang_terhubung}}</td>
                <td>{{ $pemeliharaanmingguanconferencesystem->keterangan}}</td>
                <td>{{ $pemeliharaanmingguanconferencesystem->id_personil }}</td>
                <td>{{ $pemeliharaanmingguanconferencesystem->id_pengawas }}</td>
                <td>
                    <form action="#" method="POST">

                        <a class="btn btn-info" href="#">Show</a>

                        <a class="btn btn-primary" href="{{route('pemeliharaanMingguanConferenceSystem.edit',$pemeliharaanmingguanconferencesystem->id)}}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $pemeliharaanmingguanconferencesystemes->links() !!}
@endsection

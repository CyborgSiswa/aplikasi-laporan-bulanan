@extends('layout.main')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Pemeliharaan Mingguan Access Control</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('pemeliharaanMingguanAccessControl.create')}}"> Create Pemeliharaan Mingguan Access Control</a>
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
            <th>pemeriksaan fungsi lock door</th>
            <th>pemeriksaan buzzer</th>
            <th>keterangan</th>
            <th>id personil</th>
            <th>id pengawas</th> 
            <th width="280px">Action</th>
        </tr>
        @foreach ($pemeliharaanmingguanaccesscontroles as $pemeliharaanmingguanaccesscontrol)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $pemeliharaanmingguanaccesscontrol->id_peralatan }}</td>
                <td>{{ $pemeliharaanmingguanaccesscontrol->tanggal }}</td>
                <td>{{ $pemeliharaanmingguanaccesscontrol->pemeriksaan_fungsi_lock_door}}</td>
                <td>{{ $pemeliharaanmingguanaccesscontrol->pemeriksaan_buzzer }}</td>
                <td>{{ $pemeliharaanmingguanaccesscontrol->keterangan}}</td>
                <td>{{ $pemeliharaanmingguanaccesscontrol->id_personil }}</td>
                <td>{{ $pemeliharaanmingguanaccesscontrol->id_pengawas }}</td>
                <td>
                    <form action="#" method="POST">

                        <a class="btn btn-info" href="#">Show</a>

                        <a class="btn btn-primary" href="{{route('pemeliharaanMingguanAccessControl.edit',$pemeliharaanmingguanaccesscontrol->id)}}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $pemeliharaanmingguanaccesscontroles->links() !!}
@endsection

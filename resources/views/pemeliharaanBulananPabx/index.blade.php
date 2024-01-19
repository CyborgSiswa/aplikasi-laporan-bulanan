@extends('layout.main')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Pemeliharaan Bulanan Pabx</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('pemeliharaanBulananPabx.create')}}"> Create Pemeliharaan Bulanan Pabx</a>
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
            <th>pemeriksaan terminal terminal pesawat cabang</th>
            <th>pemeriksaan program operasi</th>
            <th>keterangan</th>
            <th>id personil</th>
            <th>id pengawas</th> <th>No</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($pemeliharaanbulananpabxes as $pemeliharaanbulananpabx)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $pemeliharaanbulananpabx->id_peralatan }}</td>
                <td>{{ $pemeliharaanbulananpabx->tanggal }}</td>
                <td>{{ $pemeliharaanbulananpabx->pemeriksaan_terminal_terminal_pesawat_cabang }}</td>
                <td>{{ $pemeliharaanbulananpabx->pemeriksaan_program_operasi}}</td>
                <td>{{ $pemeliharaanbulananpabx->keterangan }}</td>
                <td>{{ $pemeliharaanbulananpabx->id_personil }}</td>
                <td>{{ $pemeliharaanbulananpabx->id_pengawas }}</td>
                <td>
                    <form action="#" method="POST">

                        <a class="btn btn-info" href="#">Show</a>

                        <a class="btn btn-primary" href="{{route('pemeliharaanBulananPabx.edit',$pemeliharaanbulananpabx->id)}}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $pemeliharaanbulananpabxes->links() !!}
@endsection

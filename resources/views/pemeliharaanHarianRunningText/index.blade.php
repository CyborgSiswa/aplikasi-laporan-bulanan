@extends('layout.main')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Pemeliharaan Running Text</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('pemeliharaanHarianRunningText.create')}}"> Create Pemeliharaan Harian Running Text</a>
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
            <th>periksa perangkat dan pastikan dalam keadaan normal</th>
            <th>keterangan</th>
            <th>id personil</th>
            <th>id pengawas</th> 
            <th width="280px">Action</th>
        </tr>
        @foreach ($pemeliharaanharianrunningtextes as $pemeliharaanharianrunningtext)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $pemeliharaanharianrunningtext->id_peralatan }}</td>
                <td>{{ $pemeliharaanharianrunningtext->tanggal }}</td>
                <td>{{ $pemeliharaanharianrunningtext->periksa_perangkat_dan_pastikan_dalam_keadaan_normal}}</td>
                <td>{{ $pemeliharaanharianrunningtext->keterangan}}</td>
                <td>{{ $pemeliharaanharianrunningtext->id_personil }}</td>
                <td>{{ $pemeliharaanharianrunningtext->id_pengawas }}</td>
                <td>
                    <form action="#" method="POST">

                        <a class="btn btn-info" href="#">Show</a>

                        <a class="btn btn-primary" href="{{route('pemeliharaanHarianRunningText.edit',$pemeliharaanharianrunningtext->id)}}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $pemeliharaanharianrunningtextes->links() !!}
@endsection

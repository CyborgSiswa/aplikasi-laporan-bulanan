@extends('layout.main')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Pemeliharaan Bulanan Running Text</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('pemeliharaanBulananRunningText.create')}}"> Create Pemeliharaan Bulanan Running Text</a>
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
            <th>pembersihan dan pemeriksaan led</th>
            <th>pemeriksaan control elements</th>
            <th>pemeriksaan perangkat dari kerusakan fisik</th>
            <th>keterangan</th>
            <th>id personil</th>
            <th>id pengawas</th> 
            <th width="280px">Action</th>
        </tr>
        @foreach ($pemeliharaanbulananrunningtextes as $pemeliharaanbulananrunningtext)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $pemeliharaanbulananrunningtext->id_peralatan }}</td>
                <td>{{ $pemeliharaanbulananrunningtext->tanggal }}</td>
                <td>{{ $pemeliharaanbulananrunningtext->pembersihan_dan_pemeriksaan_led }}</td>
                <td>{{ $pemeliharaanbulananrunningtext->pemeriksaan_control_elements}}</td>
                <td>{{ $pemeliharaanbulananrunningtext->pemeriksaan_perangkat_dari_kerusakan_fisik }}</td>
                <td>{{ $pemeliharaanbulananrunningtext->keterangan }}</td>
                <td>{{ $pemeliharaanbulananrunningtext->id_personil }}</td>
                <td>{{ $pemeliharaanbulananrunningtext->id_pengawas }}</td>
                <td>
                    <form action="#" method="POST">

                        <a class="btn btn-info" href="#">Show</a>

                        <a class="btn btn-primary" href="{{route('pemeliharaanBulananRunningText.edit',$pemeliharaanbulananrunningtext->id)}}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $pemeliharaanbulananrunningtextes->links() !!}
@endsection

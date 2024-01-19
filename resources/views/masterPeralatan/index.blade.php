@extends('layout.main')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Master Peralatan</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('masterPeralatan.create')}}"> Create Master Peralatan</a>
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
            <th>Nama Peralatan</th>
            <th>Lokasi</th>
            <th>Total Jam Terputus</th>
            <th>Id Fasilitas</th>
            <th>Foto</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($masterperalatanes as $masterperalatan)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $masterperalatan->id_peralatan }}</td>
                <td>{{ $masterperalatan->nama_peralatan }}</td>
                <td>{{ $masterperalatan->lokasi }}</td>
                <td>{{ $masterperalatan->total_jam_terputus }}</td>
                <td>{{ $masterperalatan->id_fasilitas }}</td>
                <td>{{ $masterperalatan->foto }}</td>
                <td>
                    <form action="#" method="POST">

                        <a class="btn btn-info" href="#">Show</a>

                        <a class="btn btn-primary" href="{{route('masterPeralatan.edit',$masterperalatan->id)}}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $masterperalatanes->links() !!}
@endsection

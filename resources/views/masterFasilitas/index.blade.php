@extends('layout.main')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Master Fasilitas</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('masterFasilitas.create')}}"> Create Master Fasilitas</a>
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
            <th>nama fasilitas</th>
            <th>keterangan fasilitas master</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($masterfasilitases as $masterfasilitas)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $masterfasilitas->nama_fasilitas }}</td>
                <td>{{ $masterfasilitas->keterangan_fasilitas_master }}</td>
                <td>
                    <form action="#" method="POST">

                        <a class="btn btn-info" href="#">Show</a>

                        <a class="btn btn-primary" href="{{route('masterFasilitas.edit',$masterfasilitas->id)}}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $masterfasilitases->links() !!}
@endsection

@extends('layout.main')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Data Corrective</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('corrective.create')}}"> Create Corrective</a>
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
            <th>ID Peralatan</th>
            <th>Tanggal Mulai Kerusakan</th>
            <th>Tanggal Selesai Perbaikan</th>
            <th>Simbol</th>
            <th>Bagian Kerusakan</th>
            <th>Kategori Kerusakan</th>
            <th>Tindakan</th>
            <th>Keterangan</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($correctives as $corrective)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $corrective->id_peralatan }}</td>
                <td>{{ $corrective->tanggal_mulai_kerusakan}}</td>
                <td>{{ $corrective->tanggal_selesai_perbaikan }}</td>
                <td>{{ $corrective->simbol }}</td>
                <td>{{ $corrective->bagian_kerusakan }}</td>
                <td>{{ $corrective->kategori_kerusakan }}</td>
                <td>{{ $corrective->tindakan }}</td>
                <td>{{ $corrective->keterangan }}</td>
                <td>
                    <form action="#" method="POST">

                        <a class="btn btn-info" href="#">Show</a>

                        <a class="btn btn-primary" href="{{route('corrective.edit',$corrective->id)}}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $correctives->links() !!}
@endsection

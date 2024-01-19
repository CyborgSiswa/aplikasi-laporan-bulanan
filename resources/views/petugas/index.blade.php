@extends('layout.main')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Data Personil</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('petugas.create')}}"> Create Petugas</a>
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
            <th>Nama</th>
            <th>Nik</th>
            <th>Kode Jabatan</th>
            <th>Jabatan</th>
            <th>Kode Cabang</th>
            <th>Bandara</th>
            <th>Unit Kerja</th>
            <th>Email</th>
            <th>No Hp</th>
            <th>Foto</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($petugases as $petugas)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $petugas->nama }}</td>
                <td>{{ $petugas->nik }}</td>
                <td>{{ $petugas->kode_jabatan }}</td>
                <td>{{ $petugas->jabatan }}</td>
                <td>{{ $petugas->kode_cabang }}</td>
                <td>{{ $petugas->bandara }}</td>
                <td>{{ $petugas->unit_kerja }}</td>
                <td>{{ $petugas->email }}</td>
                <td>{{ $petugas->no_hp }}</td>
                <td>{{ $petugas->foto }}</td>
                <td>
                    <form action="#" method="POST">

                        <a class="btn btn-info" href="#">Show</a>

                        <a class="btn btn-primary" href="{{route('petugas.edit',$petugas->id)}}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $petugases->links() !!}
@endsection

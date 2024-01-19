@extends('layout.main')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Log Harian</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('logHarian.create')}}"> Create Log Harian</a>
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
            <th>Id Petugas</th>
            <th>Id Log Harian</th>
            <th>Tanggal</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($logharianes as $logharian)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $logharian->id_petugas }}</td>
                <td>{{ $logharian->id_log_harian }}</td>
                <td>{{ $logharian->tanggal}}</td>
                <td>
                    <form action="#" method="POST">

                        <a class="btn btn-info" href="#">Show</a>

                        <a class="btn btn-primary" href="{{route('logHarian.edit',$logharian->id)}}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $logharianes->links() !!}
@endsection

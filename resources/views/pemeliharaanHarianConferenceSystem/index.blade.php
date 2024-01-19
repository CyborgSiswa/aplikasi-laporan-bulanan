@extends('layout.main')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Pemeliharaan Harian Conference System</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('pemeliharaanHarianConferenceSystem.create')}}"> Create Pemeliharaan Harian Conference System</a>
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
            <th>periksa kondisi fisik microphone dan amplifier</th>
            <th>test output dari microphone</th>
            <th>keterangan</th>
            <th>id personil</th>
            <th>id pengawas</th> 
            <th width="280px">Action</th>
        </tr>
        @foreach ($pemeliharaanharianconferencesystemes as $pemeliharaanharianconferencesystem)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $pemeliharaanharianconferencesystem->id_peralatan }}</td>
                <td>{{ $pemeliharaanharianconferencesystem->tanggal }}</td>
                <td>{{ $pemeliharaanharianconferencesystem->periksa_kondisi_fisik_microphone_dan_amplifier}}</td>
                <td>{{ $pemeliharaanharianconferencesystem->test_output_dari_microphone }}</td>
                <td>{{ $pemeliharaanharianconferencesystem->keterangan}}</td>
                <td>{{ $pemeliharaanharianconferencesystem->id_personil }}</td>
                <td>{{ $pemeliharaanharianconferencesystem->id_pengawas }}</td>
                <td>
                    <form action="#" method="POST">

                        <a class="btn btn-info" href="#">Show</a>

                        <a class="btn btn-primary" href="{{route('pemeliharaanHarianConferenceSystem.edit',$pemeliharaanharianconferencesystem->id)}}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $pemeliharaanharianconferencesystemes->links() !!}
@endsection

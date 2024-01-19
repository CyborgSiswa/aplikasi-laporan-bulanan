@extends('layout.main')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Pemeliharaan Bulanan Conference System</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('pemeliharaanBulananConferenceSystem.create')}}"> Create Pemeliharaan Bulanan Conference System</a>
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
            <th>bersihkan housing perangkat amplifier cpsu dan microphpne unit</th>
            <th>bersihkan bagian belakang cpsu dan sambungan kabe</th>
            <th>keterangan</th>
            <th>id personil</th>
            <th>id pengawas</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($pemeliharaanbulananconferencesystemes as $pemeliharaanbulananconferencesystem)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $pemeliharaanbulananconferencesystem->id_peralatan }}</td>
                <td>{{ $pemeliharaanbulananconferencesystem->tanggal }}</td>
                <td>{{ $pemeliharaanbulananconferencesystem->bersihkan_housing_perangkat_amplifier_cpsu_dan_microphpne_unit }}</td>
                <td>{{ $pemeliharaanbulananconferencesystem->bersihkan_bagian_belakang_cpsu_dan_sambungan_kabel }}</td>
                <td>{{ $pemeliharaanbulananconferencesystem->keterangan }}</td>
                <td>{{ $pemeliharaanbulananconferencesystem->id_personil }}</td>
                <td>{{ $pemeliharaanbulananconferencesystem->id_pengawas }}</td>
                <td>
                    <form action="#" method="POST">

                        <a class="btn btn-info" href="#">Show</a>

                        <a class="btn btn-primary" href="{{route('pemeliharaanBulananConferenceSystem.edit',$pemeliharaanbulananconferencesystem->id)}}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $pemeliharaanbulananconferencesystemes->links() !!}
@endsection

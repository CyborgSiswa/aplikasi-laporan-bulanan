@extends('layout.main')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Pemeliharaan Bulanan Access Control</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('pemeliharaanBulananAccessControl.create')}}"> Create Pemeliharaan Mingguan Access Control</a>
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
            <th>pemeriksaan fungsi perangkat pendeteksi fingerprint biometric</th>
            <th>pemeriksaan fungsi emergency exit</th>
            <th>pengujian kinerja secara berkala</th>
            <th>keterangan</th>
            <th>id personil</th>
            <th>id pengawas</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($pemeliharaanbulananaccesscontroles as $pemeliharaanbulananaccesscontrol)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $pemeliharaanbulananaccesscontrol->id_peralatan }}</td>
                <td>{{ $pemeliharaanbulananaccesscontrol->tanggal }}</td>
                <td>{{ $pemeliharaanbulananaccesscontrol->pemeriksaan_fungsi_perangkat_pendeteksi_fingerprint_biometric }}</td>
                <td>{{ $pemeliharaanbulananaccesscontrol->pemeriksaan_fungsi_emergency_exit }}</td>
                <td>{{ $pemeliharaanbulananaccesscontrol->pengujian_kinerja_secara_berkala }}</td>
                <td>{{ $pemeliharaanbulananaccesscontrol->keterangan }}</td>
                <td>{{ $pemeliharaanbulananaccesscontrol->id_personil }}</td>
                <td>{{ $pemeliharaanbulananaccesscontrol->id_pengawas }}</td>
                <td>
                    <form action="#" method="POST">

                        <a class="btn btn-info" href="#">Show</a>

                        <a class="btn btn-primary" href="{{route('pemeliharaanBulananAccessControl.edit',$pemeliharaanbulananaccesscontrol->id)}}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $pemeliharaanbulananaccesscontroles->links() !!}
@endsection

@extends('layout.main')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Pemeliharaan Bulanan PAS</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('pemeliharaanBulananPas.create')}}"> Create Pemeliharaan Bulanan Pas</a>
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
            <th>pemeriksaan setiap zone group speaker amplifier</th>
            <th>pemeriksaan kondisi motor roller coupling vcd atau cd player</th>
            <th>pemeriksaan kondisi optik lensa vcd atau cd player</th>
            <th>pemeriksaan kondisi mikrofon dan push button desk</th>
            <th>keterangan</th>
            <th>id personil</th>
            <th>id pengawas</th> 
            <th width="280px">Action</th>
        </tr>
        @foreach ($pemeliharaanbulananpases as $pemeliharaanbulananpas)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $pemeliharaanbulananpas->id_peralatan }}</td>
                <td>{{ $pemeliharaanbulananpas->tanggal }}</td>
                <td>{{ $pemeliharaanbulananpas->pemeriksaan_setiap_zone_group_speaker_amplifier }}</td>
                <td>{{ $pemeliharaanbulananpas->pemeriksaan_kondisi_motor_roller_coupling_vcd_atau_cd_player}}</td>
                <td>{{ $pemeliharaanbulananpas->pemeriksaan_kondisi_optik_lensa_vcd_atau_cd_player }}</td>
                <td>{{ $pemeliharaanbulananpas->pemeriksaan_kondisi_mikrofon_dan_push_button_desk}}</td>
                <td>{{ $pemeliharaanbulananpas->keterangan }}</td>
                <td>{{ $pemeliharaanbulananpas->id_personil }}</td>
                <td>{{ $pemeliharaanbulananpas->id_pengawas }}</td>
                <td>
                    <form action="#" method="POST">

                        <a class="btn btn-info" href="#">Show</a>

                        <a class="btn btn-primary" href="{{route('pemeliharaanBulananPas.edit',$pemeliharaanbulananpas->id)}}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $pemeliharaanbulananpases->links() !!}
@endsection

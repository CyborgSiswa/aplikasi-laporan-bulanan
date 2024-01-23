@extends('layout.main')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Pemeliharaan Bulanan IGCS</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('pemeliharaanBulananIgcs.create')}}"> Create Pemeliharaan Bulanan Igcs</a>
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
            <th>pemeriksaan kabel coaxial</th>
            <th>pemeriksaan modul modul ht maupun transceiver</th>
            <th>pemeriksaan software program operasi</th>
            <th>pemeriksaan modul modul site controller dan base station</th>
            <th>keterangan</th>
            <th>id personil</th>
            <th>id pengawas</th> 
            <th width="280px">Action</th>
        </tr>
        @foreach ($pemeliharaanbulananigcses as $pemeliharaanbulananigcs)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $pemeliharaanbulananigcs->id_peralatan }}</td>
                <td>{{ $pemeliharaanbulananigcs->tanggal }}</td>
                <td>{{ $pemeliharaanbulananigcs->pemeriksaan_kabel_coaxial}}</td>
                <td>{{ $pemeliharaanbulananigcs->pemeriksaan_modul_modul_ht_maupun_transceiver}}</td>
                <td>{{ $pemeliharaanbulananigcs->pemeriksaan_software_program_operasi}}</td>
                <td>{{ $pemeliharaanbulananigcs->pemeriksaan_modul_modul_site_controller_dan_base_station}}</td>
                <td>{{ $pemeliharaanbulananigcs->keterangan }}</td>
                <td>{{ $pemeliharaanbulananigcs->id_personil }}</td>
                <td>{{ $pemeliharaanbulananigcs->id_pengawas }}</td>
                <td>
                    <form action="#" method="POST">

                        <a class="btn btn-info" href="#">Show</a>

                        <a class="btn btn-primary" href="{{route('pemeliharaanBulananIgcs.edit',$pemeliharaanbulananigcs->id)}}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $pemeliharaanbulananigcses->links() !!}
@endsection

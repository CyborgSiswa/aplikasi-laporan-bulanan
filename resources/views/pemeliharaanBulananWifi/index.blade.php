@extends('layout.main')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Pemeliharaan Bulanan Wifi</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('pemeliharaanBulananWifi.create')}}"> Create pemeliharaan Bulanan Wifi</a>
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
            <th>periksa kondisi port utp kabel pada modem dan access switch</th>
            <th>keterangan</th>
            <th>id personil</th>
            <th>id pengawas</th> 
            <th width="280px">Action</th>
        </tr>
        @foreach ($pemeliharaanbulananwifies as $pemeliharaanbulananwifi)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $pemeliharaanbulananwifi->id_peralatan }}</td>
                <td>{{ $pemeliharaanbulananwifi->tanggal }}</td>
                <td>{{ $pemeliharaanbulananwifi->periksa_kondisi_port_utp_kabel_pada_modem_dan_access_switch}}</td>
                <td>{{ $pemeliharaanbulananwifi->keterangan }}</td>
                <td>{{ $pemeliharaanbulananwifi->id_personil }}</td>
                <td>{{ $pemeliharaanbulananwifi->id_pengawas }}</td>
                <td>
                    <form action="#" method="POST">

                        <a class="btn btn-info" href="#">Show</a>

                        <a class="btn btn-primary" href="{{route('pemeliharaanBulananWifi.edit',$pemeliharaanbulananwifi->id)}}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $pemeliharaanbulananwifies->links() !!}
@endsection

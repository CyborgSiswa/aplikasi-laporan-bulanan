@extends('layout.main')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Pemeliharaan Harian Wifi</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('pemeliharaanHarianWifi.create')}}"> Create Pemeliharaan Harian Wifi</a>
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
            <th>periksa nyala lampu modem dan access point</th>
            <th>periksa ketersediaan ssid</th>
            <th>keterangan</th>
            <th>id personil</th>
            <th>id pengawas</th> 
            <th width="280px">Action</th>
        </tr>
        @foreach ($pemeliharaanharianwifies as $pemeliharaanharianwifi)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $pemeliharaanharianwifi->id_peralatan }}</td>
                <td>{{ $pemeliharaanharianwifi->tanggal }}</td>
                <td>{{ $pemeliharaanharianwifi->periksa_nyala_lampu_modem_dan_access_point}}</td>
                <td>{{ $pemeliharaanharianwifi->periksa_ketersediaan_ssid}}</td>
                <td>{{ $pemeliharaanharianwifi->keterangan}}</td>
                <td>{{ $pemeliharaanharianwifi->id_personil }}</td>
                <td>{{ $pemeliharaanharianwifi->id_pengawas }}</td>
                <td>
                    <form action="#" method="POST">

                        <a class="btn btn-info" href="#">Show</a>

                        <a class="btn btn-primary" href="{{route('pemeliharaanHarianWifi.edit',$pemeliharaanharianwifi->id)}}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $pemeliharaanharianwifies->links() !!}
@endsection

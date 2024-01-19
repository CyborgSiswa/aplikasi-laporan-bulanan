@extends('layout.main')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Pemeliharaan Harian Access Control</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('pemeliharaanHarianAccessControl.create')}}"> Create Pemeliharaan Harian Access Control</a>
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
            <th>pembersihan main unit</th>
            <th>pembersihan ups</th>
            <th>pemeriksaan main supply voltage</th>
            <th>pemeriksaan output voltage ups</th>
            <th>pembersihan kabel kabel dan konektor yang terlihat</th>
            <th>keterangan</th>
            <th>id personil</th>
            <th>id pengawas</th> 
            <th width="280px">Action</th>
        </tr>
        @foreach ($pemeliharaanharianaccesscontroles as $pemeliharaanharianaccesscontrol)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $pemeliharaanharianaccesscontrol->id_peralatan }}</td>
                <td>{{ $pemeliharaanharianaccesscontrol->tanggal }}</td>
                <td>{{ $pemeliharaanharianaccesscontrol->pembersihan_main_unit}}</td>
                <td>{{ $pemeliharaanharianaccesscontrol->pembersihan_ups }}</td>
                <td>{{ $pemeliharaanharianaccesscontrol->pemeriksaan_main_supply_voltage }}</td>
                <td>{{ $pemeliharaanharianaccesscontrol->pemeriksaan_output_voltage_ups }}</td>
                <td>{{ $pemeliharaanharianaccesscontrol->pembersihan_kabel_kabel_dan_konektor_yang_terlihat }}</td>
                <td>{{ $pemeliharaanharianaccesscontrol->keterangan}}</td>
                <td>{{ $pemeliharaanharianaccesscontrol->id_personil }}</td>
                <td>{{ $pemeliharaanharianaccesscontrol->id_pengawas }}</td>
                <td>
                    <form action="#" method="POST">

                        <a class="btn btn-info" href="#">Show</a>

                        <a class="btn btn-primary" href="{{route('pemeliharaanHarianAccessControl.edit',$pemeliharaanharianaccesscontrol->id)}}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $pemeliharaanharianaccesscontroles->links() !!}
@endsection

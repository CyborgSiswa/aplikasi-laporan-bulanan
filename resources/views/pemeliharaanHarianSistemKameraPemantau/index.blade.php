@extends('layout.main')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Pemeliharaan Harian Sistem Kamera Pantau</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('pemeliharaanHarianSistemKameraPemantau.create')}}"> Create Pemeliharaan Harian Sistem Kamera Pemantau</a>
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
            <th>pembersihan camera control system</th>
            <th>pembersihan monitor</th>
            <th>pembersihan ups</th>
            <th>pembersihan ruangan pusat pengendali control center</th>
            <th>pemeriksaan main supply voltage</th>
            <th>pemeriksaan output voltage ups</th>
            <th>pembersihan kabel kabel dan konektor yang terlihat</th>
            <th>keterangan</th>
            <th>id personil</th>
            <th>id pengawas</th> 
            <th width="280px">Action</th>
        </tr>
        @foreach ($pemeliharaanhariansistemkamerapemantaues as $pemeliharaanhariansistemkamerapemantau)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $pemeliharaanhariansistemkamerapemantau->id_peralatan }}</td>
                <td>{{ $pemeliharaanhariansistemkamerapemantau->tanggal }}</td>
                <td>{{ $pemeliharaanhariansistemkamerapemantau->pembersihan_camera_control_system}}</td>
                <td>{{ $pemeliharaanhariansistemkamerapemantau->pembersihan_monitor}}</td>
                <td>{{ $pemeliharaanhariansistemkamerapemantau->pembersihan_ups}}</td>
                <td>{{ $pemeliharaanhariansistemkamerapemantau->pembersihan_ruangan_pusat_pengendali_control_center}}</td>
                <td>{{ $pemeliharaanhariansistemkamerapemantau->pemeriksaan_main_supply_voltage}}</td>
                <td>{{ $pemeliharaanhariansistemkamerapemantau->pemeriksaan_output_voltage_ups}}</td>
                <td>{{ $pemeliharaanhariansistemkamerapemantau->pembersihan_kabel_kabel_dan_konektor_yang_terlihat}}</td>
                <td>{{ $pemeliharaanhariansistemkamerapemantau->keterangan}}</td>
                <td>{{ $pemeliharaanhariansistemkamerapemantau->id_personil }}</td>
                <td>{{ $pemeliharaanhariansistemkamerapemantau->id_pengawas }}</td>
                <td>
                    <form action="#" method="POST">

                        <a class="btn btn-info" href="#">Show</a>

                        <a class="btn btn-primary" href="{{route('pemeliharaanHarianSistemKameraPemantau.edit',$pemeliharaanhariansistemkamerapemantau->id)}}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $pemeliharaanhariansistemkamerapemantaues->links() !!}
@endsection

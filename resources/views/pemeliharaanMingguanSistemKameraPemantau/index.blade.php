@extends('layout.main')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Pemeliharaan Mingguan Sistem Kamera Pemantau</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('pemeliharaanMingguanSistemKameraPemantau.create')}}"> Create Pemeliharaan Mingguan Sistem Kamera Pemantau</a>
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
            <th>pemeriksaan fungsi auto recording</th>
            <th>pemeriksaan fungsi manual recording</th>
            <th>pemeriksaan fungsi pengendali pan tilt zoom</th>
            <th>pemeriksaan fungsi pengendali multiscreen display/th>
            <th>pemeriksaan fungsi pengendali monitor selector area</th>
            <th>keterangan</th>
            <th>id personil</th>
            <th>id pengawas</th> 
            <th width="280px">Action</th>
        </tr>
        @foreach ($pemeliharaanmingguansistemkamerapemantaues as $pemeliharaanmingguansistemkamerapemantau)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $pemeliharaanmingguansistemkamerapemantau->id_peralatan }}</td>
                <td>{{ $pemeliharaanmingguansistemkamerapemantau->tanggal }}</td>
                <td>{{ $pemeliharaanmingguansistemkamerapemantau->pemeriksaan_fungsi_auto_recording}}</td>
                <td>{{ $pemeliharaanmingguansistemkamerapemantau->pemeriksaan_fungsi_manual_recording}}</td>
                <td>{{ $pemeliharaanmingguansistemkamerapemantau->pemeriksaan_fungsi_pengendali_pan_tilt_zoom }}</td>
                <td>{{ $pemeliharaanmingguansistemkamerapemantau->pemeriksaan_fungsi_pengendali_multiscreen_display }}</td>
                <td>{{ $pemeliharaanmingguansistemkamerapemantau->pemeriksaan_fungsi_pengendali_monitor_selector_area}}</td>
                <td>{{ $pemeliharaanmingguansistemkamerapemantau->keterangan}}</td>
                <td>{{ $pemeliharaanmingguansistemkamerapemantau->id_personil }}</td>
                <td>{{ $pemeliharaanmingguansistemkamerapemantau->id_pengawas }}</td>
                <td>
                    <form action="#" method="POST">

                        <a class="btn btn-info" href="#">Show</a>

                        <a class="btn btn-primary" href="{{route('pemeliharaanMingguanSistemKameraPemantau.edit',$pemeliharaanmingguansistemkamerapemantau->id)}}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $pemeliharaanmingguansistemkamerapemantaues->links() !!}
@endsection

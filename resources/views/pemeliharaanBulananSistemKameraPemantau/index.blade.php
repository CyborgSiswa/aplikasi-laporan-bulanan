@extends('layout.main')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Pemeliharaan Bulanan Sistem Kamera Pemantau</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('pemeliharaanBulananSistemKameraPemantau.create')}}"> Create Pemeliharaan Bulanan Sistem Kamera Pemantau</a>
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
            <th>pemeriksaan jaringan</th>
            <th>pemeriksaan monitor contrast brightness sharpness</th>
            <th>pengujian kinerja secara berkala</th>
            <th>keterangan</th>
            <th>id personil</th>
            <th>id pengawas</th> 
            <th width="280px">Action</th>
        </tr>
        @foreach ($pemeliharaanbulanansistemkamerapemantaues as $pemeliharaanbulanansistemkamerapemantau)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $pemeliharaanbulanansistemkamerapemantau->id_peralatan }}</td>
                <td>{{ $pemeliharaanbulanansistemkamerapemantau->tanggal }}</td>
                <td>{{ $pemeliharaanbulanansistemkamerapemantau->pemeriksaan_jaringan }}</td>
                <td>{{ $pemeliharaanbulanansistemkamerapemantau->pemeriksaan_monitor_contrast_brightness_sharpness}}</td>
                <td>{{ $pemeliharaanbulanansistemkamerapemantau->pengujian_kinerja_secara_berkala }}</td>
                <td>{{ $pemeliharaanbulanansistemkamerapemantau->keterangan }}</td>
                <td>{{ $pemeliharaanbulanansistemkamerapemantau->id_personil }}</td>
                <td>{{ $pemeliharaanbulanansistemkamerapemantau->id_pengawas }}</td>
                <td>
                    <form action="#" method="POST">

                        <a class="btn btn-info" href="#">Show</a>

                        <a class="btn btn-primary" href="{{route('pemeliharaanBulananSistemKameraPemantau.edit',$pemeliharaanbulanansistemkamerapemantau->id)}}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $pemeliharaanbulanansistemkamerapemantaues->links() !!}
@endsection

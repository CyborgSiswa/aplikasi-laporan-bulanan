@extends('layout.main')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Pemeliharaan Bulanan Xray</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('pemeliharaanBulananXray.create')}}"> Create Pemeliharaan Bulanan Xray</a>
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
            <th>pemeriksaan function test organic dan inorganic stripping</th>
            <th>pemeriksaan function test zoom zoom out in</th>
            <th>pemeriksaan function test black and white image</th>
            <th>pemeriksaan function test iresolutionmage density hight</th>
            <th>pemeriksaan function test automatic threat detection system</th>
            <th>pemeriksaan function test threat image projection</th>
            <th>pemeriksaan function test image archives atau image recall</th>
            <th>pemeriksaan kapasitas hard disk</th>
            <th>pemeriksaan ups automatic change over facility</th>
            <th>pemeriksaan ups expected back up time</th>
            <th>pemeriksaan ups fan</th>
            <th>pengujian kinerja secara berkala dengan menggunakan ctp</th>
            <th>keterangan</th>
            <th>id personil</th>
            <th>id pengawas</th> 
            <th width="280px">Action</th>
        </tr>
        @foreach ($pemeliharaanbulananxrayes as $pemeliharaanbulananxray)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $pemeliharaanbulananxray->id_peralatan }}</td>
                <td>{{ $pemeliharaanbulananxray->tanggal }}</td>
                <td>{{ $pemeliharaanbulananxray->pemeriksaan_function_test_organic_dan_inorganic_stripping}}</td>
                <td>{{ $pemeliharaanbulananxray->pemeriksaan_function_test_zoom_in_zoom_out }}</td>
                <td>{{ $pemeliharaanbulananxray->pemeriksaan_function_test_black_and_white_image }}</td>
                <td>{{ $pemeliharaanbulananxray->pemeriksaan_function_test_image_density_hight_resolution }}</td>
                <td>{{ $pemeliharaanbulananxray->pemeriksaan_function_test_automatic_threat_detection_system }}</td>
                <td>{{ $pemeliharaanbulananxray->pemeriksaan_function_test_threat_image_projection}}</td>
                <td>{{ $pemeliharaanbulananxray->pemeriksaan_function_test_image_archives_atau_image_recall }}</td>
                <td>{{ $pemeliharaanbulananxray->pemeriksaan_kapasitas_hard_disk }}</td>
                <td>{{ $pemeliharaanbulananxray->pemeriksaan_ups_automatic_change_over_facility}}</td>
                <td>{{ $pemeliharaanbulananxray->pemeriksaan_ups_expected_back_up_time }}</td>
                <td>{{ $pemeliharaanbulananxray->pemeriksaan_ups_fan }}</td>
                <td>{{ $pemeliharaanbulananxray->pengujian_kinerja_secara_berkala_dengan_menggunakan_ctp }}</td>
                <td>{{ $pemeliharaanbulananxray->keterangan}}</td>
                <td>{{ $pemeliharaanbulananxray->id_personil }}</td>
                <td>{{ $pemeliharaanbulananxray->id_pengawas }}</td>
                <td>
                    <form action="#" method="POST">

                        <a class="btn btn-info" href="#">Show</a>

                        <a class="btn btn-primary" href="{{route('pemeliharaanBulananXray.edit',$pemeliharaanbulananxray->id)}}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $pemeliharaanbulananxrayes->links() !!}
@endsection

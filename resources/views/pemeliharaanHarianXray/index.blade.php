@extends('layout.main')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Pemeliharaan Harian Xray</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('pemeliharaanHarianXray.create')}}"> Create Pemeliharaan Harian Xray</a>
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
            <th>pemeriksaan lead curtain</th>
            <th>pemeriksaan lead shielding </th>
            <th>pemeriksaan conveyor belt</th>
            <th>pemeriksaan conveyor roller</th>
            <th>pemeriksaan housing panel</th>
            <th>pemeriksaan kabel kabel dan konektor yang terlihat</th>
            <th>unit bagian luar</th>
            <th>monitor</th>
            <th>ups</th>
            <th>lokasi sekitar peralatan xray</th>
            <th>key switch</th>
            <th>power on off key</th>
            <th>emergency stop keys</th>
            <th>tuts key keyboard</th>
            <th>mouse pad mouse roller</th>
            <th>forward atau reverse</th>
            <th>main input voltage</th>
            <th>output voltage ups</th>
            <th>power on lamp</th>
            <th>xray generator on lamp</th>
            <th>pemeriksaan safety rollers atau spring roller</th>
            <th>tombol pengendali monitor</th>
            <th>brightness</th>
            <th>sharpness</th>
            <th>contrast</th>
            <th>keterangan</th>
            <th>id personil</th>
            <th>id pengawas</th> 
            <th width="280px">Action</th>
        </tr>
        @foreach ($pemeliharaanharianxrayes as $pemeliharaanharianxray)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $pemeliharaanharianxray->id_peralatan }}</td>
                <td>{{ $pemeliharaanharianxray->tanggal }}</td>
                <td>{{ $pemeliharaanharianxray->pemeriksaan_lead_curtain}}</td>
                <td>{{ $pemeliharaanharianxray->pemeriksaan_lead_shielding }}</td>
                <td>{{ $pemeliharaanharianxray->pemeriksaan_conveyor_belt}}</td>
                <td>{{ $pemeliharaanharianxray->pemeriksaan_conveyor_roller }}</td>
                <td>{{ $pemeliharaanharianxray->pemeriksaan_housing_panel}}</td>
                <td>{{ $pemeliharaanharianxray->pemeriksaan_kabel_kabel_dan_konektor_yang_terlihat}}</td>
                <td>{{ $pemeliharaanharianxray->unit_bagian_luar}}</td>
                <td>{{ $pemeliharaanharianxray->monitor}}</td>
                <td>{{ $pemeliharaanharianxray->ups}}</td>
                <td>{{ $pemeliharaanharianxray->lokasi_sekitar_peralatan_x_ray}}</td>
                <td>{{ $pemeliharaanharianxray->key_switch}}</td>
                <td>{{ $pemeliharaanharianxray->power_on_off_key}}</td>
                <td>{{ $pemeliharaanharianxray->emergency_stop_keys}}</td>
                <td>{{ $pemeliharaanharianxray->tuts_key_keyboard }}</td>
                <td>{{ $pemeliharaanharianxray->mouse_pad_mouse_roller}}</td>
                <td>{{ $pemeliharaanharianxray->forward_atau_reverse}}</td>
                <td>{{ $pemeliharaanharianxray->main_input_voltage}}</td>
                <td>{{ $pemeliharaanharianxray->output_voltage_ups }}</td>
                <td>{{ $pemeliharaanharianxray->power_on_lamp}}</td>
                <td>{{ $pemeliharaanharianxray->x_ray_generator_on_lamp}}</td>
                <td>{{ $pemeliharaanharianxray->pemeriksaan_safety_rollers_atau_spring_roller}}</td>
                <td>{{ $pemeliharaanharianxray->tombol_pengendali_monitor }}</td>
                <td>{{ $pemeliharaanharianxray->brightness}}</td>
                <td>{{ $pemeliharaanharianxray->sharpness }}</td>
                <td>{{ $pemeliharaanharianxray->contrast}}</td>
                <td>{{ $pemeliharaanharianxray->keterangan}}</td>
                <td>{{ $pemeliharaanharianxray->id_personil }}</td>
                <td>{{ $pemeliharaanharianxray->id_pengawas }}</td>
                <td>
                    <form action="#" method="POST">

                        <a class="btn btn-info" href="#">Show</a>

                        <a class="btn btn-primary" href="{{route('pemeliharaanHarianXray.edit',$pemeliharaanharianxray->id)}}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $pemeliharaanharianxrayes->links() !!}
@endsection

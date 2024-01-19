@extends('layout.main')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Update Pemeliharaan Harian Xray</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{route('pemeliharaanHarianXray.index')}}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your
            input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('pemeliharaanHarianXray.update',$pemeliharaanharianxray->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Id Peralatan : </strong>
                    <input type="text"  value="{{$pemeliharaanharianxray->id_peralatan}}" name="id_peralatan" class="form-control" placeholder="id peralatan">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tanggal:</strong>
                    <textarea class="form-control" value style="height:150px" name="tanggal" placeholder="tanggal">{{$pemeliharaanharianxray->tanggal}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>pemeriksaan lead curtain:</strong>
                    <textarea class="form-control" value style="height:150px" name="pemeriksaan_lead_curtain" placeholder="pemeriksaan lead curtain">{{$pemeliharaanharianxray->pemeriksaan_lead_curtain}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>pemeriksaan lead shielding:</strong>
                    <textarea class="form-control" value style="height:150px" name="pemeriksaan_lead_shielding" placeholder="pemeriksaan lead shielding">{{$pemeliharaanharianxray->pemeriksaan_lead_shielding}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>pemeriksaan conveyor belt:</strong>
                    <textarea class="form-control" value style="height:150px" name="pemeriksaan_conveyor_belt" placeholder="pemeriksaan conveyor belt">{{$pemeliharaanharianxray->pemeriksaan_conveyor_belt}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>pemeriksaan conveyor roller:</strong>
                    <textarea class="form-control" value style="height:150px" name="pemeriksaan_conveyor_roller" placeholder="pemeriksaan conveyor roller">{{$pemeliharaanharianxray->pemeriksaan_conveyor_roller}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>pemeriksaan housing panel:</strong>
                    <textarea class="form-control" value style="height:150px" name="pemeriksaan_housing_panel" placeholder="pemeriksaan housing panel">{{$pemeliharaanharianxray->pemeriksaan_housing_panel}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>pemeriksaan kabel kabel dan konektor yang terlihat:</strong>
                    <textarea class="form-control" value style="height:150px" name="pemeriksaan_kabel_kabel_dan_konektor_yang_terlihat" placeholder="pemeriksaan kabel kabel dan konektor yang terlihat">{{$pemeliharaanharianxray->pemeriksaan_kabel_kabel_dan_konektor_yang_terlihat}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>unit bagian luar:</strong>
                    <textarea class="form-control" value style="height:150px" name="unit_bagian_luar" placeholder="unit bagian luar">{{$pemeliharaanharianxray->unit_bagian_luar}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>monitor:</strong>
                    <textarea class="form-control" value style="height:150px" name="monitor" placeholder="monitor">{{$pemeliharaanharianxray->monitor}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>ups:</strong>
                    <textarea class="form-control" value style="height:150px" name="ups" placeholder="ups">{{$pemeliharaanharianxray->ups}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>lokasi sekitar peralatan x ray:</strong>
                    <textarea class="form-control" value style="height:150px" name="lokasi_sekitar_peralatan_x_ray" placeholder="lokasi sekitar peralatan x ray">{{$pemeliharaanharianxray->lokasi_sekitar_peralatan_x_ray}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>key switch:</strong>
                    <textarea class="form-control" value style="height:150px" name="key_switch" placeholder="key switch">{{$pemeliharaanharianxray->key_switch}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>power on off key:</strong>
                    <textarea class="form-control" value style="height:150px" name="power_on_off_key" placeholder="power on off key">{{$pemeliharaanharianxray->power_on_off_key}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>emergency stop keys:</strong>
                    <textarea class="form-control" value style="height:150px" name="emergency_stop_keys" placeholder="emergency stop keys">{{$pemeliharaanharianxray->emergency_stop_keys}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>tuts key keyboard:</strong>
                    <textarea class="form-control" value style="height:150px" name="tuts_key_keyboard" placeholder="tuts key keyboard">{{$pemeliharaanharianxray->tuts_key_keyboard}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>mouse pad mouse roller:</strong>
                    <textarea class="form-control" value style="height:150px" name="mouse_pad_mouse_roller" placeholder="mouse pad mouse roller">{{$pemeliharaanharianxray->mouse_pad_mouse_roller}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>forward atau reverse:</strong>
                    <textarea class="form-control" value style="height:150px" name="forward_atau_reverse" placeholder="forward atau reverse">{{$pemeliharaanharianxray->forward_atau_reverse}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>main input voltage:</strong>
                    <textarea class="form-control" value style="height:150px" name="main_input_voltage" placeholder="main input voltage">{{$pemeliharaanharianxray->main_input_voltage}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>output voltage ups:</strong>
                    <textarea class="form-control" value style="height:150px" name="output_voltage_ups" placeholder="output voltage ups">{{$pemeliharaanharianxray->output_voltage_ups}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>power on lamp:</strong>
                    <textarea class="form-control" value style="height:150px" name="power_on_lamp" placeholder="power on lamp">{{$pemeliharaanharianxray->power_on_lamp}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>x ray generator on lamp:</strong>
                    <textarea class="form-control" value style="height:150px" name="x_ray_generator_on_lamp" placeholder="x ray generator on lamp">{{$pemeliharaanharianxray->x_ray_generator_on_lamp}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>pemeriksaan safety rollers atau spring roller:</strong>
                    <textarea class="form-control" value style="height:150px" name="pemeriksaan_safety_rollers_atau_spring_roller" placeholder="pemeriksaan safety rollers atau spring roller">{{$pemeliharaanharianxray->pemeriksaan_safety_rollers_atau_spring_roller}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>tombol pengendali monitor:</strong>
                    <textarea class="form-control" value style="height:150px" name="tombol_pengendali_monitor" placeholder="tombol pengendali monitor">{{$pemeliharaanharianxray->tombol_pengendali_monitor}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>brightness:</strong>
                    <textarea class="form-control" value style="height:150px" name="brightness" placeholder="brightness">{{$pemeliharaanharianxray->brightness}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>sharpness:</strong>
                    <textarea class="form-control" value style="height:150px" name="sharpness" placeholder="sharpness">{{$pemeliharaanharianxray->sharpness}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>contrast:</strong>
                    <textarea class="form-control" value style="height:150px" name="contrast" placeholder="contrast">{{$pemeliharaanharianxray->contrast}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>keterangan:</strong>
                    <textarea class="form-control" value style="height:150px" name="keterangan" placeholder="keterangan">{{$pemeliharaanharianxray->keterangan}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Id Personil : </strong>
                    <input type="text"  value="{{$pemeliharaanharianxray->id_personil}}" name="id_personil" class="form-control" placeholder="id personil">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Id Pengawas : </strong>
                    <input type="text"  value="{{$pemeliharaanharianxray->id_pengawas}}" name="id_pengawas" class="form-control" placeholder="id pengawas">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>created by:</strong>
                    <input class="form-control" style="height:150px" name="created_by" value="{{$pemeliharaanharianxray->created_by}}" placeholder="created by">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection

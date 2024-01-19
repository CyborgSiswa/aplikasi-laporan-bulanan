@extends('layout.main')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add Pemeliharaan Harian Xray</h2>
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

    <form action="{{route('pemeliharaanHarianXray.store')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Id Peralatan : </strong>
                    <input type="text" name="id_peralatan" class="form-control" placeholder="id peralatan">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tanggal:</strong>
                    <textarea class="form-control" style="height:150px" name="tanggal" placeholder="tanggal"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>pemeriksaan lead curtain :</strong>
                    <textarea class="form-control" style="height:150px" name="pemeriksaan_lead_curtain" placeholder="pemeriksaan lead curtain"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>pemeriksaan lead shielding :</strong>
                    <textarea class="form-control" style="height:150px" name="pemeriksaan_lead_shielding" placeholder="pemeriksaan lead shielding"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>pemeriksaan conveyor belt :</strong>
                    <textarea class="form-control" style="height:150px" name="pemeriksaan_conveyor_belt" placeholder="pemeriksaan conveyor belt"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>pemeriksaan conveyor roller :</strong>
                    <textarea class="form-control" style="height:150px" name="pemeriksaan_conveyor_roller" placeholder="pemeriksaan conveyor roller"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>pemeriksaan housing panel :</strong>
                    <textarea class="form-control" style="height:150px" name="pemeriksaan_housing_panel" placeholder="pemeriksaan housing panel"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>pemeriksaan kabel kabel dan konektor yang terlihat :</strong>
                    <textarea class="form-control" style="height:150px" name="pemeriksaan_kabel_kabel_dan_konektor_yang_terlihat" placeholder="pemeriksaan kabel kabel dan konektor yang terlihat"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>unit bagian luar :</strong>
                    <textarea class="form-control" style="height:150px" name="unit_bagian_luar" placeholder="unit bagian luar"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>monitor :</strong>
                    <textarea class="form-control" style="height:150px" name="monitor" placeholder="monitor"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>ups :</strong>
                    <textarea class="form-control" style="height:150px" name="ups" placeholder="ups"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>lokasi sekitar peralatan xray :</strong>
                    <textarea class="form-control" style="height:150px" name="lokasi_sekitar_peralatan_x_ray" placeholder="lokasi sekitar peralatan xray"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>key switch  :</strong>
                    <textarea class="form-control" style="height:150px" name="key_switch" placeholder="key switch"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>power on off key :</strong>
                    <textarea class="form-control" style="height:150px" name="power_on_off_key" placeholder="power on off key"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>emergency stop keys:</strong>
                    <textarea class="form-control" style="height:150px" name="emergency_stop_keys" placeholder="emergency stop keys"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>tuts key keyboard :</strong>
                    <textarea class="form-control" style="height:150px" name="tuts_key_keyboard" placeholder="tuts key keyboard"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>mouse pad mouse ruller :</strong>
                    <textarea class="form-control" style="height:150px" name="mouse_pad_mouse_roller" placeholder="mouse pad mouse ruller"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>forward atau reverse :</strong>
                    <textarea class="form-control" style="height:150px" name="forward_atau_reverse" placeholder="forward atau reverse"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>main input voltage :</strong>
                    <textarea class="form-control" style="height:150px" name="main_input_voltage" placeholder="main input voltage"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>output voltage ups :</strong>
                    <textarea class="form-control" style="height:150px" name="output_voltage_ups" placeholder="output voltage ups"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>power on lamp :</strong>
                    <textarea class="form-control" style="height:150px" name="power_on_lamp" placeholder="power on lamp"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>xray generator on lamp :</strong>
                    <textarea class="form-control" style="height:150px" name="x_ray_generator_on_lamp" placeholder="xray generator on lamp"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>pemeriksaan safety rollers atau spring roller :</strong>
                    <textarea class="form-control" style="height:150px" name="pemeriksaan_safety_rollers_atau_spring_roller" placeholder="pemeriksaan safety rollers atau spring roller"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>tombol pengendali monitor:</strong>
                    <textarea class="form-control" style="height:150px" name="tombol_pengendali_monitor" placeholder="tombol pengendali monitor"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>brightness :</strong>
                    <textarea class="form-control" style="height:150px" name="brightness" placeholder="brightness"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>sharpness :</strong>
                    <textarea class="form-control" style="height:150px" name="sharpness" placeholder="sharpness"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>contrast :</strong>
                    <textarea class="form-control" style="height:150px" name="contrast" placeholder="contrast"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>keterangan:</strong>
                    <textarea class="form-control" style="height:150px" name="keterangan" placeholder="keterangan"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>id personil:</strong>
                    <textarea class="form-control" style="height:150px" name="id_personil" placeholder="id personil"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>id pengawas:</strong>
                    <textarea class="form-control" style="height:150px" name="id_pengawas" placeholder="id pengawas"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>created by:</strong>
                    <textarea class="form-control" style="height:150px" name="created_by" placeholder="created by"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection
@extends('layout.main')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Update Pemeliharaan BulananXray</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{route('pemeliharaanBulananXray.index')}}"> Back</a>
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

    <form action="{{route('pemeliharaanBulananXray.update',$pemeliharaanbulananxray->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Id Peralatan : </strong>
                    <input type="text"  value="{{$pemeliharaanbulananxray->id_peralatan}}" name="id_peralatan" class="form-control" placeholder="id peralatan">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tanggal:</strong>
                    <textarea class="form-control" value style="height:150px" name="tanggal" placeholder="tanggal">{{$pemeliharaanbulananxray->tanggal}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>pemeriksaan function test organic dan inorganic stripping:</strong>
                    <textarea class="form-control" value style="height:150px" name="pemeriksaan_function_test_organic_dan_inorganic_stripping" placeholder="pemeriksaan function test organic dan inorganic stripping">{{$pemeliharaanbulananxray->pemeriksaan_function_test_organic_dan_inorganic_stripping}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>pemeriksaan function test zoom in zoom out:</strong>
                    <textarea class="form-control" value style="height:150px" name="pemeriksaan_function_test_zoom_in_zoom_out" placeholder="pemeriksaan function test zoom in zoom out">{{$pemeliharaanbulananxray->pemeriksaan_function_test_zoom_in_zoom_out}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>pemeriksaan function test black and white image:</strong>
                    <textarea class="form-control" value style="height:150px" name="pemeriksaan_function_test_black_and_white_image" placeholder="pemeriksaan function test black and white image">{{$pemeliharaanbulananxray->pemeriksaan_function_test_black_and_white_image}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>pemeriksaan function test image density hight resolution:</strong>
                    <textarea class="form-control" value style="height:150px" name="pemeriksaan_function_test_image_density_hight_resolution" placeholder="pemeriksaan function test image density hight resolution">{{$pemeliharaanbulananxray->pemeriksaan_function_test_image_density_hight_resolution}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>pemeriksaan function test automatic threat detection system:</strong>
                    <textarea class="form-control" value style="height:150px" name="pemeriksaan_function_test_automatic_threat_detection_system" placeholder="pemeriksaan function test automatic threat detection system">{{$pemeliharaanbulananxray->pemeriksaan_function_test_automatic_threat_detection_system}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>pemeriksaan function test threat image projection:</strong>
                    <textarea class="form-control" value style="height:150px" name="pemeriksaan_function_test_threat_image_projection" placeholder="pemeriksaan function test threat image projection">{{$pemeliharaanbulananxray->pemeriksaan_function_test_threat_image_projection}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>pemeriksaan function test image archives atau image recall:</strong>
                    <textarea class="form-control" value style="height:150px" name="pemeriksaan_function_test_image_archives_atau_image_recall" placeholder="pemeriksaan function test image archives atau image recall">{{$pemeliharaanbulananxray->pemeriksaan_function_test_image_archives_atau_image_recall}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>pemeriksaan kapasitas hard disk:</strong>
                    <textarea class="form-control" value style="height:150px" name="pemeriksaan_kapasitas_hard_disk" placeholder="pemeriksaan kapasitas hard disk">{{$pemeliharaanbulananxray->pemeriksaan_kapasitas_hard_disk}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>pemeriksaan ups automatic change over facility:</strong>
                    <textarea class="form-control" value style="height:150px" name="pemeriksaan_ups_automatic_change_over_facility" placeholder="pemeriksaan ups automatic change over facility">{{$pemeliharaanbulananxray->pemeriksaan_ups_automatic_change_over_facility}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>pemeriksaan ups expected back up time:</strong>
                    <textarea class="form-control" value style="height:150px" name="pemeriksaan_ups_expected_back_up_time" placeholder="pemeriksaan ups expected back up time">{{$pemeliharaanbulananxray->pemeriksaan_ups_expected_back_up_time}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>pemeriksaan ups fan:</strong>
                    <textarea class="form-control" value style="height:150px" name="pemeriksaan_ups_fan" placeholder="pemeriksaan ups fan">{{$pemeliharaanbulananxray->pemeriksaan_ups_fan}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>pengujian kinerja secara berkala dengan menggunakan ctp:</strong>
                    <textarea class="form-control" value style="height:150px" name="pengujian_kinerja_secara_berkala_dengan_menggunakan_ctp" placeholder="pengujian kinerja secara berkala dengan menggunakan ctp">{{$pemeliharaanbulananxray->pengujian_kinerja_secara_berkala_dengan_menggunakan_ctp}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>keterangan:</strong>
                    <textarea class="form-control" value style="height:150px" name="keterangan" placeholder="keterangan">{{$pemeliharaanbulananxray->keterangan}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Id Personil : </strong>
                    <input type="text"  value="{{$pemeliharaanbulananxray->id_personil}}" name="id_personil" class="form-control" placeholder="id personil">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Id Pengawas : </strong>
                    <input type="text"  value="{{$pemeliharaanbulananxray->id_pengawas}}" name="id_pengawas" class="form-control" placeholder="id pengawas">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>created by:</strong>
                    <input class="form-control" style="height:150px" name="created_by" value="{{$pemeliharaanbulananxray->created_by}}" placeholder="created by">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection

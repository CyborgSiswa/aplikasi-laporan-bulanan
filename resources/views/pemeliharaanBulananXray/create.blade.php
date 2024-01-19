@extends('layout.main')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add Pemeliharaan Bulanan Xray</h2>
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

    <form action="{{route('pemeliharaanBulananXray.store')}}" method="POST">
        @csrf
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Id Peralatan : </strong>
                    <input type="text" name="id_peralatan" class="form-control" placeholder="id_peralatan">
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
                    <strong>pemeriksaan function test organic dan inorganic stripping:</strong>
                    <textarea class="form-control" style="height:150px" name="pemeriksaan_function_test_organic_dan_inorganic_stripping" placeholder="pemeriksaan function test organic dan inorganic stripping"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>pemeriksaan function test zoom zoom out in:</strong>
                    <textarea class="form-control" style="height:150px" name="pemeriksaan_function_test_zoom_in_zoom_out" placeholder="pemeriksaan function test zoom zoom out in"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>pemeriksaan function test black and white image:</strong>
                    <textarea class="form-control" style="height:150px" name="pemeriksaan_function_test_black_and_white_image" placeholder="pemeriksaan function test black and white image"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>pemeriksaan function test iresolutionmage density hight :</strong>
                    <textarea class="form-control" style="height:150px" name="pemeriksaan_function_test_image_density_hight_resolution" placeholder="pemeriksaan function test image density hight resolution"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>pemeriksaan function test automatic threat detection system:</strong>
                    <textarea class="form-control" style="height:150px" name="pemeriksaan_function_test_automatic_threat_detection_system" placeholder="pemeriksaan function test automatic threat detection system"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>pemeriksaan function test threat image projection:</strong>
                    <textarea class="form-control" style="height:150px" name="pemeriksaan_function_test_threat_image_projection" placeholder="pemeriksaan function test threat image projection"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>pemeriksaan function test image archives atau image recall:</strong>
                    <textarea class="form-control" style="height:150px" name="pemeriksaan_function_test_image_archives_atau_image_recall" placeholder="pemeriksaan function test image archives atau image recall"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>pemeriksaan kapasitas hard disk:</strong>
                    <textarea class="form-control" style="height:150px" name="pemeriksaan_kapasitas_hard_disk" placeholder="pemeriksaan kapasitas hard disk"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>pemeriksaan ups automatic change over facility:</strong>
                    <textarea class="form-control" style="height:150px" name="pemeriksaan_ups_automatic_change_over_facility" placeholder="pemeriksaan ups automatic change over facility"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>pemeriksaan ups expected back up time:</strong>
                    <textarea class="form-control" style="height:150px" name="pemeriksaan_ups_expected_back_up_time" placeholder="pemeriksaan ups expected back up time"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>pemeriksaan ups fan:</strong>
                    <textarea class="form-control" style="height:150px" name="pemeriksaan_ups_fan" placeholder="pemeriksaan ups fan"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>pengujian kinerja secara berkala dengan menggunakan ctp:</strong>
                    <textarea class="form-control" style="height:150px" name="pengujian_kinerja_secara_berkala_dengan_menggunakan_ctp" placeholder="pengujian kinerja secara berkala dengan menggunakan ctp"></textarea>
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

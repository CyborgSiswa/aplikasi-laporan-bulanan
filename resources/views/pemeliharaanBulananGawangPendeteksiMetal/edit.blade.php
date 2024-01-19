@extends('layout.main')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Update Pemeliharaan Bulanan Gawang Pendeteksi Metal</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{route('pemeliharaanBulananGawangPendeteksiMetal.index')}}"> Back</a>
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

    <form action="{{route('pemeliharaanBulananGawangPendeteksiMetal.update',$pemeliharaanbulanangawangpendeteksimetal->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Id Peralatan : </strong>
                    <input type="text"  value="{{$pemeliharaanbulanangawangpendeteksimetal->id_peralatan}}" name="id_peralatan" class="form-control" placeholder="id peralatan">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tanggal:</strong>
                    <textarea class="form-control" value style="height:150px" name="tanggal" placeholder="tanggal">{{$pemeliharaanbulanangawangpendeteksimetal->tanggal}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>pemeriksaan interferensi mekanikal:</strong>
                    <textarea class="form-control" value style="height:150px" name="pemeriksaan_interferensi_mekanikal" placeholder="pemeriksaan interferensi mekanikal">{{$pemeliharaanbulanangawangpendeteksimetal->pemeriksaan_interferensi_mekanikal}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>pemeriksaan interferensi elektrikal:</strong>
                    <textarea class="form-control" value style="height:150px" name="pemeriksaan_interferensi_elektrikal" placeholder="pemeriksaan interferensi elektrikal">{{$pemeliharaanbulanangawangpendeteksimetal->pemeriksaan_interferensi_elektrikal}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                    <strong>pemeriksaan tingkat sensitivitas:</strong>
                    <textarea class="form-control" value style="height:150px" name="pemeriksaan_tingkat_sensitivitas" placeholder="pemeriksaan tingkat sensitivitas">{{$pemeliharaanbulanangawangpendeteksimetal->pemeriksaan_tingkat_sensitivitas}}</textarea>
                </div>
            </div>
             <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>pengujian kinerja secara berkala dengan menggunakan otp:</strong>
                    <textarea class="form-control" value style="height:150px" name="pengujian_kinerja_secara_berkala_dengan_menggunakan_otp" placeholder="pengujian kinerja secara berkala dengan menggunakan otp">{{$pemeliharaanbulanangawangpendeteksimetal->pengujian_kinerja_secara_berkala_dengan_menggunakan_otp}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>pemeriksaan ups automatic change over facility:</strong>
                    <textarea class="form-control" value style="height:150px" name="pemeriksaan_ups_automatic_change_over_facility" placeholder="pemeriksaan ups automatic change over facility">{{$pemeliharaanbulanangawangpendeteksimetal->pemeriksaan_ups_automatic_change_over_facility}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>pemeriksaan ups expected back up time:</strong>
                    <textarea class="form-control" value style="height:150px" name="pemeriksaan_ups_expected_back_up_time" placeholder="pemeriksaan ups expected back up time">{{$pemeliharaanbulanangawangpendeteksimetal->pemeriksaan_ups_expected_back_up_time}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>pemeriksaan ups fan:</strong>
                    <textarea class="form-control" value style="height:150px" name="pemeriksaan_ups_fan" placeholder="pemeriksaan ups fan">{{$pemeliharaanbulanangawangpendeteksimetal->pemeriksaan_ups_fan}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>keterangan:</strong>
                    <textarea class="form-control" value style="height:150px" name="keterangan" placeholder="keterangan">{{$pemeliharaanbulanangawangpendeteksimetal->keterangan}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Id Personil : </strong>
                    <input type="text"  value="{{$pemeliharaanbulanangawangpendeteksimetal->id_personil}}" name="id_personil" class="form-control" placeholder="id personil">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Id Pengawas : </strong>
                    <input type="text"  value="{{$pemeliharaanbulanangawangpendeteksimetal->id_pengawas}}" name="id_pengawas" class="form-control" placeholder="id pengawas">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>created by:</strong>
                    <input class="form-control" style="height:150px" name="created_by" value="{{$pemeliharaanbulanangawangpendeteksimetal->created_by}}" placeholder="created by">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection

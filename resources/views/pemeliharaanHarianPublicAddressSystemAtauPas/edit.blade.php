@extends('layout.main')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Update Pemeliharaan Harian Pas</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{route('pemeliharaanHarianPublicAddressSystemAtauPas.index')}}"> Back</a>
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

    <form action="{{route('pemeliharaanHarianPublicAddressSystemAtauPas.update',$pemeliharaanharianpublicaddresssystemataupas->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Id Peralatan : </strong>
                    <input type="text"  value="{{$pemeliharaanharianpublicaddresssystemataupas->id_peralatan}}" name="id_peralatan" class="form-control" placeholder="id peralatan">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tanggal:</strong>
                    <textarea class="form-control" value style="height:150px" name="tanggal" placeholder="tanggal">{{$pemeliharaanharianpublicaddresssystemataupas->tanggal}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>pemeriksaan kebersihan ruangan rak amplifier:</strong>
                    <textarea class="form-control" value style="height:150px" name="pemeriksaan_kebersihan_ruangan_rak_amplifier" placeholder="pemeriksaan kebersihan ruangan rak amplifier">{{$pemeliharaanharianpublicaddresssystemataupas->pemeriksaan_kebersihan_ruangan_rak_amplifier}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>pemeriksaan uji coba change over unit:</strong>
                    <textarea class="form-control" value style="height:150px" name="pemeriksaan_uji_coba_change_over_unit" placeholder="pemeriksaan uji coba change over unit">{{$pemeliharaanharianpublicaddresssystemataupas->pemeriksaan_uji_coba_change_over_unit}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>pemeriksaan suhu dan kelembaban ruangan:</strong>
                    <textarea class="form-control" value style="height:150px" name="pemeriksaan_suhu_dan_kelembaban_ruangan" placeholder="pemeriksaan suhu dan kelembaban ruangan">{{$pemeliharaanharianpublicaddresssystemataupas->pemeriksaan_suhu_dan_kelembaban_ruangan}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>keterangan:</strong>
                    <textarea class="form-control" value style="height:150px" name="keterangan" placeholder="keterangan">{{$pemeliharaanharianpublicaddresssystemataupas->keterangan}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Id Personil : </strong>
                    <input type="text"  value="{{$pemeliharaanharianpublicaddresssystemataupas->id_personil}}" name="id_personil" class="form-control" placeholder="id personil">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Id Pengawas : </strong>
                    <input type="text"  value="{{$pemeliharaanharianpublicaddresssystemataupas->id_pengawas}}" name="id_pengawas" class="form-control" placeholder="id pengawas">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>created by:</strong>
                    <input class="form-control" style="height:150px" name="created_by" value="{{$pemeliharaanharianpublicaddresssystemataupas->created_by}}" placeholder="created by">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection

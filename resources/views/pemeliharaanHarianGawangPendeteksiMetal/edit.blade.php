@extends('layout.main')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Update Pemeliharaan Harian Gawang Pendeteksi Metal</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{route('pemeliharaanHarianGawangPendeteksiMetal.index')}}"> Back</a>
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

    <form action="{{route('pemeliharaanHarianGawangPendeteksiMetal.update',$pemeliharaanhariangawangpendeteksimetal->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Id Peralatan : </strong>
                    <input type="text"  value="{{$pemeliharaanhariangawangpendeteksimetal->id_peralatan}}" name="id_peralatan" class="form-control" placeholder="id peralatan">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tanggal:</strong>
                    <textarea class="form-control" value style="height:150px" name="tanggal" placeholder="tanggal">{{$pemeliharaanhariangawangpendeteksimetal->tanggal}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>pembersihan main unit:</strong>
                    <textarea class="form-control" value style="height:150px" name="pembersihan_main_unit" placeholder="pembersihan main unit">{{$pemeliharaanhariangawangpendeteksimetal->pembersihan_main_unit}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>pembersihan ups:</strong>
                    <textarea class="form-control" value style="height:150px" name="pembersihan_ups" placeholder="pembersihan ups">{{$pemeliharaanhariangawangpendeteksimetal->pembersihan_ups}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>lokasi sekitar penempatan peralatan:</strong>
                    <textarea class="form-control" value style="height:150px" name="lokasi_sekitar_penempatan_peralatan" placeholder="lokasi sekitar penempatan peralatan">{{$pemeliharaanhariangawangpendeteksimetal->lokasi_sekitar_penempatan_peralatan}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>periksa main supply voltage:</strong>
                    <textarea class="form-control" value style="height:150px" name="periksa_main_supply_voltage" placeholder="periksa main supply voltage">{{$pemeliharaanhariangawangpendeteksimetal->periksa_main_supply_voltage}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>periksa output voltage ups:</strong>
                    <textarea class="form-control" value style="height:150px" name="periksa_output_voltage_ups" placeholder="periksa output voltage ups">{{$pemeliharaanhariangawangpendeteksimetal->periksa_output_voltage_ups}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>pemeriksaan kabel kabel dan konektor yang terlihat:</strong>
                    <textarea class="form-control" value style="height:150px" name="pemeriksaan_kabel_kabel_dan_konektor_yang_terlihat" placeholder="pemeriksaan kabel kabel dan konektor yang terlihat">{{$pemeliharaanhariangawangpendeteksimetal->pemeriksaan_kabel_kabel_dan_konektor_yang_terlihat}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>keterangan:</strong>
                    <textarea class="form-control" value style="height:150px" name="keterangan" placeholder="keterangan">{{$pemeliharaanhariangawangpendeteksimetal->keterangan}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Id Personil : </strong>
                    <input type="text"  value="{{$pemeliharaanhariangawangpendeteksimetal->id_personil}}" name="id_personil" class="form-control" placeholder="id personil">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Id Pengawas : </strong>
                    <input type="text"  value="{{$pemeliharaanhariangawangpendeteksimetal->id_pengawas}}" name="id_pengawas" class="form-control" placeholder="id pengawas">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>created by:</strong>
                    <input class="form-control" style="height:150px" name="created_by" value="{{$pemeliharaanhariangawangpendeteksimetal->created_by}}" placeholder="created by">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection

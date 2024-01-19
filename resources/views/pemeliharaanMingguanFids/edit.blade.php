@extends('layout.main')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Update Pemeliharaan Mingguan Fids</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{route('pemeliharaanMingguanFids.index')}}"> Back</a>
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

    <form action="{{route('pemeliharaanMingguanFids.update',$pemeliharaanmingguanfids->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Id Peralatan : </strong>
                    <input type="text"  value="{{$pemeliharaanmingguanfids->id_peralatan}}" name="id_peralatan" class="form-control" placeholder="id peralatan">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tanggal:</strong>
                    <textarea class="form-control" value style="height:150px" name="tanggal" placeholder="tanggal">{{$pemeliharaanmingguanfids->tanggal}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>pemeriksaan main supply voltage:</strong>
                    <textarea class="form-control" value style="height:150px" name="pemeriksaan_main_supply_voltage" placeholder="pemeriksaan main supply voltage">{{$pemeliharaanmingguanfids->pemeriksaan_main_supply_voltage}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>pemeriksaan output voltage ups:</strong>
                    <textarea class="form-control" value style="height:150px" name="pemeriksaan_output_voltage_ups" placeholder="pemeriksaan output voltage ups">{{$pemeliharaanmingguanfids->pemeriksaan_output_voltage_ups}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>cek koneksi jaringan server dengan client:</strong>
                    <textarea class="form-control" value style="height:150px" name="cek_koneksi_jaringan_server_dengan_client" placeholder="cek koneksi jaringan server dengan client">{{$pemeliharaanmingguanfids->cek_koneksi_jaringan_server_dengan_client}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>cek fids tiap tiap clients:</strong>
                    <textarea class="form-control" value style="height:150px" name="cek_fids_tiap_tiap_clients" placeholder="cek fids tiap tiap clients">{{$pemeliharaanmingguanfids->cek_fids_tiap_tiap_clients}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>pemeriksaan kabel kabel dan konektor yang terlihat:</strong>
                    <textarea class="form-control" value style="height:150px" name="pemeriksaan_kabel_kabel_dan_konektor_yang_terlihat" placeholder="pemeriksaan kabel kabel dan konektor yang terlihat">{{$pemeliharaanmingguanfids->pemeriksaan_kabel_kabel_dan_konektor_yang_terlihat}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>keterangan:</strong>
                    <textarea class="form-control" value style="height:150px" name="keterangan" placeholder="keterangan">{{$pemeliharaanmingguanfids->keterangan}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Id Personil : </strong>
                    <input type="text"  value="{{$pemeliharaanmingguanfids->id_personil}}" name="id_personil" class="form-control" placeholder="id personil">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Id Pengawas : </strong>
                    <input type="text"  value="{{$pemeliharaanmingguanfids->id_pengawas}}" name="id_pengawas" class="form-control" placeholder="id pengawas">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>created by:</strong>
                    <input class="form-control" style="height:150px" name="created_by" value="{{$pemeliharaanmingguanfids->created_by}}" placeholder="created by">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection

@extends('layout.main')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add Pemeliharaan Mingguan Fids</h2>
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

    <form action="{{route('pemeliharaanMingguanFids.store')}}" method="POST">
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
                    <strong>pemeriksaan main supply voltage :</strong>
                    <textarea class="form-control" style="height:150px" name="pemeriksaan_main_supply_voltage" placeholder="pemeriksaan main supply voltage"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>pemeriksaan output voltage ups:</strong>
                    <textarea class="form-control" style="height:150px" name="pemeriksaan_output_voltage_ups" placeholder="pemeriksaan output voltage ups"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>cek koneksi jaringan server dengan client :</strong>
                    <textarea class="form-control" style="height:150px" name="cek_koneksi_jaringan_server_dengan_client" placeholder="cek koneksi jaringan server dengan client"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>cek fids tiap tiap clients :</strong>
                    <textarea class="form-control" style="height:150px" name="cek_fids_tiap_tiap_clients" placeholder="cek fids tiap tiap clients"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>pemeriksaan kabel kabel dan konektor yang terhubung:</strong>
                    <textarea class="form-control" style="height:150px" name="pemeriksaan_kabel_kabel_dan_konektor_yang_terlihat" placeholder="pemeriksaan kabel kabel dan konektor yang terhubung"></textarea>
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

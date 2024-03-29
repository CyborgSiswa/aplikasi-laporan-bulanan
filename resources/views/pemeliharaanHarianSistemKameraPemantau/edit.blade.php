@extends('layout.main')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Update Pemeliharaan Harian Sistem Kamera Pemantau</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{route('pemeliharaanHarianSistemKameraPemantau.index')}}"> Back</a>
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

    <form action="{{route('pemeliharaanHarianSistemKameraPemantau.update',$pemeliharaanhariansistemkamerapemantau->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Id Peralatan : </strong>
                    <input type="text"  value="{{$pemeliharaanhariansistemkamerapemantau->id_peralatan}}" name="id_peralatan" class="form-control" placeholder="id peralatan">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tanggal:</strong>
                    <textarea class="form-control" value style="height:150px" name="tanggal" placeholder="tanggal">{{$pemeliharaanhariansistemkamerapemantau->tanggal}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>pembersihan camera control system:</strong>
                    <textarea class="form-control" value style="height:150px" name="pembersihan_camera_control_system" placeholder="pembersihan camera control system">{{$pemeliharaanhariansistemkamerapemantau->pembersihan_camera_control_system}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>pembersihan monitor:</strong>
                    <textarea class="form-control" value style="height:150px" name="pembersihan_monitor" placeholder="pembersihan monitor">{{$pemeliharaanhariansistemkamerapemantau->pembersihan_monitor}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>pembersihan ups:</strong>
                    <textarea class="form-control" value style="height:150px" name="pembersihan_ups" placeholder="pembersihan ups">{{$pemeliharaanhariansistemkamerapemantau->pembersihan_ups}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>pembersihan ruangan pusat pengendali control center:</strong>
                    <textarea class="form-control" value style="height:150px" name="pembersihan_ruangan_pusat_pengendali_control_center" placeholder="pembersihan ruangan pusat pengendali control center">{{$pemeliharaanhariansistemkamerapemantau->pembersihan_ruangan_pusat_pengendali_control_center}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>pemeriksaan main supply voltage:</strong>
                    <textarea class="form-control" value style="height:150px" name="pemeriksaan_main_supply_voltage" placeholder="pemeriksaan main supply voltage">{{$pemeliharaanhariansistemkamerapemantau->pemeriksaan_main_supply_voltage}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>pemeriksaan output voltage ups:</strong>
                    <textarea class="form-control" value style="height:150px" name="pemeriksaan_output_voltage_ups" placeholder="pemeriksaan output voltage ups">{{$pemeliharaanhariansistemkamerapemantau->pemeriksaan_output_voltage_ups}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>pembersihan kabel kabel dan konektor yang terlihat:</strong>
                    <textarea class="form-control" value style="height:150px" name="pembersihan_kabel_kabel_dan_konektor_yang_terlihat" placeholder="pembersihan kabel kabel dan konektor yang terlihat">{{$pemeliharaanhariansistemkamerapemantau->pembersihan_kabel_kabel_dan_konektor_yang_terlihat}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>keterangan:</strong>
                    <textarea class="form-control" value style="height:150px" name="keterangan" placeholder="keterangan">{{$pemeliharaanhariansistemkamerapemantau->keterangan}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Id Personil : </strong>
                    <input type="text"  value="{{$pemeliharaanhariansistemkamerapemantau->id_personil}}" name="id_personil" class="form-control" placeholder="id personil">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Id Pengawas : </strong>
                    <input type="text"  value="{{$pemeliharaanhariansistemkamerapemantau->id_pengawas}}" name="id_pengawas" class="form-control" placeholder="id pengawas">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>created by:</strong>
                    <input class="form-control" style="height:150px" name="created_by" value="{{$pemeliharaanhariansistemkamerapemantau->created_by}}" placeholder="created by">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection

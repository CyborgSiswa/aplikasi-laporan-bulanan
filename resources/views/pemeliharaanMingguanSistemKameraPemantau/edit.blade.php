@extends('layout.main')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Update Pemeliharaan Mingguan Sistem Kamera Pemantau</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{route('pemeliharaanMingguanSistemKameraPemantau.index')}}"> Back</a>
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

    <form action="{{route('pemeliharaanMingguanSistemKameraPemantau.update',$pemeliharaanmingguansistemkamerapemantau->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Id Peralatan : </strong>
                    <input type="text"  value="{{$pemeliharaanmingguansistemkamerapemantau->id_peralatan}}" name="id_peralatan" class="form-control" placeholder="id peralatan">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tanggal:</strong>
                    <textarea class="form-control" value style="height:150px" name="tanggal" placeholder="tanggal">{{$pemeliharaanmingguansistemkamerapemantau->tanggal}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>pemeriksaan fungsi auto recording:</strong>
                    <textarea class="form-control" value style="height:150px" name="pemeriksaan_fungsi_auto_recording" placeholder="pemeriksaan fungsi auto recording">{{$pemeliharaanmingguansistemkamerapemantau->pemeriksaan_fungsi_auto_recording}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>pemeriksaan fungsi manual recording:</strong>
                    <textarea class="form-control" value style="height:150px" name="pemeriksaan_fungsi_manual_recording" placeholder="pemeriksaan fungsi manual recording">{{$pemeliharaanmingguansistemkamerapemantau->pemeriksaan_fungsi_manual_recording}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>pemeriksaan fungsi pengendali pan tilt zoom:</strong>
                    <textarea class="form-control" value style="height:150px" name="pemeriksaan_fungsi_pengendali_pan_tilt_zoom" placeholder="pemeriksaan fungsi pengendali pan tilt zoom">{{$pemeliharaanmingguansistemkamerapemantau->pemeriksaan_fungsi_pengendali_pan_tilt_zoom}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>pemeriksaan fungsi pengendali multiscreen display:</strong>
                    <textarea class="form-control" value style="height:150px" name="pemeriksaan_fungsi_pengendali_multiscreen_display" placeholder="pemeriksaan fungsi pengendali multiscreen display">{{$pemeliharaanmingguansistemkamerapemantau->pemeriksaan_fungsi_pengendali_multiscreen_display}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>pemeriksaan fungsi pengendali monitor selector area:</strong>
                    <textarea class="form-control" value style="height:150px" name="pemeriksaan_fungsi_pengendali_monitor_selector_area" placeholder="pemeriksaan fungsi pengendali monitor selector area">{{$pemeliharaanmingguansistemkamerapemantau->pemeriksaan_fungsi_pengendali_monitor_selector_area}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>keterangan:</strong>
                    <textarea class="form-control" value style="height:150px" name="keterangan" placeholder="keterangan">{{$pemeliharaanmingguansistemkamerapemantau->keterangan}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Id Personil : </strong>
                    <input type="text"  value="{{$pemeliharaanmingguansistemkamerapemantau->id_personil}}" name="id_personil" class="form-control" placeholder="id personil">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Id Pengawas : </strong>
                    <input type="text"  value="{{$pemeliharaanmingguansistemkamerapemantau->id_pengawas}}" name="id_pengawas" class="form-control" placeholder="id pengawas">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>created by:</strong>
                    <input class="form-control" style="height:150px" name="created_by" value="{{$pemeliharaanmingguansistemkamerapemantau->created_by}}" placeholder="created by">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection

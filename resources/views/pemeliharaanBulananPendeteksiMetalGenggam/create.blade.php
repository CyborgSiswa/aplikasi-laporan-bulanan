@extends('layout.main')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add Pemeliharaan Bulanan Pendeteksi Metal Genggam</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{route('pemeliharaanBulananPendeteksiMetalGenggam.index')}}"> Back</a>
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

    <form action="{{route('pemeliharaanBulananPendeteksiMetalGenggam.store')}}" method="POST">
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
                    <strong>pengujian sensitivitas:</strong>
                    <textarea class="form-control" style="height:150px" name="pengujian_sensitivitas" placeholder="pengujian sensitivitas"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>pengujian kinerja secara berkala dengan otp:</strong>
                    <textarea class="form-control" style="height:150px" name="pengujian_kinerja_secara_berkala_dengan_otp" placeholder="pengujian kinerja secara berkala dengan otp"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>pemeriksaan peralatan dari kerusakan fisik:</strong>
                    <textarea class="form-control" style="height:150px" name="pemeriksaan_peralatan_dari_kerusakan_fisik" placeholder="pemeriksaan peralatan dari kerusakan fisik"></textarea>
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
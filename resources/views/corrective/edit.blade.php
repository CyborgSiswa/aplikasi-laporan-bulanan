@extends('layout.main')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Update Corrective</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{route('corrective.index')}}"> Back</a>
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

    <form action="{{route('corrective.update',$corrective->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Id Peralatan : </strong>
                    <input type="text"  value="{{$corrective->id_peralatan}}" name="id_peralatan" class="form-control" placeholder="id peralatan">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tanggal Mulai Kerusakan:</strong>
                    <textarea class="form-control" value style="height:150px" name="tanggal_mulai_kerusakan" placeholder="tanggal mulai kerusakan">{{$corrective->tanggal_mulai_kerusakan}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tanggal Selesai Perbaikan:</strong>
                    <textarea class="form-control" value style="height:150px" name="tanggal_selesai_perbaikan" placeholder="tanggal selesai perbaikan">{{$corrective->tanggal_selesai_perbaikan}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Simbol:</strong>
                    <textarea class="form-control" value style="height:150px" name="simbol" placeholder="simbol">{{$corrective->simbol}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Bagian Kerusakan:</strong>
                    <textarea class="form-control" value style="height:150px" name="bagian_kerusakan" placeholder="bagian kerusakan">{{$corrective->bagian_kerusakan}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Kategori Kerusakan:</strong>
                    <textarea class="form-control" value style="height:150px" name="kategori_kerusakan" placeholder="kategori kerusakan">{{$corrective->kategori_kerusakan}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tindakan:</strong>
                    <textarea class="form-control" value style="height:150px" name="tindakan" placeholder="tindakan">{{$corrective->tindakan}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Keterangan:</strong>
                    <textarea class="form-control" value style="height:150px" name="keterangan" placeholder="keterangan">{{$corrective->keterangan}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>created by:</strong>
                    <input class="form-control" style="height:150px" name="created_by" value="{{$corrective->created_by}}" placeholder="created by">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection

@extends('layout.main')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Update Master Peralatan</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{route('masterPeralatan.index')}}"> Back</a>
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

    <form action="{{route('masterPeralatan.update',$masterperalatan->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>id peralatan : </strong>
                    <input type="text"  value="{{$masterperalatan->id_peralatan}}" name="id_peralatan" class="form-control" placeholder="id peralatan">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>nama peralatan:</strong>
                    <textarea class="form-control" value style="height:150px" name="nama_peralatan" placeholder="nama peralatan">{{$masterperalatan->nama_peralatan}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>lokasi: </strong>
                    <input type="text"  value="{{$masterperalatan->lokasi}}" name="lokasi" class="form-control" placeholder="lokasi">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>total jam terputus:</strong>
                    <textarea class="form-control" value style="height:150px" name="total_jam_terputus" placeholder="total jam terputus">{{$masterperalatan->total_jam_terputus}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Id Fasilitas : </strong>
                    <input type="text"  value="{{$masterperalatan->id_fasilitas}}" name="id_fasilitas" class="form-control" placeholder="id fasilitas">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>foto:</strong>
                    <textarea class="form-control" value style="height:150px" name="foto" placeholder="foto">{{$masterperalatan->foto}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>created by:</strong>
                    <input class="form-control" style="height:150px" name="created_by" value="{{$masterperalatan->created_by}}" placeholder="created by">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection

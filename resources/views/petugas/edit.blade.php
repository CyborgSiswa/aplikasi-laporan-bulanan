@extends('layout.main')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Update Data Personil</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{route('petugas.index')}}"> Back</a>
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

    <form action="{{route('petugas.update',$petugas->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama : </strong>
                    <input type="text"  value="{{$petugas->nama}}" name="nama" class="form-control" placeholder="nama">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nik:</strong>
                    <textarea class="form-control" value style="height:150px" name="nik" placeholder="nik">{{$petugas->nik}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>kode jabatan : </strong>
                    <input type="text"  value="{{$petugas->kode_jabatan}}" name="kode_jabatan" class="form-control" placeholder="kode jabatan">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Jabatan:</strong>
                    <textarea class="form-control" value style="height:150px" name="jabatan" placeholder="jabatan">{{$petugas->jabatan}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>kode cabang : </strong>
                    <input type="text"  value="{{$petugas->kode_cabang}}" name="kode_cabang" class="form-control" placeholder="kode_cabang">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>bandara:</strong>
                    <textarea class="form-control" value style="height:150px" name="bandara" placeholder="bandara">{{$petugas->bandara}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>unit kerja : </strong>
                    <input type="text"  value="{{$petugas->unit_kerja}}" name="unit_kerja" class="form-control" placeholder="unit_kerja">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Email:</strong>
                    <textarea class="form-control" value style="height:150px" name="email" placeholder="email">{{$petugas->email}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>No_Hp : </strong>
                    <input type="text"  value="{{$petugas->no_hp}}" name="no_hp" class="form-control" placeholder="no hp">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>foto:</strong>
                    <textarea class="form-control" value style="height:150px" name="foto" placeholder="foto">{{$petugas->foto}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>created by:</strong>
                    <input class="form-control" style="height:150px" name="created_by" value="{{$petugas->created_by}}" placeholder="created by">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection

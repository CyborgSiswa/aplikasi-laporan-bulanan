@extends('layout.main')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Update Attachment Corrective</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{route('attachmentCorrective.index')}}"> Back</a>
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

    <form action="{{route('attachmentCorrective.update',$attachmentcorrective->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Id Corrective : </strong>
                    <input type="text"  value="{{$attachmentcorrective->id_corrective}}" name="id_corrective" class="form-control" placeholder="Id Corrective">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>foto:</strong>
                    <textarea class="form-control" value style="height:150px" name="foto" placeholder="foto">{{$attachmentcorrective->foto}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>created by:</strong>
                    <input class="form-control" style="height:150px" name="created_by" value="{{$attachmentcorrective->created_by}}" placeholder="created by">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection

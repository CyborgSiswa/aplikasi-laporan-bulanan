@extends('layout.main')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Attachment Corrective</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('attachmentCorrective.create')}}"> Create Attachment Corrective</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Id Corrective</th>
            <th>Foto</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($attachmentcorrectives as $attachmentcorrective)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $attachmentcorrective->id_corrective }}</td>
                <td>{{ $attachmentcorrective->foto }}</td>
                <td>
                    <form action="#" method="POST">

                        <a class="btn btn-info" href="#">Show</a>

                        <a class="btn btn-primary" href="{{route('attachmentCorrective.edit',$attachmentcorrective->id)}}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $attachmentcorrectives->links() !!}
@endsection

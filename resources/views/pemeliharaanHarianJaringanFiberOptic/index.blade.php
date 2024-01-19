@extends('layout.main')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Pemeliharaan Jaringan  Fiber Optic</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('pemeliharaanHarianJaringanFiberOptic.create')}}"> Create Pemeliharaan Harian Jaringan Fiber Optic</a>
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
            <th>Id Peralatan</th>
            <th>Tanggal</th>
            <th>melakukan test ping jaringan kesetiap perangkat yang terhubung</th>
            <th>keterangan</th>
            <th>id personil</th>
            <th>id pengawas</th> 
            <th width="280px">Action</th>
        </tr>
        @foreach ($pemeliharaanharianjaringanfiberoptices as $pemeliharaanharianjaringanfiberoptic)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $pemeliharaanharianjaringanfiberoptic->id_peralatan }}</td>
                <td>{{ $pemeliharaanharianjaringanfiberoptic->tanggal }}</td>
                <td>{{ $pemeliharaanharianjaringanfiberoptic->melakukan_test_ping_jaringan_kesetiap_perangkat_yang_terhubung}}</td>
                <td>{{ $pemeliharaanharianjaringanfiberoptic->keterangan}}</td>
                <td>{{ $pemeliharaanharianjaringanfiberoptic->id_personil }}</td>
                <td>{{ $pemeliharaanharianjaringanfiberoptic->id_pengawas }}</td>
                <td>
                    <form action="#" method="POST">

                        <a class="btn btn-info" href="#">Show</a>

                        <a class="btn btn-primary" href="{{route('pemeliharaanHarianJaringanFiberOptic.edit',$pemeliharaanharianjaringanfiberoptic->id)}}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $pemeliharaanharianjaringanfiberoptices->links() !!}
@endsection

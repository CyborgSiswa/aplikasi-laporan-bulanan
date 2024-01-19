@extends('layout.main')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Pemeliharaan Bulanan Jaringan Fiber Optic</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('pemeliharaanBulananJaringanFiberOptic.create')}}"> Create Pemeliharaan Bulanan Jaringan Fiber Optic</a>
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
            <th>pengecekan join closure</th>
            <th>pemeriksaan secara patroli fiber optic tanah</th>
            <th>keterangan</th>
            <th>id personil</th>
            <th>id pengawas</th> <th>No</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($pemeliharaanbulananjaringanfiberoptices as $pemeliharaanbulananjaringanfiberoptic)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $pemeliharaanbulananjaringanfiberoptic->id_peralatan }}</td>
                <td>{{ $pemeliharaanbulananjaringanfiberoptic->tanggal }}</td>
                <td>{{ $pemeliharaanbulananjaringanfiberoptic->pengecekan_join_closurepemeriksaan_kabel_coaxial }}</td>
                <td>{{ $pemeliharaanbulananjaringanfiberoptic->pemeriksaan_secara_patroli_fiber_optic_tanah}}</td>
                <td>{{ $pemeliharaanbulananjaringanfiberoptic->keterangan }}</td>
                <td>{{ $pemeliharaanbulananjaringanfiberoptic->id_personil }}</td>
                <td>{{ $pemeliharaanbulananjaringanfiberoptic->id_pengawas }}</td>
                <td>
                    <form action="#" method="POST">

                        <a class="btn btn-info" href="#">Show</a>

                        <a class="btn btn-primary" href="{{route('pemeliharaanBulananJaringanFiberOptic.edit',$pemeliharaanbulananjaringanfiberoptic->id)}}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $pemeliharaanbulananjaringanfiberoptices->links() !!}
@endsection

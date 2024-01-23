@extends('layout.main')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Pemeliharaan Harian Igcs</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('pemeliharaanHarianIgcs.create')}}"> Create Pemeliharaan Harian Igcs</a>
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
            <th>pembersihan seluruh peralatan ht</th>
            <th>pembersihan ruangan control</th>
            <th>pembersihan suhu dan ruangan control</th>
            <th>mengisi dan mencharger baterai ht bila baterai off</th>
            <th>jangan mengisi secara terus menerus bila baterai full</th>
            <th>pembersihan bagian luar site control </th>
            <th>pembersihan bagian luar base control</th>
            <th>pembersihan bagian luar site manager</th>
            <th>keterangan</th>
            <th>id personil</th>
            <th>id pengawas</th> 
            <th width="280px">Action</th>
        </tr>
        @foreach ($pemeliharaanharianigcses as $pemeliharaanharianigcs)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $pemeliharaanharianigcs->id_peralatan }}</td>
                <td>{{ $pemeliharaanharianigcs->tanggal }}</td>
                <td>{{ $pemeliharaanharianigcs->pembersihan_seluruh_peralatan_ht}}</td>
                <td>{{ $pemeliharaanharianigcs->pembersihan_ruangan_control }}</td>
                <td>{{ $pemeliharaanharianigcs->pembersihan_suhu_dan_ruangan_control}}</td>
                <td>{{ $pemeliharaanharianigcs->mengisi_dan_mencharger_baterai_ht_bila_baterai_off }}</td>
                <td>{{ $pemeliharaanharianigcs->jangan_mengisi_secara_terus_menerus_bila_baterai_full}}</td>
                <td>{{ $pemeliharaanharianigcs->pembersihan_bagian_luar_site_control }}</td>
                <td>{{ $pemeliharaanharianigcs->pembersihan_bagian_luar_base_control}}</td>
                <td>{{ $pemeliharaanharianigcs->pembersihan_bagian_luar_site_manager }}</td>
                <td>{{ $pemeliharaanharianigcs->keterangan}}</td>
                <td>{{ $pemeliharaanharianigcs->id_personil }}</td>
                <td>{{ $pemeliharaanharianigcs->id_pengawas }}</td>
                <td>
                    <form action="#" method="POST">

                        <a class="btn btn-info" href="#">Show</a>

                        <a class="btn btn-primary" href="{{route('pemeliharaanHarianIgcs.edit',$pemeliharaanharianigcs->id)}}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $pemeliharaanharianigcses->links() !!}
@endsection

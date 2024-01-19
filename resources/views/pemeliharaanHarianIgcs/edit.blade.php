@extends('layout.main')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Update Pemeliharaan Harian Igcs</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{route('pemeliharaanHarianIgcs.index')}}"> Back</a>
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

    <form action="{{route('pemeliharaanHarianIgcs.update',$pemeliharaanharianigcs->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Id Peralatan : </strong>
                    <input type="text"  value="{{$pemeliharaanharianigcs->id_peralatan}}" name="id_peralatan" class="form-control" placeholder="id peralatan">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tanggal:</strong>
                    <textarea class="form-control" value style="height:150px" name="tanggal" placeholder="tanggal">{{$pemeliharaanharianigcs->tanggal}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>pembersihan seluruh peralatan ht:</strong>
                    <textarea class="form-control" value style="height:150px" name="pembersihan_seluruh_peralatan_ht" placeholder="pembersihan seluruh peralatan ht">{{$pemeliharaanharianigcs->pembersihan_seluruh_peralatan_ht}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>pembersihan ruangan control:</strong>
                    <textarea class="form-control" value style="height:150px" name="pembersihan_ruangan_control" placeholder="pembersihan ruangan control">{{$pemeliharaanharianigcs->pembersihan_ruangan_control}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>pembersihan suhu dan ruangan control:</strong>
                    <textarea class="form-control" value style="height:150px" name="pembersihan_suhu_dan_ruangan_control" placeholder="pembersihan suhu dan ruangan control">{{$pemeliharaanharianigcs->pembersihan_suhu_dan_ruangan_control}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>mengisi dan mencharger baterai ht bila baterai off:</strong>
                    <textarea class="form-control" value style="height:150px" name="mengisi_dan_mencharger_baterai_ht_bila_baterai_off" placeholder="mengisi dan mencharger baterai ht bila baterai off">{{$pemeliharaanharianigcs->mengisi_dan_mencharger_baterai_ht_bila_baterai_off}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>jangan mengisi secara terus menerus bila baterai full:</strong>
                    <textarea class="form-control" value style="height:150px" name="jangan_mengisi__secara_terus_menerus_bila_baterai_full" placeholder="jangan mengisi secara terus menerus bila baterai full">{{$pemeliharaanharianigcs->jangan_mengisi__secara_terus_menerus_bila_baterai_full}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>pembersihan bagian luar site control:</strong>
                    <textarea class="form-control" value style="height:150px" name="pembersihan_bagian_luar_site_control" placeholder="pembersihan bagian luar site control">{{$pemeliharaanharianigcs->pembersihan_bagian_luar_site_control}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>pembersihan bagian luar base control:</strong>
                    <textarea class="form-control" value style="height:150px" name="pembersihan_bagian_luar_base_control" placeholder="pembersihan bagian luar base control">{{$pemeliharaanharianigcs->pembersihan_bagian_luar_base_control}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>pembersihan bagian luar site manager:</strong>
                    <textarea class="form-control" value style="height:150px" name="pembersihan_bagian_luar_site_manager" placeholder="pembersihan bagian luar site manager">{{$pemeliharaanharianigcs->pembersihan_bagian_luar_site_manager}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>keterangan:</strong>
                    <textarea class="form-control" value style="height:150px" name="keterangan" placeholder="keterangan">{{$pemeliharaanharianigcs->keterangan}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Id Personil : </strong>
                    <input type="text"  value="{{$pemeliharaanharianigcs->id_personil}}" name="id_personil" class="form-control" placeholder="id personil">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Id Pengawas : </strong>
                    <input type="text"  value="{{$pemeliharaanharianigcs->id_pengawas}}" name="id_pengawas" class="form-control" placeholder="id pengawas">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>created by:</strong>
                    <input class="form-control" style="height:150px" name="created_by" value="{{$pemeliharaanharianigcs->created_by}}" placeholder="created by">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection

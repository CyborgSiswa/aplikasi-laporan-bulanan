@extends('layout.main')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Pemeliharaan Harian Public Address System Atau Pas</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('pemeliharaanHarianPublicAddressSystemAtauPas.create')}}"> Create Pemeliharaan Harian Public Address System Atau Pas</a>
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
            <th>pemeriksaan kebersihan ruangan rak amplifier</th>
            <th>pemeriksaan uji coba change over unit</th>
            <th>pemeriksaan suhu dan kelembaban ruangan</th>
            <th>keterangan</th>
            <th>id personil</th>
            <th>id pengawas</th> 
            <th width="280px">Action</th>
        </tr>
        @foreach ($pemeliharaanharianpublicaddresssystemataupases as $pemeliharaanharianpublicaddresssystemataupas)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $pemeliharaanharianpublicaddresssystemataupas->id_peralatan }}</td>
                <td>{{ $pemeliharaanharianpublicaddresssystemataupas->tanggal }}</td>
                <td>{{ $pemeliharaanharianpublicaddresssystemataupas->pemeriksaan_kebersihan_ruangan_rak_amplifier}}</td>
                <td>{{ $pemeliharaanharianpublicaddresssystemataupas->pemeriksaan_uji_coba_change_over_unit}}</td>
                <td>{{ $pemeliharaanharianpublicaddresssystemataupas->pemeriksaan_suhu_dan_kelembaban_ruangan}}</td>
                <td>{{ $pemeliharaanharianpublicaddresssystemataupas->keterangan}}</td>
                <td>{{ $pemeliharaanharianpublicaddresssystemataupas->id_personil }}</td>
                <td>{{ $pemeliharaanharianpublicaddresssystemataupas->id_pengawas }}</td>
                <td>
                    <form action="#" method="POST">

                        <a class="btn btn-info" href="#">Show</a>

                        <a class="btn btn-primary" href="{{route('pemeliharaanHarianPublicAddressSystemAtauPas.edit',$pemeliharaanharianpublicaddresssystemataupas->id)}}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $pemeliharaanharianpublicaddresssystemataupases->links() !!}
@endsection

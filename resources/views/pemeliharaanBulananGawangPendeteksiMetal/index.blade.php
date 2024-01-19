@extends('layout.main')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Pemeliharaan Bulanan Gawang Pendeteksi Metal</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('pemeliharaanBulananGawangPendeteksiMetal.create')}}"> Create Pemeliharaan Bulanan Gawang Pendeteksi Metal</a>
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
            <th>pemeriksaan interferensi mekanikal</th>
            <th>pemeriksaan interferensi elektrikal</th>
            <th>pemeriksaan tingkat sensitivitas</th>
            <th>pengujian kinerja secara berkala dengan menggunakan otp</th>
            <th>pemeriksaan ups automatic change over facility</th>
            <th>pemeriksaan ups expected back up time</th>
            <th>pemeriksaan ups fan</th>
            <th>keterangan</th>
            <th>id personil</th>
            <th>id pengawas</th> 
            <th width="280px">Action</th>
        </tr>
        @foreach ($pemeliharaanbulanangawangpendeteksimetales as $pemeliharaanbulanangawangpendeteksimetal)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $pemeliharaanbulanangawangpendeteksimetal->id_peralatan }}</td>
                <td>{{ $pemeliharaanbulanangawangpendeteksimetal->tanggal }}</td>
                <td>{{ $pemeliharaanbulanangawangpendeteksimetal->pemeriksaan_interferensi_mekanikal }}</td>
                <td>{{ $pemeliharaanbulanangawangpendeteksimetal->pemeriksaan_interferensi_elektrikal }}</td>
                <td>{{ $pemeliharaanbulanangawangpendeteksimetal->pemeriksaan_tingkat_sensitivitas }}</td>
                <td>{{ $pemeliharaanbulanangawangpendeteksimetal->pengujian_kinerja_secara_berkala_dengan_menggunakan_otp }}</td>
                <td>{{ $pemeliharaanbulanangawangpendeteksimetal->pemeriksaan_ups_automatic_change_over_facility }}</td>
                <td>{{ $pemeliharaanbulanangawangpendeteksimetal->pemeriksaan_ups_expected_back_up_time }}</td>
                <td>{{ $pemeliharaanbulanangawangpendeteksimetal->pemeriksaan_ups_fan }}</td>
                <td>{{ $pemeliharaanbulanangawangpendeteksimetal->keterangan }}</td>
                <td>{{ $pemeliharaanbulanangawangpendeteksimetal->id_personil }}</td>
                <td>{{ $pemeliharaanbulanangawangpendeteksimetal->id_pengawas }}</td>
                <td>
                    <form action="#" method="POST">

                        <a class="btn btn-info" href="#">Show</a>

                        <a class="btn btn-primary" href="{{route('pemeliharaanBulananGawangPendeteksiMetal.edit',$pemeliharaanbulanangawangpendeteksimetal->id)}}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $pemeliharaanbulanangawangpendeteksimetales->links() !!}
@endsection

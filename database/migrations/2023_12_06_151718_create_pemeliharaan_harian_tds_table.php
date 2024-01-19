<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemeliharaanHarianTdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemeliharaan_harian_tds', function (Blueprint $table) {
            $table->id();
            $table-> string ('id_peralatan');
            $table-> string ('tanggal');
            $table-> string ('pembersihan_ruangan_peralatan_server_tds');
            $table-> string ('periksa_suhu_dan_kelembaban_ruangan_peralatan_server_tds');
            $table-> string ('pembersihan_bagian_luar_peralatan_tds');
            $table-> string ('keterangan');   
            $table-> string ('id_personil');     
            $table-> string ('id_pengawas');   
            $table->integer ('created_by');
            $table->integer ('updated_by')->nullable();;
            $table->integer ('deleted_by')->nullable();;
            $table->softDeletes ();     
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pemeliharaan_harian_tds');
    }
}

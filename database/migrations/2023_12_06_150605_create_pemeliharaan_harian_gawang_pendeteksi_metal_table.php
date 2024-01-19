<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemeliharaanHarianGawangPendeteksiMetalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemeliharaan_harian_gawang_pendeteksi_metal', function (Blueprint $table) {
            $table->id();
            $table-> string ('id_peralatan');
            $table-> string  ('tanggal');
            $table-> string ('pembersihan_main_unit');
            $table-> string ('pembersihan_ups');
            $table-> string ('lokasi_sekitar_penempatan_peralatan');
            $table-> string ('periksa_main_supply_voltage');
            $table-> string ('periksa_output_voltage_ups');
            $table-> string ('pemeriksaan_kabel_kabel_dan_konektor_yang_terlihat');
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
        Schema::dropIfExists('pemeliharaan_harian_gawang_pendeteksi_metal');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemeliharaanBulananGawangPendeteksiMetalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemeliharaan_bulanan_gawang_pendeteksi_metal', function (Blueprint $table) {
            $table->id();
            $table-> string ('id_peralatan');
            $table-> string  ('tanggal');
            $table-> string('pemeriksaan_interferensi_mekanikal');
            $table-> string('pemeriksaan_interferensi_elektrikal');
            $table-> string('pemeriksaan_tingkat_sensitivitas');
            $table-> string('pengujian_kinerja_secara_berkala_dengan_menggunakan_otp');
            $table-> string('pemeriksaan_ups_automatic_change_over_facility');
            $table-> string('pemeriksaan_ups_expected_back_up_time');
            $table-> string('pemeriksaan_ups_fan');
           
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
        Schema::dropIfExists('pemeliharaan_bulanan_gawang_pendeteksi_metal');
    }
}

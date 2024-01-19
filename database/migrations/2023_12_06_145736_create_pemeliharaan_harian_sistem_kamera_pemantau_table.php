<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemeliharaanHarianSistemKameraPemantauTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemeliharaan_harian_sistem_kamera_pemantau', function (Blueprint $table) {
            $table->id();
            $table-> string ('id_peralatan');
            $table-> string  ('tanggal');
            $table-> string('pembersihan_camera_control_system');
            $table-> string('pembersihan_monitor');
            $table-> string('pembersihan_ups');
            $table-> string('pembersihan_ruangan_pusat_pengendali_control_center');
            $table-> string('pemeriksaan_main_supply_voltage');
            $table-> string('pemeriksaan_output_voltage_ups');
            $table-> string('pembersihan_kabel_kabel_dan_konektor_yang_terlihat');
            $table-> string ('keterangan');   
            $table-> string ('id_personil');     
            $table-> string ('id_pengawas');   
            $table->integer ('created_by');
            $table->integer ('updated_by')->nullable();;;
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
        Schema::dropIfExists('pemeliharaan_harian_sistem_kamera_pemantau');
    }
}

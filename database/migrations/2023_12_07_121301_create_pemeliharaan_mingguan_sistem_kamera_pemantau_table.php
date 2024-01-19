<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemeliharaanMingguanSistemKameraPemantauTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemeliharaan_mingguan_sistem_kamera_pemantau', function (Blueprint $table) {
            $table->id();
            $table-> string ('id_peralatan');
            $table-> string  ('tanggal');
            $table-> string('pemeriksaan_fungsi_auto_recording');
            $table-> string('pemeriksaan_fungsi_manual_recording');
            $table-> string('pemeriksaan_fungsi_pengendali_pan_tilt_zoom');
            $table-> string('pemeriksaan_fungsi_pengendali_multiscreen_display');
            $table-> string('pemeriksaan_fungsi_pengendali_monitor_selector_area');
            
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
        Schema::dropIfExists('pemeliharaan_mingguan_sistem_kamera_pemantau');
    }
}

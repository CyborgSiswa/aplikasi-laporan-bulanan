<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemeliharaanMingguanPendeteksiMetalGenggamTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemeliharaan_mingguan_pendeteksi_metal_genggam', function (Blueprint $table) {
            $table->id();
            $table-> string ('id_peralatan');
            $table-> string  ('tanggal');
            $table-> string('pemeriksaan_fungsi_switch_atau_tombol_on_off');
            $table-> string('pemeriksaan_alert_system_audible');
            $table-> string('pemeriksaan_alert_system_visible');

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
        Schema::dropIfExists('pemeliharaan_mingguan_pendeteksi_metal_genggam');
    }
}

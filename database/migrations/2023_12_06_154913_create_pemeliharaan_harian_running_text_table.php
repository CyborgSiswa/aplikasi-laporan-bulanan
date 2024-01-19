<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemeliharaanHarianRunningTextTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemeliharaan_harian_running_text', function (Blueprint $table) {
            $table->id();
            $table-> string ('id_peralatan');
            $table-> string  ('tanggal');
            $table-> string('periksa_perangkat_dan_pastikan_dalam_keadaan_normal');
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
        Schema::dropIfExists('pemeliharaan_harian_running_text');
    }
}

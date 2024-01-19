<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemeliharaanBulananConferenceSystemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemeliharaan_bulanan_conference_system', function (Blueprint $table) {
            $table->id();
            $table-> string ('id_peralatan');
            $table-> string ('tanggal');
            $table-> string('bersihkan_housing_perangkat_amplifier_cpsu_dan_microphpne_unit');
            $table-> string('bersihkan_bagian_belakang_cpsu_dan_sambungan_kabel');
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
        Schema::dropIfExists('pemeliharaan_bulanan_conference_system');
    }
}

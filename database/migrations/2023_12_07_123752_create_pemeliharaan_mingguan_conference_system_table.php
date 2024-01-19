<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemeliharaanMingguanConferenceSystemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemeliharaan_mingguan_conference_system', function (Blueprint $table) {
            $table->id();
            $table-> string ('id_peralatan');
            $table-> string ('tanggal');
            $table-> string('periksa_arus_outputnya');
            $table-> string('periksa_dan_bersihkan_konektor_yang_terhubung');
            $table-> string('periksa_kabel_yang_terhubung');

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
        Schema::dropIfExists('pemeliharaan_mingguan_conference_system');
    }
}

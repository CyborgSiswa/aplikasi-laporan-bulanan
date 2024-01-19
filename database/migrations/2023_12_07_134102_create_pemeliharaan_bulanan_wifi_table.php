<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemeliharaanBulananWifiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemeliharaan_bulanan_wifi', function (Blueprint $table) {
            $table->id();
            $table-> string ('id_peralatan');
            $table-> string ('tanggal');
            $table-> string('periksa_kondisi_port_utp_kabel_pada_modem_dan_access_switch');
           
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
        Schema::dropIfExists('pemeliharaan_bulanan_wifi');
    }
}

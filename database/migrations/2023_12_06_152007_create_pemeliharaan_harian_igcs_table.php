<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemeliharaanHarianIgcsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemeliharaan_harian_igcs', function (Blueprint $table) {
            $table->id();
            $table-> string ('id_peralatan');
            $table-> string ('tanggal');
            $table-> string ('pembersihan_seluruh_peralatan_ht');
            $table-> string ('pembersihan_ruangan_control');
            $table-> string ('pembersihan_suhu_dan_ruangan_control');
            $table-> string ('mengisi_dan_mencharger_baterai_ht_bila_baterai_off');
            $table-> string ('jangan_mengisi_secara_terus_menerus_bila_baterai_full');
            $table-> string ('pembersihan_bagian_luar_site_control');
            $table-> string ('pembersihan_bagian_luar_base_control');
            $table-> string ('pembersihan_bagian_luar_site_manager');
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
        Schema::dropIfExists('pemeliharaan_harian_igcs');
    }
}

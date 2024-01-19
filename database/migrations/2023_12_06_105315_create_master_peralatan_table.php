<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterPeralatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_peralatan', function (Blueprint $table) {
            $table->id();
            $table-> string ('id_peralatan');
            $table-> string ('nama_peralatan');
            $table-> string ('lokasi');
            $table-> string ('merk')->nullable();
            $table-> string ('data_teknik')->nullable();
            $table-> integer('tahun_produksi')->nullable();
            $table-> string ('buatan')->nullable();
            $table-> string ('keterangan')->nullable();
            $table-> string ('total_jam_terputus');
            $table-> string ('id_fasilitas');
            $table-> string ('foto');
            $table->integer ('created_by');
            $table->integer ('updated_by')->nullable();
            $table->integer ('deleted_by')->nullable();
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
        Schema::dropIfExists('master_peralatan');
    }
}

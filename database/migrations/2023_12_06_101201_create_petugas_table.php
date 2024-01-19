<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetugasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('petugas', function (Blueprint $table) {
            $table->id();
            $table->string ('id_petugas');
            $table->string ('nama');
            $table->string ('nik');
            $table->string ('kode_jabatan');
            $table->string ('jabatan');
            $table->string ('kode_cabang');
            $table->string ('bandara');
            $table->string ('unit_kerja');
            $table->string ('nomor_license_dkp')->nullable();;
            $table->string ('tingkat_license_dkp')->nullable();;
            $table->string ('rating_dkp')->nullable();;
            $table->date ('tmt_rating_dkp')->nullable();;
            $table->date ('sd_rating_dkp')->nullable();;
            $table->string ('status_dkp')->nullable();;
            $table->string ('nomor_license_dbu')->nullable();;
            $table->string ('tingkat_license_dbu')->nullable();;
            $table->string ('rating_dbu')->nullable();;
            $table->date ('tmt_rating_dbu')->nullable();;
            $table->date ('sd_rating_dbu')->nullable();;
            $table->string ('status_dbu')->nullable();;
            $table->string ('nomor_sib_ppr')->nullable();
            $table->date ('tmt_ppr')->nullable();;
            $table->date ('sd_ppr')->nullable();;
            $table->string ('status_ppr')->nullable();;
            $table->string ('email');
            $table->string ('no_hp');
            $table->string ('foto');
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
        Schema::dropIfExists('petugas');
    }
}

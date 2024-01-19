<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogHarianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('log_harian', function (Blueprint $table) {
            $table->id();
            $table-> string ('id_petugas');
            $table-> string ('id_log_harian');
            $table-> string  ('tanggal');
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
        Schema::dropIfExists('log_harian');
    }
}

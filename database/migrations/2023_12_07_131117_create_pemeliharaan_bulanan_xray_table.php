<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemeliharaanBulananXrayTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemeliharaan_bulanan_xray', function (Blueprint $table) {
            $table->id();
            $table-> string ('id_peralatan');
            $table-> string ('tanggal');
            $table-> string('pemeriksaan_function_test_organic_dan_inorganic_stripping');
            $table-> string('pemeriksaan_function_test_zoom_in_zoom_out');
            $table-> string('pemeriksaan_function_test_black_and_white_image');
            $table-> string('pemeriksaan_function_test_image_density_hight_resolution');
            $table-> string('pemeriksaan_function_test_automatic_threat_detection_system');
            $table-> string('pemeriksaan_function_test_threat_image_projection');
            $table-> string('pemeriksaan_function_test_image_archives_atau_image_recall');
            $table-> string('pemeriksaan_kapasitas_hard_disk');
            $table-> string('pemeriksaan_ups_automatic_change_over_facility');
            $table-> string('pemeriksaan_ups_expected_back_up_time');
            $table-> string('pemeriksaan_ups_fan');
            $table-> string('pengujian_kinerja_secara_berkala_dengan_menggunakan_ctp');
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
        Schema::dropIfExists('pemeliharaan_bulanan_xray');
    }
}

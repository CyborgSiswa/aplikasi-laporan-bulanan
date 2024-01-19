<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemeliharaanHarianXrayTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemeliharaan_harian_xray', function (Blueprint $table) {
            $table->id();
            $table-> string ('id_peralatan');
            $table-> string  ('tanggal');
            $table-> string ('pemeriksaan_lead_curtain');
            $table-> string ('pemeriksaan_lead_shielding'); 
            $table-> string ('pemeriksaan_conveyor_belt'); 
            $table-> string ('pemeriksaan_conveyor_roller');
            $table-> string ('pemeriksaan_housing_panel');
            $table-> string ('pemeriksaan_kabel_kabel_dan_konektor_yang_terlihat');
            $table-> string ('unit_bagian_luar');   
            $table-> string ('monitor');     
            $table-> string ('ups'); 
            $table-> string ('lokasi_sekitar_peralatan_x_ray'); 
            $table-> string ('key_switch'); 
            $table-> string ('power_on_off_key'); 
            $table-> string ('emergency_stop_keys');  
            $table-> string ('tuts_key_keyboard'); 
            $table-> string ('mouse_pad_mouse_roller');  
            $table-> string ('forward_atau_reverse');    
            $table-> string ('main_input_voltage'); 
            $table-> string ('output_voltage_ups'); 
            $table-> string ('power_on_lamp'); 
            $table-> string ('x_ray_generator_on_lamp');
            $table-> string ('pemeriksaan_safety_rollers_atau_spring_roller');
            $table-> string ('tombol_pengendali_monitor');   
            $table-> string ('brightness');     
            $table-> string ('sharpness');                                          
            $table-> string ('contrast');  
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
        Schema::dropIfExists('pemeliharaan_harian_xray');
    }
}

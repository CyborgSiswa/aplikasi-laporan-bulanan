<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemeliharaan_Harian_Xray extends Model
{
    use HasFactory;
    protected $table='pemeliharaan_harian_xray';
    protected $fillable = [
        'id_peralatan','tanggal','pemeriksaan_lead_curtain','pemeriksaan_lead_shielding','pemeriksaan_conveyor_belt','pemeriksaan_conveyor_roller','pemeriksaan_housing_panel','pemeriksaan_kabel_kabel_dan_konektor_yang_terlihat','unit_bagian_luar','monitor','ups','lokasi_sekitar_peralatan_x_ray','key_switch','power_on_off_key','emergency_stop_keys','tuts_key_keyboard','mouse_pad_mouse_roller','forward_atau_reverse','main_input_voltage','output_voltage_ups','power_on_lamp','x_ray_generator_on_lamp','pemeriksaan_safety_rollers_atau_spring_roller','tombol_pengendali_monitor','brightness','sharpness','contrast','keterangan','id_personil','id_pengawas','created_by','updated_by','deleted_by'
    ];
    public function MasterPeralatan(){
        return $this->hasOne(Master_Peralatan::class,'id','id_peralatan');
    }
}

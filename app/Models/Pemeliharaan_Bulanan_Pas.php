<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemeliharaan_Bulanan_Pas extends Model
{
    use HasFactory;
    protected $table='pemeliharaan_bulanan_pas';
    protected $fillable = [
        'id_peralatan','tanggal','pemeriksaan_setiap_zone_group_speaker_amplifier','pemeriksaan_kondisi_motor_roller_coupling_vcd_atau_cd_player','pemeriksaan_kondisi_optik_lensa_vcd_atau_cd_player','pemeriksaan_kondisi_mikrofon_dan_push_button_desk','keterangan','id_personil','id_pengawas','created_by','updated_by','deleted_by'
    ];
    public function MasterPeralatan(){
        return $this->hasOne(Master_Peralatan::class,'id','id_peralatan');
    }
}

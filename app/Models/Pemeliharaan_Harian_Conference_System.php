<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemeliharaan_Harian_Conference_System extends Model
{
    use HasFactory;
    protected $table='pemeliharaan_harian_conference_system';
    protected $fillable = [
        'id_peralatan','tanggal','periksa_kondisi_fisik_microphone_dan_amplifier','test_output_dari_microphone','keterangan','id_personil','id_pengawas','created_by','updated_by','deleted_by'
    ];
    public function MasterPeralatan(){
        return $this->hasOne(Master_Peralatan::class,'id','id_peralatan');
    }
}

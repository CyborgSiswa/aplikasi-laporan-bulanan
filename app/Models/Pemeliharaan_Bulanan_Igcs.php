<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemeliharaan_Bulanan_Igcs extends Model
{
    use HasFactory;
    protected $table='pemeliharaan_bulanan_igcs';
    protected $fillable = [
        'id_peralatan','tanggal','pemeriksaan_kabel_coaxial','pemeriksaan_modul_modul_ht_maupun_transceiver','pemeriksaan_software_program_operasi','pemeriksaan_modul_modul_site_controller_dan_base_station','keterangan','id_personil','id_pengawas','created_by','updated_by','deleted_by'
    ];
    public function MasterPeralatan(){
        return $this->hasOne(Master_Peralatan::class,'id','id_peralatan');
    }
}

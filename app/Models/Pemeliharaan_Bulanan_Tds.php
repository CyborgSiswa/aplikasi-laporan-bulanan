<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemeliharaan_Bulanan_Tds extends Model
{
    use HasFactory;
    protected $table='pemeliharaan_bulanan_tds';
    protected $fillable = [
        'id_peralatan','tanggal','pemeriksaan_kebersihan_server_dan_network','pemeriksaan_fungsi_ups','pemeriksaan_gps_dan_setting_timezone','pemeriksaan_kebersihan_digital_clock','keterangan','id_personil','id_pengawas','created_by','updated_by','deleted_by'
    ];
    public function MasterPeralatan(){
        return $this->hasOne(Master_Peralatan::class,'id','id_peralatan');
    }
}

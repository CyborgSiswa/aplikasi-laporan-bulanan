<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemeliharaan_Harian_Wifi extends Model
{
    use HasFactory;
    protected $table='pemeliharaan_harian_wifi';
    protected $fillable = [
        'id_peralatan','tanggal','periksa_nyala_lampu_modem_dan_access_point','periksa_ketersediaan_ssid','keterangan','id_personil','id_pengawas','created_by','updated_by','deleted_by'
    ];
    public function MasterPeralatan(){
        return $this->hasOne(Master_Peralatan::class,'id','id_peralatan');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemeliharaan_Bulanan_Wifi extends Model
{
    use HasFactory;
    protected $table='pemeliharaan_bulanan_wifi';
    protected $fillable = [
        'id_peralatan','tanggal','periksa_kondisi_port_utp_kabel_pada_modem_dan_access_switch','keterangan','id_personil','id_pengawas','created_by','updated_by','deleted_by'
    ];
    public function MasterPeralatan(){
        return $this->hasOne(Master_Peralatan::class,'id','id_peralatan');
    }
}

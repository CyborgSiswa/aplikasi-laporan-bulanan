<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemeliharaan_Mingguan_Xray extends Model
{
    use HasFactory;
    protected $table='pemeliharaan_mingguan_xray';
    protected $fillable = [
        'id_peralatan','tanggal','pembersihan_dan_pemeriksaan_light_barriers','pemeriksaan_protective_earth_wiring','pemeriksaan_emergency_stop_switches','keterangan','id_personil','id_pengawas','created_by','updated_by','deleted_by'
    ];
    public function MasterPeralatan(){
        return $this->hasOne(Master_Peralatan::class,'id','id_peralatan');
    }
}

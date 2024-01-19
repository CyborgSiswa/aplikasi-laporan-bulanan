<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemeliharaan_Mingguan_Igcs extends Model
{
    use HasFactory;
    protected $table='pemeliharaan_mingguan_igcs';
    protected $fillable = [
        'id_peralatan','tanggal','pemeriksaan_atau_pengukuran_voltage_power_supply','pemeriksaan_konektor_konektor','keterangan','id_personil','id_pengawas','created_by','updated_by','deleted_by'
    ];
    public function MasterPeralatan(){
        return $this->hasOne(Master_Peralatan::class,'id','id_peralatan');
    }
}

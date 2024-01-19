<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemeliharaan_Mingguan_Pabx extends Model
{
    use HasFactory;
    protected $table='pemeliharaan_mingguan_pabx';
    protected $fillable = [
        'id_peralatan','tanggal','pembersihan_seluruh_head_set','pemeriksaan_atau_pengukuran_voltage_battery','keterangan','id_personil','id_pengawas','created_by','updated_by','deleted_by'
    ];
    public function MasterPeralatan(){
        return $this->hasOne(Master_Peralatan::class,'id','id_peralatan');
    }
}

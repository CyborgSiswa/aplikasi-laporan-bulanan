<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemeliharaan_Mingguan_Tds extends Model
{
    use HasFactory;
    protected $table='pemeliharaan_mingguan_tds';
    protected $fillable = [
        'id_peralatan','tanggal','pemeriksaan_power_supply_220_vac','pemeriksaan_dan_pembersihan_konektor_konektor','pemeriksaan_fungsi_software_tds','keterangan','id_personil','id_pengawas','created_by','updated_by','deleted_by'
    ];
    public function MasterPeralatan(){
        return $this->hasOne(Master_Peralatan::class,'id','id_peralatan');
    }
}

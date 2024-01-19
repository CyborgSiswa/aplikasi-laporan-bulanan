<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemeliharaan_Mingguan_Wifi extends Model
{
    use HasFactory;
    protected $table='pemeliharaan_mingguan_wifi';
    protected $fillable = [
        'id_peralatan','tanggal','periksa_bandwidth_wifi','keterangan','id_personil','id_pengawas','created_by','updated_by','deleted_by'
    ];
    public function MasterPeralatan(){
        return $this->hasOne(Master_Peralatan::class,'id','id_peralatan');
    }
}

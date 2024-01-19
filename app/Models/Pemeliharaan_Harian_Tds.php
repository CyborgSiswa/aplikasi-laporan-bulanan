<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemeliharaan_Harian_Tds extends Model
{
    use HasFactory;
    protected $table='pemeliharaan_harian_tds';
    protected $fillable = [
        'id_peralatan','tanggal','pembersihan_ruangan_peralatan_server_tds','periksa_suhu_dan_kelembaban_ruangan_peralatan_server_tds','pembersihan_bagian_luar_peralatan_tds','keterangan','id_personil','id_pengawas','created_by','updated_by','deleted_by'
    ];
    public function MasterPeralatan(){
        return $this->hasOne(Master_Peralatan::class,'id','id_peralatan');
    }
}

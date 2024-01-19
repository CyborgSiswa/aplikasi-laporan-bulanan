<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemeliharaan_Bulanan_Running_Text extends Model
{
    use HasFactory;
    protected $table='pemeliharaan_bulanan_running_text';
    protected $fillable = [
        'id_peralatan','tanggal','pembersihan_dan_pemeriksaan_led','pemeriksaan_control_elements','pemeriksaan_perangkat_dari_kerusakan_fisik','keterangan','id_personil','id_pengawas','created_by','updated_by','deleted_by'
    ];
    public function MasterPeralatan(){
        return $this->hasOne(Master_Peralatan::class,'id','id_peralatan');
    }
}

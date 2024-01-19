<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemeliharaan_Harian_Running_Text extends Model
{
    use HasFactory;
    protected $table='pemeliharaan_harian_running_text';
    protected $fillable = [
        'id_peralatan','tanggal','periksa_perangkat_dan_pastikan_dalam_keadaan_normal','keterangan','id_personil','id_pengawas','created_by','updated_by','deleted_by'
    ];
    public function MasterPeralatan(){
        return $this->hasOne(Master_Peralatan::class,'id','id_peralatan');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemeliharaan_Mingguan_Access_Control extends Model
{
    use HasFactory;
    protected $table='pemeliharaan_mingguan_access_control';
    protected $fillable = [
        'id_peralatan','tanggal','pemeriksaan_fungsi_lock_door','pemeriksaan_buzzer','keterangan','id_personil','id_pengawas','created_by','updated_by','deleted_by'
    ];
    public function MasterPeralatan(){
        return $this->hasOne(Master_Peralatan::class,'id','id_peralatan');
    }
}

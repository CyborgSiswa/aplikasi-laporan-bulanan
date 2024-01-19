<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemeliharaan_Bulanan_Jaringan_Fiber_Optic extends Model
{
    use HasFactory;
    protected $table='pemeliharaan_bulanan_jaringan_fiber_optic';
    protected $fillable = [
        'id_peralatan','tanggal','pengecekan_join_closure','pemeriksaan_secara_patroli_fiber_optic_tanah','keterangan','id_personil','id_pengawas','created_by','updated_by','deleted_by'
    ];
    public function MasterPeralatan(){
        return $this->hasOne(Master_Peralatan::class,'id','id_peralatan');
    }
}

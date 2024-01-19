<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemeliharaan_Harian_Jaringan_Fiber_Optic extends Model
{
    use HasFactory;
    protected $table='pemeliharaan_harian_jaringan_fiber_optic';
    protected $fillable = [
        'id_peralatan','tanggal','melakukan_test_ping_jaringan_kesetiap_perangkat_yang_terhubung','keterangan','id_personil','id_pengawas','created_by','updated_by','deleted_by'
    ];
    public function MasterPeralatan(){
        return $this->hasOne(Master_Peralatan::class,'id','id_peralatan');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemeliharaan_Mingguan_Conference_System extends Model
{
    use HasFactory;
    protected $table='pemeliharaan_mingguan_conference_system';
    protected $fillable = [
        'id_peralatan','tanggal','periksa_arus_outputnya','periksa_dan_bersihkan_konektor_yang_terhubung','periksa_kabel_yang_terhubung','keterangan','id_personil','id_pengawas','created_by','updated_by','deleted_by'
    ];
    public function MasterPeralatan(){
        return $this->hasOne(Master_Peralatan::class,'id','id_peralatan');
    }
}

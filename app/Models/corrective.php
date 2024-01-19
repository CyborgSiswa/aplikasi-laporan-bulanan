<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class corrective extends Model
{
    use HasFactory;
    protected $table='corrective';
    protected $fillable = [
        'id_peralatan','tanggal_mulai_kerusakan','tanggal_selesai_perbaikan','simbol','bagian_kerusakan','kategori_kerusakan','tindakan','keterangan','created_by','updated_by','deleted_by'
    ];
    public function MasterPeralatan(){
        return $this->hasOne(Master_Peralatan::class,'id','id_peralatan');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemeliharaan_Harian_Igcs extends Model
{
    use HasFactory;
    protected $table='pemeliharaan_harian_igcs';
    protected $fillable = [
        'id_peralatan','tanggal','pembersihan_seluruh_peralatan_ht','pembersihan_ruangan_control','pembersihan_suhu_dan_ruangan_control','mengisi_dan_mencharger_baterai_ht_bila_baterai_off','jangan_mengisi_secara_terus_menerus_bila_baterai_full','pembersihan_bagian_luar_site_control','pembersihan_bagian_luar_base_control','pembersihan_bagian_luar_site_manager','keterangan','id_personil','id_pengawas','created_by','updated_by','deleted_by'
    ];
    public function MasterPeralatan(){
        return $this->hasOne(Master_Peralatan::class,'id','id_peralatan');
    }
}

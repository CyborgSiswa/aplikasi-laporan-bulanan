<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemeliharaan_Mingguan_Pas extends Model
{
    use HasFactory;
    protected $table='pemeliharaan_mingguan_pas';
    protected $fillable = [
        'id_peralatan','tanggal','pemeriksaan_main_supply_voltage','pemeriksaan_output_voltage_ups','keterangan','id_personil','id_pengawas','created_by','updated_by','deleted_by'
    ];
    public function MasterPeralatan(){
        return $this->hasOne(Master_Peralatan::class,'id','id_peralatan');
    }
}

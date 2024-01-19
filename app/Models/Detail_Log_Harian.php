<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_Log_Harian extends Model
{
    use HasFactory;
    protected $table='detail_log_harian';
    protected $fillable = [
        'id_log_harian','pekerjaan','status','created_by','updated_by','deleted_by'
    ];
    public function LogHarian(){
        return $this->hasOne(Log_Harian::class,'id','id_log_harian');
    }
    
}

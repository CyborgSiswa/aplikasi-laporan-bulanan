<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attachment_Corrective extends Model
{
    use HasFactory;
    protected $table='attachment_corrective';
    protected $fillable = [
        'id_corrective','foto','created_by','updated_by','deleted_by'
    ];
    public function Corrective(){
        return $this->hasOne(Corrective::class,'id','id_corrective');
    }
    
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    use HasFactory;
    protected $table='petugas';
    protected $fillable = [
        'id_petugas','nama','nik','kode_jabatan','jabatan','kode_cabang','bandara','unit_kerja','nomor_license_dkp','tingkat_license_dkp','rating_dkp','tmt_rating_dkp','sd_rating_dkp','status_dkp','nomor_license_dbu','tingkat_license_dbu','rating_dbu','tmt_rating_dbu','sd_rating_dbu','status_dbu','nomor_sib_ppr','tmt_ppr','sd_ppr','status_ppr','email','no_hp','foto','created_by','updated_by','deleted_by'
    ];
}

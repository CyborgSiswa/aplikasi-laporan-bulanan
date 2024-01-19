<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemeliharaan_Bulanan_Xray extends Model
{
    use HasFactory;
    protected $table='pemeliharaan_bulanan_xray';
    protected $fillable = [
        'id_peralatan','tanggal','pemeriksaan_function_test_organic_dan_inorganic_stripping','pemeriksaan_function_test_zoom_in_zoom_out','pemeriksaan_function_test_black_and_white_image','pemeriksaan_function_test_image_density_hight_resolution','pemeriksaan_function_test_automatic_threat_detection_system','pemeriksaan_function_test_threat_image_projection','pemeriksaan_function_test_image_archives_atau_image_recall','pemeriksaan_kapasitas_hard_disk','pemeriksaan_ups_automatic_change_over_facility','pemeriksaan_ups_expected_back_up_time','pemeriksaan_ups_fan','pengujian_kinerja_secara_berkala_dengan_menggunakan_ctp','keterangan','id_personil','id_pengawas','created_by','updated_by','deleted_by'
    ];
    public function MasterPeralatan(){
        return $this->hasOne(Master_Peralatan::class,'id','id_peralatan');
    }
}

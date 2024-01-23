<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\MasterFasilitasController;
use App\Http\Controllers\MasterPeralatanController;
use App\Http\Controllers\CorrectiveController;
use App\Http\Controllers\AttachmentCorrectiveController;
use App\Http\Controllers\LogHarianController;
use App\Http\Controllers\DetailLogHarianController;
use App\Http\Controllers\PemeliharaanHarianXrayController;
use App\Http\Controllers\PemeliharaanHarianSistemKameraPemantauController;
use App\Http\Controllers\PemeliharaanHarianPendeteksiMetalGenggamController;
use App\Http\Controllers\PemeliharaanHarianFireDetectionAlarmSystemController;
use App\Http\Controllers\PemeliharaanHarianGawangPendeteksiMetalController;
use App\Http\Controllers\PemeliharaanHarianPublicAddressSystemAtauPasController;
use App\Http\Controllers\PemeliharaanHarianFidsController;
use App\Http\Controllers\PemeliharaanHarianTdsController;
use App\Http\Controllers\PemeliharaanHarianPabxController;
use App\Http\Controllers\PemeliharaanHarianIgcsController;
use App\Http\Controllers\PemeliharaanHarianAccessControlController;
use App\Http\Controllers\PemeliharaanHarianJaringanFiberOpticController;
use App\Http\Controllers\PemeliharaanHarianWifiController;
use App\Http\Controllers\PemeliharaanHarianConferenceSystemController;
use App\Http\Controllers\PemeliharaanHarianRunningTextController;
use App\Http\Controllers\PemeliharaanMingguanXrayController;
use App\Http\Controllers\PemeliharaanMingguanSistemKameraPemantauController;
use App\Http\Controllers\PemeliharaanMingguanPendeteksiMetalGenggamController;
use App\Http\Controllers\PemeliharaanMingguanGawangPendeteksiMetalController;
use App\Http\Controllers\PemeliharaanMingguanFireDetectionAlarmSystemController;
use App\Http\Controllers\PemeliharaanMingguanPasController;
use App\Http\Controllers\PemeliharaanMingguanFidsController;
use App\Http\Controllers\PemeliharaanMingguanTdsController;
use App\Http\Controllers\PemeliharaanMingguanPabxController;
use App\Http\Controllers\PemeliharaanMingguanIgcsController;
use App\Http\Controllers\PemeliharaanMingguanAccessControlController;
use App\Http\Controllers\PemeliharaanMingguanJaringanFiberOpticController;
use App\Http\Controllers\PemeliharaanMingguanWifiController;
use App\Http\Controllers\PemeliharaanMingguanConferenceSystemController;
use App\Http\Controllers\PemeliharaanMingguanRunningTextController;
use App\Http\Controllers\PemeliharaanBulananXrayController;
use App\Http\Controllers\PemeliharaanBulananSistemKameraPemantauController;
use App\Http\Controllers\PemeliharaanBulananPendeteksiMetalGenggamController;
use App\Http\Controllers\PemeliharaanBulananGawangPendeteksiMetalController;
use App\Http\Controllers\PemeliharaanBulananFireDetectionAlarmSystemController;
use App\Http\Controllers\PemeliharaanBulananPasController;
use App\Http\Controllers\PemeliharaanBulananFidsController;
use App\Http\Controllers\PemeliharaanBulananTdsController;
use App\Http\Controllers\PemeliharaanBulananPabxController;
use App\Http\Controllers\PemeliharaanBulananIgcsController;
use App\Http\Controllers\PemeliharaanBulananAccessControlController;
use App\Http\Controllers\PemeliharaanBulananJaringanFiberOpticController;
use App\Http\Controllers\PemeliharaanBulananWifiController;
use App\Http\Controllers\PemeliharaanBulananRunningTextController;
use App\Http\Controllers\PemeliharaanBulananConferenceSystemController;
use App\Http\Controllers\api\AuthController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('auth')->group(function(){
    // Login route
    Route::post('login', [AuthController::class, 'login']);
    // Registration route
    Route::post('register', [AuthController::class, 'postRegistration']);
});
Route::prefix('petugas')->group(function(){
    Route::get('/',[PetugasController::class,'index']);
    Route::post('/create',[PetugasController::class,'store']);
    Route::post('/update/{id}',[PetugasController::class,'update']);
    Route::post('/delete/{id}',[PetugasController::class,'destroy']);
});
Route::prefix('master-fasilitas')->group(function(){
    Route::get('/',[MasterFasilitasController::class,'index']);
    Route::post('/create',[MasterFasilitasController::class,'store']);
    Route::post('/update/{id}',[MasterFasilitasController::class,'update']);
    Route::post('/delete/{id}',[MasterFasilitasController::class,'destroy']);
});
Route::prefix('master-peralatan')->group(function(){
    Route::get('/',[MasterPeralatanController::class,'index']);
    Route::post('/create',[MasterPeralatanController::class,'store']);
    Route::post('/update/{id}',[MasterPeralatanController::class,'update']);
    Route::post('/delete/{id}',[MasterPeralatanController::class,'destroy']);
});
Route::prefix('corrective')->group(function(){
    Route::get('/',[CorrectiveController::class,'index']);
    Route::post('/create',[CorrectiveController::class,'store']);
    Route::post('/update/{id}',[CorrectiveController::class,'update']);
    Route::post('/delete/{id}',[CorrectiveController::class,'destroy']);
});
Route::prefix('attachment-corrective')->group(function(){
    Route::get('/',[AttachmentCorrectiveController::class,'index']);
    Route::post('/create',[AttachmentCorrectiveController::class,'store']);
    Route::post('/update/{id}',[AttachmentCorrectiveController::class,'update']);
    Route::post('/delete/{id}',[AttachmentCorrectiveController::class,'destroy']);
});
Route::prefix('log-harian')->group(function(){
    Route::get('/',[LogHarianController::class,'index']);
    Route::post('/create',[LogHarianController::class,'store']);
    Route::post('/update/{id}',[LogHarianController::class,'update']);
    Route::post('/delete/{id}',[LogHarianController::class,'destroy']);
});
Route::prefix('detail-log-harian')->group(function(){
    Route::get('/',[DetailLogHarianController::class,'index']);
    Route::post('/create',[DetailLogHarianController::class,'store']);
    Route::post('/update/{id}',[DetailLogHarianController::class,'update']);
    Route::post('/delete/{id}',[DetailLogHarianController::class,'destroy']);
});
Route::prefix('pemeliharaan-harian-xray')->group(function(){
    Route::get('/',[PemeliharaanHarianXrayController::class,'index']);
    Route::post('/create',[PemeliharaanHarianXrayController::class,'store']);
    Route::post('/update/{id}',[PemeliharaanHarianXrayController::class,'update']);
    Route::post('/delete/{id}',[PemeliharaanHarianXrayController::class,'destroy']);
});
Route::prefix('pemeliharaan-harian-sistem-kamera-pemantau')->group(function(){
    Route::get('/',[PemeliharaanHarianSistemKameraPemantauController::class,'index']);
    Route::post('/create',[PemeliharaanHarianSistemKameraPemantauController::class,'store']);
    Route::post('/update/{id}',[PemeliharaanHarianSistemKameraPemantauController::class,'update']);
    Route::post('/delete/{id}',[PemeliharaanHarianSistemKameraPemantauController::class,'destroy']);
});
Route::prefix('pemeliharaan-harian-pendeteksi-metal-genggam')->group(function(){
    Route::get('/',[PemeliharaanHarianPendeteksiMetalGenggamController::class,'index']);
    Route::post('/create',[PemeliharaanHarianPendeteksiMetalGenggamController::class,'store']);
    Route::post('/update/{id}',[PemeliharaanHarianPendeteksiMetalGenggamController::class,'update']);
    Route::post('/delete/{id}',[PemeliharaanHarianPendeteksiMetalGenggamController::class,'destroy']);
});
Route::prefix('pemeliharaan-harian-fire-detection-alarm-system')->group(function(){
    Route::get('/',[PemeliharaanHarianFireDetectionAlarmSystemController::class,'index']);
    Route::post('/create',[PemeliharaanHarianFireDetectionAlarmSystemController::class,'store']);
    Route::post('/update/{id}',[PemeliharaanHarianFireDetectionAlarmSystemController::class,'update']);
    Route::post('/delete/{id}',[PemeliharaanHarianFireDetectionAlarmSystemController::class,'destroy']);
});
Route::prefix('pemeliharaan-harian-gawang-pendeteksi-metal')->group(function(){
    Route::get('/',[PemeliharaanHarianGawangPendeteksiMetalController::class,'index']);
    Route::post('/create',[PemeliharaanHarianGawangPendeteksiMetalController::class,'store']);
    Route::post('/update/{id}',[PemeliharaanHarianGawangPendeteksiMetalController::class,'update']);
    Route::post('/delete/{id}',[PemeliharaanHarianGawangPendeteksiMetalController::class,'destroy']);
});
Route::prefix('pemeliharaan-harian-public-address-system-atau-pas')->group(function(){
    Route::get('/',[PemeliharaanHarianPublicAddressSystemAtauPasController::class,'index']);
    Route::post('/create',[PemeliharaanHarianPublicAddressSystemAtauPasController::class,'store']);
    Route::post('/update/{id}',[PemeliharaanHarianPublicAddressSystemAtauPasController::class,'update']);
    Route::post('/delete/{id}',[PemeliharaanHarianPublicAddressSystemAtauPasController::class,'destroy']);
});
Route::prefix('pemeliharaan-harian-fids')->group(function(){
    Route::get('/',[PemeliharaanHarianFidsController::class,'index']);
    Route::post('/create',[PemeliharaanHarianFidsController::class,'store']);
    Route::post('/update/{id}',[PemeliharaanHarianFidsController::class,'update']);
    Route::post('/delete/{id}',[PemeliharaanHarianFidsController::class,'destroy']);
});
Route::prefix('pemeliharaan-harian-tds')->group(function(){
    Route::get('/',[PemeliharaanHarianTdsController::class,'index']);
    Route::post('/create',[PemeliharaanHarianTdsController::class,'store']);
    Route::post('/update/{id}',[PemeliharaanHarianTdsController::class,'update']);
    Route::post('/delete/{id}',[PemeliharaanHarianTdsController::class,'destroy']);
});
Route::prefix('pemeliharaan-harian-pabx')->group(function(){
    Route::get('/',[PemeliharaanHarianPabxController::class,'index']);
    Route::post('/create',[PemeliharaanHarianPabxController::class,'store']);
    Route::post('/update/{id}',[PemeliharaanHarianPabxController::class,'update']);
    Route::post('/delete/{id}',[PemeliharaanHarianPabxController::class,'destroy']);
});
Route::prefix('pemeliharaan-harian-igcs')->group(function(){
    Route::get('/',[PemeliharaanHarianIgcsController::class,'index']);
    Route::post('/create',[PemeliharaanHarianIgcsController::class,'store']);
    Route::post('/update/{id}',[PemeliharaanHarianIgcsController::class,'update']);
    Route::post('/delete/{id}',[PemeliharaanHarianIgcsController::class,'destroy']);
});
Route::prefix('pemeliharaan-harian-access-control')->group(function(){
    Route::get('/',[PemeliharaanHarianAccessControlController::class,'index']);
    Route::post('/create',[PemeliharaanHarianAccessControlController::class,'store']);
    Route::post('/update/{id}',[PemeliharaanHarianAccessControlController::class,'update']);
    Route::post('/delete/{id}',[PemeliharaanHarianAccessControlController::class,'destroy']);
});
Route::prefix('pemeliharaan-harian-jaringan-fiber-optic')->group(function(){
    Route::get('/',[PemeliharaanHarianJaringanFiberOpticController::class,'index']);
    Route::post('/create',[PemeliharaanHarianJaringanFiberOpticController::class,'store']);
    Route::post('/update/{id}',[PemeliharaanHarianJaringanFiberOpticController::class,'update']);
    Route::post('/delete/{id}',[PemeliharaanHarianJaringanFiberOpticController::class,'destroy']);
});
Route::prefix('pemeliharaan-harian-wifi')->group(function(){
    Route::get('/',[PemeliharaanHarianWifiController::class,'index']);
    Route::post('/create',[PemeliharaanHarianWifiController::class,'store']);
    Route::post('/update/{id}',[PemeliharaanHarianWifiController::class,'update']);
    Route::post('/delete/{id}',[PemeliharaanHarianWifiController::class,'destroy']);
});
Route::prefix('pemeliharaan-harian-conference-system')->group(function(){
    Route::get('/',[PemeliharaanHarianConferenceSystemController::class,'index']);
    Route::post('/create',[PemeliharaanHarianConferenceSystemController::class,'store']);
    Route::post('/update/{id}',[PemeliharaanHarianConferenceSystemController::class,'update']);
    Route::post('/delete/{id}',[PemeliharaanHarianConferenceSystemController::class,'destroy']);
});
Route::prefix('pemeliharaan-harian-running-text')->group(function(){
    Route::get('/',[PemeliharaanHarianRunningTextController::class,'index']);
    Route::post('/create',[PemeliharaanHarianRunningTextController::class,'store']);
    Route::post('/update/{id}',[PemeliharaanHarianRunningTextController::class,'update']);
    Route::post('/delete/{id}',[PemeliharaanHarianRunningTextController::class,'destroy']);
});
Route::prefix('pemeliharaan-mingguan-xray')->group(function(){
    Route::get('/',[PemeliharaanMingguanXrayController::class,'index']);
    Route::post('/create',[PemeliharaanMingguanXrayController::class,'store']);
    Route::post('/update/{id}',[PemeliharaanMingguanXrayController::class,'update']);
    Route::post('/delete/{id}',[PemeliharaanMingguanXrayController::class,'destroy']);
});
Route::prefix('pemeliharaan-mingguan-sistem-kamera-pemantau')->group(function(){
    Route::get('/',[PemeliharaanMingguanSistemKameraPemantauController::class,'index']);
    Route::post('/create',[PemeliharaanMingguanSistemKameraPemantauController::class,'store']);
    Route::post('/update/{id}',[PemeliharaanMingguanSistemKameraPemantauController::class,'update']);
    Route::post('/delete/{id}',[PemeliharaanMingguanSistemKameraPemantauController::class,'destroy']);
});
Route::prefix('pemeliharaan-mingguan-pendeteksi-metal-genggam')->group(function(){
    Route::get('/',[PemeliharaanMingguanPendeteksiMetalGenggamController::class,'index']);
    Route::post('/create',[PemeliharaanMingguanPendeteksiMetalGenggamController::class,'store']);
    Route::post('/update/{id}',[PemeliharaanMingguanPendeteksiMetalGenggamController::class,'update']);
    Route::post('/delete/{id}',[PemeliharaanMingguanPendeteksiMetalGenggamController::class,'destroy']);
});
Route::prefix('pemeliharaan-mingguan-gawang-pendeteksi-metal')->group(function(){
    Route::get('/',[PemeliharaanMingguanGawangPendeteksiMetalController::class,'index']);
    Route::post('/create',[PemeliharaanMingguanGawangPendeteksiMetalController::class,'store']);
    Route::post('/update/{id}',[PemeliharaanMingguanGawangPendeteksiMetalController::class,'update']);
    Route::post('/delete/{id}',[PemeliharaanMingguanGawangPendeteksiMetalController::class,'destroy']);
});
Route::prefix('pemeliharaan-mingguan-fire-detection-alarm-system')->group(function(){
    Route::get('/',[PemeliharaanMingguanFireDetectionAlarmSystemController::class,'index']);
    Route::post('/create',[PemeliharaanMingguanFireDetectionAlarmSystemController::class,'store']);
    Route::post('/update/{id}',[PemeliharaanMingguanFireDetectionAlarmSystemController::class,'update']);
    Route::post('/delete/{id}',[PemeliharaanMingguanFireDetectionAlarmSystemController::class,'destroy']);
});
Route::prefix('pemeliharaan-mingguan-pas')->group(function(){
    Route::get('/',[PemeliharaanMingguanPasController::class,'index']);
    Route::post('/create',[PemeliharaanMingguanPasController::class,'store']);
    Route::post('/update/{id}',[PemeliharaanMingguanPasController::class,'update']);
    Route::post('/delete/{id}',[PemeliharaanMingguanPasController::class,'destroy']);
});
Route::prefix('pemeliharaan-mingguan-fids')->group(function(){
    Route::get('/',[PemeliharaanMingguanFidsController::class,'index']);
    Route::post('/create',[PemeliharaanMingguanFidsController::class,'store']);
    Route::post('/update/{id}',[PemeliharaanMingguanFidsController::class,'update']);
    Route::post('/delete/{id}',[PemeliharaanMingguanFidsController::class,'destroy']);
});
Route::prefix('pemeliharaan-mingguan-tds')->group(function(){
    Route::get('/',[PemeliharaanMingguanTdsController::class,'index']);
    Route::post('/create',[PemeliharaanMingguanTdsController::class,'store']);
    Route::post('/update/{id}',[PemeliharaanMingguanTdsController::class,'update']);
    Route::post('/delete/{id}',[PemeliharaanMingguanTdsController::class,'destroy']);
});
Route::prefix('pemeliharaan-mingguan-pabx')->group(function(){
    Route::get('/',[PemeliharaanMingguanPabxController::class,'index']);
    Route::post('/create',[PemeliharaanMingguanPabxController::class,'store']);
    Route::post('/update/{id}',[PemeliharaanMingguanPabxController::class,'update']);
    Route::post('/delete/{id}',[PemeliharaanMingguanPabxController::class,'destroy']);
});
Route::prefix('pemeliharaan-mingguan-igcs')->group(function(){
    Route::get('/',[PemeliharaanMingguanIgcsController::class,'index']);
    Route::post('/create',[PemeliharaanMingguanIgcsController::class,'store']);
    Route::post('/update/{id}',[PemeliharaanMingguanIgcsController::class,'update']);
    Route::post('/delete/{id}',[PemeliharaanMingguanIgcsController::class,'destroy']);
});
Route::prefix('pemeliharaan-mingguan-access-control')->group(function(){
    Route::get('/',[PemeliharaanMingguanAccessControlController::class,'index']);
    Route::post('/create',[PemeliharaanMingguanAccessControlController::class,'store']);
    Route::post('/update/{id}',[PemeliharaanMingguanAccessControlController::class,'update']);
    Route::post('/delete/{id}',[PemeliharaanMingguanAccessControlController::class,'destroy']);
});
Route::prefix('pemeliharaan-mingguan-jaringan-fiber-optic')->group(function(){
    Route::get('/',[PemeliharaanMingguanJaringanFiberOpticController::class,'index']);
    Route::post('/create',[PemeliharaanMingguanJaringanFiberOpticController::class,'store']);
    Route::post('/update/{id}',[PemeliharaanMingguanJaringanFiberOpticController::class,'update']);
    Route::post('/delete/{id}',[PemeliharaanMingguanJaringanFiberOpticController::class,'destroy']);
});
Route::prefix('pemeliharaan-mingguan-wifi')->group(function(){
    Route::get('/',[PemeliharaanMingguanWifiController::class,'index']);
    Route::post('/create',[PemeliharaanMingguanWifiController::class,'store']);
    Route::post('/update/{id}',[PemeliharaanMingguanWifiController::class,'update']);
    Route::post('/delete/{id}',[PemeliharaanMingguanWifiController::class,'destroy']);
});
Route::prefix('pemeliharaan-mingguan-conference-system')->group(function(){
    Route::get('/',[PemeliharaanMingguanConferenceSystemController::class,'index']);
    Route::post('/create',[PemeliharaanMingguanConferenceSystemController::class,'store']);
    Route::post('/update/{id}',[PemeliharaanMingguanConferenceSystemController::class,'update']);
    Route::post('/delete/{id}',[PemeliharaanMingguanConferenceSystemController::class,'destroy']);
});
Route::prefix('pemeliharaan-mingguan-running-text')->group(function(){
    Route::get('/',[PemeliharaanMingguanRunningTextController::class,'index']);
    Route::post('/create',[PemeliharaanMingguanRunningTextController::class,'store']);
    Route::post('/update/{id}',[PemeliharaanMingguanRunningTextController::class,'update']);
    Route::post('/delete/{id}',[PemeliharaanMingguanRunningTextController::class,'destroy']);
});
Route::prefix('pemeliharaan-bulanan-xray')->group(function(){
    Route::get('/',[PemeliharaanBulananXrayController::class,'index']);
    Route::post('/create',[PemeliharaanBulananXrayController::class,'store']);
    Route::post('/update/{id}',[PemeliharaanBulananXrayController::class,'update']);
    Route::post('/delete/{id}',[PemeliharaanBulananXrayController::class,'destroy']);
});
Route::prefix('pemeliharaan-bulanan-sistem-kamera-pemantau')->group(function(){
    Route::get('/',[PemeliharaanBulananSistemKameraPemantauController::class,'index']);
    Route::post('/create',[PemeliharaanBulananSistemKameraPemantauController::class,'store']);
    Route::post('/update/{id}',[PemeliharaanBulananSistemKameraPemantauController::class,'update']);
    Route::post('/delete/{id}',[PemeliharaanBulananSistemKameraPemantauController::class,'destroy']);
});
Route::prefix('pemeliharaan-bulanan-pendeteksi-metal-genggam')->group(function(){
    Route::get('/',[PemeliharaanBulananPendeteksiMetalGenggamController::class,'index']);
    Route::post('/create',[PemeliharaanBulananPendeteksiMetalGenggamController::class,'store']);
    Route::post('/update/{id}',[PemeliharaanBulananPendeteksiMetalGenggamController::class,'update']);
    Route::post('/delete/{id}',[PemeliharaanBulananPendeteksiMetalGenggamController::class,'destroy']);
});
Route::prefix('pemeliharaan-bulanan-gawang-pendeteksi-metal')->group(function(){
    Route::get('/',[PemeliharaanBulananGawangPendeteksiMetalController::class,'index']);
    Route::post('/create',[PemeliharaanBulananGawangPendeteksiMetalController::class,'store']);
    Route::post('/update/{id}',[PemeliharaanBulananGawangPendeteksiMetalController::class,'update']);
    Route::post('/delete/{id}',[PemeliharaanBulananGawangPendeteksiMetalController::class,'destroy']);
});
Route::prefix('pemeliharaan-bulanan-fire-detection-alarm-system')->group(function(){
    Route::get('/',[PemeliharaanBulananFireDetectionAlarmSystemController::class,'index']);
    Route::post('/create',[PemeliharaanBulananFireDetectionAlarmSystemController::class,'store']);
    Route::post('/update/{id}',[PemeliharaanBulananFireDetectionAlarmSystemController::class,'update']);
    Route::post('/delete/{id}',[PemeliharaanBulananFireDetectionAlarmSystemController::class,'destroy']);
});
Route::prefix('pemeliharaan-bulanan-pas')->group(function(){
    Route::get('/',[PemeliharaanBulananPasController::class,'index']);
    Route::post('/create',[PemeliharaanBulananPasController::class,'store']);
    Route::post('/update/{id}',[PemeliharaanBulananPasController::class,'update']);
    Route::post('/delete/{id}',[PemeliharaanBulananPasController::class,'destroy']);
});
Route::prefix('pemeliharaan-bulanan-fids')->group(function(){
    Route::get('/',[PemeliharaanBulananFidsController::class,'index']);
    Route::post('/create',[PemeliharaanBulananFidsController::class,'store']);
    Route::post('/update/{id}',[PemeliharaanBulananFidsController::class,'update']);
    Route::post('/delete/{id}',[PemeliharaanBulananFidsController::class,'destroy']);
});
Route::prefix('pemeliharaan-bulanan-tds')->group(function(){
    Route::get('/',[PemeliharaanBulananTdsController::class,'index']);
    Route::post('/create',[PemeliharaanBulananTdsController::class,'store']);
    Route::post('/update/{id}',[PemeliharaanBulananTdsController::class,'update']);
    Route::post('/delete/{id}',[PemeliharaanBulananTdsController::class,'destroy']);
});
Route::prefix('pemeliharaan-bulanan-pabx')->group(function(){
    Route::get('/',[PemeliharaanBulananPabxController::class,'index']);
    Route::post('/create',[PemeliharaanBulananPabxController::class,'store']);
    Route::post('/update/{id}',[PemeliharaanBulananPabxController::class,'update']);
    Route::post('/delete/{id}',[PemeliharaanBulananPabxController::class,'destroy']);
});
Route::prefix('pemeliharaan-bulanan-igcs')->group(function(){
    Route::get('/',[PemeliharaanBulananIgcsController::class,'index']);
    Route::post('/create',[PemeliharaanBulananIgcsController::class,'store']);
    Route::post('/update/{id}',[PemeliharaanBulananIgcsController::class,'update']);
    Route::post('/delete/{id}',[PemeliharaanBulananIgcsController::class,'destroy']);
});
Route::prefix('pemeliharaan-bulanan-access-control')->group(function(){
    Route::get('/',[PemeliharaanBulananAccessControlController::class,'index']);
    Route::post('/create',[PemeliharaanBulananAccessControlController::class,'store']);
    Route::post('/update/{id}',[PemeliharaanBulananAccessControlController::class,'update']);
    Route::post('/delete/{id}',[PemeliharaanBulananAccessControlController::class,'destroy']);
});
Route::prefix('pemeliharaan-bulanan-jaringan-fiber-optic')->group(function(){
    Route::get('/',[PemeliharaanBulananJaringanFiberOpticController::class,'index']);
    Route::post('/create',[PemeliharaanBulananJaringanFiberOpticController::class,'store']);
    Route::post('/update/{id}',[PemeliharaanBulananJaringanFiberOpticController::class,'update']);
    Route::post('/delete/{id}',[PemeliharaanBulananJaringanFiberOpticController::class,'destroy']);
});
Route::prefix('pemeliharaan-bulanan-wifi')->group(function(){
    Route::get('/',[PemeliharaanBulananWifiController::class,'index']);
    Route::post('/create',[PemeliharaanBulananWifiController::class,'store']);
    Route::post('/update/{id}',[PemeliharaanBulananWifiController::class,'update']);
    Route::post('/delete/{id}',[PemeliharaanBulananWifiController::class,'destroy']);
});
Route::prefix('pemeliharaan-bulanan-running-text')->group(function(){
    Route::get('/',[PemeliharaanBulananRunningTextController::class,'index']);
    Route::post('/create',[PemeliharaanBulananRunningTextController::class,'store']);
    Route::post('/update/{id}',[PemeliharaanBulananRunningTextController::class,'update']);
    Route::post('/delete/{id}',[PemeliharaanBulananRunningTextController::class,'destroy']);
});
Route::prefix('pemeliharaan-bulanan-conference-system')->group(function(){
    Route::get('/',[PemeliharaanBulananConferenceSystemController::class,'index']);
    Route::post('/create',[PemeliharaanBulananConferenceSystemController::class,'store']);
    Route::post('/update/{id}',[PemeliharaanBulananConferenceSystemController::class,'update']);
    Route::post('/delete/{id}',[PemeliharaanBulananConferenceSystemController::class,'destroy']);
});

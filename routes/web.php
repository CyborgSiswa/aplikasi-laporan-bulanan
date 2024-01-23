<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\MasterFasilitasController;
use App\Http\Controllers\CorrectiveController;
use App\Http\Controllers\MasterPeralatanController;
use App\Http\Controllers\PetugasController;
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

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('login',[AuthController::class,'login'])->name('login.index');
Route::post('postLogin',[AuthController::class,'postLogin'])->name('login.post');
Route::get('dashboard', [AuthController::class, 'dashboard']);
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::prefix('master-fasilitas')->group(function(){
    Route::get('/',[MasterFasilitasController::class,'indexWeb'])->name('masterFasilitas.index');
    Route::get('create',[MasterFasilitasController::class,'create'])->name('masterFasilitas.create');
    Route::post('store',[MasterFasilitasController::class,'storeWeb'])->name('masterFasilitas.store');
    Route::get('edit/{id}',[MasterFasilitasController::class,'edit'])->name('masterFasilitas.edit');
    Route::put('update/{id}',[MasterFasilitasController::class,'updateData'])->name('masterFasilitas.update');
});
Route::prefix('corrective')->group(function(){
    Route::get('/',[CorrectiveController::class,'indexWeb'])->name('corrective.index');
    Route::get('create',[CorrectiveController::class,'create'])->name('corrective.create');
    Route::post('store',[CorrectiveController::class,'storeWeb'])->name('corrective.store');
    Route::get('edit/{id}',[CorrectiveController::class,'edit'])->name('corrective.edit');
    Route::put('update/{id}',[correctiveController::class,'updateData'])->name('corrective.update');
});
Route::prefix('attachment-corrective')->group(function(){
    Route::get('/',[AttachmentCorrectiveController::class,'indexWeb'])->name('attachmentCorrective.index');
    Route::get('create',[AttachmentCorrectiveController::class,'create'])->name('attachmentCorrective.create');
    Route::post('store',[AttachmentCorrectiveController::class,'storeWeb'])->name('attachmentCorrective.store');
    Route::get('edit/{id}',[AttachmentCorrectiveController::class,'edit'])->name('attachmentCorrective.edit');
    Route::put('update/{id}',[AttachmentCorrectiveController::class,'updateData'])->name('attachmentCorrective.update');
});
Route::prefix('detail-log-harian')->group(function(){
    Route::get('/',[DetailLogHarianController::class,'indexWeb'])->name('detailLogHarian.index');
    Route::get('create',[DetailLogHarianController::class,'create'])->name('detailLogHarian.create');
    Route::post('store',[DetailLogHarianController::class,'storeWeb'])->name('detailLogHarian.store');
    Route::get('edit/{id}',[DetailLogHarianController::class,'edit'])->name('detailLogHarian.edit');
    Route::put('update/{id}',[DetailLogHarianController::class,'updateData'])->name('detailLogHarian.update');
});
Route::prefix('log-harian')->group(function(){
    Route::get('/',[LogHarianController::class,'indexWeb'])->name('logHarian.index');
    Route::get('create',[LogHarianController::class,'create'])->name('logHarian.create');
    Route::post('store',[LogHarianController::class,'storeWeb'])->name('logHarian.store');
    Route::get('edit/{id}',[LogHarianController::class,'edit'])->name('logHarian.edit');
    Route::put('update/{id}',[LogHarianController::class,'updateData'])->name('logHarian.update');
});
Route::prefix('petugas')->group(function(){
    Route::get('/',[PetugasController::class,'indexWeb'])->name('petugas.index');
    Route::get('create',[PetugasController::class,'create'])->name('petugas.create');
    Route::post('store',[PetugasController::class,'storeWeb'])->name('petugas.store');
    Route::get('edit/{id}',[PetugasController::class,'edit'])->name('petugas.edit');
    Route::put('update/{id}',[PetugasController::class,'updateData'])->name('petugas.update');
});
Route::prefix('master-peralatan')->group(function(){
    Route::get('/',[MasterPeralatanController::class,'indexWeb'])->name('masterPeralatan.index');
    Route::get('create',[MasterPeralatanController::class,'create'])->name('masterPeralatan.create');
    Route::post('store',[MasterPeralatanController::class,'storeWeb'])->name('masterPeralatan.store');
    Route::get('edit/{id}',[MasterPeralatanController::class,'edit'])->name('masterPeralatan.edit');
    Route::put('update/{id}',[MasterPeralatanController::class,'updateData'])->name('masterPeralatan.update');
});
Route::prefix('pemeliharaan-harian-xray')->group(function(){
    Route::get('/',[PemeliharaanHarianXrayController::class,'indexWeb'])->name('pemeliharaanHarianXray.index');
    Route::get('create',[PemeliharaanHarianXrayController::class,'create'])->name('pemeliharaanHarianXray.create');
    Route::post('store',[PemeliharaanHarianXrayController::class,'storeWeb'])->name('pemeliharaanHarianXray.store');
    Route::get('edit/{id}',[PemeliharaanHarianXrayController::class,'edit'])->name('pemeliharaanHarianXray.edit');
    Route::put('update/{id}',[PemeliharaanHarianXrayController::class,'updateData'])->name('pemeliharaanHarianXray.update');
});
Route::prefix('pemeliharaan-harian-sistem-kamera-pemantau')->group(function(){
    Route::get('/',[PemeliharaanHarianSistemKameraPemantauController::class,'indexWeb'])->name('pemeliharaanHarianSistemKameraPemantau.index');
    Route::get('create',[PemeliharaanHarianSistemKameraPemantauController::class,'create'])->name('pemeliharaanHarianSistemKameraPemantau.create');
    Route::post('store',[PemeliharaanHarianSistemKameraPemantauController::class,'storeWeb'])->name('pemeliharaanHarianSistemKameraPemantau.store');
    Route::get('edit/{id}',[PemeliharaanHarianSistemKameraPemantauController::class,'edit'])->name('pemeliharaanHarianSistemKameraPemantau.edit');
    Route::put('update/{id}',[PemeliharaanHarianSistemKameraPemantauController::class,'updateData'])->name('pemeliharaanHarianSistemKameraPemantau.update');
});
Route::prefix('pemeliharaan-harian-pendeteksi-metal-genggam')->group(function(){
    Route::get('/',[PemeliharaanHarianPendeteksiMetalGenggamController::class,'indexWeb'])->name('pemeliharaanHarianPendeteksiMetalGenggam.index');
    Route::get('create',[PemeliharaanHarianPendeteksiMetalGenggamController::class,'create'])->name('pemeliharaanHarianPendeteksiMetalGenggam.create');
    Route::post('store',[PemeliharaanHarianPendeteksiMetalGenggamController::class,'storeWeb'])->name('pemeliharaanHarianPendeteksiMetalGenggam.store');
    Route::get('edit/{id}',[PemeliharaanHarianPendeteksiMetalGenggamController::class,'edit'])->name('pemeliharaanHarianPendeteksiMetalGenggam.edit');
    Route::put('update/{id}',[PemeliharaanHarianPendeteksiMetalGenggamController::class,'updateData'])->name('pemeliharaanHarianPendeteksiMetalGenggam.update');
});
Route::prefix('pemeliharaan-harian-fire-detection-alarm-system')->group(function(){
    Route::get('/',[PemeliharaanHarianFireDetectionAlarmSystemController::class,'indexWeb'])->name('pemeliharaanHarianFireDetectionAlarmSystem.index');
    Route::get('create',[PemeliharaanHarianFireDetectionAlarmSystemController::class,'create'])->name('pemeliharaanHarianFireDetectionAlarmSystem.create');
    Route::post('store',[PemeliharaanHarianFireDetectionAlarmSystemController::class,'storeWeb'])->name('pemeliharaanHarianFireDetectionAlarmSystem.store');
    Route::get('edit/{id}',[PemeliharaanHarianFireDetectionAlarmSystemController::class,'edit'])->name('pemeliharaanHarianFireDetectionAlarmSystem.edit');
    Route::put('update/{id}',[PemeliharaanHarianFireDetectionAlarmSystemController::class,'updateData'])->name('pemeliharaanHarianFireDetectionAlarmSystem.update');
});
Route::prefix('pemeliharaan-harian-gawang-pendeteksi-metal')->group(function(){
    Route::get('/',[PemeliharaanHarianGawangPendeteksiMetalController::class,'indexWeb'])->name('pemeliharaanHarianGawangPendeteksiMetal.index');
    Route::get('create',[PemeliharaanHarianGawangPendeteksiMetalController::class,'create'])->name('pemeliharaanHarianGawangPendeteksiMetal.create');
    Route::post('store',[PemeliharaanHarianGawangPendeteksiMetalController::class,'storeWeb'])->name('pemeliharaanHarianGawangPendeteksiMetal.store');
    Route::get('edit/{id}',[PemeliharaanHarianGawangPendeteksiMetalController::class,'edit'])->name('pemeliharaanHarianGawangPendeteksiMetal.edit');
    Route::put('update/{id}',[PemeliharaanHarianGawangPendeteksiMetalController::class,'updateData'])->name('pemeliharaanHarianGawangPendeteksiMetal.update');
});
Route::prefix('pemeliharaan-harian-public-address-system-atau-pas')->group(function(){
    Route::get('/',[PemeliharaanHarianPublicAddressSystemAtauPasController::class,'indexWeb'])->name('pemeliharaanHarianPublicAddressSystemAtauPas.index');
    Route::get('create',[PemeliharaanHarianPublicAddressSystemAtauPasController::class,'create'])->name('pemeliharaanHarianPublicAddressSystemAtauPas.create');
    Route::post('store',[PemeliharaanHarianPublicAddressSystemAtauPasController::class,'storeWeb'])->name('pemeliharaanHarianPublicAddressSystemAtauPas.store');
    Route::get('edit/{id}',[PemeliharaanHarianPublicAddressSystemAtauPasController::class,'edit'])->name('pemeliharaanHarianPublicAddressSystemAtauPas.edit');
    Route::put('update/{id}',[PemeliharaanHarianPublicAddressSystemAtauPasController::class,'updateData'])->name('pemeliharaanHarianPublicAddressSystemAtauPas.update');
});
Route::prefix('pemeliharaan-harian-fids')->group(function(){
    Route::get('/',[PemeliharaanHarianFidsController::class,'indexWeb'])->name('pemeliharaanHarianFids.index');
    Route::get('create',[PemeliharaanHarianFidsController::class,'create'])->name('pemeliharaanHarianFids.create');
    Route::post('store',[PemeliharaanHarianFidsController::class,'storeWeb'])->name('pemeliharaanHarianFids.store');
    Route::get('edit/{id}',[PemeliharaanHarianFidsController::class,'edit'])->name('pemeliharaanHarianFids.edit');
    Route::put('update/{id}',[PemeliharaanHarianFidsController::class,'updateData'])->name('pemeliharaanHarianFids.update');
});
Route::prefix('pemeliharaan-harian-tds')->group(function(){
    Route::get('/',[PemeliharaanHarianTdsController::class,'indexWeb'])->name('pemeliharaanHarianTds.index');
    Route::get('create',[PemeliharaanHarianTdsController::class,'create'])->name('pemeliharaanHarianTds.create');
    Route::post('store',[PemeliharaanHarianTdsController::class,'storeWeb'])->name('pemeliharaanHarianTds.store');
    Route::get('edit/{id}',[PemeliharaanHarianTdsController::class,'edit'])->name('pemeliharaanHarianTds.edit');
    Route::put('update/{id}',[PemeliharaanHarianTdsController::class,'updateData'])->name('pemeliharaanHarianTds.update');
});
Route::prefix('pemeliharaan-harian-pabx')->group(function(){
    Route::get('/',[PemeliharaanHarianPabxController::class,'indexWeb'])->name('pemeliharaanHarianPabx.index');
    Route::get('create',[PemeliharaanHarianPabxController::class,'create'])->name('pemeliharaanHarianPabx.create');
    Route::post('store',[PemeliharaanHarianPabxController::class,'storeWeb'])->name('pemeliharaanHarianPabx.store');
    Route::get('edit/{id}',[PemeliharaanHarianPabxController::class,'edit'])->name('pemeliharaanHarianPabx.edit');
    Route::put('update/{id}',[PemeliharaanHarianPabxController::class,'updateData'])->name('pemeliharaanHarianPabx.update');
});
Route::prefix('pemeliharaan-harian-igcs')->group(function(){
    Route::get('/',[PemeliharaanHarianIgcsController::class,'indexWeb'])->name('pemeliharaanHarianIgcs.index');
    Route::get('create',[PemeliharaanHarianIgcsController::class,'create'])->name('pemeliharaanHarianIgcs.create');
    Route::post('store',[PemeliharaanHarianIgcsController::class,'storeWeb'])->name('pemeliharaanHarianIgcs.store');
    Route::get('edit/{id}',[PemeliharaanHarianIgcsController::class,'edit'])->name('pemeliharaanHarianIgcs.edit');
    Route::put('update/{id}',[PemeliharaanHarianIgcsController::class,'updateData'])->name('pemeliharaanHarianIgcs.update');
});
Route::prefix('pemeliharaan-harian-access-control')->group(function(){
    Route::get('/',[PemeliharaanHarianAccessControlController::class,'indexWeb'])->name('pemeliharaanHarianAccessControl.index');
    Route::get('create',[PemeliharaanHarianAccessControlController::class,'create'])->name('pemeliharaanHarianAccessControl.create');
    Route::post('store',[PemeliharaanHarianAccessControlController::class,'storeWeb'])->name('pemeliharaanHarianAccessControl.store');
    Route::get('edit/{id}',[PemeliharaanHarianAccessControlController::class,'edit'])->name('pemeliharaanHarianAccessControl.edit');
    Route::put('update/{id}',[PemeliharaanHarianAccessControlController::class,'updateData'])->name('pemeliharaanHarianAccessControl.update');
});
Route::prefix('pemeliharaan-harian-jaringan-fiber-optic')->group(function(){
    Route::get('/',[PemeliharaanHarianJaringanFiberOpticController::class,'indexWeb'])->name('pemeliharaanHarianJaringanFiberOptic.index');
    Route::get('create',[PemeliharaanHarianJaringanFiberOpticController::class,'create'])->name('pemeliharaanHarianJaringanFiberOptic.create');
    Route::post('store',[PemeliharaanHarianJaringanFiberOpticController::class,'storeWeb'])->name('pemeliharaanHarianJaringanFiberOptic.store');
    Route::get('edit/{id}',[PemeliharaanHarianJaringanFiberOpticController::class,'edit'])->name('pemeliharaanHarianJaringanFiberOptic.edit');
    Route::put('update/{id}',[PemeliharaanHarianJaringanFiberOpticController::class,'updateData'])->name('pemeliharaanHarianJaringanFiberOptic.update');
});
Route::prefix('pemeliharaan-harian-wifi')->group(function(){
    Route::get('/',[PemeliharaanHarianWifiController::class,'indexWeb'])->name('pemeliharaanHarianWifi.index');
    Route::get('create',[PemeliharaanHarianWifiController::class,'create'])->name('pemeliharaanHarianWifi.create');
    Route::post('store',[PemeliharaanHarianWifiController::class,'storeWeb'])->name('pemeliharaanHarianWifi.store');
    Route::get('edit/{id}',[PemeliharaanHarianWifiController::class,'edit'])->name('pemeliharaanHarianWifi.edit');
    Route::put('update/{id}',[PemeliharaanHarianWifiController::class,'updateData'])->name('pemeliharaanHarianWifi.update');
});
Route::prefix('pemeliharaan-harian-conference-system')->group(function(){
    Route::get('/',[PemeliharaanHarianConferenceSystemController::class,'indexWeb'])->name('pemeliharaanHarianConferenceSystem.index');
    Route::get('create',[PemeliharaanHarianConferenceSystemController::class,'create'])->name('pemeliharaanHarianConferenceSystem.create');
    Route::post('store',[PemeliharaanHarianConferenceSystemController::class,'storeWeb'])->name('pemeliharaanHarianConferenceSystem.store');
    Route::get('edit/{id}',[PemeliharaanHarianConferenceSystemController::class,'edit'])->name('pemeliharaanHarianConferenceSystem.edit');
    Route::put('update/{id}',[PemeliharaanHarianConferenceSystemController::class,'updateData'])->name('pemeliharaanHarianConferenceSystem.update');
});
Route::prefix('pemeliharaan-harian-running-text')->group(function(){
    Route::get('/',[PemeliharaanHarianRunningTextController::class,'indexWeb'])->name('pemeliharaanHarianRunningText.index');
    Route::get('create',[PemeliharaanHarianRunningTextController::class,'create'])->name('pemeliharaanHarianRunningText.create');
    Route::post('store',[PemeliharaanHarianRunningTextController::class,'storeWeb'])->name('pemeliharaanHarianRunningText.store');
    Route::get('edit/{id}',[PemeliharaanHarianRunningTextController::class,'edit'])->name('pemeliharaanHarianRunningText.edit');
    Route::put('update/{id}',[PemeliharaanHarianRunningTextController::class,'updateData'])->name('pemeliharaanHarianRunningText.update');
});
Route::prefix('pemeliharaan-mingguan-xray')->group(function(){
    Route::get('/',[PemeliharaanMingguanXrayController::class,'indexWeb'])->name('pemeliharaanMingguanXray.index');
    Route::get('create',[PemeliharaanMingguanXrayController::class,'create'])->name('pemeliharaanMingguanXray.create');
    Route::post('store',[PemeliharaanMingguanXrayController::class,'storeWeb'])->name('pemeliharaanMingguanXray.store');
    Route::get('edit/{id}',[PemeliharaanMingguanXrayController::class,'edit'])->name('pemeliharaanMingguanXray.edit');
    Route::put('update/{id}',[PemeliharaanMingguanXrayController::class,'updateData'])->name('pemeliharaanMingguanXray.update');
});
Route::prefix('pemeliharaan-mingguan-sistem-kamera-pemantau')->group(function(){
    Route::get('/',[PemeliharaanMingguanSistemKameraPemantauController::class,'indexWeb'])->name('pemeliharaanMingguanSistemKameraPemantau.index');
    Route::get('create',[PemeliharaanMingguanSistemKameraPemantauController::class,'create'])->name('pemeliharaanMingguanSistemKameraPemantau.create');
    Route::post('store',[PemeliharaanMingguanSistemKameraPemantauController::class,'storeWeb'])->name('pemeliharaanMingguanSistemKameraPemantau.store');
    Route::get('edit/{id}',[PemeliharaanMingguanSistemKameraPemantauController::class,'edit'])->name('pemeliharaanMingguanSistemKameraPemantau.edit');
    Route::put('update/{id}',[PemeliharaanMingguanSistemKameraPemantauController::class,'updateData'])->name('pemeliharaanMingguanSistemKameraPemantau.update');
});
Route::prefix('pemeliharaan-mingguan-pendeteksi-metal-genggam')->group(function(){
    Route::get('/',[PemeliharaanMingguanPendeteksiMetalGenggamController::class,'indexWeb'])->name('pemeliharaanMingguanPendeteksiMetalGenggam.index');
    Route::get('create',[PemeliharaanMingguanPendeteksiMetalGenggamController::class,'create'])->name('pemeliharaanMingguanPendeteksiMetalGenggam.create');
    Route::post('store',[PemeliharaanMingguanPendeteksiMetalGenggamController::class,'storeWeb'])->name('pemeliharaanMingguanPendeteksiMetalGenggam.store');
    Route::get('edit/{id}',[PemeliharaanMingguanPendeteksiMetalGenggamController::class,'edit'])->name('pemeliharaanMingguanPendeteksiMetalGenggam.edit');
    Route::put('update/{id}',[PemeliharaanMingguanPendeteksiMetalGenggamController::class,'updateData'])->name('pemeliharaanMingguanPendeteksiMetalGenggam.update');
});
Route::prefix('pemeliharaan-mingguan-gawang-pendeteksi-metal')->group(function(){
    Route::get('/',[PemeliharaanMingguanGawangPendeteksiMetalController::class,'indexWeb'])->name('pemeliharaanMingguanGawangPendeteksiMetal.index');
    Route::get('create',[PemeliharaanMingguanGawangPendeteksiMetalController::class,'create'])->name('pemeliharaanMingguanGawangPendeteksiMetal.create');
    Route::post('store',[PemeliharaanMingguanGawangPendeteksiMetalController::class,'storeWeb'])->name('pemeliharaanMingguanGawangPendeteksiMetal.store');
    Route::get('edit/{id}',[PemeliharaanMingguanGawangPendeteksiMetalController::class,'edit'])->name('pemeliharaanMingguanGawangPendeteksiMetal.edit');
    Route::put('update/{id}',[PemeliharaanMingguanGawangPendeteksiMetalController::class,'updateData'])->name('pemeliharaanMingguanGawangPendeteksiMetal.update');
});
Route::prefix('pemeliharaan-mingguan-fire-detection-alarm-system')->group(function(){
    Route::get('/',[PemeliharaanMingguanFireDetectionAlarmSystemController::class,'indexWeb'])->name('pemeliharaanMingguanFireDetectionAlarmSystem.index');
    Route::get('create',[PemeliharaanMingguanFireDetectionAlarmSystemController::class,'create'])->name('pemeliharaanMingguanFireDetectionAlarmSystem.create');
    Route::post('store',[PemeliharaanMingguanFireDetectionAlarmSystemController::class,'storeWeb'])->name('pemeliharaanMingguanFireDetectionAlarmSystem.store');
    Route::get('edit/{id}',[PemeliharaanMingguanFireDetectionAlarmSystemController::class,'edit'])->name('pemeliharaanMingguanFireDetectionAlarmSystem.edit');
    Route::put('update/{id}',[PemeliharaanMingguanFireDetectionAlarmSystemController::class,'updateData'])->name('pemeliharaanMingguanFireDetectionAlarmSystem.update');
});
Route::prefix('pemeliharaan-mingguan-pas')->group(function(){
    Route::get('/',[PemeliharaanMingguanPasController::class,'indexWeb'])->name('pemeliharaanMingguanPas.index');
    Route::get('create',[PemeliharaanMingguanPasController::class,'create'])->name('pemeliharaanMingguanPas.create');
    Route::post('store',[PemeliharaanMingguanPasController::class,'storeWeb'])->name('pemeliharaanMingguanPas.store');
    Route::get('edit/{id}',[PemeliharaanMingguanPasController::class,'edit'])->name('pemeliharaanMingguanPas.edit');
    Route::put('update/{id}',[PemeliharaanMingguanPasController::class,'updateData'])->name('pemeliharaanMingguanPas.update');
});
Route::prefix('pemeliharaan-mingguan-fids')->group(function(){
    Route::get('/',[PemeliharaanMingguanFidsController::class,'indexWeb'])->name('pemeliharaanMingguanFids.index');
    Route::get('create',[PemeliharaanMingguanFidsController::class,'create'])->name('pemeliharaanMingguanFids.create');
    Route::post('store',[PemeliharaanMingguanFidsController::class,'storeWeb'])->name('pemeliharaanMingguanFids.store');
    Route::get('edit/{id}',[PemeliharaanMingguanFidsController::class,'edit'])->name('pemeliharaanMingguanFids.edit');
    Route::put('update/{id}',[PemeliharaanMingguanFidsController::class,'updateData'])->name('pemeliharaanMingguanFids.update');
});
Route::prefix('pemeliharaan-mingguan-tds')->group(function(){
    Route::get('/',[PemeliharaanMingguanTdsController::class,'indexWeb'])->name('pemeliharaanMingguanTds.index');
    Route::get('create',[PemeliharaanMingguanTdsController::class,'create'])->name('pemeliharaanMingguanTds.create');
    Route::post('store',[PemeliharaanMingguanTdsController::class,'storeWeb'])->name('pemeliharaanMingguanTds.store');
    Route::get('edit/{id}',[PemeliharaanMingguanTdsController::class,'edit'])->name('pemeliharaanMingguanTds.edit');
    Route::put('update/{id}',[PemeliharaanMingguanTdsController::class,'updateData'])->name('pemeliharaanMingguanTds.update');
});
Route::prefix('pemeliharaan-mingguan-pabx')->group(function(){
    Route::get('/',[PemeliharaanMingguanPabxController::class,'indexWeb'])->name('pemeliharaanMingguanPabx.index');
    Route::get('create',[PemeliharaanMingguanPabxController::class,'create'])->name('pemeliharaanMingguanPabx.create');
    Route::post('store',[PemeliharaanMingguanPabxController::class,'storeWeb'])->name('pemeliharaanMingguanPabx.store');
    Route::get('edit/{id}',[PemeliharaanMingguanPabxController::class,'edit'])->name('pemeliharaanMingguanPabx.edit');
    Route::put('update/{id}',[PemeliharaanMingguanPabxController::class,'updateData'])->name('pemeliharaanMingguanPabx.update');
});
Route::prefix('pemeliharaan-mingguan-igcs')->group(function(){
    Route::get('/',[PemeliharaanMingguanIgcsController::class,'indexWeb'])->name('pemeliharaanMingguanIgcs.index');
    Route::get('create',[PemeliharaanMingguanIgcsController::class,'create'])->name('pemeliharaanMingguanIgcs.create');
    Route::post('store',[PemeliharaanMingguanIgcsController::class,'storeWeb'])->name('pemeliharaanMingguanIgcs.store');
    Route::get('edit/{id}',[PemeliharaanMingguanIgcsController::class,'edit'])->name('pemeliharaanMingguanIgcs.edit');
    Route::put('update/{id}',[PemeliharaanMingguanIgcsController::class,'updateData'])->name('pemeliharaanMingguanIgcs.update');
});
Route::prefix('pemeliharaan-mingguan-access-control')->group(function(){
    Route::get('/',[PemeliharaanMingguanAccessControlController::class,'indexWeb'])->name('pemeliharaanMingguanAccessControl.index');
    Route::get('create',[PemeliharaanMingguanAccessControlController::class,'create'])->name('pemeliharaanMingguanAccessControl.create');
    Route::post('store',[PemeliharaanMingguanAccessControlController::class,'storeWeb'])->name('pemeliharaanMingguanAccessControl.store');
    Route::get('edit/{id}',[PemeliharaanMingguanAccessControlController::class,'edit'])->name('pemeliharaanMingguanAccessControl.edit');
    Route::put('update/{id}',[PemeliharaanMingguanAccessControlController::class,'updateData'])->name('pemeliharaanMingguanAccessControl.update');
});
Route::prefix('pemeliharaan-mingguan-jaringan-fiber-optic')->group(function(){
    Route::get('/',[PemeliharaanMingguanJaringanFiberOpticController::class,'indexWeb'])->name('pemeliharaanMingguanJaringanFiberOptic.index');
    Route::get('create',[PemeliharaanMingguanJaringanFiberOpticController::class,'create'])->name('pemeliharaanMingguanJaringanFiberOptic.create');
    Route::post('store',[PemeliharaanMingguanJaringanFiberOpticController::class,'storeWeb'])->name('pemeliharaanMingguanJaringanFiberOptic.store');
    Route::get('edit/{id}',[PemeliharaanMingguanJaringanFiberOpticController::class,'edit'])->name('pemeliharaanMingguanJaringanFiberOptic.edit');
    Route::put('update/{id}',[PemeliharaanMingguanJaringanFiberOpticController::class,'updateData'])->name('pemeliharaanMingguanJaringanFiberOptic.update');
});
Route::prefix('pemeliharaan-mingguan-wifi')->group(function(){
    Route::get('/',[PemeliharaanMingguanWifiController::class,'indexWeb'])->name('pemeliharaanMingguanWifi.index');
    Route::get('create',[PemeliharaanMingguanWifiController::class,'create'])->name('pemeliharaanMingguanWifi.create');
    Route::post('store',[PemeliharaanMingguanWifiController::class,'storeWeb'])->name('pemeliharaanMingguanWifi.store');
    Route::get('edit/{id}',[PemeliharaanMingguanWifiController::class,'edit'])->name('pemeliharaanMingguanWifi.edit');
    Route::put('update/{id}',[PemeliharaanMingguanWifiController::class,'updateData'])->name('pemeliharaanMingguanWifi.update');
});
Route::prefix('pemeliharaan-mingguan-conference-system')->group(function(){
    Route::get('/',[PemeliharaanMingguanConferenceSystemController::class,'indexWeb'])->name('pemeliharaanMingguanConferenceSystem.index');
    Route::get('create',[PemeliharaanMingguanConferenceSystemController::class,'create'])->name('pemeliharaanMingguanConferenceSystem.create');
    Route::post('store',[PemeliharaanMingguanConferenceSystemController::class,'storeWeb'])->name('pemeliharaanMingguanConferenceSystem.store');
    Route::get('edit/{id}',[PemeliharaanMingguanConferenceSystemController::class,'edit'])->name('pemeliharaanMingguanConferenceSystem.edit');
    Route::put('update/{id}',[PemeliharaanMingguanConferenceSystemController::class,'updateData'])->name('pemeliharaanMingguanConferenceSystem.update');
});
Route::prefix('pemeliharaan-mingguan-running-text')->group(function(){
    Route::get('/',[PemeliharaanMingguanRunningTextController::class,'indexWeb'])->name('pemeliharaanMingguanRunningText.index');
    Route::get('create',[PemeliharaanMingguanRunningTextController::class,'create'])->name('pemeliharaanMingguanRunningText.create');
    Route::post('store',[PemeliharaanMingguanRunningTextController::class,'storeWeb'])->name('pemeliharaanMingguanRunningText.store');
    Route::get('edit/{id}',[PemeliharaanMingguanRunningTextController::class,'edit'])->name('pemeliharaanMingguanRunningText.edit');
    Route::put('update/{id}',[PemeliharaanMingguanRunningTextController::class,'updateData'])->name('pemeliharaanMingguanRunningText.update');
});
Route::prefix('pemeliharaan-bulanan-xray')->group(function(){
    Route::get('/',[PemeliharaanBulananXrayController::class,'indexWeb'])->name('pemeliharaanBulananXray.index');
    Route::get('create',[PemeliharaanBulananXrayController::class,'create'])->name('pemeliharaanBulananXray.create');
    Route::post('store',[PemeliharaanBulananXrayController::class,'storeWeb'])->name('pemeliharaanBulananXray.store');
    Route::get('edit/{id}',[PemeliharaanBulananXrayController::class,'edit'])->name('pemeliharaanBulananXray.edit');
    Route::put('update/{id}',[PemeliharaanBulananXrayController::class,'updateData'])->name('pemeliharaanBulananXray.update');
});
Route::prefix('pemeliharaan-bulanan-sistem-kamera-pemantau')->group(function(){
    Route::get('/',[PemeliharaanBulananSistemKameraPemantauController::class,'indexWeb'])->name('pemeliharaanBulananSistemKameraPemantau.index');
    Route::get('create',[PemeliharaanBulananSistemKameraPemantauController::class,'create'])->name('pemeliharaanBulananSistemKameraPemantau.create');
    Route::post('store',[PemeliharaanBulananSistemKameraPemantauController::class,'storeWeb'])->name('pemeliharaanBulananSistemKameraPemantau.store');
    Route::get('edit/{id}',[PemeliharaanBulananSistemKameraPemantauController::class,'edit'])->name('pemeliharaanBulananSistemKameraPemantau.edit');
    Route::put('update/{id}',[PemeliharaanBulananSistemKameraPemantauController::class,'updateData'])->name('pemeliharaanBulananSistemKameraPemantau.update');
});
Route::prefix('pemeliharaan-bulanan-pendeteksi-metal-genggam')->group(function(){
    Route::get('/',[PemeliharaanBulananPendeteksiMetalGenggamController::class,'indexWeb'])->name('pemeliharaanBulananPendeteksiMetalGenggam.index');
    Route::get('create',[PemeliharaanBulananPendeteksiMetalGenggamController::class,'create'])->name('pemeliharaanBulananPendeteksiMetalGenggam.create');
    Route::post('store',[PemeliharaanBulananPendeteksiMetalGenggamController::class,'storeWeb'])->name('pemeliharaanBulananPendeteksiMetalGenggam.store');
    Route::get('edit/{id}',[PemeliharaanBulananPendeteksiMetalGenggamController::class,'edit'])->name('pemeliharaanBulananPendeteksiMetalGenggam.edit');
    Route::put('update/{id}',[PemeliharaanBulananPendeteksiMetalGenggamController::class,'updateData'])->name('pemeliharaanBulananPendeteksiMetalGenggam.update');
});
Route::prefix('pemeliharaan-bulanan-gawang-pendeteksi-metal')->group(function(){
    Route::get('/',[PemeliharaanBulananGawangPendeteksiMetalController::class,'indexWeb'])->name('pemeliharaanBulananGawangPendeteksiMetal.index');
    Route::get('create',[PemeliharaanBulananGawangPendeteksiMetalController::class,'create'])->name('pemeliharaanBulananGawangPendeteksiMetal.create');
    Route::post('store',[PemeliharaanBulananGawangPendeteksiMetalController::class,'storeWeb'])->name('pemeliharaanBulananGawangPendeteksiMetal.store');
    Route::get('edit/{id}',[PemeliharaanBulananGawangPendeteksiMetalController::class,'edit'])->name('pemeliharaanBulananGawangPendeteksiMetal.edit');
    Route::put('update/{id}',[PemeliharaanBulananGawangPendeteksiMetalController::class,'updateData'])->name('pemeliharaanBulananGawangPendeteksiMetal.update');
});
Route::prefix('pemeliharaan-bulanan-fire-detection-alarm-system')->group(function(){
    Route::get('/',[PemeliharaanBulananFireDetectionAlarmSystemController::class,'indexWeb'])->name('pemeliharaanBulananFireDetectionAlarmSystem.index');
    Route::get('create',[PemeliharaanBulananFireDetectionAlarmSystemController::class,'create'])->name('pemeliharaanBulananFireDetectionAlarmSystem.create');
    Route::post('store',[PemeliharaanBulananFireDetectionAlarmSystemController::class,'storeWeb'])->name('pemeliharaanBulananFireDetectionAlarmSystem.store');
    Route::get('edit/{id}',[PemeliharaanBulananFireDetectionAlarmSystemController::class,'edit'])->name('pemeliharaanBulananFireDetectionAlarmSystem.edit');
    Route::put('update/{id}',[PemeliharaanBulananFireDetectionAlarmSystemController::class,'updateData'])->name('pemeliharaanBulananFireDetectionAlarmSystem.update');
});
Route::prefix('pemeliharaan-bulanan-pas')->group(function(){
    Route::get('/',[PemeliharaanBulananPasController::class,'indexWeb'])->name('pemeliharaanBulananPas.index');
    Route::get('create',[PemeliharaanBulananPasController::class,'create'])->name('pemeliharaanBulananPas.create');
    Route::post('store',[PemeliharaanBulananPasController::class,'storeWeb'])->name('pemeliharaanBulananPas.store');
    Route::get('edit/{id}',[PemeliharaanBulananPasController::class,'edit'])->name('pemeliharaanBulananPas.edit');
    Route::put('update/{id}',[PemeliharaanBulananPasController::class,'updateData'])->name('pemeliharaanBulananPas.update');
});
Route::prefix('pemeliharaan-bulanan-fids')->group(function(){
    Route::get('/',[PemeliharaanBulananFidsController::class,'indexWeb'])->name('pemeliharaanBulananFids.index');
    Route::get('create',[PemeliharaanBulananFidsController::class,'create'])->name('pemeliharaanBulananFids.create');
    Route::post('store',[PemeliharaanBulananFidsController::class,'storeWeb'])->name('pemeliharaanBulananFids.store');
    Route::get('edit/{id}',[PemeliharaanBulananFidsController::class,'edit'])->name('pemeliharaanBulananFids.edit');
    Route::put('update/{id}',[PemeliharaanBulananFidsController::class,'updateData'])->name('pemeliharaanBulananFids.update');
});
Route::prefix('pemeliharaan-bulanan-tds')->group(function(){
    Route::get('/',[PemeliharaanBulananTdsController::class,'indexWeb'])->name('pemeliharaanBulananTds.index');
    Route::get('create',[PemeliharaanBulananTdsController::class,'create'])->name('pemeliharaanBulananTds.create');
    Route::post('store',[PemeliharaanBulananTdsController::class,'storeWeb'])->name('pemeliharaanBulananTds.store');
    Route::get('edit/{id}',[PemeliharaanBulananTdsController::class,'edit'])->name('pemeliharaanBulananTds.edit');
    Route::put('update/{id}',[PemeliharaanBulananTdsController::class,'updateData'])->name('pemeliharaanBulananTds.update');
});
Route::prefix('pemeliharaan-bulanan-pabx')->group(function(){
    Route::get('/',[PemeliharaanBulananPabxController::class,'indexWeb'])->name('pemeliharaanBulananPabx.index');
    Route::get('create',[PemeliharaanBulananPabxController::class,'create'])->name('pemeliharaanBulananPabx.create');
    Route::post('store',[PemeliharaanBulananPabxController::class,'storeWeb'])->name('pemeliharaanBulananPabx.store');
    Route::get('edit/{id}',[PemeliharaanBulananPabxController::class,'edit'])->name('pemeliharaanBulananPabx.edit');
    Route::put('update/{id}',[PemeliharaanBulananPabxController::class,'updateData'])->name('pemeliharaanBulananPabx.update');
});
Route::prefix('pemeliharaan-bulanan-igcs')->group(function(){
    Route::get('/',[PemeliharaanBulananIgcsController::class,'indexWeb'])->name('pemeliharaanBulananIgcs.index');
    Route::get('create',[PemeliharaanBulananIgcsController::class,'create'])->name('pemeliharaanBulananIgcs.create');
    Route::post('store',[PemeliharaanBulananIgcsController::class,'storeWeb'])->name('pemeliharaanBulananIgcs.store');
    Route::get('edit/{id}',[PemeliharaanBulananIgcsController::class,'edit'])->name('pemeliharaanBulananIgcs.edit');
    Route::put('update/{id}',[PemeliharaanBulananIgcsController::class,'updateData'])->name('pemeliharaanBulananIgcs.update');
});
Route::prefix('pemeliharaan-bulanan-access-control')->group(function(){
    Route::get('/',[PemeliharaanBulananAccessControlController::class,'indexWeb'])->name('pemeliharaanBulananAccessControl.index');
    Route::get('create',[PemeliharaanBulananAccessControlController::class,'create'])->name('pemeliharaanBulananAccessControl.create');
    Route::post('store',[PemeliharaanBulananAccessControlController::class,'storeWeb'])->name('pemeliharaanBulananAccessControl.store');
    Route::get('edit/{id}',[PemeliharaanBulananAccessControlController::class,'edit'])->name('pemeliharaanBulananAccessControl.edit');
    Route::put('update/{id}',[PemeliharaanBulananAccessControlController::class,'updateData'])->name('pemeliharaanBulananAccessControl.update');
});
Route::prefix('pemeliharaan-bulanan-jaringan-fiber-optic')->group(function(){
    Route::get('/',[PemeliharaanBulananJaringanFiberOpticController::class,'indexWeb'])->name('pemeliharaanBulananJaringanFiberOptic.index');
    Route::get('create',[PemeliharaanBulananJaringanFiberOpticController::class,'create'])->name('pemeliharaanBulananJaringanFiberOptic.create');
    Route::post('store',[PemeliharaanBulananJaringanFiberOpticController::class,'storeWeb'])->name('pemeliharaanBulananJaringanFiberOptic.store');
    Route::get('edit/{id}',[PemeliharaanBulananJaringanFiberOpticController::class,'edit'])->name('pemeliharaanBulananJaringanFiberOptic.edit');
    Route::put('update/{id}',[PemeliharaanBulananJaringanFiberOpticController::class,'updateData'])->name('pemeliharaanBulananJaringanFiberOptic.update');
});
Route::prefix('pemeliharaan-bulanan-wifi')->group(function(){
    Route::get('/',[PemeliharaanBulananWifiController::class,'indexWeb'])->name('pemeliharaanBulananWifi.index');
    Route::get('create',[PemeliharaanBulananWifiController::class,'create'])->name('pemeliharaanBulananWifi.create');
    Route::post('store',[PemeliharaanBulananWifiController::class,'storeWeb'])->name('pemeliharaanBulananWifi.store');
    Route::get('edit/{id}',[PemeliharaanBulananWifiController::class,'edit'])->name('pemeliharaanBulananWifi.edit');
    Route::put('update/{id}',[PemeliharaanBulananWifiController::class,'updateData'])->name('pemeliharaanBulananWifi.update');
});
Route::prefix('pemeliharaan-bulanan-running-text')->group(function(){
    Route::get('/',[PemeliharaanBulananRunningTextController::class,'indexWeb'])->name('pemeliharaanBulananRunningText.index');
    Route::get('create',[PemeliharaanBulananRunningTextController::class,'create'])->name('pemeliharaanBulananRunningText.create');
    Route::post('store',[PemeliharaanBulananRunningTextController::class,'storeWeb'])->name('pemeliharaanBulananRunningText.store');
    Route::get('edit/{id}',[PemeliharaanBulananRunningTextController::class,'edit'])->name('pemeliharaanBulananRunningText.edit');
    Route::put('update/{id}',[PemeliharaanBulananRunningTextController::class,'updateData'])->name('pemeliharaanBulananRunningText.update');
});
Route::prefix('pemeliharaan-bulanan-conference-system')->group(function(){
    Route::get('/',[PemeliharaanBulananConferenceSystemController::class,'indexWeb'])->name('pemeliharaanBulananConferenceSystem.index');
    Route::get('create',[PemeliharaanBulananConferenceSystemController::class,'create'])->name('pemeliharaanBulananConferenceSystem.create');
    Route::post('store',[PemeliharaanBulananConferenceSystemController::class,'storeWeb'])->name('pemeliharaanBulananConferenceSystem.store');
    Route::get('edit/{id}',[PemeliharaanBulananConferenceSystemController::class,'edit'])->name('pemeliharaanBulananConferenceSystem.edit');
    Route::put('update/{id}',[PemeliharaanBulananConferenceSystemController::class,'updateData'])->name('pemeliharaanBulananConferenceSystem.update');
});

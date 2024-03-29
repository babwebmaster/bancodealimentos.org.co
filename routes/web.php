<?php

use App\Http\Controllers\dashboard\CifrasController;
use App\Http\Controllers\dashboard\DirectorsController;
use App\Http\Controllers\dashboard\MediosController;
use App\Http\Controllers\dashboard\ReconocimientosController;
use App\Http\Controllers\dashboard\ReportsController;
use App\Http\Controllers\dashboard\SlideDonorsController;
use App\Http\Controllers\dashboard\SlideMainController;
use App\Http\Controllers\dashboard\UserController;
use App\Http\Controllers\web\PageController;
use Illuminate\Support\Facades\Route;

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
Route::get('/web', function () {
    return redirect('/');
});

Route::get('/', [PageController::class, 'index'])->name('web.index');

Route::group(['prefix'=>'nosotros'], function(){
    Route::get('/nuestros-valores', [PageController::class, 'ourValues'])->name('web.ourValues');
    Route::get('/nuestros-lideres', [PageController::class, 'ourLeaders'])->name('web.ourLeaders');
    Route::get('/informes-de-gestion', [PageController::class, 'managementReports'])->name('web.managementReports');
});
Route::get('/nosotros', function () {
    return redirect('/nosotros/nuestros-valores');
});
Route::group(['prefix'=>'ayudanos-a-ayudar'], function(){
    Route::get('/donaciones-en-efectivo', [PageController::class, 'cashDonations'])->name('web.cashDonations');
    Route::get('/responsabilidad-social-empresarial', [PageController::class, 'rsa'])->name('web.rsa');
    Route::get('/programa-nutricion-integral', [PageController::class, 'pni'])->name('web.pni');
    Route::get('/donaciones-en-especie', [PageController::class, 'donationsInKind'])->name('web.donationsInKind');
    Route::get('/voluntariado-corporativo', [PageController::class, 'volunteering'])->name('web.volunteering');
    Route::get('/academia', [PageController::class, 'academy'])->name('web.academy');
    Route::get('/corabastos', [PageController::class, 'corabastos'])->name('web.corabastos');
    Route::get('/prea', [PageController::class, 'prea'])->name('web.prea');
});
Route::get('/ayudanos-a-ayudar', function () {
    return redirect('/ayudanos-a-ayudar/donaciones-en-efectivo');
});
Route::group(['prefix'=>'beneficiarios'], function(){
    Route::get('/beneficiarios', [PageController::class, 'beneficiaries'])->name('web.beneficiaries');
    Route::get('/quiero-ser-beneficiario', [PageController::class, 'beneficiary'])->name('web.beneficiary');
    Route::get('/soy-beneficiario', [PageController::class, 'iambeneficiary'])->name('web.iambeneficiary');
    Route::get('/recetarios', [PageController::class, 'cookBooks'])->name('web.cookBooks');
});
Route::get('/beneficiarios', function () {
    return redirect('/beneficiarios/beneficiarios');
});
Route::get('/contactanos', [PageController::class, 'contactUs'])->name('web.contactUs');

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
Route::group(['middleware' => ['auth:sanctum', 'verified'], 'prefix' => 'dashboard'], function () {
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::group(['namespace' => 'App\Http\Controllers\dashboard'], function () {
        Route::resource('user', UserController::class);
        Route::resource('medios', MediosController::class);
        Route::resource('slide', SlideMainController::class);
        Route::resource('slide-donors', SlideDonorsController::class);
        Route::resource('cifras', CifrasController::class);
        Route::resource('reconocimientos', ReconocimientosController::class);
        Route::resource('directors', DirectorsController::class);
        Route::resource('reports', ReportsController::class);
        Route::post('medios/crear-directorio', 'MediosController@createDirectory')->name('medios.createNewDirectory');
    });

});
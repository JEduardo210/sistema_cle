<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();
Route::group(['middleware' => ['auth']], function () {

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/mainAdministrador', [App\Http\Controllers\HomeController::class, 'index'])->name('mainAdministrador');
Route::get('/mainEstudiante', [App\Http\Controllers\HomeController::class, 'index'])->name('mainEstudiante');
Route::get('/mainDocente', [App\Http\Controllers\HomeController::class, 'index'])->name('mainDocente');
Route::get('/mainCaja', [App\Http\Controllers\HomeController::class, 'index'])->name('mainCaja');


Route::get('/create/alumno', [App\Http\Controllers\AlumnosController::class, 'create'])->name('register.alumno');
Route::post('/store/alumno', [App\Http\Controllers\AlumnosController::class, 'store'])->name('store.alumno');
Route::get('/index/alumno', [App\Http\Controllers\AlumnosController::class, 'index'])->name('index.alumno');
Route::get('/edit/alumno/{id}', [App\Http\Controllers\AlumnosController::class, 'edit'])->name('edit.alumno');
Route::put('/update/alumno/{id}', [App\Http\Controllers\AlumnosController::class, 'update'])->name('update.alumno');
Route::get('/destroy/alumno/{id}', [App\Http\Controllers\AlumnosController::class, 'destroy'])->name('destroy.alumno');

Route::get('/create/docentes', [App\Http\Controllers\DocenteController::class, 'create'])->name('register.docentes');
Route::post('/store/docentes', [App\Http\Controllers\DocenteController::class, 'store'])->name('store.docentes');
Route::get('/index/docentes', [App\Http\Controllers\DocenteController::class, 'index'])->name('index.docentes');
Route::get('/edit/docentes/{id}', [App\Http\Controllers\DocenteController::class, 'edit'])->name('edit.docentes');
Route::put('/update/docentes/{id}', [App\Http\Controllers\DocenteController::class, 'update'])->name('update.docentes');
Route::get('/destroy/docentes/{id}', [App\Http\Controllers\DocenteController::class, 'destroy'])->name('destroy.docentes');

Route::get('/create/clase', [App\Http\Controllers\ClaseController::class, 'create'])->name('register.clase');
Route::post('/store/clase', [App\Http\Controllers\ClaseController::class, 'store'])->name('store.clase');
Route::get('/index/clase', [App\Http\Controllers\ClaseController::class, 'index'])->name('index.clase');
Route::get('/edit/clase/{id}', [App\Http\Controllers\ClaseController::class, 'edit'])->name('edit.clase');
Route::put('/update/clase/{id}', [App\Http\Controllers\ClaseController::class, 'update'])->name('update.clase');
Route::get('/destroy/clase/{id}', [App\Http\Controllers\ClaseController::class, 'destroy'])->name('destroy.clase');

Route::get('/create/periodo', [App\Http\Controllers\PeriodoController::class, 'create'])->name('register.periodo');
Route::post('/store/periodo', [App\Http\Controllers\PeriodoController::class, 'store'])->name('store.periodo');
Route::get('/index/periodo', [App\Http\Controllers\PeriodoController::class, 'index'])->name('index.periodo');
Route::get('/edit/periodo/{id}', [App\Http\Controllers\PeriodoController::class, 'edit'])->name('edit.periodo');
Route::put('/update/periodo/{id}', [App\Http\Controllers\PeriodoController::class, 'update'])->name('update.periodo');
Route::get('/destroy/periodo/{id}', [App\Http\Controllers\PeriodoController::class, 'destroy'])->name('destroy.periodo');

Route::get('/create/horario', [App\Http\Controllers\HorarioController::class, 'create'])->name('register.horario');
Route::post('/store/horario', [App\Http\Controllers\HorarioController::class, 'store'])->name('store.horario');
Route::get('/index/horario', [App\Http\Controllers\HorarioController::class, 'index'])->name('index.horario');
Route::get('/edit/horario/{id}', [App\Http\Controllers\HorarioController::class, 'edit'])->name('edit.horario');
Route::put('/update/horario/{id}', [App\Http\Controllers\HorarioController::class, 'update'])->name('update.horario');
Route::get('/destroy/horario/{id}', [App\Http\Controllers\HorarioController::class, 'destroy'])->name('destroy.horario');

Route::get('/create/est_externos', [App\Http\Controllers\EstExternosController::class, 'create'])->name('register.est_externos');
Route::post('/store/est_externos', [App\Http\Controllers\EstExternosController::class, 'store'])->name('store.est_externos');
Route::get('/index/est_externos', [App\Http\Controllers\EstExternosController::class, 'index'])->name('index.est_externos');
Route::get('/edit/est_externos/{id}', [App\Http\Controllers\EstExternosController::class, 'edit'])->name('edit.est_externos');
Route::put('/update/est_externos/{id}', [App\Http\Controllers\EstExternosController::class, 'update'])->name('update.est_externos');
Route::get('/destroy/est_externos/{id}', [App\Http\Controllers\EstExternosController::class, 'destroy'])->name('destroy.est_externos');

Route::get('/create/calificaciones{id}', [App\Http\Controllers\CalificacionController::class, 'create'])->name('register.calificaciones');
Route::post('/store/calificaciones', [App\Http\Controllers\CalificacionController::class, 'store'])->name('store.calificaciones');
Route::get('/index/calificaciones{id}', [App\Http\Controllers\CalificacionController::class, 'index'])->name('calificaciones');
Route::get('/edit/calificaciones/{id}', [App\Http\Controllers\CalificacionController::class, 'edit'])->name('edit.calificaciones');
Route::put('/update/calificaciones/{id}', [App\Http\Controllers\CalificacionController::class, 'update'])->name('update.calificaciones');
Route::get('/destroy/calificacion/{id}', [App\Http\Controllers\CalificacionController::class, 'destroy'])->name('destroy.calificacion');

Route::get('/create/grupos', [App\Http\Controllers\GrupoController::class, 'create'])->name('register.grupos');
Route::post('/store/grupos', [App\Http\Controllers\GrupoController::class, 'store'])->name('store.grupos');
Route::get('/index/grupos', [App\Http\Controllers\GrupoController::class, 'index'])->name('index.grupos');
Route::get('/lista/grupos/{id}', [App\Http\Controllers\GrupoController::class, 'lista'])->name('lista.grupos');
Route::get('/edit/grupos/{id}', [App\Http\Controllers\GrupoController::class, 'edit'])->name('edit.grupos');
Route::put('/update/grupos/{id}', [App\Http\Controllers\GrupoController::class, 'update'])->name('update.grupos');
Route::get('/destroy/grupos/{id}', [App\Http\Controllers\GrupoController::class, 'destroy'])->name('destroy.grupos');

Route::get('/create/caja', [App\Http\Controllers\CajaController::class, 'create'])->name('register.caja');
Route::post('/store/caja', [App\Http\Controllers\CajaController::class, 'store'])->name('store.caja');
Route::get('/index/caja', [App\Http\Controllers\CajaController::class, 'index'])->name('index.caja');
Route::get('/edit/caja/{id}', [App\Http\Controllers\CajaController::class, 'edit'])->name('edit.caja');
Route::put('/update/caja/{id}', [App\Http\Controllers\CajaController::class, 'update'])->name('update.caja');
Route::get('/destroy/caja/{id}', [App\Http\Controllers\CajaController::class, 'destroy'])->name('destroy.caja');

Route::get('/index/users', [App\Http\Controllers\UserController::class, 'index'])->name('index.users');
Route::get('/edit/users/{id}', [App\Http\Controllers\UserController::class, 'edit'])->name('edit.users');
Route::put('/update/users/{id}', [App\Http\Controllers\UserController::class, 'update'])->name('update.users');

Route::get('/edit_administrador/users/{id}', [App\Http\Controllers\UserController::class, 'edit_administrador'])->name('edit.edit_administrador');
Route::put('/update_administrador/users/{id}', [App\Http\Controllers\UserController::class, 'update_administrador'])->name('update.update_administrador');

Route::get('/create/inscripcions', [App\Http\Controllers\InscripcionController::class, 'create'])->name('register.inscripcions');
Route::post('/store/inscripcions', [App\Http\Controllers\InscripcionController::class, 'store'])->name('store.inscripcions');
Route::get('/index/inscripcions', [App\Http\Controllers\InscripcionController::class, 'index'])->name('index.inscripcions');
Route::get('/edit/inscripcion/{id}', [App\Http\Controllers\InscripcionController::class, 'edit'])->name('edit.inscripcion');
Route::put('/update/inscripcion/{id}', [App\Http\Controllers\InscripcionController::class, 'update'])->name('update.inscripcion');
Route::get('/destroy/inscripcion/{id}', [App\Http\Controllers\InscripcionController::class, 'destroy'])->name('destroy.inscripcion');
Route::get('/accepted/inscripcion/', [App\Http\Controllers\InscripcionController::class, 'accepted'])->name('accepted.inscripcion');
Route::get('/NoAceptado/inscripcion/', [App\Http\Controllers\InscripcionController::class, 'NoAceptado'])->name('NoAceptado.inscripcion');

Route::get('/lista_status/inscripcions/{id}', [App\Http\Controllers\InscripcionController::class, 'lista_status'])->name('lista_status.inscripcions');
Route::get('/index_inscripcions', [App\Http\Controllers\InscripcionController::class, 'index_inscripcions'])->name('index_inscripcions.index');
Route::get('/edit_inscripcions/{id}', [App\Http\Controllers\InscripcionController::class, 'edit_inscripcions'])->name('edit_inscripcions.edit');
Route::put('/update_inscripcions/{id}', [App\Http\Controllers\InscripcionController::class, 'update_inscripcions'])->name('update_inscripcions.update');
});
<?php

use App\Models\Alumno;
use App\Models\Carrera;
use App\Models\Estado;
use App\Models\Materia;
use App\Models\User;
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
    return view('welcome');
});


Route::prefix('/universidad')->group(function () {
    
    Route::prefix('/configuracion')->group(function () {

        Route::prefix('/estado')->group(function (){
            Route::controller(Estado::class)->group(function () {
                Route::get('/listar', 'index')->name('estadoIndex');
                
                Route::post('/alta', 'store')->name('estadoStore');
                
                Route::get('/mostrar/{estadoID}', 'show')->name('estadoShow');

                Route::put('/modificar/{estadoID}', 'edit')->name('estadoEdit');
                
                Route::delete('/baja/{estadoID}', 'delete')->name('estadoDelete');
                
            });
        });
        
        Route::prefix('/carrera')->group(function(){
            Route::controller(Carrera::class)->group(function(){
                Route::get('/listar', 'index')->name('carreraIndex');
                
                Route::post('/alta', 'store')->name('carreraStore');
                
                Route::get('/mostrar/{carreraID}', 'show')->name('carreraShow');

                Route::put('/modificar/{carreraID}', 'edit')->name('carreraEdit');
                
                Route::delete('/baja/{carreraID}', 'delete')->name('carreraDelete');
            });
        });
        
        Route::prefix('/materia')->group(function(){
            Route::controller(Materia::class)->group(function(){
                Route::get('/listar', 'index')->name('materiaIndex');

                Route::post('/alta', 'store')->name('materiaStore');

                Route::get('/mostrar/{materiaID}', 'show')->name('materiaShow');

                Route::put('/modificar/{materiaID}', 'edit')->name('materiaEdit');
                
                Route::delete('/baja/{materiaID}', 'delete')->name('materiaDelete');
            });
        });
        
        Route::prefix('/alumno')->group(function(){
            Route::controller(Alumno::class)->group(function(){
                Route::get('/listar', 'index')->name('alumnoIndex');

                Route::post('/alta', 'store')->name('alumnoStore');

                Route::get('/mostrar/{alumnoID}', 'show')->name('alumnoShow');

                Route::put('/modificar/{alumnoID}', 'edit')->name('alumnoEdit');

                Route::delete('/baja/{alumnoID}', 'delete')->name('alumnoDelete');
            });
        });
        
        Route::prefix('/usuario')->group(function (){
            Route::controller(User::class)->group(function () {
                Route::get('/listar', 'index')->name('productoIndex');
                Route::post('/alta', 'store')->name('productoStore');

                Route::put('/modificar/{ProductoID}', 'edit')->name('productoEdit');
                Route::put('/modificar/{ProductoID}', 'update')->name('productoUpdate');
            
                Route::delete('/baja/{ProductoID}', 'destroy')->name('productoDestroy');
        
            });
        });
    });
});
<?php

use Illuminate\Http\Request;
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

if (version_compare(PHP_VERSION, '7.2.0', '>=')) {
    error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
}




/* RUTAS IMAGENES TEXTO */

Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
//Route::get('/', 'Admin\InicioController@index')->name('inicio');
Route::get('/', 'Seguridad\LoginController@index')->name('inicio');
Route::get('seguridad/login', 'Seguridad\LoginController@index')->name('login');
Route::post('seguridad/login', 'Seguridad\LoginController@login')->name('login_post');
Route::get('seguridad/logout', 'Seguridad\LoginController@logout')->name('logout');
Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth', 'superadmin']], function () {


    /* RUTAS DEL MENU */
    Route::get('menu', 'MenuController@index')->name('menu');
    Route::get('menu/crear', 'MenuController@crear')->name('crear_menu');
    Route::get('menu/{id}/editar', 'MenuController@editar')->name('editar_menu');
    Route::put('menu/{id}', 'MenuController@actualizar')->name('actualizar_menu');
    Route::post('menu', 'MenuController@guardar')->name('guardar_menu');
    Route::post('menu/guardar-orden', 'MenuController@guardarOrden')->name('guardar_orden');
    Route::get('rol/{id}/elimniar', 'MenuController@eliminar')->name('eliminar_menu');

    /* RUTAS DEL ROL */
    Route::get('rol', 'RolController@index')->name('rol');
    Route::get('rol/crear', 'RolController@crear')->name('crear_rol');
    Route::post('rol', 'RolController@guardar')->name('guardar_rol');
    Route::get('rol/{id}/editar', 'RolController@editar')->name('editar_rol');
    Route::put('rol/{id}', 'RolController@actualizar')->name('actualizar_rol');
    Route::delete('rol/{id}', 'RolController@eliminar')->name('eliminar_rol');

    /* RUTAS DEL MENUROL */
    Route::get('menu-rol', 'MenuRolController@index')->name('menu_rol');
    Route::post('menu-rol', 'MenuRolController@guardar')->name('guardar_menu_rol');

    /* RUTAS DE LA EMPRESA */
    Route::get('empresa', 'EmpresaController@index')->name('empresa');
    Route::get('empresa/crear', 'EmpresaController@crear')->name('crear_empresa');
    Route::post('empresa', 'EmpresaController@guardar')->name('guardar_empresa');
    Route::get('empresa/{id}/editar', 'EmpresaController@editar')->name('editar_empresa');
    Route::put('empresa/{id}', 'EmpresaController@actualizar')->name('actualizar_empresa');

    /* RUTAS DEL PERMISO */
    Route::get('permiso', 'PermisoController@index')->name('permiso');
    Route::get('permiso/crear', 'PermisoController@crear')->name('crear_permiso');
    Route::post('permiso', 'PermisoController@guardar')->name('guardar_permiso');
    Route::get('permiso/{id}/editar', 'PermisoController@editar')->name('editar_permiso');
    Route::put('permiso/{id}', 'PermisoController@actualizar')->name('actualizar_permiso');
    Route::delete('permiso/{id}', 'PermisoController@eliminar')->name('eliminar_permiso');

    /* RUTAS DEL PERMISOROL */
    Route::get('permiso-rol', 'PermisoRolController@index')->name('permiso_rol');
    Route::post('permiso-rol', 'PermisoRolController@guardar')->name('guardar_permiso_rol');
});


Route::group(['middleware' => ['auth']], function () {

    Route::get('/tablero', 'AdminController@index')->name('tablero');

    Route::get('informes', 'AdminController@informes')->name('informes')->middleware('superConsultor');

    /* RUTAS DEL USUARIO */
    Route::get('usuario', 'UsuarioController@index')->name('usuario')->middleware('superEditor');
    Route::get('usuario/crear', 'UsuarioController@crear')->name('crear_usuario')->middleware('superEditor');
    Route::post('usuario', 'UsuarioController@guardar')->name('guardar_usuario')->middleware('superEditor');
    Route::get('usuario/{id}/editar', 'UsuarioController@editar')->name('editar_usuario')->middleware('superEditor');
    Route::get('usuario/{id}/password', 'UsuarioController@editarpassword')->name('editar_password')->middleware('superEditor');
    Route::put('usuario/{id}', 'UsuarioController@actualizar')->name('actualizar_usuario')->middleware('superEditor');
    Route::put('password/{id}', 'UsuarioController@actualizarpassword')->name('actualizar_password')->middleware('superEditor');
    Route::put('password1/{id}', 'UsuarioController@actualizarpassword1')->name('actualizar_password1');
    Route::get('editar_novedades/{id}', 'UsuarioController@consultarusuario')->name('editar_novedades')->middleware('superEditor');

    /* RUTAS DE EMPLEADO */

    Route::get('empleado', 'Nomina\EmpleadosController@index')->name('empleado')->middleware('superEditor');
    Route::post('empleado', 'Nomina\EmpleadosController@store')->name('guardar_empleado')->middleware('superEditor');
    Route::get('empleado/{id}/editar', 'Nomina\EmpleadosController@edit')->name('editar_empleado')->middleware('superEditor');
    Route::put('empleado/{id}', 'Nomina\EmpleadosController@update')->name('actualizar_empleado')->middleware('superEditor');

   /* RUTAS DE EMPLEADO */

   Route::get('novedades', 'Nomina\NovedadesController@index')->name('novedades')->middleware('superEditor');
   Route::post('novedades', 'Nomina\NovedadesController@store')->name('guardar_novedades')->middleware('superEditor');
   Route::get('novedades/{id}/editar', 'Nomina\NovedadesController@edit')->name('editar_novedadesn')->middleware('superEditor');
   Route::put('novedades{id}', 'Nomina\NovedadesController@update')->name('actualizar_novedades')->middleware('superEditor');

    /* RUTAS DE HORAS X USUARIO */

    Route::get('nominaliquid', 'Nomina\NominaliquidController@index')->name('hours')->middleware('superEditor');
    Route::post('nominaliquid', 'Nomina\NominaliquidController@store')->name('guardar_turno')->middleware('superEditor');
    Route::get('nominaliquid/{id}/editar', 'Nomina\NominaliquidController@edit')->name('editar_turno')->middleware('superEditor');
    Route::put('nominaliquid/{id}', 'Nomina\NominaliquidController@update')->name('actualizar_turno')->middleware('superEditor');
    Route::post('liquidar', 'Nomina\NominaliquidController@supervisar')->name('liquidar');

    /* RUTAS DE NOMINA FIJA */

    Route::get('nominaf', 'Nomina\NominaliquidController@index_nominaf')->name('nominaf')->middleware('superEditor');
    Route::post('nominaf_guardar', 'Nomina\NominaliquidController@store_nominaf')->name('guardar_nomina')->middleware('superEditor');
    // Route::get('nominaliquid/{id}/editar', 'Nomina\HoursxuserController@edit')->name('editar_turno')->middleware('superEditor');
    // Route::put('hoursxuser/{id}', 'Nomina\HoursxuserController@update')->name('actualizar_turno')->middleware('superEditor');
    // Route::post('liquidar', 'Nomina\HoursxuserController@supervisar')->name('liquidar');

    //RUTA PARA CONSULTA DE INFORMES
    Route::get('informesh', 'Nomina\NominaliquidController@informes')->name('hoursinfo')->middleware('superEditor');
    Route::get('informeshc', 'Nomina\NominaliquidController@informes1')->name('hoursinfoc')->middleware('superEditor');
    Route::get('select_user', 'UsuarioController@select')->name('select_user');



    //RUTA PARA CONSULTA DE INFORMES DE LIQUIDACION
    Route::get('informe-liquid', 'Nomina\LiquidationxuserController@informes')->name('liquidinfo')->middleware('superEditor');
    Route::get('informe-liquidc', 'Nomina\LiquidationxuserController@informes1')->name('liquidinfoc')->middleware('superEditor');
    Route::get('select_quincena', 'Nomina\NominaliquidController@select')->name('select_quincena');

    //RUTA LINEA PSICOLOGICA

    Route::get('reporte_psicologia', 'Psicologica\LineaPsicologicaController@index')->name('reportepsico')->middleware('superPsicologica');
    Route::post('guardar_evolucion', 'Psicologica\LineaPsicologicaController@store')->name('guardar_evolucion')->middleware('superPsicologica');
    Route::get('informe-psico', 'Psicologica\LineaPsicologicaController@informePsico')->name('informepsico')->middleware('superPsicologica');



    Route::get('consultar_evolucion', 'Psicologica\LineaPsicologicaController@indexAnalista')->name('analistapsico')->middleware('superAnalista');
    Route::get('consultar_evoluciona', 'Psicologica\LineaPsicologicaController@indexAnalistaa')->name('analistapsicoa')->middleware('superAnalista');
    Route::get('consultar_evolucions', 'Psicologica\LineaPsicologicaController@indexAnalistas')->name('analistapsicos')->middleware('superAnalista');
    Route::get('evolucion/{id}', 'Psicologica\LineaPsicologicaController@detalleEvolucion')->name('detalleEvolucion')->middleware('superAnalista');
    Route::get('addseguimiento/{id}', 'Psicologica\LineaPsicologicaController@addseguimiento')->name('addseguimiento')->middleware('superAnalista');

    Route::post('guardar_observacion', 'Psicologica\ObservacionesPsicologiaController@store')->name('guardar_observacion')->middleware('superPsicologica');

    Route::post('agendado', 'Psicologica\LineaPsicologicaController@agendadoEvolucion')->name('agendadoEvolucion')->middleware('superAnalista');


    //RUTA LINEA AVA

    Route::get('ava-index', 'Psicologica\LineaPsicologicaController@indexava')->name('indexava')->middleware('superPsicologica');


    //RUTA PARA CONSULTA DE CUENTASXPAGAR

    Route::get('cuentasxpagar','Facturacion\CuentasxPagarController@index')->name('cuentasxpagar')->middleware('superPsicologica');
    Route::post('cuentasxpagar', 'Facturacion\CuentasxPagarController@guardar')->name('guardar_factura')->middleware('superPsicologica');
    Route::put('cuentasxpagar/{id}', 'Facturacion\CuentasxPagarController@actualizar')->name('actualizar_factura')->middleware('superPsicologica');







    //RUTA PARA LISTAS DE PALIATIVOS

    Route::get('/listas-index', 'Paliativos\Listas\ListasController@index')->name('listasIndex')->middleware('superEditor');
    Route::post('/crear-listas', 'Paliativos\Listas\ListasController@store')->name('crearlistas')->middleware('superEditor');
    Route::get('/editar-listas/{id}', 'Paliativos\Listas\ListasController@show')->name('editar-listas')->middleware('superEditor');
    Route::put('/actualizar-listas/{id}', 'Paliativos\Listas\ListasController@update')->name('actualizar-listas')->middleware('superEditor');
    Route::delete('/borrar-listas/{id}', 'Paliativos\Listas\ListasController@destroy')->name('borrar-listas')->middleware('superEditor');

    Route::post('/listas-estado', 'Paliativos\Listas\ListasController@updateestado')->name('lisestado')->middleware('superEditor');

    //RUTA PARA LISTAS DETALLE DE PALIATIVOS

    Route::get('/detallelistas', 'Paliativos\Listas\ListasDetalleController@indexDetalle')->name('listasdetalledetalle')->middleware('superEditor');
    Route::post('/detallecrear-listas', 'Paliativos\Listas\ListasDetalleController@store')->name('crearlistasdetalle')->middleware('superEditor');
    Route::get('/detalleeditar-listas/{id}', 'Paliativos\Listas\ListasDetalleController@show')->name('editar-listasdetalle')->middleware('superEditor');
    Route::put('/detalleactualizar-listas/{id}', 'Paliativos\Listas\ListasDetalleController@update')->name('actualizar-listasdetalle')->middleware('superEditor');
    Route::delete('/detalleborrar-listas/{id}', 'Paliativos\Listas\ListasDetalleController@destroy')->name('borrar-listasdetalle')->middleware('superEditor');

    Route::post('/detalle-estado', 'Paliativos\Listas\ListasDetalleController@updateestado')->name('detestado')->middleware('superEditor');


    //RUTAS PARA CARGAR ARCHIVOS IMPORT
    Route::get('archivos', 'Paliativos\EstadosController@index')->name('archivos')->middleware('superEditor');
    Route::post('subir_archivo', 'Paliativos\EstadosController@import')->name('subirarchivo')->middleware('superEditor');
    Route::post('subir_archivo_pac', 'Paliativos\BasePaliativosController@import')->name('subirarchivopac')->middleware('superEditor');
    Route::post('subir_archivo_ultpe', 'Paliativos\CosultaspeController@import')->name('subirarchivoupe')->middleware('superEditor');
    Route::post('subir_archivo_ultauxiliar', 'Paliativos\ConsultaAuxiliarController@import')->name('subirarchivouau')->middleware('superEditor');


    //SELECT DE LISTAS

    route::get('selectlist', 'Paliativos\Listas\ListasDetalleController@select')->name('selectlist')->middleware('superEditor');
});

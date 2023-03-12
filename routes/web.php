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

     //RUTA PARA CONSULTA DE INFORMES

    Route::get('select_user', 'UsuarioController@select')->name('select_user');





    //RUTA PARA CONSULTA DE CUENTASXPAGAR, PARCIALES Y TOTALES

    Route::get('cuentasxpagar', 'Facturacion\CuentasxPagarController@index')->name('cuentasxpagar')->middleware('superPsicologica');
    Route::get('cuentas_payless', 'Facturacion\CuentasxPagarController@indexPayment')->name('cuentas_payless')->middleware('superEditor');
    Route::get('cuentas_parciales', 'Facturacion\CuentasxPagarController@indexParcial')->name('cuentas_parciales')->middleware('superEditor');
    Route::get('cuentas_canceladas', 'Facturacion\CuentasxPagarController@indexTotales')->name('cuentas_canceladas')->middleware('superEditor');
    Route::post('cuentasxpagar', 'Facturacion\CuentasxPagarController@guardar')->name('guardar_factura')->middleware('superPsicologica');
    Route::get('editcuentasxpagar/{id}', 'Facturacion\CuentasxPagarController@edit')->name('cuentasxpagar-edit')->middleware('superEditor');
    Route::put('cuentasxpagar/{id}', 'Facturacion\CuentasxPagarController@update')->name('actualizar_factura')->middleware('superPsicologica');

    //RUTAS PARA AGREGAR PAGO TOTAL O PARCIAL DE LAS CUENTAS POR PAGAR
    /* Route::get('pagos_cuenta/{id}', 'Facturacion\CuentasxPagarController@getPagos')->name('lista_pagos')->middleware('superEditor'); */
    Route::get('pagos_cuenta', 'Facturacion\CuentasxPagarController@getPagosList')->name('pagos_cuenta')->middleware('superEditor');
    Route::delete('rel_pago_cuenta/{id}', 'Facturacion\CuentasxPagarController@eliminar')->name('eliminar_pago')->middleware('superEditor');

    Route::get('pagos/cuenta/{id}', 'Facturacion\CuentasxPagarController@getPagos')->name('lista_pagos')->middleware('superEditor');
    Route::get('paycuentasxpagar/{id}/addpay', 'Facturacion\CuentasxPagarController@addpay')->name('cuentasxpagar-pay')->middleware('superEditor');
    /* Route::post('paycuentasxpagar', 'Facturacion\CuentasxPagarController@guardarpago')->name('cuentasxpagar_payment')->middleware('superEditor'); */
    Route::post('paycuentasxpagar', 'Facturacion\CuentasxPagarController@validpay')->name('cuentasxpagar_payment')->middleware('superEditor');


    //RUTA PARA CONSULTA DE PROVEEDORES

    Route::get('proveedores', 'Facturacion\ProveedoresController@index')->name('proveedores')->middleware('superPsicologica');
    Route::post('proveedoresstore', 'Facturacion\ProveedoresController@store')->name('proveedores_store')->middleware('superPsicologica');
    Route::get('editproveedores/{id}', 'Facturacion\ProveedoresController@edit')->name('proveedores-edit')->middleware('superEditor');
    Route::put('proveedores/{id}', 'Facturacion\ProveedoresController@update')->name('proveedores_update')->middleware('superPsicologica');
    route::get('proveedoreslist', 'Facturacion\ProveedoresController@select')->name('proveedoreslist')->middleware('superEditor');


    //RUTA PARA CONSULTA DE PROVEEDORES

    Route::get('ingresos', 'Facturacion\IngresosController@index')->name('ingresos')->middleware('superPsicologica');
    Route::post('ingresosstore', 'Facturacion\IngresosController@store')->name('ingresos_store')->middleware('superPsicologica');
    Route::get('editingresos/{id}', 'Facturacion\IngresosController@edit')->name('ingresos-edit')->middleware('superEditor');
    Route::put('ingresos/{id}', 'Facturacion\IngresosController@update')->name('ingresos_update')->middleware('superPsicologica');
    route::get('ingresoslist', 'Facturacion\IngresosController@select')->name('ingresoslist')->middleware('superEditor');


    Route::get('cuentas', 'Facturacion\CuentasIngresoController@index')->name('cuentas')->middleware('superPsicologica');
    Route::post('cuentasstore', 'Facturacion\CuentasIngresoController@store')->name('cuentas_store')->middleware('superPsicologica');
    Route::get('editcuentas/{id}', 'Facturacion\CuentasIngresoController@edit')->name('cuentas-edit')->middleware('superEditor');
    Route::put('cuentas/{id}', 'Facturacion\CuentasIngresoController@update')->name('cuentas_update')->middleware('superPsicologica');
    route::get('cuentaslist', 'Facturacion\CuentasIngresoController@select')->name('cuentaslist')->middleware('superEditor');




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




    //SELECT DE LISTAS

    route::get('selectlist', 'Paliativos\Listas\ListasDetalleController@select')->name('selectlist')->middleware('superEditor');
});

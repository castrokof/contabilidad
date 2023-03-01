<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class UsuarioAdministradorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


         //Crear cargo menu-rol




       DB::table('usuario')->insert([
            'papellido'=>strtoupper('Castro'),
            'sapellido'=>strtoupper('Galeano'),
            'pnombre'=>strtoupper('Jhonnathan'),
            'snombre'=>null,
            'tipo_documento'=>strtoupper('CC'),
            'documento'=>'1130629762',
            'usuario'=>'jcastro',
            'password'=>bcrypt('123456'),
            'remenber_token'=>bcrypt('123456'),
            'email'=>'castrokof@gmail.com',
            'celular'=>'3175018125',
            'observacion'=>strtoupper('Prueba'),
            'ips'=>strtoupper('atencion fidem s.a.s'),
            'activo'=>'1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')

             ]);




        DB::table('usuario_rol')->insert([

            'rol_id'=>1,
            'usuario_id'=>1,



        ]);


        //Creación de menu

        DB::table('menu')->insert([

            'menu_id'=> 0,
            'nombre'=>'Admin',
            'url'=>'#',
            'orden'=>1,
            'icono'=>'far fa-building'
        ]);
        DB::table('menu')->insert([

            'menu_id'=> 1,
            'nombre'=>'Lista de Menus',
            'url'=>'admin/menu',
            'orden'=>1,
            'icono'=>'fa fa-cog fa-spin fa-3x fa-fw'
        ]);
        DB::table('menu')->insert([

            'menu_id'=> 1,
            'nombre'=>'Crear_menu',
            'url'=>'admin/menu/crear',
            'orden'=>2,
            'icono'=>'fas fa-clipboard-list'
        ]);
        DB::table('menu')->insert([

            'menu_id'=> 1,
            'nombre'=>'Roles',
            'url'=>'admin/rol',
            'orden'=>3,
            'icono'=>'fa fa-list'
        ]);
        DB::table('menu')->insert([

            'menu_id'=> 1,
            'nombre'=>'Asignar Menus',
            'url'=>'admin/menu-rol',
            'orden'=>4,
            'icono'=>'fa fa-tasks'
        ]);
        DB::table('menu')->insert([

            'menu_id'=> 0,
            'nombre'=>'Registro Usuarios',
            'url'=>'#',
            'orden'=>2,
            'icono'=>'fa fa-users'
        ]);
        DB::table('menu')->insert([

            'menu_id'=> 0,
            'nombre'=>'Registrar Turnos',
            'url'=>'#',
            'orden'=>5,
            'icono'=>'fas fa-clinic-medical'
        ]);
        DB::table('menu')->insert([

            'menu_id'=> 7,
            'nombre'=>'Reporte Turnos',
            'url'=>'hoursxuser',
            'orden'=>1,
            'icono'=>'fas fa-book-medical'
        ]);
        DB::table('menu')->insert([

            'menu_id'=> 6,
            'nombre'=>'Registrar Usuario',
            'url'=>'usuario',
            'orden'=>1,
            'icono'=>'fas fa-user-plus'
        ]);
        DB::table('menu')->insert([

            'menu_id'=> 0,
            'nombre'=>'Registro Cargos',
            'url'=>'usuario',
            'orden'=>3,
            'icono'=>'fas fa-chart-line'
        ]);
        DB::table('menu')->insert([

            'menu_id'=> 10,
            'nombre'=>'Registrar Cargo',
            'url'=>'position',
            'orden'=>1,
            'icono'=>'fas fa-plus-circle'
        ]);
        DB::table('menu')->insert([

            'menu_id'=> 0,
            'nombre'=>'Supervisar Turnos',
            'url'=>'#',
            'orden'=>4,
            'icono'=>'fas fa-tasks'
        ]);
        DB::table('menu')->insert([

            'menu_id'=> 12,
            'nombre'=>'Validar Turnos',
            'url'=>'informesh',
            'orden'=>1,
            'icono'=>'fas fa-check-double'
        ]);
        DB::table('menu')->insert([

            'menu_id'=> 12,
            'nombre'=>'Informe Liquidado',
            'url'=>'informe-liquid',
            'orden'=>2,
            'icono'=>'fas fa-file-invoice-dollar fa-2x'
        ]);
        DB::table('menu')->insert([

            'menu_id'=> 0,
            'nombre'=>'Nomina fijos',
            'url'=>'#',
            'orden'=>5,
            'icono'=>'fas fa-file-invoice-dollar fa-2x'
        ]);
        DB::table('menu')->insert([

            'menu_id'=> 15,
            'nombre'=>'Crear nomina',
            'url'=>'nominaf',
            'orden'=>1,
            'icono'=>'fas fa-money-check-alt'
        ]);
        DB::table('menu')->insert([

            'menu_id'=> 1,
            'nombre'=>'Listas',
            'url'=>'#',
            'orden'=>'5',
            'icono'=>'fa fa-book'
        ]);

        DB::table('menu')->insert([

            'menu_id'=> 17,
            'nombre'=>'Detalle listas',
            'url'=>'detallelistas',
            'orden'=>'1',
            'icono'=>'fa fa-list'
        ]);

        DB::table('menu')->insert([

            'menu_id'=> 6,
            'nombre'=>'Registrar Empleado',
            'url'=>'empleado',
            'orden'=>'2',
            'icono'=>'fas fa-user-plus'
        ]);

        DB::table('menu')->insert([

            'menu_id'=> 0,
            'nombre'=>'Base Paliativos',
            'url'=>'#',
            'orden'=>'2',
            'icono'=>'fas fa-user-injured'
        ]);

        DB::table('menu')->insert([

            'menu_id'=> 20,
            'nombre'=>'Lista paliativos',
            'url'=>'paliativos-index',
            'orden'=>'1',
            'icono'=>'fas fa-users'
        ]);
        DB::table('menu')->insert([

            'menu_id'=> 0,
            'nombre'=>'Linea Psicologica',
            'url'=>'#',
            'orden'=>'3',
            'icono'=>'fas fa-phone'
        ]);
        DB::table('menu')->insert([

            'menu_id'=> 22,
            'nombre'=>'Reporte Linea',
            'url'=>'/reporte_psicologia',
            'orden'=>'1',
            'icono'=>'fas fa-book'
        ]);
        DB::table('menu')->insert([

            'menu_id'=> 22,
            'nombre'=>'Reporte Evolucion',
            'url'=>'/consultar_evolucion',
            'orden'=>'2',
            'icono'=>'fas fa-file-alt'
        ]);

        DB::table('menu')->insert([

            'menu_id'=> 1,
            'nombre'=>'Cargue Excel',
            'url'=>'#',
            'orden'=>'1',
            'icono'=>'far fa-file-excel'
        ]);
        DB::table('menu')->insert([

            'menu_id'=> 25,
            'nombre'=>'Cargar Excel',
            'url'=>'archivos',
            'orden'=>'1',
            'icono'=>'fas fa-file-import'
        ]);
        DB::table('menu')->insert([

            'menu_id'=> 0,
            'nombre'=>'Registrar cuentas',
            'url'=>'#',
            'orden'=>'3',
            'icono'=>'fas fa-book'
        ]);
        DB::table('menu')->insert([

            'menu_id'=> 27,
            'nombre'=>'Cuentas x pagar',
            'url'=>'/cuentasxpagar',
            'orden'=>'1',
            'icono'=>'fas fa-book'
        ]);
        DB::table('menu')->insert([

            'menu_id'=> 22,
            'nombre'=>'Proveedores',
            'url'=>'/proveedores',
            'orden'=>'2',
            'icono'=>'fas fa-file-alt'
        ]);




        //Relación menu-rol

        DB::table('menu_rol')->insert([

            'rol_id'=> 1,
            'menu_id'=> 1
        ]);
        DB::table('menu_rol')->insert([

            'rol_id'=> 1,
            'menu_id'=> 2
        ]);
        DB::table('menu_rol')->insert([

            'rol_id'=> 1,
            'menu_id'=> 3
        ]);
        DB::table('menu_rol')->insert([

            'rol_id'=> 1,
            'menu_id'=> 4
        ]);
        DB::table('menu_rol')->insert([

            'rol_id'=> 1,
            'menu_id'=> 5
        ]);
        DB::table('menu_rol')->insert([

            'rol_id'=> 1,
            'menu_id'=> 7
        ]);
        DB::table('menu_rol')->insert([

            'rol_id'=> 1,
            'menu_id'=> 8
        ]);
        DB::table('menu_rol')->insert([

            'rol_id'=> 1,
            'menu_id'=> 6
        ]);
        DB::table('menu_rol')->insert([

            'rol_id'=> 1,
            'menu_id'=> 9
        ]);
        DB::table('menu_rol')->insert([

            'rol_id'=> 2,
            'menu_id'=> 6
        ]);
        DB::table('menu_rol')->insert([

            'rol_id'=> 2,
            'menu_id'=> 9
        ]);
        DB::table('menu_rol')->insert([

            'rol_id'=> 2,
            'menu_id'=> 7
        ]);
        DB::table('menu_rol')->insert([

            'rol_id'=> 2,
            'menu_id'=> 8
        ]);
        DB::table('menu_rol')->insert([

            'rol_id'=> 1,
            'menu_id'=> 10
        ]);
        DB::table('menu_rol')->insert([

            'rol_id'=> 1,
            'menu_id'=> 11
        ]);
        DB::table('menu_rol')->insert([

            'rol_id'=> 1,
            'menu_id'=> 12
        ]);
        DB::table('menu_rol')->insert([

            'rol_id'=> 1,
            'menu_id'=> 13
        ]);
        DB::table('menu_rol')->insert([

            'rol_id'=> 1,
            'menu_id'=> 14
        ]);
        DB::table('menu_rol')->insert([

            'rol_id'=> 1,
            'menu_id'=> 15
        ]);
        DB::table('menu_rol')->insert([

            'rol_id'=> 1,
            'menu_id'=> 16
        ]);
        DB::table('menu_rol')->insert([

            'rol_id'=> 1,
            'menu_id'=> 17
        ]);
        DB::table('menu_rol')->insert([

            'rol_id'=> 1,
            'menu_id'=> 18
        ]);

        DB::table('menu_rol')->insert([

            'rol_id'=> 1,
            'menu_id'=> 19
        ]);

        DB::table('menu_rol')->insert([

            'rol_id'=> 1,
            'menu_id'=> 20
        ]);


        DB::table('menu_rol')->insert([

            'rol_id'=> 1,
            'menu_id'=> 21
        ]);
        DB::table('menu_rol')->insert([

            'rol_id'=> 1,
            'menu_id'=> 22
        ]);
        DB::table('menu_rol')->insert([

            'rol_id'=> 1,
            'menu_id'=> 23
        ]);
        DB::table('menu_rol')->insert([

            'rol_id'=> 1,
            'menu_id'=> 24
        ]);
        DB::table('menu_rol')->insert([

            'rol_id'=> 1,
            'menu_id'=> 25
        ]);
        DB::table('menu_rol')->insert([

            'rol_id'=> 1,
            'menu_id'=> 26
        ]);
        DB::table('menu_rol')->insert([

            'rol_id'=> 1,
            'menu_id'=> 27
        ]);
        DB::table('menu_rol')->insert([

            'rol_id'=> 1,
            'menu_id'=> 28
        ]);
        DB::table('menu_rol')->insert([

            'rol_id'=> 1,
            'menu_id'=> 29
        ]);


        DB::table('listas')->insert([
            'slug'=>strtoupper('EMP'),
            'nombre'=>strtoupper('LISTA DE EMPRESAS'),
            'descripcion'=>strtoupper('LISTADO PARA CREAR LAS EMPRESAS'),
            'activo'=>'SI',
            'user_id'=>1,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
              ]);
              DB::table('listas')->insert([
                'slug'=>strtoupper('BANK'),
                'nombre'=>strtoupper('BANCOS'),
                'descripcion'=>strtoupper('LISTA DE BANCOS'),
                'activo'=>'SI',
                'user_id'=>1,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                  ]);
                  DB::table('listas')->insert([
                    'slug'=>strtoupper('TYAC'),
                    'nombre'=>strtoupper('TYPE_ACCOUNT'),
                    'descripcion'=>strtoupper('LISTA DE TIPOS DE CUENTA'),
                    'activo'=>'SI',
                    'user_id'=>1,
                    'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                      ]);
                      DB::table('listas')->insert([
                        'slug'=>strtoupper('CARG'),
                        'nombre'=>strtoupper('LISTA DE CARGOS'),
                        'descripcion'=>strtoupper('LISTA DE CARGOS'),
                        'activo'=>'SI',
                        'user_id'=>1,
                        'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                          ]);

                          DB::table('listas')->insert([
                            'slug'=>strtoupper('LEPS'),
                            'nombre'=>strtoupper('LISTA DE EPS'),
                            'descripcion'=>strtoupper('LISTA DE EPS'),
                            'activo'=>'SI',
                            'user_id'=>1,
                            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                              ]);

                              DB::table('listas')->insert([
                                'slug'=>strtoupper('LARL'),
                                'nombre'=>strtoupper('LISTA DE ARL'),
                                'descripcion'=>strtoupper('LISTA DE ARL'),
                                'activo'=>'SI',
                                'user_id'=>1,
                                'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                                  ]);

                                  DB::table('listas')->insert([
                                    'slug'=>strtoupper('LAFP'),
                                    'nombre'=>strtoupper('LISTA DE FONDO DE PENSIONES'),
                                    'descripcion'=>strtoupper('LISTA DE FONDO DE PENSIONES'),
                                    'activo'=>'SI',
                                    'user_id'=>1,
                                    'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                                      ]);
                                      DB::table('listas')->insert([
                                        'slug'=>strtoupper('LFCA'),
                                        'nombre'=>strtoupper('LISTA DE FONDO DE CESANTIAS'),
                                        'descripcion'=>strtoupper('LISTA DE FONDO DE CESANTIAS'),
                                        'activo'=>'SI',
                                        'user_id'=>1,
                                        'created_at' => Carbon::now()->format('Y-m-d H:i:s')
                                          ]);
                                          DB::table('listas')->insert([
                                            'slug'=> 'TDOC',
                                            'nombre'=> 'TIPO DE DOCUMENTOS',
                                            'descripcion'=> 'TIPOS DE DOCUMENTOS',
                                            'activo'=> 'SI',
                                            'user_id'=> 1
                                        ]);
                                        DB::table('listas')->insert([
                                            'slug'=> 'ESTA',
                                            'nombre'=> 'ESTADOS',
                                            'descripcion'=> 'ESTADOS DEL PACIENTE',
                                            'activo'=> 'SI',
                                            'user_id'=> 1
                                        ]);
                                        DB::table('listas')->insert([
                                            'slug'=> 'AMBI',
                                            'nombre'=> 'AMBITOS',
                                            'descripcion'=> 'AMBITOS DE ATENCIÓN DE PACIENTES',
                                            'activo'=> 'SI',
                                            'user_id'=> 1
                                        ]);
                                        DB::table('listas')->insert([
                                            'slug'=> 'TOBS',
                                            'nombre'=> 'TIPO DE OBSERVACION',
                                            'descripcion'=> 'TIPO DE OBSERVACION',
                                            'activo'=> 'SI',
                                            'user_id'=> 1
                                        ]);
                                        DB::table('listas')->insert([
                                            'slug'=> 'SUBT',
                                            'nombre'=> 'SUB TIPO DE OBSERVACION',
                                            'descripcion'=> 'SUB TIPO DE OBSERVACION',
                                            'activo'=> 'SI',
                                            'user_id'=> 1
                                        ]);

                                        DB::table('listas')->insert([
                                            'slug'=> 'SUBTA',
                                            'nombre'=> 'SUB TIPO DE ALERTA',
                                            'descripcion'=> 'SUB TIPO DE ALERTA',
                                            'activo'=> 'SI',
                                            'user_id'=> 1
                                        ]);
                                        DB::table('listas')->insert([
                                            'slug'=> 'PAIS',
                                            'nombre'=> 'PAIS COLOMBIA',
                                            'descripcion'=> 'PAIS COLOMBIA',
                                            'activo'=> 'SI',
                                            'user_id'=> 1
                                        ]);
                                        DB::table('listas')->insert([
                                            'slug'=> 'DPTO',
                                            'nombre'=> 'DEPARTAMENTOS',
                                            'descripcion'=> 'DEPARTAMENTOS',
                                            'activo'=> 'SI',
                                            'user_id'=> 1
                                        ]);
                                        DB::table('listas')->insert([
                                            'slug'=> 'CIUDADES',
                                            'nombre'=> 'CIUDADES',
                                            'descripcion'=> 'CIUDADES',
                                            'activo'=> 'SI',
                                            'user_id'=> 1
                                        ]);







                      DB::table('listasdetalle')->insert([
                        ['slug'=>strtoupper('FIDEM'),'nombre'=>strtoupper('ATENCION FIDEM SAS'),'descripcion'=>strtoupper('IPS FIDEM'),
                        'activo'=>'SI', 'listas_id'=>1,'user_id'=>1,  'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('MEDCOL'),'nombre'=>strtoupper('SALUD MEDCOL SAS'),'descripcion'=>strtoupper('FARMACIA MEDCOL'),
                        'activo'=>'SI', 'listas_id'=>1,'user_id'=>1,  'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('TEMPUS'),'nombre'=>strtoupper('TEMPUS ATENCIÓN INTEGRAL SAS'),'descripcion'=>strtoupper('FARMACIA TEMPUS'),
                        'activo'=>'SI', 'listas_id'=>1,'user_id'=>1,  'created_at' => Carbon::now()->format('Y-m-d H:i:s')],

                        ['slug'=>strtoupper('DAVA'),'nombre'=>strtoupper('DAVIVIENDA'),'descripcion'=>strtoupper('DAVIVIENDA'),
                        'activo'=>'SI', 'listas_id'=>2,'user_id'=>1,  'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('BOGA'),'nombre'=>strtoupper('BANCO DE BOGOTA'),'descripcion'=>strtoupper('BANCO DE BOGOTA'),
                        'activo'=>'SI', 'listas_id'=>2,'user_id'=>1,  'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('BANC'),'nombre'=>strtoupper('BANCOLOMBIA'),'descripcion'=>strtoupper('BANCOLOMBIA'),
                        'activo'=>'SI', 'listas_id'=>2,'user_id'=>1,  'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('AVVS'),'nombre'=>strtoupper('BANCO AV VILLAS'),'descripcion'=>strtoupper('BANCO AV VILLAS'),
                        'activo'=>'SI', 'listas_id'=>2,'user_id'=>1,  'created_at' => Carbon::now()->format('Y-m-d H:i:s')],

                        ['slug'=>strtoupper('AHOS'),'nombre'=>strtoupper('AHORROS'),'descripcion'=>strtoupper('AHORROS'),
                        'activo'=>'SI', 'listas_id'=>3,'user_id'=>1,  'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CORE'),'nombre'=>strtoupper('CORRIENTE'),'descripcion'=>strtoupper('CORRIENTE'),
                        'activo'=>'SI', 'listas_id'=>3,'user_id'=>1,  'created_at' => Carbon::now()->format('Y-m-d H:i:s')],


                        ['slug'=>strtoupper('MGRAL'),'nombre'=>strtoupper('MEDICO GENERAL'),'descripcion'=>strtoupper('MEDICO GENERAL'),
                        'activo'=>'SI', 'listas_id'=>4,'user_id'=>1,  'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('MESP'),'nombre'=>strtoupper('MEDICO ESPECIALISTA'),'descripcion'=>strtoupper('MEDICO ESPECIALISTA'),
                        'activo'=>'SI', 'listas_id'=>4,'user_id'=>1,  'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('PSIC'),'nombre'=>strtoupper('PSICOLOGIA'),'descripcion'=>strtoupper('PSICOLOGIA'),
                        'activo'=>'SI', 'listas_id'=>4,'user_id'=>1,  'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('AUXM'),'nombre'=>strtoupper('AUXILIAR DE ENFERMERIA'),'descripcion'=>strtoupper('AUXILIAR DE ENFERMERIA'),
                        'activo'=>'SI', 'listas_id'=>4,'user_id'=>1,  'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('AUXA'),'nombre'=>strtoupper('AUXILIAR ADMINISTRATIVO'),'descripcion'=>strtoupper('AUXILIAR ADMINISTRATIVO'),
                        'activo'=>'SI', 'listas_id'=>4,'user_id'=>1,  'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('MESA'),'nombre'=>strtoupper('MEDICO ESP ANESTESIOLOGIA'),'descripcion'=>strtoupper('MEDICO ESPECIALISTA EN ANESTESIOLOGIA'),
                        'activo'=>'SI', 'listas_id'=>4,'user_id'=>1,  'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('MESA'),'nombre'=>strtoupper('MEDICO ESP ALGOLOGIA'),'descripcion'=>strtoupper('MEDICO ESPECIALISTA EN ALGOLOGIA'),
                        'activo'=>'SI', 'listas_id'=>4,'user_id'=>1,  'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('MESO'),'nombre'=>strtoupper('MEDICO ESP ORTOPEDIA'),'descripcion'=>strtoupper('MEDICO ESPECIALISTA EN ORTOPEDIA'),
                        'activo'=>'SI', 'listas_id'=>4,'user_id'=>1,  'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('MESD'),'nombre'=>strtoupper('MEDICO ESP EN DOLOR Y CUIDADOS PALIATIVOS'),'descripcion'=>strtoupper('MEDICO ESPECIALISTA EN DOLOR Y CUIDADOS PALIATIVOS'),
                        'activo'=>'SI', 'listas_id'=>4,'user_id'=>1,  'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CSST'),'nombre'=>strtoupper('COORDINADOR DE SST'),'descripcion'=>strtoupper('COORDINADOR DE SST'),
                        'activo'=>'SI', 'listas_id'=>4,'user_id'=>1,  'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('JDES'),'nombre'=>strtoupper('JEFE DE SISTEMAS'),'descripcion'=>strtoupper('JEFE DE SISTEMAS DE INFORMACIÓN'),
                        'activo'=>'SI', 'listas_id'=>4,'user_id'=>1,  'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('GGEN'),'nombre'=>strtoupper('GERENTE'),'descripcion'=>strtoupper('GERENTE'),
                        'activo'=>'SI', 'listas_id'=>4,'user_id'=>1,  'created_at' => Carbon::now()->format('Y-m-d H:i:s')],

                        ['slug'=>strtoupper('COMF'),'nombre'=>strtoupper('EPS COMFENALCO VALLE'),'descripcion'=>strtoupper('EPS COMFENALCO VALLE'),
                        'activo'=>'SI', 'listas_id'=>5,'user_id'=>1,  'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('SANI'),'nombre'=>strtoupper('EPS SANITAS'),'descripcion'=>strtoupper('EPS SANITAS'),
                        'activo'=>'SI', 'listas_id'=>5,'user_id'=>1,  'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('SURA'),'nombre'=>strtoupper('EPS SURA'),'descripcion'=>strtoupper('EPS SURA'),
                        'activo'=>'SI', 'listas_id'=>5,'user_id'=>1,  'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('COOS'),'nombre'=>strtoupper('COOSALUD EPS'),'descripcion'=>strtoupper('COOSALUD EPS'),
                        'activo'=>'SI', 'listas_id'=>5,'user_id'=>1,  'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('ESOS'),'nombre'=>strtoupper('SOS EPS'),'descripcion'=>strtoupper('SOS EPS'),
                        'activo'=>'SI', 'listas_id'=>5,'user_id'=>1,  'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('COMF'),'nombre'=>strtoupper('COMFANDI EPS'),'descripcion'=>strtoupper('COMFANDI EPS'),
                        'activo'=>'SI', 'listas_id'=>5,'user_id'=>1,  'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('STOT'),'nombre'=>strtoupper('EPS SALUD TOTAL'),'descripcion'=>strtoupper('EPS SALUD TOTAL'),
                        'activo'=>'SI', 'listas_id'=>5,'user_id'=>1,  'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('NEPS'),'nombre'=>strtoupper('NUEVA EPS'),'descripcion'=>strtoupper('NUEVA EPS'),
                        'activo'=>'SI', 'listas_id'=>5,'user_id'=>1,  'created_at' => Carbon::now()->format('Y-m-d H:i:s')],

                        ['slug'=>strtoupper('PORV'),'nombre'=>strtoupper('PORVENIR'),'descripcion'=>strtoupper('PORVENIR'),
                        'activo'=>'SI', 'listas_id'=>7,'user_id'=>1,  'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('COLP'),'nombre'=>strtoupper('COLPENSIONES'),'descripcion'=>strtoupper('COLPENSIONES'),
                        'activo'=>'SI', 'listas_id'=>7,'user_id'=>1,  'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('PROT'),'nombre'=>strtoupper('PROTECCION'),'descripcion'=>strtoupper('PROTECCION'),
                        'activo'=>'SI', 'listas_id'=>7,'user_id'=>1,  'created_at' => Carbon::now()->format('Y-m-d H:i:s')],

                        ['slug'=>strtoupper('PROT'),'nombre'=>strtoupper('PROTECCION'),'descripcion'=>strtoupper('PROTECCION'),'activo'=>'SI', 'listas_id'=>8,'user_id'=>1,  'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('COLF'),'nombre'=>strtoupper('COLFONDOS'),'descripcion'=>strtoupper('COLFONDOS'),
                        'activo'=>'SI', 'listas_id'=>8,'user_id'=>1,  'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('PORV'),'nombre'=>strtoupper('PORVENIR'),'descripcion'=>strtoupper('PORVENIR'),
                        'activo'=>'SI', 'listas_id'=>8,'user_id'=>1,  'created_at' => Carbon::now()->format('Y-m-d H:i:s')],

                        ['slug'=>strtoupper('AXA'),'nombre'=>strtoupper('AXA COLPATRIA SEGUROS S.A.'),'descripcion'=>strtoupper('AXA COLPATRIA SEGUROS S.A.'),'activo'=>'SI', 'listas_id'=>6,'user_id'=>1,  'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('COLM'),'nombre'=>strtoupper('COLMENA SEGUROS S.A.'),'descripcion'=>strtoupper('COLMENA SEGUROS S.A.'),'activo'=>'SI', 'listas_id'=>6,'user_id'=>1,  'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('AUR'),'nombre'=>strtoupper('COMPAÑÍA DE SEGUROS DE VIDA AURORA S.A.'),'descripcion'=>strtoupper('COMPAÑÍA DE SEGUROS DE VIDA AURORA S.A.'),'activo'=>'SI', 'listas_id'=>6,'user_id'=>1,  'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('EQU'),'nombre'=>strtoupper('LA EQUIDAD SEGUROS'),'descripcion'=>strtoupper('LA EQUIDAD SEGUROS'),'activo'=>'SI', 'listas_id'=>6,'user_id'=>1,  'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('POS'),'nombre'=>strtoupper('POSITIVA COMPAÑÍA DE SEGUROS S.A.'),'descripcion'=>strtoupper('POSITIVA COMPAÑÍA DE SEGUROS S.A.'),'activo'=>'SI', 'listas_id'=>6,'user_id'=>1,  'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('SUR'),'nombre'=>strtoupper('SEGUROS GENERALES SURAMERICANA S.A.'),'descripcion'=>strtoupper('SEGUROS GENERALES SURAMERICANA S.A.'),'activo'=>'SI', 'listas_id'=>6,'user_id'=>1,  'created_at' => Carbon::now()->format('Y-m-d H:i:s')],

                       ['slug'=> 'CC', 'nombre'=> 'CC','descripcion'=> 'CEDULA DE CIUDADANIA','activo'=> 'SI', 'listas_id'=> 9,  'user_id'=> 1,'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                       ['slug'=> 'TI','nombre'=> 'TI','descripcion'=> 'TARJETA DE IDENTIDAD','activo'=> 'SI','listas_id'=> 9,'user_id'=> 1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s') ],
                       ['slug'=> 'CE','nombre'=> 'CE','descripcion'=> 'CEDULA DE EXTRANJERIA','activo'=> 'SI','listas_id'=> 9,'user_id'=> 1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s') ],
                       ['slug'=> 'RC','nombre'=> 'RC','descripcion'=> 'REGISTRO CIVIL','activo'=> 'SI','listas_id'=> 9,'user_id'=> 1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s') ],
                       ['slug'=> 'PA','nombre'=> 'PA','descripcion'=> 'PASAPORTE','activo'=> 'SI','listas_id'=> 9,'user_id'=> 1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s') ],
                       ['slug'=> 'AS','nombre'=> 'AS','descripcion'=> 'ADULTO SIN IDENTIFICACIÓN','activo'=> 'SI','listas_id'=> 9,'user_id'=> 1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s') ],
                       ['slug'=> 'MS','nombre'=> 'MS','descripcion'=> 'MENOR SIN IDENTIFICACION','activo'=> 'SI','listas_id'=> 9,'user_id'=> 1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s') ],
                       ['slug'=> 'NI','nombre'=> 'NI','descripcion'=> 'NIT','activo'=> 'SI','listas_id'=> 9,'user_id'=> 1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s') ],
                       ['slug'=> 'NU','nombre'=> 'NU','descripcion'=> 'NU','activo'=> 'SI','listas_id'=> 9,'user_id'=> 1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s') ],
                       ['slug'=> 'PE','nombre'=> 'PE','descripcion'=> 'PERMISO ESPECIAL','activo'=> 'SI','listas_id'=> 9,'user_id'=> 1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s') ],
                       ['slug'=> 'SC','nombre'=> 'SC','descripcion'=> 'SALVO CONDUCTO','activo'=> 'SI','listas_id'=> 9,'user_id'=> 1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s') ],
                       ['slug'=> 'CD','nombre'=> 'CD','descripcion'=> 'CARNET DIPLOMATICO','activo'=> 'SI','listas_id'=> 9,'user_id'=> 1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s') ],
                       ['slug'=> 'RE','nombre'=> 'RE','descripcion'=> 'RESIDENTE ESPECIAL','activo'=> 'SI','listas_id'=> 9,'user_id'=> 1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s') ],
                       ['slug'=> 'PT','nombre'=> 'PT','descripcion'=> 'PROTECCIÓN TEMPORAL','activo'=> 'SI','listas_id'=> 9,'user_id'=> 1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s') ],


                       ['slug'=>strtoupper('FALL'),'nombre'=>strtoupper('FALLECIDO'),'descripcion'=>strtoupper('FALLECIDO'),'activo'=>'SI', 'listas_id'=>10,'user_id'=>1,  'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                       ['slug'=>strtoupper('SCON'),'nombre'=>strtoupper('SIN CONTACTO'),'descripcion'=>strtoupper('SIN CONTACTO'),'activo'=>'SI', 'listas_id'=>10,'user_id'=>1,  'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                       ['slug'=>strtoupper('ASIG'),'nombre'=>strtoupper('ASIGNADO'),'descripcion'=>strtoupper('ASIGNADO'),'activo'=>'SI', 'listas_id'=>10,'user_id'=>1,  'created_at' => Carbon::now()->format('Y-m-d H:i:s')],

                       ['slug'=>strtoupper('ATEND'),'nombre'=>strtoupper('ATENDIDO'),'descripcion'=>strtoupper('PACIENTE ATENDIDO'),'activo'=>'SI', 'listas_id'=>10,'user_id'=>1,  'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                       ['slug'=>strtoupper('PNQC'),'nombre'=>strtoupper('PACIENTE NO ACEPTA CITA'),'descripcion'=>strtoupper('PACIENTE NO ACEPTA CITA'),'activo'=>'SI', 'listas_id'=>10,'user_id'=>1,  'created_at' => Carbon::now()->format('Y-m-d H:i:s')],

                       ['slug'=>strtoupper('AMBL'),'nombre'=>strtoupper('AMBULATORIO'),'descripcion'=>strtoupper('AMBULATORIO'),'activo'=>'SI', 'listas_id'=>11,'user_id'=>1,  'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                       ['slug'=>strtoupper('HOSP'),'nombre'=>strtoupper('DOMICILIARIO'),'descripcion'=>strtoupper('DOMICILIARIO'),'activo'=>'SI', 'listas_id'=>11,'user_id'=>1,  'created_at' => Carbon::now()->format('Y-m-d H:i:s')],

                       ['slug'=>strtoupper('SEGU'),'nombre'=>strtoupper('SEGUIMIENTO'),'descripcion'=>strtoupper('SEGUIMIENTO PACIENTE'),'activo'=>'SI', 'listas_id'=>12,'user_id'=>1,  'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                       ['slug'=>strtoupper('HOSP'),'nombre'=>strtoupper('HOSPITALIZADO'),'descripcion'=>strtoupper('HOSPITALIZACION DEL PACIENTE'),'activo'=>'SI', 'listas_id'=>12,'user_id'=>1,  'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                       ['slug'=>strtoupper('ALER'),'nombre'=>strtoupper('ALERTA'),'descripcion'=>strtoupper('ALERTA DEL PACIENTE'),'activo'=>'SI', 'listas_id'=>12,'user_id'=>1,  'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                       ['slug'=>strtoupper('EGRE'),'nombre'=>strtoupper('EGRESO'),'descripcion'=>strtoupper('SE USA CUANDO AL PACIENTE LE DAN SALIDA DEL PROGRAMA'),'activo'=>'SI', 'listas_id'=>12,'user_id'=>1,  'created_at' => Carbon::now()->format('Y-m-d H:i:s')],

                       ['slug'=>strtoupper('DOLO'),'nombre'=>strtoupper('DOLOR'),'descripcion'=>strtoupper('DOLOR'),'activo'=>'SI', 'listas_id'=>13,'user_id'=>1,  'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                       ['slug'=>strtoupper('OTRO'),'nombre'=>strtoupper('OTRO'),'descripcion'=>strtoupper('OTRO'),'activo'=>'SI', 'listas_id'=>13,'user_id'=>1,  'created_at' => Carbon::now()->format('Y-m-d H:i:s')],


                       ['slug'=>strtoupper('MEDI'),'nombre'=>strtoupper('MEDICAMENTO'),'descripcion'=>strtoupper('MEDICAMENTO'),'activo'=>'SI', 'listas_id'=>14,'user_id'=>1,  'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                       ['slug'=>strtoupper('GRAV'),'nombre'=>strtoupper('GRAVE'),'descripcion'=>strtoupper('GRAVE'),'activo'=>'SI', 'listas_id'=>14,'user_id'=>1,  'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                       ['slug'=>strtoupper('CITA'),'nombre'=>strtoupper('ASIGNAR CITA'),'descripcion'=>strtoupper('ASIGNAR CITA PALIATIVOS O EXPERTO'),'activo'=>'SI', 'listas_id'=>14,'user_id'=>1,  'created_at' => Carbon::now()->format('Y-m-d H:i:s')],


                       ['slug'=>strtoupper('COL'),'nombre'=>strtoupper('COLOMBIA'),'descripcion'=>strtoupper('COLOMBIA'),'activo'=>'SI', 'listas_id'=>16,'user_id'=>1,  'created_at' => Carbon::now()->format('Y-m-d H:i:s')],

                        ['slug'=>strtoupper('DPTO'),'nombre'=>strtoupper('AMAZONAS'),'descripcion'=>strtoupper('AMAZONAS'),'activo'=>'SI', 'listas_id'=>15,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('DPTO'),'nombre'=>strtoupper('ANTIOQUIA'),'descripcion'=>strtoupper('ANTIOQUIA'),'activo'=>'SI', 'listas_id'=>15,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('DPTO'),'nombre'=>strtoupper('ARAUCA'),'descripcion'=>strtoupper('ARAUCA'),'activo'=>'SI', 'listas_id'=>15,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('DPTO'),'nombre'=>strtoupper('ARCHIPIELAGO DE SAN ANDRES'),'descripcion'=>strtoupper('ARCHIPIELAGO DE SAN ANDRES'),'activo'=>'SI', 'listas_id'=>15,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('DPTO'),'nombre'=>strtoupper('ATLÁNTICO'),'descripcion'=>strtoupper('ATLÁNTICO'),'activo'=>'SI', 'listas_id'=>15,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('DPTO'),'nombre'=>strtoupper('BOLIVAR'),'descripcion'=>strtoupper('BOLIVAR'),'activo'=>'SI', 'listas_id'=>15,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('DPTO'),'nombre'=>strtoupper('BOYACÁ'),'descripcion'=>strtoupper('BOYACÁ'),'activo'=>'SI', 'listas_id'=>15,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('DPTO'),'nombre'=>strtoupper('CALDAS'),'descripcion'=>strtoupper('CALDAS'),'activo'=>'SI', 'listas_id'=>15,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('DPTO'),'nombre'=>strtoupper('CAQUETA'),'descripcion'=>strtoupper('CAQUETA'),'activo'=>'SI', 'listas_id'=>15,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('DPTO'),'nombre'=>strtoupper('CASANARE'),'descripcion'=>strtoupper('CASANARE'),'activo'=>'SI', 'listas_id'=>15,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('DPTO'),'nombre'=>strtoupper('CAUCA'),'descripcion'=>strtoupper('CAUCA'),'activo'=>'SI', 'listas_id'=>15,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('DPTO'),'nombre'=>strtoupper('CESAR'),'descripcion'=>strtoupper('CESAR'),'activo'=>'SI', 'listas_id'=>15,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('DPTO'),'nombre'=>strtoupper('CHOCO'),'descripcion'=>strtoupper('CHOCO'),'activo'=>'SI', 'listas_id'=>15,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('DPTO'),'nombre'=>strtoupper('CORDOBA'),'descripcion'=>strtoupper('CORDOBA'),'activo'=>'SI', 'listas_id'=>15,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('DPTO'),'nombre'=>strtoupper('CUNDINAMARCA'),'descripcion'=>strtoupper('CUNDINAMARCA'),'activo'=>'SI', 'listas_id'=>15,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('DPTO'),'nombre'=>strtoupper('GUAINIA'),'descripcion'=>strtoupper('GUAINIA'),'activo'=>'SI', 'listas_id'=>15,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('DPTO'),'nombre'=>strtoupper('GUAVIARE'),'descripcion'=>strtoupper('GUAVIARE'),'activo'=>'SI', 'listas_id'=>15,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('DPTO'),'nombre'=>strtoupper('HUILA'),'descripcion'=>strtoupper('HUILA'),'activo'=>'SI', 'listas_id'=>15,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('DPTO'),'nombre'=>strtoupper('LA GUAJIRA'),'descripcion'=>strtoupper('LA GUAJIRA'),'activo'=>'SI', 'listas_id'=>15,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('DPTO'),'nombre'=>strtoupper('MAGDALENA'),'descripcion'=>strtoupper('MAGDALENA'),'activo'=>'SI', 'listas_id'=>15,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('DPTO'),'nombre'=>strtoupper('META'),'descripcion'=>strtoupper('META'),'activo'=>'SI', 'listas_id'=>15,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('DPTO'),'nombre'=>strtoupper('NARIÑO'),'descripcion'=>strtoupper('NARIÑO'),'activo'=>'SI', 'listas_id'=>15,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('DPTO'),'nombre'=>strtoupper('NORTE DE SANTANDER'),'descripcion'=>strtoupper('NORTE DE SANTANDER'),'activo'=>'SI', 'listas_id'=>15,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('DPTO'),'nombre'=>strtoupper('PUTUMAYO'),'descripcion'=>strtoupper('PUTUMAYO'),'activo'=>'SI', 'listas_id'=>15,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('DPTO'),'nombre'=>strtoupper('QUINDIO'),'descripcion'=>strtoupper('QUINDIO'),'activo'=>'SI', 'listas_id'=>15,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('DPTO'),'nombre'=>strtoupper('RISARALDA'),'descripcion'=>strtoupper('RISARALDA'),'activo'=>'SI', 'listas_id'=>15,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('DPTO'),'nombre'=>strtoupper('SANTANDER'),'descripcion'=>strtoupper('SANTANDER'),'activo'=>'SI', 'listas_id'=>15,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('DPTO'),'nombre'=>strtoupper('SUCRE'),'descripcion'=>strtoupper('SUCRE'),'activo'=>'SI', 'listas_id'=>15,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('DPTO'),'nombre'=>strtoupper('TOLIMA'),'descripcion'=>strtoupper('TOLIMA'),'activo'=>'SI', 'listas_id'=>15,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('DPTO'),'nombre'=>strtoupper('VALLE DEL CAUCA'),'descripcion'=>strtoupper('VALLE DEL CAUCA'),'activo'=>'SI', 'listas_id'=>15,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('DPTO'),'nombre'=>strtoupper('VAUPES'),'descripcion'=>strtoupper('VAUPES'),'activo'=>'SI', 'listas_id'=>15,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('DPTO'),'nombre'=>strtoupper('VICHADA'),'descripcion'=>strtoupper('VICHADA'),'activo'=>'SI', 'listas_id'=>15,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],

                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('EL ENCANTO'),'descripcion'=>strtoupper('EL ENCANTO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('LA CHORRERA'),'descripcion'=>strtoupper('LA CHORRERA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('LA PEDRERA'),'descripcion'=>strtoupper('LA PEDRERA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('LA VICTORIA'),'descripcion'=>strtoupper('LA VICTORIA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('LETICIA'),'descripcion'=>strtoupper('LETICIA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('MIRITI - PARANÁ'),'descripcion'=>strtoupper('MIRITI - PARANÁ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PUERTO ALEGRIA'),'descripcion'=>strtoupper('PUERTO ALEGRIA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PUERTO ARICA'),'descripcion'=>strtoupper('PUERTO ARICA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PUERTO NARIÑO'),'descripcion'=>strtoupper('PUERTO NARIÑO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PUERTO SANTANDER'),'descripcion'=>strtoupper('PUERTO SANTANDER'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('TARAPACÁ'),'descripcion'=>strtoupper('TARAPACÁ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CÁCERES'),'descripcion'=>strtoupper('CÁCERES'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CAUCASIA'),'descripcion'=>strtoupper('CAUCASIA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('EL BAGRE'),'descripcion'=>strtoupper('EL BAGRE'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('NECHÍ'),'descripcion'=>strtoupper('NECHÍ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('TARAZÁ'),'descripcion'=>strtoupper('TARAZÁ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('ZARAGOZA'),'descripcion'=>strtoupper('ZARAGOZA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CARACOLÍ'),'descripcion'=>strtoupper('CARACOLÍ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('MACEO'),'descripcion'=>strtoupper('MACEO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PUERTO BERRiO'),'descripcion'=>strtoupper('PUERTO BERRiO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PUERTO NARE'),'descripcion'=>strtoupper('PUERTO NARE'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PUERTO TRIUNFO'),'descripcion'=>strtoupper('PUERTO TRIUNFO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('YONDÓ'),'descripcion'=>strtoupper('YONDÓ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('AMALFI'),'descripcion'=>strtoupper('AMALFI'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('ANORÍ'),'descripcion'=>strtoupper('ANORÍ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CISNEROS'),'descripcion'=>strtoupper('CISNEROS'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('REMEDIOS'),'descripcion'=>strtoupper('REMEDIOS'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SAN ROQUE'),'descripcion'=>strtoupper('SAN ROQUE'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SANTO DOMINGO'),'descripcion'=>strtoupper('SANTO DOMINGO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SEGOVIA'),'descripcion'=>strtoupper('SEGOVIA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('VEGACHÍ'),'descripcion'=>strtoupper('VEGACHÍ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('YALÍ'),'descripcion'=>strtoupper('YALÍ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('YOLOMBÓ'),'descripcion'=>strtoupper('YOLOMBÓ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('ANGOSTURA'),'descripcion'=>strtoupper('ANGOSTURA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('BELMIRA'),'descripcion'=>strtoupper('BELMIRA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('BRICEÑO'),'descripcion'=>strtoupper('BRICEÑO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CAMPAMENTO'),'descripcion'=>strtoupper('CAMPAMENTO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CAROLINA'),'descripcion'=>strtoupper('CAROLINA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('DON MATiAS'),'descripcion'=>strtoupper('DON MATiAS'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('ENTRERRIOS'),'descripcion'=>strtoupper('ENTRERRIOS'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('GÓMEZ PLATA'),'descripcion'=>strtoupper('GÓMEZ PLATA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('GUADALUPE'),'descripcion'=>strtoupper('GUADALUPE'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('ITUANGO'),'descripcion'=>strtoupper('ITUANGO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SAN ANDRÉS'),'descripcion'=>strtoupper('SAN ANDRÉS'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SAN JOSÉ DE LA MONTAÑA'),'descripcion'=>strtoupper('SAN JOSÉ DE LA MONTAÑA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SAN PEDRO'),'descripcion'=>strtoupper('SAN PEDRO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SANTA ROSA de osos'),'descripcion'=>strtoupper('SANTA ROSA de osos'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('TOLEDO'),'descripcion'=>strtoupper('TOLEDO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('VALDIVIA'),'descripcion'=>strtoupper('VALDIVIA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('YARUMAL'),'descripcion'=>strtoupper('YARUMAL'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('ABRIAQUÍ'),'descripcion'=>strtoupper('ABRIAQUÍ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('ANZA'),'descripcion'=>strtoupper('ANZA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('ARMENIA'),'descripcion'=>strtoupper('ARMENIA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('BURITICÁ'),'descripcion'=>strtoupper('BURITICÁ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CAÑASGORDAS'),'descripcion'=>strtoupper('CAÑASGORDAS'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('DABEIBA'),'descripcion'=>strtoupper('DABEIBA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('EBÉJICO'),'descripcion'=>strtoupper('EBÉJICO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('FRONTINO'),'descripcion'=>strtoupper('FRONTINO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('GIRALDO'),'descripcion'=>strtoupper('GIRALDO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('HELICONIA'),'descripcion'=>strtoupper('HELICONIA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('LIBORINA'),'descripcion'=>strtoupper('LIBORINA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('OLAYA'),'descripcion'=>strtoupper('OLAYA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PEQUE'),'descripcion'=>strtoupper('PEQUE'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SABANALARGA'),'descripcion'=>strtoupper('SABANALARGA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SAN JERÓNIMO'),'descripcion'=>strtoupper('SAN JERÓNIMO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SANTAFÉ DE ANTIOQUIA'),'descripcion'=>strtoupper('SANTAFÉ DE ANTIOQUIA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SOPETRaN'),'descripcion'=>strtoupper('SOPETRaN'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('URAMITA'),'descripcion'=>strtoupper('URAMITA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('ABEJORRAL'),'descripcion'=>strtoupper('ABEJORRAL'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('ALEJANDRÍA'),'descripcion'=>strtoupper('ALEJANDRÍA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('ARGELIA'),'descripcion'=>strtoupper('ARGELIA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CARMEN DE VIBORAL'),'descripcion'=>strtoupper('CARMEN DE VIBORAL'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('COCORNÁ'),'descripcion'=>strtoupper('COCORNÁ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CONCEPCIÓN'),'descripcion'=>strtoupper('CONCEPCIÓN'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('GRANADA'),'descripcion'=>strtoupper('GRANADA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('GUARNE'),'descripcion'=>strtoupper('GUARNE'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('GUATAPE'),'descripcion'=>strtoupper('GUATAPE'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('LA CEJA'),'descripcion'=>strtoupper('LA CEJA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('LA UNIÓN'),'descripcion'=>strtoupper('LA UNIÓN'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('MARINILLA'),'descripcion'=>strtoupper('MARINILLA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('NARIÑO'),'descripcion'=>strtoupper('NARIÑO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PEÑOL'),'descripcion'=>strtoupper('PEÑOL'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('RETIRO'),'descripcion'=>strtoupper('RETIRO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('RIONEGRO'),'descripcion'=>strtoupper('RIONEGRO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SAN CARLOS'),'descripcion'=>strtoupper('SAN CARLOS'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SAN FRANCISCO'),'descripcion'=>strtoupper('SAN FRANCISCO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SAN LUIS'),'descripcion'=>strtoupper('SAN LUIS'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SAN RAFAEL'),'descripcion'=>strtoupper('SAN RAFAEL'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SAN VICENTE'),'descripcion'=>strtoupper('SAN VICENTE'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SANTUARIO'),'descripcion'=>strtoupper('SANTUARIO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SONSON'),'descripcion'=>strtoupper('SONSON'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('AMAGa'),'descripcion'=>strtoupper('AMAGa'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('ANDES'),'descripcion'=>strtoupper('ANDES'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('ANGELOPOLIS'),'descripcion'=>strtoupper('ANGELOPOLIS'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('BETANIA'),'descripcion'=>strtoupper('BETANIA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('BETULIA'),'descripcion'=>strtoupper('BETULIA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CAICEDO'),'descripcion'=>strtoupper('CAICEDO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CARAMANTA'),'descripcion'=>strtoupper('CARAMANTA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CIUDAD BOLÍVAR'),'descripcion'=>strtoupper('CIUDAD BOLÍVAR'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CONCORDIA'),'descripcion'=>strtoupper('CONCORDIA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('FREDONIA'),'descripcion'=>strtoupper('FREDONIA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('HISPANIA'),'descripcion'=>strtoupper('HISPANIA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('JARDÍN'),'descripcion'=>strtoupper('JARDÍN'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('JERICÓ'),'descripcion'=>strtoupper('JERICÓ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('LA PINTADA'),'descripcion'=>strtoupper('LA PINTADA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('MONTEBELLO'),'descripcion'=>strtoupper('MONTEBELLO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PUEBLORRICO'),'descripcion'=>strtoupper('PUEBLORRICO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SALGAR'),'descripcion'=>strtoupper('SALGAR'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SANTA BaRBARA'),'descripcion'=>strtoupper('SANTA BaRBARA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('TÁMESIS'),'descripcion'=>strtoupper('TÁMESIS'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('TARSO'),'descripcion'=>strtoupper('TARSO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('TITIRIBÍ'),'descripcion'=>strtoupper('TITIRIBÍ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('URRAO'),'descripcion'=>strtoupper('URRAO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('VALPARAISO'),'descripcion'=>strtoupper('VALPARAISO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('VENECIA'),'descripcion'=>strtoupper('VENECIA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('APARTADÓ'),'descripcion'=>strtoupper('APARTADÓ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('ARBOLETES'),'descripcion'=>strtoupper('ARBOLETES'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CAREPA'),'descripcion'=>strtoupper('CAREPA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CHIGORODÓ'),'descripcion'=>strtoupper('CHIGORODÓ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('MURINDÓ'),'descripcion'=>strtoupper('MURINDÓ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('MUTATA'),'descripcion'=>strtoupper('MUTATA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('NECOCLÍ'),'descripcion'=>strtoupper('NECOCLÍ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SAN JUAN DE URABA'),'descripcion'=>strtoupper('SAN JUAN DE URABA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SAN PEDRO DE URABA'),'descripcion'=>strtoupper('SAN PEDRO DE URABA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('TURBO'),'descripcion'=>strtoupper('TURBO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('VIGÍA DEL FUERTE'),'descripcion'=>strtoupper('VIGÍA DEL FUERTE'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('BARBOSA'),'descripcion'=>strtoupper('BARBOSA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('BELLO'),'descripcion'=>strtoupper('BELLO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CALDAS'),'descripcion'=>strtoupper('CALDAS'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('COPACABANA'),'descripcion'=>strtoupper('COPACABANA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('ENVIGADO'),'descripcion'=>strtoupper('ENVIGADO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('GIRARDOTA'),'descripcion'=>strtoupper('GIRARDOTA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('ITAGUI'),'descripcion'=>strtoupper('ITAGUI'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('LA ESTRELLA'),'descripcion'=>strtoupper('LA ESTRELLA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('MEDELLÍN'),'descripcion'=>strtoupper('MEDELLÍN'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SABANETA'),'descripcion'=>strtoupper('SABANETA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('ARAUCA'),'descripcion'=>strtoupper('ARAUCA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('ARAUQUITA'),'descripcion'=>strtoupper('ARAUQUITA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CRAVO NORTE'),'descripcion'=>strtoupper('CRAVO NORTE'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('FORTUL'),'descripcion'=>strtoupper('FORTUL'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PUERTO RONDÓN'),'descripcion'=>strtoupper('PUERTO RONDÓN'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SARAVENA'),'descripcion'=>strtoupper('SARAVENA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('TAME'),'descripcion'=>strtoupper('TAME'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PROVIDENCIA Y SANTA CATALINA'),'descripcion'=>strtoupper('PROVIDENCIA Y SANTA CATALINA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SAN ANDReS'),'descripcion'=>strtoupper('SAN ANDReS'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('BARRANQUILLA'),'descripcion'=>strtoupper('BARRANQUILLA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('GALAPA'),'descripcion'=>strtoupper('GALAPA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('MALAMBO'),'descripcion'=>strtoupper('MALAMBO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PUERTO COLOMBIA'),'descripcion'=>strtoupper('PUERTO COLOMBIA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SOLEDAD'),'descripcion'=>strtoupper('SOLEDAD'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CAMPO DE LA CRUZ'),'descripcion'=>strtoupper('CAMPO DE LA CRUZ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CANDELARIA'),'descripcion'=>strtoupper('CANDELARIA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('LURUACO'),'descripcion'=>strtoupper('LURUACO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('MANATi'),'descripcion'=>strtoupper('MANATi'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('REPELON'),'descripcion'=>strtoupper('REPELON'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SANTA LUCiA'),'descripcion'=>strtoupper('SANTA LUCiA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SUAN'),'descripcion'=>strtoupper('SUAN'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('BARANOA'),'descripcion'=>strtoupper('BARANOA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PALMAR DE VARELA'),'descripcion'=>strtoupper('PALMAR DE VARELA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('POLONUEVO'),'descripcion'=>strtoupper('POLONUEVO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PONEDERA'),'descripcion'=>strtoupper('PONEDERA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('Sabanagrande'),'descripcion'=>strtoupper('Sabanagrande'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SABANALARGA'),'descripcion'=>strtoupper('SABANALARGA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('Santo Tomas'),'descripcion'=>strtoupper('Santo Tomas'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('JUAN DE ACOSTA'),'descripcion'=>strtoupper('JUAN DE ACOSTA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PIOJÓ'),'descripcion'=>strtoupper('PIOJÓ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('TUBARA'),'descripcion'=>strtoupper('TUBARA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('USIACURi'),'descripcion'=>strtoupper('USIACURi'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('BOGOTA D.C.'),'descripcion'=>strtoupper('BOGOTA D.C.'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CICUCO'),'descripcion'=>strtoupper('CICUCO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('HATILLO DE LOBA'),'descripcion'=>strtoupper('HATILLO DE LOBA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('MARGARITA'),'descripcion'=>strtoupper('MARGARITA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('MOMPÓS'),'descripcion'=>strtoupper('MOMPÓS'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SAN FERNANDO'),'descripcion'=>strtoupper('SAN FERNANDO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('TALAIGUA NUEVO'),'descripcion'=>strtoupper('TALAIGUA NUEVO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('ARJONA'),'descripcion'=>strtoupper('ARJONA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('ARROYOHONDO'),'descripcion'=>strtoupper('ARROYOHONDO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CALAMAR'),'descripcion'=>strtoupper('CALAMAR'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CARTAGENA'),'descripcion'=>strtoupper('CARTAGENA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CLEMENCIA'),'descripcion'=>strtoupper('CLEMENCIA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('MAHATES'),'descripcion'=>strtoupper('MAHATES'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SAN CRISTOBAL'),'descripcion'=>strtoupper('SAN CRISTOBAL'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SAN ESTANISLAO'),'descripcion'=>strtoupper('SAN ESTANISLAO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SANTA CATALINA'),'descripcion'=>strtoupper('SANTA CATALINA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SANTA ROSA DE LIMA'),'descripcion'=>strtoupper('SANTA ROSA DE LIMA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SOPLAVIENTO'),'descripcion'=>strtoupper('SOPLAVIENTO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('TURBACO'),'descripcion'=>strtoupper('TURBACO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('TURBANA'),'descripcion'=>strtoupper('TURBANA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('VILLANUEVA'),'descripcion'=>strtoupper('VILLANUEVA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('ALTOS DEL ROSARIO'),'descripcion'=>strtoupper('ALTOS DEL ROSARIO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('BARRANCO DE LOBA'),'descripcion'=>strtoupper('BARRANCO DE LOBA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('EL PEÑON'),'descripcion'=>strtoupper('EL PEÑON'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('REGIDOR'),'descripcion'=>strtoupper('REGIDOR'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('RÍO VIEJO'),'descripcion'=>strtoupper('RÍO VIEJO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SAN MARTIN DE LOBA'),'descripcion'=>strtoupper('SAN MARTIN DE LOBA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('ARENAL'),'descripcion'=>strtoupper('ARENAL'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CANTAGALLO'),'descripcion'=>strtoupper('CANTAGALLO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('MORALES'),'descripcion'=>strtoupper('MORALES'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SAN PABLO'),'descripcion'=>strtoupper('SAN PABLO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SANTA ROSA DEL SUR'),'descripcion'=>strtoupper('SANTA ROSA DEL SUR'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SIMITÍ'),'descripcion'=>strtoupper('SIMITÍ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('ACHÍ'),'descripcion'=>strtoupper('ACHÍ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('MAGANGUÉ'),'descripcion'=>strtoupper('MAGANGUÉ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('MONTECRISTO'),'descripcion'=>strtoupper('MONTECRISTO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PINILLOS'),'descripcion'=>strtoupper('PINILLOS'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SAN JACINTO DEL CAUCA'),'descripcion'=>strtoupper('SAN JACINTO DEL CAUCA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('TIQUISIO'),'descripcion'=>strtoupper('TIQUISIO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CARMEN DE BOLÍVAR'),'descripcion'=>strtoupper('CARMEN DE BOLÍVAR'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CÓRDOBA'),'descripcion'=>strtoupper('CÓRDOBA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('EL GUAMO'),'descripcion'=>strtoupper('EL GUAMO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('MARÍA LA BAJA'),'descripcion'=>strtoupper('MARÍA LA BAJA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SAN JACINTO'),'descripcion'=>strtoupper('SAN JACINTO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SAN JUAN NEPOMUCENO'),'descripcion'=>strtoupper('SAN JUAN NEPOMUCENO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('ZAMBRANO'),'descripcion'=>strtoupper('ZAMBRANO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CHÍQUIZA'),'descripcion'=>strtoupper('CHÍQUIZA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CHIVATÁ'),'descripcion'=>strtoupper('CHIVATÁ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CÓMBITA'),'descripcion'=>strtoupper('CÓMBITA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CUCAITA'),'descripcion'=>strtoupper('CUCAITA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('MOTAVITA'),'descripcion'=>strtoupper('MOTAVITA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('OICATÁ'),'descripcion'=>strtoupper('OICATÁ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SAMACÁ'),'descripcion'=>strtoupper('SAMACÁ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SIACHOQUE'),'descripcion'=>strtoupper('SIACHOQUE'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SORA'),'descripcion'=>strtoupper('SORA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SORACÁ'),'descripcion'=>strtoupper('SORACÁ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SOTAQUIRÁ'),'descripcion'=>strtoupper('SOTAQUIRÁ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('TOCA'),'descripcion'=>strtoupper('TOCA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('TUNJA'),'descripcion'=>strtoupper('TUNJA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('TUTA'),'descripcion'=>strtoupper('TUTA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('VENTAQUEMADA'),'descripcion'=>strtoupper('VENTAQUEMADA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CHISCAS'),'descripcion'=>strtoupper('CHISCAS'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CUBARÁ'),'descripcion'=>strtoupper('CUBARÁ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('EL COCUY'),'descripcion'=>strtoupper('EL COCUY'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('EL ESPINO'),'descripcion'=>strtoupper('EL ESPINO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('GUACAMAYAS'),'descripcion'=>strtoupper('GUACAMAYAS'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('GÜICÁN'),'descripcion'=>strtoupper('GÜICÁN'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PANQUEBA'),'descripcion'=>strtoupper('PANQUEBA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('LABRANZAGRANDE'),'descripcion'=>strtoupper('LABRANZAGRANDE'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PAJARITO'),'descripcion'=>strtoupper('PAJARITO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PAYA'),'descripcion'=>strtoupper('PAYA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PISBA'),'descripcion'=>strtoupper('PISBA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('BERBEO'),'descripcion'=>strtoupper('BERBEO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CAMPOHERMOSO'),'descripcion'=>strtoupper('CAMPOHERMOSO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('MIRAFLORES'),'descripcion'=>strtoupper('MIRAFLORES'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PÁEZ'),'descripcion'=>strtoupper('PÁEZ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SAN EDUARDO'),'descripcion'=>strtoupper('SAN EDUARDO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('ZETAQUIRA'),'descripcion'=>strtoupper('ZETAQUIRA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('BOYACÁ'),'descripcion'=>strtoupper('BOYACÁ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CIÉNEGA'),'descripcion'=>strtoupper('CIÉNEGA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('JENESANO'),'descripcion'=>strtoupper('JENESANO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('NUEVO COLÓN'),'descripcion'=>strtoupper('NUEVO COLÓN'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('RAMIRIQUÍ'),'descripcion'=>strtoupper('RAMIRIQUÍ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('RONDÓN'),'descripcion'=>strtoupper('RONDÓN'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('TIBANÁ'),'descripcion'=>strtoupper('TIBANÁ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('TURMEQUÉ'),'descripcion'=>strtoupper('TURMEQUÉ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('UMBITA'),'descripcion'=>strtoupper('UMBITA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('VIRACACHÁ'),'descripcion'=>strtoupper('VIRACACHÁ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CHINAVITA'),'descripcion'=>strtoupper('CHINAVITA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('GARAGOA'),'descripcion'=>strtoupper('GARAGOA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('MACANAL'),'descripcion'=>strtoupper('MACANAL'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PACHAVITA'),'descripcion'=>strtoupper('PACHAVITA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SAN LUIS DE GACENO'),'descripcion'=>strtoupper('SAN LUIS DE GACENO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SANTA MARÍA'),'descripcion'=>strtoupper('SANTA MARÍA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('BOAVITA'),'descripcion'=>strtoupper('BOAVITA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('COVARACHÍA'),'descripcion'=>strtoupper('COVARACHÍA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('LA UVITA'),'descripcion'=>strtoupper('LA UVITA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SAN MATEO'),'descripcion'=>strtoupper('SAN MATEO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SATIVANORTE'),'descripcion'=>strtoupper('SATIVANORTE'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SATIVASUR'),'descripcion'=>strtoupper('SATIVASUR'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SOATÁ'),'descripcion'=>strtoupper('SOATÁ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SUSACÓN'),'descripcion'=>strtoupper('SUSACÓN'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('TIPACOQUE'),'descripcion'=>strtoupper('TIPACOQUE'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('BRICEÑO'),'descripcion'=>strtoupper('BRICEÑO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('BUENAVISTA'),'descripcion'=>strtoupper('BUENAVISTA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CALDAS'),'descripcion'=>strtoupper('CALDAS'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CHIQUINQUIRÁ'),'descripcion'=>strtoupper('CHIQUINQUIRÁ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('COPER'),'descripcion'=>strtoupper('COPER'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('LA VICTORIA'),'descripcion'=>strtoupper('LA VICTORIA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('MARIPÍ'),'descripcion'=>strtoupper('MARIPÍ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('MUZO'),'descripcion'=>strtoupper('MUZO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('OTANCHE'),'descripcion'=>strtoupper('OTANCHE'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PAUNA'),'descripcion'=>strtoupper('PAUNA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PUERTO BOYACa'),'descripcion'=>strtoupper('PUERTO BOYACa'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('QUÍPAMA'),'descripcion'=>strtoupper('QUÍPAMA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SABOYÁ'),'descripcion'=>strtoupper('SABOYÁ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SAN MIGUEL DE SEMA'),'descripcion'=>strtoupper('SAN MIGUEL DE SEMA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SAN PABLO BORBUR'),'descripcion'=>strtoupper('SAN PABLO BORBUR'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('TUNUNGUÁ'),'descripcion'=>strtoupper('TUNUNGUÁ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('ALMEIDA'),'descripcion'=>strtoupper('ALMEIDA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CHIVOR'),'descripcion'=>strtoupper('CHIVOR'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('GUATEQUE'),'descripcion'=>strtoupper('GUATEQUE'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('GUAYATÁ'),'descripcion'=>strtoupper('GUAYATÁ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('LA CAPILLA'),'descripcion'=>strtoupper('LA CAPILLA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SOMONDOCO'),'descripcion'=>strtoupper('SOMONDOCO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SUTATENZA'),'descripcion'=>strtoupper('SUTATENZA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('TENZA'),'descripcion'=>strtoupper('TENZA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('ARCABUCO'),'descripcion'=>strtoupper('ARCABUCO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CHITARAQUE'),'descripcion'=>strtoupper('CHITARAQUE'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('GACHANTIVÁ'),'descripcion'=>strtoupper('GACHANTIVÁ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('MONIQUIRÁ'),'descripcion'=>strtoupper('MONIQUIRÁ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('RÁQUIRA'),'descripcion'=>strtoupper('RÁQUIRA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SÁCHICA'),'descripcion'=>strtoupper('SÁCHICA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SAN JOSÉ DE PARE'),'descripcion'=>strtoupper('SAN JOSÉ DE PARE'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SANTA SOFÍA'),'descripcion'=>strtoupper('SANTA SOFÍA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SANTANA'),'descripcion'=>strtoupper('SANTANA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SUTAMARCHÁN'),'descripcion'=>strtoupper('SUTAMARCHÁN'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('TINJACÁ'),'descripcion'=>strtoupper('TINJACÁ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('TOGÜÍ'),'descripcion'=>strtoupper('TOGÜÍ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('VILLA DE LEYVA'),'descripcion'=>strtoupper('VILLA DE LEYVA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('AQUITANIA'),'descripcion'=>strtoupper('AQUITANIA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CUÍTIVA'),'descripcion'=>strtoupper('CUÍTIVA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('FIRAVITOBA'),'descripcion'=>strtoupper('FIRAVITOBA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('GAMEZA'),'descripcion'=>strtoupper('GAMEZA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('IZA'),'descripcion'=>strtoupper('IZA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('MONGUA'),'descripcion'=>strtoupper('MONGUA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('MONGUÍ'),'descripcion'=>strtoupper('MONGUÍ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('NOBSA'),'descripcion'=>strtoupper('NOBSA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PESCA'),'descripcion'=>strtoupper('PESCA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SOGAMOSO'),'descripcion'=>strtoupper('SOGAMOSO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('TIBASOSA'),'descripcion'=>strtoupper('TIBASOSA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('TÓPAGA'),'descripcion'=>strtoupper('TÓPAGA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('TOTA'),'descripcion'=>strtoupper('TOTA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('BELÉN'),'descripcion'=>strtoupper('BELÉN'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('BUSBANZÁ'),'descripcion'=>strtoupper('BUSBANZÁ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CERINZA'),'descripcion'=>strtoupper('CERINZA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CORRALES'),'descripcion'=>strtoupper('CORRALES'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('DUITAMA'),'descripcion'=>strtoupper('DUITAMA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('FLORESTA'),'descripcion'=>strtoupper('FLORESTA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PAIPA'),'descripcion'=>strtoupper('PAIPA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SAN ROSA VITERBO'),'descripcion'=>strtoupper('SAN ROSA VITERBO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('TUTAZÁ'),'descripcion'=>strtoupper('TUTAZÁ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('BETÉITIVA'),'descripcion'=>strtoupper('BETÉITIVA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CHITA'),'descripcion'=>strtoupper('CHITA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('JERICÓ'),'descripcion'=>strtoupper('JERICÓ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PAZ DE RÍO'),'descripcion'=>strtoupper('PAZ DE RÍO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SOCHA'),'descripcion'=>strtoupper('SOCHA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SOCOTÁ'),'descripcion'=>strtoupper('SOCOTÁ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('TASCO'),'descripcion'=>strtoupper('TASCO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('FILADELFIA'),'descripcion'=>strtoupper('FILADELFIA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('LA MERCED'),'descripcion'=>strtoupper('LA MERCED'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('MARMATO'),'descripcion'=>strtoupper('MARMATO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('RIOSUCIO'),'descripcion'=>strtoupper('RIOSUCIO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SUPÍA'),'descripcion'=>strtoupper('SUPÍA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('MANZANARES'),'descripcion'=>strtoupper('MANZANARES'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('MARQUETALIA'),'descripcion'=>strtoupper('MARQUETALIA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('MARULANDA'),'descripcion'=>strtoupper('MARULANDA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PENSILVANIA'),'descripcion'=>strtoupper('PENSILVANIA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('ANSERMA'),'descripcion'=>strtoupper('ANSERMA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('BELALCÁZAR'),'descripcion'=>strtoupper('BELALCÁZAR'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('RISARALDA'),'descripcion'=>strtoupper('RISARALDA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SAN JOSÉ'),'descripcion'=>strtoupper('SAN JOSÉ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('VITERBO'),'descripcion'=>strtoupper('VITERBO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CHINCHINa'),'descripcion'=>strtoupper('CHINCHINa'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('MANIZALES'),'descripcion'=>strtoupper('MANIZALES'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('NEIRA'),'descripcion'=>strtoupper('NEIRA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PALESTINA'),'descripcion'=>strtoupper('PALESTINA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('VILLAMARiA'),'descripcion'=>strtoupper('VILLAMARiA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('AGUADAS'),'descripcion'=>strtoupper('AGUADAS'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('ARANZAZU'),'descripcion'=>strtoupper('ARANZAZU'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PÁCORA'),'descripcion'=>strtoupper('PÁCORA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SALAMINA'),'descripcion'=>strtoupper('SALAMINA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('LA DORADA'),'descripcion'=>strtoupper('LA DORADA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('NORCASIA'),'descripcion'=>strtoupper('NORCASIA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SAMANÁ'),'descripcion'=>strtoupper('SAMANÁ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('VICTORIA'),'descripcion'=>strtoupper('VICTORIA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('ALBANIA'),'descripcion'=>strtoupper('ALBANIA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('BELÉN DE LOS ANDAQUIES'),'descripcion'=>strtoupper('BELÉN DE LOS ANDAQUIES'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CARTAGENA DEL CHAIRÁ'),'descripcion'=>strtoupper('CARTAGENA DEL CHAIRÁ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CURRILLO'),'descripcion'=>strtoupper('CURRILLO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('EL DONCELLO'),'descripcion'=>strtoupper('EL DONCELLO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('EL PAUJIL'),'descripcion'=>strtoupper('EL PAUJIL'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('FLORENCIA'),'descripcion'=>strtoupper('FLORENCIA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('LA MONTAÑITA'),'descripcion'=>strtoupper('LA MONTAÑITA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('MILaN'),'descripcion'=>strtoupper('MILaN'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('MORELIA'),'descripcion'=>strtoupper('MORELIA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PUERTO RICO'),'descripcion'=>strtoupper('PUERTO RICO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SAN JOSE DEL FRAGUA'),'descripcion'=>strtoupper('SAN JOSE DEL FRAGUA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SAN VICENTE DEL CAGUÁN'),'descripcion'=>strtoupper('SAN VICENTE DEL CAGUÁN'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SOLANO'),'descripcion'=>strtoupper('SOLANO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SOLITA'),'descripcion'=>strtoupper('SOLITA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('VALPARAISO'),'descripcion'=>strtoupper('VALPARAISO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('AGUAZUL'),'descripcion'=>strtoupper('AGUAZUL'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CHAMEZA'),'descripcion'=>strtoupper('CHAMEZA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('HATO COROZAL'),'descripcion'=>strtoupper('HATO COROZAL'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('LA SALINA'),'descripcion'=>strtoupper('LA SALINA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('MANÍ'),'descripcion'=>strtoupper('MANÍ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('MONTERREY'),'descripcion'=>strtoupper('MONTERREY'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('NUNCHÍA'),'descripcion'=>strtoupper('NUNCHÍA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('OROCUÉ'),'descripcion'=>strtoupper('OROCUÉ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PAZ DE ARIPORO'),'descripcion'=>strtoupper('PAZ DE ARIPORO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PORE'),'descripcion'=>strtoupper('PORE'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('RECETOR'),'descripcion'=>strtoupper('RECETOR'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SABANALARGA'),'descripcion'=>strtoupper('SABANALARGA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SÁCAMA'),'descripcion'=>strtoupper('SÁCAMA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SAN LUIS DE PALENQUE'),'descripcion'=>strtoupper('SAN LUIS DE PALENQUE'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('TÁMARA'),'descripcion'=>strtoupper('TÁMARA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('TAURAMENA'),'descripcion'=>strtoupper('TAURAMENA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('TRINIDAD'),'descripcion'=>strtoupper('TRINIDAD'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('VILLANUEVA'),'descripcion'=>strtoupper('VILLANUEVA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('YOPAL'),'descripcion'=>strtoupper('YOPAL'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CAJIBÍO'),'descripcion'=>strtoupper('CAJIBÍO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('EL TAMBO'),'descripcion'=>strtoupper('EL TAMBO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('LA SIERRA'),'descripcion'=>strtoupper('LA SIERRA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('MORALES'),'descripcion'=>strtoupper('MORALES'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PIENDAMO'),'descripcion'=>strtoupper('PIENDAMO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('POPAYÁN'),'descripcion'=>strtoupper('POPAYÁN'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('ROSAS'),'descripcion'=>strtoupper('ROSAS'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SOTARA'),'descripcion'=>strtoupper('SOTARA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('TIMBIO'),'descripcion'=>strtoupper('TIMBIO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('BUENOS AIRES'),'descripcion'=>strtoupper('BUENOS AIRES'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CALOTO'),'descripcion'=>strtoupper('CALOTO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CORINTO'),'descripcion'=>strtoupper('CORINTO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('MIRANDA'),'descripcion'=>strtoupper('MIRANDA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PADILLA'),'descripcion'=>strtoupper('PADILLA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PUERTO TEJADA'),'descripcion'=>strtoupper('PUERTO TEJADA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SANTANDER DE QUILICHAO'),'descripcion'=>strtoupper('SANTANDER DE QUILICHAO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SUAREZ'),'descripcion'=>strtoupper('SUAREZ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('VILLA RICA'),'descripcion'=>strtoupper('VILLA RICA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('GUAPI'),'descripcion'=>strtoupper('GUAPI'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('LOPEZ'),'descripcion'=>strtoupper('LOPEZ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('TIMBIQUI'),'descripcion'=>strtoupper('TIMBIQUI'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CALDONO'),'descripcion'=>strtoupper('CALDONO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('INZÁ'),'descripcion'=>strtoupper('INZÁ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('JAMBALO'),'descripcion'=>strtoupper('JAMBALO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PAEZ'),'descripcion'=>strtoupper('PAEZ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PURACE'),'descripcion'=>strtoupper('PURACE'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('Silvia'),'descripcion'=>strtoupper('Silvia'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('TORIBIO'),'descripcion'=>strtoupper('TORIBIO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('TOTORO'),'descripcion'=>strtoupper('TOTORO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('ALMAGUER'),'descripcion'=>strtoupper('ALMAGUER'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('ARGELIA'),'descripcion'=>strtoupper('ARGELIA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('BALBOA'),'descripcion'=>strtoupper('BALBOA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('BOLÍVAR'),'descripcion'=>strtoupper('BOLÍVAR'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('FLORENCIA'),'descripcion'=>strtoupper('FLORENCIA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('LA VEGA'),'descripcion'=>strtoupper('LA VEGA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('MERCADERES'),'descripcion'=>strtoupper('MERCADERES'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PATIA'),'descripcion'=>strtoupper('PATIA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PIAMONTE'),'descripcion'=>strtoupper('PIAMONTE'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SAN SEBASTIAN'),'descripcion'=>strtoupper('SAN SEBASTIAN'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SANTA ROSA'),'descripcion'=>strtoupper('SANTA ROSA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SUCRE'),'descripcion'=>strtoupper('SUCRE'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('BECERRIL'),'descripcion'=>strtoupper('BECERRIL'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CHIMICHAGUA'),'descripcion'=>strtoupper('CHIMICHAGUA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CHIRIGUANA'),'descripcion'=>strtoupper('CHIRIGUANA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CURUMANÍ'),'descripcion'=>strtoupper('CURUMANÍ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('LA JAGUA DE IBIRICO'),'descripcion'=>strtoupper('LA JAGUA DE IBIRICO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PAILITAS'),'descripcion'=>strtoupper('PAILITAS'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('TAMALAMEQUE'),'descripcion'=>strtoupper('TAMALAMEQUE'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('ASTREA'),'descripcion'=>strtoupper('ASTREA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('BOSCONIA'),'descripcion'=>strtoupper('BOSCONIA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('EL COPEY'),'descripcion'=>strtoupper('EL COPEY'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('EL PASO'),'descripcion'=>strtoupper('EL PASO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('AGUSTÍN CODAZZI'),'descripcion'=>strtoupper('AGUSTÍN CODAZZI'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('LA PAZ'),'descripcion'=>strtoupper('LA PAZ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('MANAURE'),'descripcion'=>strtoupper('MANAURE'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PUEBLO BELLO'),'descripcion'=>strtoupper('PUEBLO BELLO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SAN DIEGO'),'descripcion'=>strtoupper('SAN DIEGO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('VALLEDUPAR'),'descripcion'=>strtoupper('VALLEDUPAR'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('AGUACHICA'),'descripcion'=>strtoupper('AGUACHICA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('GAMARRA'),'descripcion'=>strtoupper('GAMARRA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('GONZÁLEZ'),'descripcion'=>strtoupper('GONZÁLEZ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('LA GLORIA'),'descripcion'=>strtoupper('LA GLORIA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PELAYA'),'descripcion'=>strtoupper('PELAYA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('RÍO DE ORO'),'descripcion'=>strtoupper('RÍO DE ORO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SAN ALBERTO'),'descripcion'=>strtoupper('SAN ALBERTO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SAN MARTÍN'),'descripcion'=>strtoupper('SAN MARTÍN'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('ATRATO'),'descripcion'=>strtoupper('ATRATO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('BAGADÓ'),'descripcion'=>strtoupper('BAGADÓ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('BOJAYA'),'descripcion'=>strtoupper('BOJAYA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('EL CARMEN DE ATRATO'),'descripcion'=>strtoupper('EL CARMEN DE ATRATO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('LLORÓ'),'descripcion'=>strtoupper('LLORÓ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('MEDIO ATRATO'),'descripcion'=>strtoupper('MEDIO ATRATO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('QUIBDÓ'),'descripcion'=>strtoupper('QUIBDÓ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('RIO QUITO'),'descripcion'=>strtoupper('RIO QUITO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('ACANDÍ'),'descripcion'=>strtoupper('ACANDÍ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('BELÉN DE BAJIRA'),'descripcion'=>strtoupper('BELÉN DE BAJIRA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CARMÉN DEL DARIÉN'),'descripcion'=>strtoupper('CARMÉN DEL DARIÉN'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('RIOSUCIO'),'descripcion'=>strtoupper('RIOSUCIO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('UNGUÍA'),'descripcion'=>strtoupper('UNGUÍA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('BAHÍA SOLANO'),'descripcion'=>strtoupper('BAHÍA SOLANO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('JURADÓ'),'descripcion'=>strtoupper('JURADÓ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('NUQUÍ'),'descripcion'=>strtoupper('NUQUÍ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('ALTO BAUDÓ'),'descripcion'=>strtoupper('ALTO BAUDÓ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('BAJO BAUDÓ'),'descripcion'=>strtoupper('BAJO BAUDÓ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('El Litoral del San Juan'),'descripcion'=>strtoupper('El Litoral del San Juan'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('MEDIO BAUDÓ'),'descripcion'=>strtoupper('MEDIO BAUDÓ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CANTON DE SAN PABLO'),'descripcion'=>strtoupper('CANTON DE SAN PABLO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CERTEGUI'),'descripcion'=>strtoupper('CERTEGUI'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CONDOTO'),'descripcion'=>strtoupper('CONDOTO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('ITSMINA'),'descripcion'=>strtoupper('ITSMINA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('MEDIO SAN JUAN'),'descripcion'=>strtoupper('MEDIO SAN JUAN'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('NÓVITA'),'descripcion'=>strtoupper('NÓVITA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('RÍO FRÍO'),'descripcion'=>strtoupper('RÍO FRÍO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SAN JOSÉ DEL PALMAR'),'descripcion'=>strtoupper('SAN JOSÉ DEL PALMAR'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SIPÍ'),'descripcion'=>strtoupper('SIPÍ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('TADÓ'),'descripcion'=>strtoupper('TADÓ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('UNION PANAMERICANA'),'descripcion'=>strtoupper('UNION PANAMERICANA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('TIERRALTA'),'descripcion'=>strtoupper('TIERRALTA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('VALENCIA'),'descripcion'=>strtoupper('VALENCIA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CHIMÁ'),'descripcion'=>strtoupper('CHIMÁ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('COTORRA'),'descripcion'=>strtoupper('COTORRA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('LORICA'),'descripcion'=>strtoupper('LORICA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('MOMIL'),'descripcion'=>strtoupper('MOMIL'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PURÍSIMA'),'descripcion'=>strtoupper('PURÍSIMA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('MONTERÍA'),'descripcion'=>strtoupper('MONTERÍA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CANALETE'),'descripcion'=>strtoupper('CANALETE'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('LOS CÓRDOBAS'),'descripcion'=>strtoupper('LOS CÓRDOBAS'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('MOÑITOS'),'descripcion'=>strtoupper('MOÑITOS'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PUERTO ESCONDIDO'),'descripcion'=>strtoupper('PUERTO ESCONDIDO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SAN ANTERO'),'descripcion'=>strtoupper('SAN ANTERO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SAN BERNARDO DEL VIENTO'),'descripcion'=>strtoupper('SAN BERNARDO DEL VIENTO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CHINÚ'),'descripcion'=>strtoupper('CHINÚ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SAHAGÚN'),'descripcion'=>strtoupper('SAHAGÚN'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SAN ANDRÉS SOTAVENTO'),'descripcion'=>strtoupper('SAN ANDRÉS SOTAVENTO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('AYAPEL'),'descripcion'=>strtoupper('AYAPEL'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('BUENAVISTA'),'descripcion'=>strtoupper('BUENAVISTA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('LA APARTADA'),'descripcion'=>strtoupper('LA APARTADA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('MONTELÍBANO'),'descripcion'=>strtoupper('MONTELÍBANO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PLANETA RICA'),'descripcion'=>strtoupper('PLANETA RICA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PUEBLO NUEVO'),'descripcion'=>strtoupper('PUEBLO NUEVO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PUERTO LIBERTADOR'),'descripcion'=>strtoupper('PUERTO LIBERTADOR'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CERETÉ'),'descripcion'=>strtoupper('CERETÉ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CIÉNAGA DE ORO'),'descripcion'=>strtoupper('CIÉNAGA DE ORO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SAN CARLOS'),'descripcion'=>strtoupper('SAN CARLOS'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SAN PELAYO'),'descripcion'=>strtoupper('SAN PELAYO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CHOCONTÁ'),'descripcion'=>strtoupper('CHOCONTÁ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('MACHETA'),'descripcion'=>strtoupper('MACHETA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('MANTA'),'descripcion'=>strtoupper('MANTA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SESQUILÉ'),'descripcion'=>strtoupper('SESQUILÉ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SUESCA'),'descripcion'=>strtoupper('SUESCA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('TIBIRITA'),'descripcion'=>strtoupper('TIBIRITA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('VILLAPINZÓN'),'descripcion'=>strtoupper('VILLAPINZÓN'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('AGUA DE DIOS'),'descripcion'=>strtoupper('AGUA DE DIOS'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('GIRARDOT'),'descripcion'=>strtoupper('GIRARDOT'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('GUATAQUÍ'),'descripcion'=>strtoupper('GUATAQUÍ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('JERUSALÉN'),'descripcion'=>strtoupper('JERUSALÉN'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('NARIÑO'),'descripcion'=>strtoupper('NARIÑO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('NILO'),'descripcion'=>strtoupper('NILO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('RICAURTE'),'descripcion'=>strtoupper('RICAURTE'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('TOCAIMA'),'descripcion'=>strtoupper('TOCAIMA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CAPARRAPÍ'),'descripcion'=>strtoupper('CAPARRAPÍ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('GUADUAS'),'descripcion'=>strtoupper('GUADUAS'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PUERTO SALGAR'),'descripcion'=>strtoupper('PUERTO SALGAR'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('ALBÁN'),'descripcion'=>strtoupper('ALBÁN'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('LA PEÑA'),'descripcion'=>strtoupper('LA PEÑA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('LA VEGA'),'descripcion'=>strtoupper('LA VEGA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('NIMAIMA'),'descripcion'=>strtoupper('NIMAIMA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('NOCAIMA'),'descripcion'=>strtoupper('NOCAIMA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('QUEBRADANEGRA'),'descripcion'=>strtoupper('QUEBRADANEGRA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SAN FRANCISCO'),'descripcion'=>strtoupper('SAN FRANCISCO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SASAIMA'),'descripcion'=>strtoupper('SASAIMA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SUPATÁ'),'descripcion'=>strtoupper('SUPATÁ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('ÚTICA'),'descripcion'=>strtoupper('ÚTICA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('VERGARA'),'descripcion'=>strtoupper('VERGARA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('VILLETA'),'descripcion'=>strtoupper('VILLETA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('GACHALA'),'descripcion'=>strtoupper('GACHALA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('GACHETA'),'descripcion'=>strtoupper('GACHETA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('GAMA'),'descripcion'=>strtoupper('GAMA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('GUASCA'),'descripcion'=>strtoupper('GUASCA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('GUATAVITA'),'descripcion'=>strtoupper('GUATAVITA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('JUNÍN'),'descripcion'=>strtoupper('JUNÍN'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('LA CALERA'),'descripcion'=>strtoupper('LA CALERA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('UBALÁ'),'descripcion'=>strtoupper('UBALÁ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('BELTRÁN'),'descripcion'=>strtoupper('BELTRÁN'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('BITUIMA'),'descripcion'=>strtoupper('BITUIMA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CHAGUANÍ'),'descripcion'=>strtoupper('CHAGUANÍ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('GUAYABAL DE SIQUIMA'),'descripcion'=>strtoupper('GUAYABAL DE SIQUIMA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PULI'),'descripcion'=>strtoupper('PULI'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SAN JUAN DE RÍO SECO'),'descripcion'=>strtoupper('SAN JUAN DE RÍO SECO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('VIANÍ'),'descripcion'=>strtoupper('VIANÍ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('MEDINA'),'descripcion'=>strtoupper('MEDINA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PARATEBUENO'),'descripcion'=>strtoupper('PARATEBUENO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CAQUEZA'),'descripcion'=>strtoupper('CAQUEZA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CHIPAQUE'),'descripcion'=>strtoupper('CHIPAQUE'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CHOACHÍ'),'descripcion'=>strtoupper('CHOACHÍ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('FOMEQUE'),'descripcion'=>strtoupper('FOMEQUE'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('FOSCA'),'descripcion'=>strtoupper('FOSCA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('GUAYABETAL'),'descripcion'=>strtoupper('GUAYABETAL'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('GUTIÉRREZ'),'descripcion'=>strtoupper('GUTIÉRREZ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('QUETAME'),'descripcion'=>strtoupper('QUETAME'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('UBAQUE'),'descripcion'=>strtoupper('UBAQUE'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('UNE'),'descripcion'=>strtoupper('UNE'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('EL PEÑÓN'),'descripcion'=>strtoupper('EL PEÑÓN'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('LA PALMA'),'descripcion'=>strtoupper('LA PALMA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PACHO'),'descripcion'=>strtoupper('PACHO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PAIME'),'descripcion'=>strtoupper('PAIME'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SAN CAYETANO'),'descripcion'=>strtoupper('SAN CAYETANO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('TOPAIPI'),'descripcion'=>strtoupper('TOPAIPI'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('VILLAGOMEZ'),'descripcion'=>strtoupper('VILLAGOMEZ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('YACOPÍ'),'descripcion'=>strtoupper('YACOPÍ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CAJICÁ'),'descripcion'=>strtoupper('CAJICÁ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CHÍA'),'descripcion'=>strtoupper('CHÍA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('COGUA'),'descripcion'=>strtoupper('COGUA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('GACHANCIPÁ'),'descripcion'=>strtoupper('GACHANCIPÁ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('NEMOCoN'),'descripcion'=>strtoupper('NEMOCoN'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SOPÓ'),'descripcion'=>strtoupper('SOPÓ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('TABIO'),'descripcion'=>strtoupper('TABIO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('TOCANCIPÁ'),'descripcion'=>strtoupper('TOCANCIPÁ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('ZIPAQUIRÁ'),'descripcion'=>strtoupper('ZIPAQUIRÁ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('BOJACÁ'),'descripcion'=>strtoupper('BOJACÁ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('COTA'),'descripcion'=>strtoupper('COTA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('EL ROSAL'),'descripcion'=>strtoupper('EL ROSAL'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('FACATATIVÁ'),'descripcion'=>strtoupper('FACATATIVÁ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('FUNZA'),'descripcion'=>strtoupper('FUNZA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('MADRID'),'descripcion'=>strtoupper('MADRID'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('MOSQUERA'),'descripcion'=>strtoupper('MOSQUERA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SUBACHOQUE'),'descripcion'=>strtoupper('SUBACHOQUE'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('TENJO'),'descripcion'=>strtoupper('TENJO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('ZIPACoN'),'descripcion'=>strtoupper('ZIPACoN'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SIBATÉ'),'descripcion'=>strtoupper('SIBATÉ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SOACHA'),'descripcion'=>strtoupper('SOACHA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('ARBELÁEZ'),'descripcion'=>strtoupper('ARBELÁEZ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CABRERA'),'descripcion'=>strtoupper('CABRERA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('FUSAGASUGÁ'),'descripcion'=>strtoupper('FUSAGASUGÁ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('GRANADA'),'descripcion'=>strtoupper('GRANADA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PANDI'),'descripcion'=>strtoupper('PANDI'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PASCA'),'descripcion'=>strtoupper('PASCA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SAN BERNARDO'),'descripcion'=>strtoupper('SAN BERNARDO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SILVANIA'),'descripcion'=>strtoupper('SILVANIA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('TIBACUY'),'descripcion'=>strtoupper('TIBACUY'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('VENECIA'),'descripcion'=>strtoupper('VENECIA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('ANAPOIMA'),'descripcion'=>strtoupper('ANAPOIMA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('ANOLAIMA'),'descripcion'=>strtoupper('ANOLAIMA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('APULO'),'descripcion'=>strtoupper('APULO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CACHIPAY'),'descripcion'=>strtoupper('CACHIPAY'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('EL COLEGIO'),'descripcion'=>strtoupper('EL COLEGIO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('LA MESA'),'descripcion'=>strtoupper('LA MESA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('QUIPILE'),'descripcion'=>strtoupper('QUIPILE'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SAN ANTONIO DE TEQUENDAMA'),'descripcion'=>strtoupper('SAN ANTONIO DE TEQUENDAMA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('TENA'),'descripcion'=>strtoupper('TENA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('VIOTÁ'),'descripcion'=>strtoupper('VIOTÁ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CARMEN DE CARUPA'),'descripcion'=>strtoupper('CARMEN DE CARUPA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CUCUNUBÁ'),'descripcion'=>strtoupper('CUCUNUBÁ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('FÚQUENE'),'descripcion'=>strtoupper('FÚQUENE'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('GUACHETÁ'),'descripcion'=>strtoupper('GUACHETÁ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('LENGUAZAQUE'),'descripcion'=>strtoupper('LENGUAZAQUE'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SIMIJACA'),'descripcion'=>strtoupper('SIMIJACA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SUSA'),'descripcion'=>strtoupper('SUSA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SUTATAUSA'),'descripcion'=>strtoupper('SUTATAUSA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('TAUSA'),'descripcion'=>strtoupper('TAUSA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('UBATE'),'descripcion'=>strtoupper('UBATE'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('BARRANCO MINA'),'descripcion'=>strtoupper('BARRANCO MINA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CACAHUAL'),'descripcion'=>strtoupper('CACAHUAL'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('INÍRIDA'),'descripcion'=>strtoupper('INÍRIDA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('LA GUADALUPE'),'descripcion'=>strtoupper('LA GUADALUPE'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('MAPIRIPaN'),'descripcion'=>strtoupper('MAPIRIPaN'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('MORICHAL'),'descripcion'=>strtoupper('MORICHAL'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PANA PANA'),'descripcion'=>strtoupper('PANA PANA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PUERTO COLOMBIA'),'descripcion'=>strtoupper('PUERTO COLOMBIA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SAN FELIPE'),'descripcion'=>strtoupper('SAN FELIPE'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CALAMAR'),'descripcion'=>strtoupper('CALAMAR'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('EL RETORNO'),'descripcion'=>strtoupper('EL RETORNO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('MIRAFLORES'),'descripcion'=>strtoupper('MIRAFLORES'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SAN JOSÉ DEL GUAVIARE'),'descripcion'=>strtoupper('SAN JOSÉ DEL GUAVIARE'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('AGRADO'),'descripcion'=>strtoupper('AGRADO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('ALTAMIRA'),'descripcion'=>strtoupper('ALTAMIRA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('GARZÓN'),'descripcion'=>strtoupper('GARZÓN'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('GIGANTE'),'descripcion'=>strtoupper('GIGANTE'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('GUADALUPE'),'descripcion'=>strtoupper('GUADALUPE'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PITAL'),'descripcion'=>strtoupper('PITAL'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SUAZA'),'descripcion'=>strtoupper('SUAZA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('TARQUI'),'descripcion'=>strtoupper('TARQUI'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('AIPE'),'descripcion'=>strtoupper('AIPE'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('ALGECIRAS'),'descripcion'=>strtoupper('ALGECIRAS'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('BARAYA'),'descripcion'=>strtoupper('BARAYA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CAMPOALEGRE'),'descripcion'=>strtoupper('CAMPOALEGRE'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('COLOMBIA'),'descripcion'=>strtoupper('COLOMBIA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('HOBO'),'descripcion'=>strtoupper('HOBO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('IQUIRA'),'descripcion'=>strtoupper('IQUIRA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('NEIVA'),'descripcion'=>strtoupper('NEIVA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PALERMO'),'descripcion'=>strtoupper('PALERMO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('RIVERA'),'descripcion'=>strtoupper('RIVERA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SANTA MARÍA'),'descripcion'=>strtoupper('SANTA MARÍA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('TELLO'),'descripcion'=>strtoupper('TELLO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('TERUEL'),'descripcion'=>strtoupper('TERUEL'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('VILLAVIEJA'),'descripcion'=>strtoupper('VILLAVIEJA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('YAGUARÁ'),'descripcion'=>strtoupper('YAGUARÁ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('LA ARGENTINA'),'descripcion'=>strtoupper('LA ARGENTINA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('LA PLATA'),'descripcion'=>strtoupper('LA PLATA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('NÁTAGA'),'descripcion'=>strtoupper('NÁTAGA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PAICOL'),'descripcion'=>strtoupper('PAICOL'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('TESALIA'),'descripcion'=>strtoupper('TESALIA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('ACEVEDO'),'descripcion'=>strtoupper('ACEVEDO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('ELÍAS'),'descripcion'=>strtoupper('ELÍAS'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('ISNOS'),'descripcion'=>strtoupper('ISNOS'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('OPORAPA'),'descripcion'=>strtoupper('OPORAPA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PALESTINA'),'descripcion'=>strtoupper('PALESTINA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PITALITO'),'descripcion'=>strtoupper('PITALITO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SALADOBLANCO'),'descripcion'=>strtoupper('SALADOBLANCO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SAN AGUSTÍN'),'descripcion'=>strtoupper('SAN AGUSTÍN'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('TIMANÁ'),'descripcion'=>strtoupper('TIMANÁ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('ALBANIA'),'descripcion'=>strtoupper('ALBANIA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('DIBULLA'),'descripcion'=>strtoupper('DIBULLA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('MAICAO'),'descripcion'=>strtoupper('MAICAO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('MANAURE'),'descripcion'=>strtoupper('MANAURE'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('RIOHACHA'),'descripcion'=>strtoupper('RIOHACHA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('URIBIA'),'descripcion'=>strtoupper('URIBIA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('BARRANCAS'),'descripcion'=>strtoupper('BARRANCAS'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('DISTRACCION'),'descripcion'=>strtoupper('DISTRACCION'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('EL MOLINO'),'descripcion'=>strtoupper('EL MOLINO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('FONSECA'),'descripcion'=>strtoupper('FONSECA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('HATONUEVO'),'descripcion'=>strtoupper('HATONUEVO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('LA JAGUA DEL PILAR'),'descripcion'=>strtoupper('LA JAGUA DEL PILAR'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SAN JUAN DEL CESAR'),'descripcion'=>strtoupper('SAN JUAN DEL CESAR'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('URUMITA'),'descripcion'=>strtoupper('URUMITA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('VILLANUEVA'),'descripcion'=>strtoupper('VILLANUEVA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('ARIGUANÍ'),'descripcion'=>strtoupper('ARIGUANÍ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CHIBOLO'),'descripcion'=>strtoupper('CHIBOLO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('NUEVA GRANADA'),'descripcion'=>strtoupper('NUEVA GRANADA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PLATO'),'descripcion'=>strtoupper('PLATO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SABANAS DE SAN ANGEL'),'descripcion'=>strtoupper('SABANAS DE SAN ANGEL'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('TENERIFE'),'descripcion'=>strtoupper('TENERIFE'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('ALGARROBO'),'descripcion'=>strtoupper('ALGARROBO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('ARACATACA'),'descripcion'=>strtoupper('ARACATACA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CIÉNAGA'),'descripcion'=>strtoupper('CIÉNAGA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('EL RETEN'),'descripcion'=>strtoupper('EL RETEN'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('FUNDACION'),'descripcion'=>strtoupper('FUNDACION'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PUEBLO VIEJO'),'descripcion'=>strtoupper('PUEBLO VIEJO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('ZONA BANANERA'),'descripcion'=>strtoupper('ZONA BANANERA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CERRO SAN ANTONIO'),'descripcion'=>strtoupper('CERRO SAN ANTONIO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CONCORDIA'),'descripcion'=>strtoupper('CONCORDIA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('EL PIÑON'),'descripcion'=>strtoupper('EL PIÑON'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PEDRAZA'),'descripcion'=>strtoupper('PEDRAZA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PIVIJAY'),'descripcion'=>strtoupper('PIVIJAY'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('REMOLINO'),'descripcion'=>strtoupper('REMOLINO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SALAMINA'),'descripcion'=>strtoupper('SALAMINA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SITIONUEVO'),'descripcion'=>strtoupper('SITIONUEVO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('ZAPAYAN'),'descripcion'=>strtoupper('ZAPAYAN'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SANTA MARTA'),'descripcion'=>strtoupper('SANTA MARTA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('EL BANCO'),'descripcion'=>strtoupper('EL BANCO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('GUAMAL'),'descripcion'=>strtoupper('GUAMAL'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PIJIÑO DEL CARMEN'),'descripcion'=>strtoupper('PIJIÑO DEL CARMEN'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SAN SEBASTIAN DE BUENAVISTA'),'descripcion'=>strtoupper('SAN SEBASTIAN DE BUENAVISTA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SAN ZENON'),'descripcion'=>strtoupper('SAN ZENON'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SANTA ANA'),'descripcion'=>strtoupper('SANTA ANA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SANTA BARBARA DE PINTO'),'descripcion'=>strtoupper('SANTA BARBARA DE PINTO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('EL CASTILLO'),'descripcion'=>strtoupper('EL CASTILLO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('EL DORADO'),'descripcion'=>strtoupper('EL DORADO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('FUENTE DE ORO'),'descripcion'=>strtoupper('FUENTE DE ORO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('GRANADA'),'descripcion'=>strtoupper('GRANADA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('LA MACARENA'),'descripcion'=>strtoupper('LA MACARENA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('LA URIBE'),'descripcion'=>strtoupper('LA URIBE'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('LEJANÍAS'),'descripcion'=>strtoupper('LEJANÍAS'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('MAPIRIPaN'),'descripcion'=>strtoupper('MAPIRIPaN'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('MESETAS'),'descripcion'=>strtoupper('MESETAS'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PUERTO CONCORDIA'),'descripcion'=>strtoupper('PUERTO CONCORDIA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PUERTO LLERAS'),'descripcion'=>strtoupper('PUERTO LLERAS'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PUERTO RICO'),'descripcion'=>strtoupper('PUERTO RICO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SAN JUAN DE ARAMA'),'descripcion'=>strtoupper('SAN JUAN DE ARAMA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('VISTA HERMOSA'),'descripcion'=>strtoupper('VISTA HERMOSA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('VILLAVICENCIO'),'descripcion'=>strtoupper('VILLAVICENCIO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('ACACiAS'),'descripcion'=>strtoupper('ACACiAS'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('BARRANCA DE UPIA'),'descripcion'=>strtoupper('BARRANCA DE UPIA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CASTILLA LA NUEVA'),'descripcion'=>strtoupper('CASTILLA LA NUEVA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CUMARAL'),'descripcion'=>strtoupper('CUMARAL'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('EL CALVARIO'),'descripcion'=>strtoupper('EL CALVARIO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('GUAMAL'),'descripcion'=>strtoupper('GUAMAL'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('RESTREPO'),'descripcion'=>strtoupper('RESTREPO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SAN CARLOS GUAROA'),'descripcion'=>strtoupper('SAN CARLOS GUAROA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SAN JUANITO'),'descripcion'=>strtoupper('SAN JUANITO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SAN LUIS DE CUBARRAL'),'descripcion'=>strtoupper('SAN LUIS DE CUBARRAL'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SAN MARTÍN'),'descripcion'=>strtoupper('SAN MARTÍN'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CABUYARO'),'descripcion'=>strtoupper('CABUYARO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PUERTO GAITÁN'),'descripcion'=>strtoupper('PUERTO GAITÁN'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PUERTO LoPEZ'),'descripcion'=>strtoupper('PUERTO LoPEZ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CHACHAGUI'),'descripcion'=>strtoupper('CHACHAGUI'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CONSACA'),'descripcion'=>strtoupper('CONSACA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('EL PEÑOL'),'descripcion'=>strtoupper('EL PEÑOL'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('EL TAMBO'),'descripcion'=>strtoupper('EL TAMBO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('LA FLORIDA'),'descripcion'=>strtoupper('LA FLORIDA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('NARIÑO'),'descripcion'=>strtoupper('NARIÑO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PASTO'),'descripcion'=>strtoupper('PASTO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SANDONÁ'),'descripcion'=>strtoupper('SANDONÁ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('TANGUA'),'descripcion'=>strtoupper('TANGUA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('YACUANQUER'),'descripcion'=>strtoupper('YACUANQUER'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('ANCUYA'),'descripcion'=>strtoupper('ANCUYA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('GUAITARILLA'),'descripcion'=>strtoupper('GUAITARILLA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('LA LLANADA'),'descripcion'=>strtoupper('LA LLANADA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('LINARES'),'descripcion'=>strtoupper('LINARES'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('LOS ANDES'),'descripcion'=>strtoupper('LOS ANDES'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('MALLAMA'),'descripcion'=>strtoupper('MALLAMA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('OSPINA'),'descripcion'=>strtoupper('OSPINA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PROVIDENCIA'),'descripcion'=>strtoupper('PROVIDENCIA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('RICAURTE'),'descripcion'=>strtoupper('RICAURTE'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SAMANIEGO'),'descripcion'=>strtoupper('SAMANIEGO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SANTA CRUZ'),'descripcion'=>strtoupper('SANTA CRUZ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SAPUYES'),'descripcion'=>strtoupper('SAPUYES'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('TUQUERRES'),'descripcion'=>strtoupper('TUQUERRES'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('BARBACOAS'),'descripcion'=>strtoupper('BARBACOAS'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('EL CHARCO'),'descripcion'=>strtoupper('EL CHARCO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('FRANCISCO PIZARRO'),'descripcion'=>strtoupper('FRANCISCO PIZARRO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('LA TOLA'),'descripcion'=>strtoupper('LA TOLA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('Magui'),'descripcion'=>strtoupper('Magui'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('MOSQUERA'),'descripcion'=>strtoupper('MOSQUERA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('OLAYA HERRERA'),'descripcion'=>strtoupper('OLAYA HERRERA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('ROBERTO PAYAN'),'descripcion'=>strtoupper('ROBERTO PAYAN'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SANTA BaRBARA'),'descripcion'=>strtoupper('SANTA BaRBARA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('TUMACO'),'descripcion'=>strtoupper('TUMACO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('ALBAN'),'descripcion'=>strtoupper('ALBAN'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('ARBOLEDA'),'descripcion'=>strtoupper('ARBOLEDA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('BELEN'),'descripcion'=>strtoupper('BELEN'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('BUESACO'),'descripcion'=>strtoupper('BUESACO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('COLON'),'descripcion'=>strtoupper('COLON'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CUMBITARA'),'descripcion'=>strtoupper('CUMBITARA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('EL ROSARIO'),'descripcion'=>strtoupper('EL ROSARIO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('El Tablon de Gomez'),'descripcion'=>strtoupper('El Tablon de Gomez'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('LA CRUZ'),'descripcion'=>strtoupper('LA CRUZ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('LA UNION'),'descripcion'=>strtoupper('LA UNION'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('LEIVA'),'descripcion'=>strtoupper('LEIVA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('POLICARPA'),'descripcion'=>strtoupper('POLICARPA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SAN BERNARDO'),'descripcion'=>strtoupper('SAN BERNARDO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SAN LORENZO'),'descripcion'=>strtoupper('SAN LORENZO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SAN PABLO'),'descripcion'=>strtoupper('SAN PABLO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SAN PEDRO DE CARTAGO'),'descripcion'=>strtoupper('SAN PEDRO DE CARTAGO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('TAMINANGO'),'descripcion'=>strtoupper('TAMINANGO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('ALDANA'),'descripcion'=>strtoupper('ALDANA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CONTADERO'),'descripcion'=>strtoupper('CONTADERO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CÓRDOBA'),'descripcion'=>strtoupper('CÓRDOBA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CUASPUD'),'descripcion'=>strtoupper('CUASPUD'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CUMBAL'),'descripcion'=>strtoupper('CUMBAL'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('FUNES'),'descripcion'=>strtoupper('FUNES'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('GUACHUCAL'),'descripcion'=>strtoupper('GUACHUCAL'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('GUALMATAN'),'descripcion'=>strtoupper('GUALMATAN'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('ILES'),'descripcion'=>strtoupper('ILES'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('IMUES'),'descripcion'=>strtoupper('IMUES'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('IPIALES'),'descripcion'=>strtoupper('IPIALES'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('POTOSÍ'),'descripcion'=>strtoupper('POTOSÍ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PUERRES'),'descripcion'=>strtoupper('PUERRES'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PUPIALES'),'descripcion'=>strtoupper('PUPIALES'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('ARBOLEDAS'),'descripcion'=>strtoupper('ARBOLEDAS'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CUCUTILLA'),'descripcion'=>strtoupper('CUCUTILLA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('GRAMALOTE'),'descripcion'=>strtoupper('GRAMALOTE'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('LOURDES'),'descripcion'=>strtoupper('LOURDES'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SALAZAR'),'descripcion'=>strtoupper('SALAZAR'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SANTIAGO'),'descripcion'=>strtoupper('SANTIAGO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('VILLA CARO'),'descripcion'=>strtoupper('VILLA CARO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('BUCARASICA'),'descripcion'=>strtoupper('BUCARASICA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('EL TARRA'),'descripcion'=>strtoupper('EL TARRA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SARDINATA'),'descripcion'=>strtoupper('SARDINATA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('TIBÚ'),'descripcion'=>strtoupper('TIBÚ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('ABREGO'),'descripcion'=>strtoupper('ABREGO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CACHIRÁ'),'descripcion'=>strtoupper('CACHIRÁ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CONVENCIÓN'),'descripcion'=>strtoupper('CONVENCIÓN'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('EL CARMEN'),'descripcion'=>strtoupper('EL CARMEN'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('HACARÍ'),'descripcion'=>strtoupper('HACARÍ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('LA ESPERANZA'),'descripcion'=>strtoupper('LA ESPERANZA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('LA PLAYA'),'descripcion'=>strtoupper('LA PLAYA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('OCAÑA'),'descripcion'=>strtoupper('OCAÑA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SAN CALIXTO'),'descripcion'=>strtoupper('SAN CALIXTO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('TEORAMA'),'descripcion'=>strtoupper('TEORAMA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CÚCUTA'),'descripcion'=>strtoupper('CÚCUTA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('EL ZULIA'),'descripcion'=>strtoupper('EL ZULIA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('LOS PATIOS'),'descripcion'=>strtoupper('LOS PATIOS'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PUERTO SANTANDER'),'descripcion'=>strtoupper('PUERTO SANTANDER'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SAN CAYETANO'),'descripcion'=>strtoupper('SAN CAYETANO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('VILLA DEL ROSARIO'),'descripcion'=>strtoupper('VILLA DEL ROSARIO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CÁCOTA'),'descripcion'=>strtoupper('CÁCOTA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CHITAGÁ'),'descripcion'=>strtoupper('CHITAGÁ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('MUTISCUA'),'descripcion'=>strtoupper('MUTISCUA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PAMPLONA'),'descripcion'=>strtoupper('PAMPLONA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PAMPLONITA'),'descripcion'=>strtoupper('PAMPLONITA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SILOS'),'descripcion'=>strtoupper('SILOS'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('BOCHALEMA'),'descripcion'=>strtoupper('BOCHALEMA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CHINÁCOTA'),'descripcion'=>strtoupper('CHINÁCOTA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('DURANIA'),'descripcion'=>strtoupper('DURANIA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('HERRÁN'),'descripcion'=>strtoupper('HERRÁN'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('LABATECA'),'descripcion'=>strtoupper('LABATECA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('RAGONVALIA'),'descripcion'=>strtoupper('RAGONVALIA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('TOLEDO'),'descripcion'=>strtoupper('TOLEDO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('COLÓN'),'descripcion'=>strtoupper('COLÓN'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('MOCOA'),'descripcion'=>strtoupper('MOCOA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('ORITO'),'descripcion'=>strtoupper('ORITO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PUERTO ASIS'),'descripcion'=>strtoupper('PUERTO ASIS'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PUERTO CAICEDO'),'descripcion'=>strtoupper('PUERTO CAICEDO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PUERTO GUZMAN'),'descripcion'=>strtoupper('PUERTO GUZMAN'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PUERTO LEGUIZAMO'),'descripcion'=>strtoupper('PUERTO LEGUIZAMO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SAN FRANCISCO'),'descripcion'=>strtoupper('SAN FRANCISCO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SAN MIGUEL'),'descripcion'=>strtoupper('SAN MIGUEL'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SANTIAGO'),'descripcion'=>strtoupper('SANTIAGO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SIBUNDOY'),'descripcion'=>strtoupper('SIBUNDOY'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('VALLE DEL GUAMUEZ'),'descripcion'=>strtoupper('VALLE DEL GUAMUEZ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('VILLA GARZON'),'descripcion'=>strtoupper('VILLA GARZON'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('ARMENIA'),'descripcion'=>strtoupper('ARMENIA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('BUENAVISTA'),'descripcion'=>strtoupper('BUENAVISTA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CALARCA'),'descripcion'=>strtoupper('CALARCA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CoRDOBA'),'descripcion'=>strtoupper('CoRDOBA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('GeNOVA'),'descripcion'=>strtoupper('GeNOVA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PIJAO'),'descripcion'=>strtoupper('PIJAO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('FILANDIA'),'descripcion'=>strtoupper('FILANDIA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SALENTO'),'descripcion'=>strtoupper('SALENTO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CIRCASIA'),'descripcion'=>strtoupper('CIRCASIA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('LA TEBAIDA'),'descripcion'=>strtoupper('LA TEBAIDA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('Montengro'),'descripcion'=>strtoupper('Montengro'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('QUIMBAYA'),'descripcion'=>strtoupper('QUIMBAYA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('DOSQUEBRADAS'),'descripcion'=>strtoupper('DOSQUEBRADAS'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('LA VIRGINIA'),'descripcion'=>strtoupper('LA VIRGINIA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('MARSELLA'),'descripcion'=>strtoupper('MARSELLA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PEREIRA'),'descripcion'=>strtoupper('PEREIRA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SANTA ROSA DE CABAL'),'descripcion'=>strtoupper('SANTA ROSA DE CABAL'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('APÍA'),'descripcion'=>strtoupper('APÍA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('BALBOA'),'descripcion'=>strtoupper('BALBOA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('BELÉN DE UMBRÍA'),'descripcion'=>strtoupper('BELÉN DE UMBRÍA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('GUÁTICA'),'descripcion'=>strtoupper('GUÁTICA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('LA CELIA'),'descripcion'=>strtoupper('LA CELIA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('QUINCHiA'),'descripcion'=>strtoupper('QUINCHiA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SANTUARIO'),'descripcion'=>strtoupper('SANTUARIO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('MISTRATÓ'),'descripcion'=>strtoupper('MISTRATÓ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PUEBLO RICO'),'descripcion'=>strtoupper('PUEBLO RICO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CHIMA'),'descripcion'=>strtoupper('CHIMA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CONFINES'),'descripcion'=>strtoupper('CONFINES'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CONTRATACIÓN'),'descripcion'=>strtoupper('CONTRATACIÓN'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('EL GUACAMAYO'),'descripcion'=>strtoupper('EL GUACAMAYO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('GALÁN'),'descripcion'=>strtoupper('GALÁN'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('GAMBITA'),'descripcion'=>strtoupper('GAMBITA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('GUADALUPE'),'descripcion'=>strtoupper('GUADALUPE'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('GUAPOTÁ'),'descripcion'=>strtoupper('GUAPOTÁ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('HATO'),'descripcion'=>strtoupper('HATO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('OIBA'),'descripcion'=>strtoupper('OIBA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PALMAR'),'descripcion'=>strtoupper('PALMAR'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PALMAS DEL SOCORRO'),'descripcion'=>strtoupper('PALMAS DEL SOCORRO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SANTA HELENA DEL OPÓN'),'descripcion'=>strtoupper('SANTA HELENA DEL OPÓN'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SIMACOTA'),'descripcion'=>strtoupper('SIMACOTA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SOCORRO'),'descripcion'=>strtoupper('SOCORRO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SUAITA'),'descripcion'=>strtoupper('SUAITA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CAPITANEJO'),'descripcion'=>strtoupper('CAPITANEJO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CARCASÍ'),'descripcion'=>strtoupper('CARCASÍ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CEPITÁ'),'descripcion'=>strtoupper('CEPITÁ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CERRITO'),'descripcion'=>strtoupper('CERRITO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CONCEPCIÓN'),'descripcion'=>strtoupper('CONCEPCIÓN'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('ENCISO'),'descripcion'=>strtoupper('ENCISO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('GUACA'),'descripcion'=>strtoupper('GUACA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('MACARAVITA'),'descripcion'=>strtoupper('MACARAVITA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('MÁLAGA'),'descripcion'=>strtoupper('MÁLAGA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('MOLAGAVITA'),'descripcion'=>strtoupper('MOLAGAVITA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SAN ANDRÉS'),'descripcion'=>strtoupper('SAN ANDRÉS'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SAN JOSÉ DE MIRANDA'),'descripcion'=>strtoupper('SAN JOSÉ DE MIRANDA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SAN MIGUEL'),'descripcion'=>strtoupper('SAN MIGUEL'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('ARATOCA'),'descripcion'=>strtoupper('ARATOCA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('BARICHARA'),'descripcion'=>strtoupper('BARICHARA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CABRERA'),'descripcion'=>strtoupper('CABRERA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CHARALÁ'),'descripcion'=>strtoupper('CHARALÁ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('COROMORO'),'descripcion'=>strtoupper('COROMORO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CURITÍ'),'descripcion'=>strtoupper('CURITÍ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('ENCINO'),'descripcion'=>strtoupper('ENCINO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('JORDÁN'),'descripcion'=>strtoupper('JORDÁN'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('MOGOTES'),'descripcion'=>strtoupper('MOGOTES'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('OCAMONTE'),'descripcion'=>strtoupper('OCAMONTE'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('ONZAGA'),'descripcion'=>strtoupper('ONZAGA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PÁRAMO'),'descripcion'=>strtoupper('PÁRAMO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PINCHOTE'),'descripcion'=>strtoupper('PINCHOTE'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SAN GIL'),'descripcion'=>strtoupper('SAN GIL'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SAN JOAQUÍN'),'descripcion'=>strtoupper('SAN JOAQUÍN'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('VALLE DE SAN JOSÉ'),'descripcion'=>strtoupper('VALLE DE SAN JOSÉ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('VILLANUEVA'),'descripcion'=>strtoupper('VILLANUEVA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('BARRANCABERMEJA'),'descripcion'=>strtoupper('BARRANCABERMEJA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('BETULIA'),'descripcion'=>strtoupper('BETULIA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('EL CARMEN DE CHUCURÍ'),'descripcion'=>strtoupper('EL CARMEN DE CHUCURÍ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PUERTO WILCHES'),'descripcion'=>strtoupper('PUERTO WILCHES'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SABANA DE TORRES'),'descripcion'=>strtoupper('SABANA DE TORRES'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SAN VICENTE DE CHUCURÍ'),'descripcion'=>strtoupper('SAN VICENTE DE CHUCURÍ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('ZAPATOCA'),'descripcion'=>strtoupper('ZAPATOCA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('BUCARAMANGA'),'descripcion'=>strtoupper('BUCARAMANGA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CALIFORNIA'),'descripcion'=>strtoupper('CALIFORNIA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CHARTA'),'descripcion'=>strtoupper('CHARTA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('EL PLAYÓN'),'descripcion'=>strtoupper('EL PLAYÓN'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('FLORIDABLANCA'),'descripcion'=>strtoupper('FLORIDABLANCA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('GIRÓN'),'descripcion'=>strtoupper('GIRÓN'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('LEBRÍJA'),'descripcion'=>strtoupper('LEBRÍJA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('LOS SANTOS'),'descripcion'=>strtoupper('LOS SANTOS'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('MATANZA'),'descripcion'=>strtoupper('MATANZA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PIEDECUESTA'),'descripcion'=>strtoupper('PIEDECUESTA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('RIONEGRO'),'descripcion'=>strtoupper('RIONEGRO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SANTA BÁRBARA'),'descripcion'=>strtoupper('SANTA BÁRBARA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SURATA'),'descripcion'=>strtoupper('SURATA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('TONA'),'descripcion'=>strtoupper('TONA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('VETAS'),'descripcion'=>strtoupper('VETAS'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('AGUADA'),'descripcion'=>strtoupper('AGUADA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('ALBANIA'),'descripcion'=>strtoupper('ALBANIA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('BARBOSA'),'descripcion'=>strtoupper('BARBOSA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('BOLÍVAR'),'descripcion'=>strtoupper('BOLÍVAR'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CHIPATÁ'),'descripcion'=>strtoupper('CHIPATÁ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CIMITARRA'),'descripcion'=>strtoupper('CIMITARRA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('EL PEÑÓN'),'descripcion'=>strtoupper('EL PEÑÓN'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('FLORIÁN'),'descripcion'=>strtoupper('FLORIÁN'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('GUAVATÁ'),'descripcion'=>strtoupper('GUAVATÁ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('GuEPSA'),'descripcion'=>strtoupper('GuEPSA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('JESÚS MARÍA'),'descripcion'=>strtoupper('JESÚS MARÍA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('LA BELLEZA'),'descripcion'=>strtoupper('LA BELLEZA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('LA PAZ'),'descripcion'=>strtoupper('LA PAZ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('LANDÁZURI'),'descripcion'=>strtoupper('LANDÁZURI'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PUENTE NACIONAL'),'descripcion'=>strtoupper('PUENTE NACIONAL'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PUERTO PARRA'),'descripcion'=>strtoupper('PUERTO PARRA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SAN BENITO'),'descripcion'=>strtoupper('SAN BENITO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SUCRE'),'descripcion'=>strtoupper('SUCRE'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('VÉLEZ'),'descripcion'=>strtoupper('VÉLEZ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('GUARANDA'),'descripcion'=>strtoupper('GUARANDA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('MAJAGUAL'),'descripcion'=>strtoupper('MAJAGUAL'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SUCRE'),'descripcion'=>strtoupper('SUCRE'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CHALÁN'),'descripcion'=>strtoupper('CHALÁN'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('COLOSO'),'descripcion'=>strtoupper('COLOSO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('MORROA'),'descripcion'=>strtoupper('MORROA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('OVEJAS'),'descripcion'=>strtoupper('OVEJAS'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SINCELEJO'),'descripcion'=>strtoupper('SINCELEJO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('COVEÑAS'),'descripcion'=>strtoupper('COVEÑAS'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PALMITO'),'descripcion'=>strtoupper('PALMITO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SAN ONOFRE'),'descripcion'=>strtoupper('SAN ONOFRE'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SANTIAGO DE TOLÚ'),'descripcion'=>strtoupper('SANTIAGO DE TOLÚ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('TOLÚ VIEJO'),'descripcion'=>strtoupper('TOLÚ VIEJO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('BUENAVISTA'),'descripcion'=>strtoupper('BUENAVISTA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('COROZAL'),'descripcion'=>strtoupper('COROZAL'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('EL ROBLE'),'descripcion'=>strtoupper('EL ROBLE'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('GALERAS'),'descripcion'=>strtoupper('GALERAS'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('LOS PALMITOS'),'descripcion'=>strtoupper('LOS PALMITOS'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SAMPUÉS'),'descripcion'=>strtoupper('SAMPUÉS'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SAN JUAN BETULIA'),'descripcion'=>strtoupper('SAN JUAN BETULIA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SAN PEDRO'),'descripcion'=>strtoupper('SAN PEDRO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SINCÉ'),'descripcion'=>strtoupper('SINCÉ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CAIMITO'),'descripcion'=>strtoupper('CAIMITO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('LA UNIÓN'),'descripcion'=>strtoupper('LA UNIÓN'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SAN BENITO ABAD'),'descripcion'=>strtoupper('SAN BENITO ABAD'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SAN MARCOS'),'descripcion'=>strtoupper('SAN MARCOS'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('AMBALEMA'),'descripcion'=>strtoupper('AMBALEMA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('ARMERO'),'descripcion'=>strtoupper('ARMERO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('FALAN'),'descripcion'=>strtoupper('FALAN'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('FRESNO'),'descripcion'=>strtoupper('FRESNO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('HONDA'),'descripcion'=>strtoupper('HONDA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('MARIQUITA'),'descripcion'=>strtoupper('MARIQUITA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PALOCABILDO'),'descripcion'=>strtoupper('PALOCABILDO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CARMEN DE APICALÁ'),'descripcion'=>strtoupper('CARMEN DE APICALÁ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CUNDAY'),'descripcion'=>strtoupper('CUNDAY'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('ICONONZO'),'descripcion'=>strtoupper('ICONONZO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('MELGAR'),'descripcion'=>strtoupper('MELGAR'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('VILLARRICA'),'descripcion'=>strtoupper('VILLARRICA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('ATACO'),'descripcion'=>strtoupper('ATACO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CHAPARRAL'),'descripcion'=>strtoupper('CHAPARRAL'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('COYAIMA'),'descripcion'=>strtoupper('COYAIMA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('NATAGAIMA'),'descripcion'=>strtoupper('NATAGAIMA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('ORTEGA'),'descripcion'=>strtoupper('ORTEGA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PLANADAS'),'descripcion'=>strtoupper('PLANADAS'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('RIOBLANCO'),'descripcion'=>strtoupper('RIOBLANCO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('RONCESVALLES'),'descripcion'=>strtoupper('RONCESVALLES'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SAN ANTONIO'),'descripcion'=>strtoupper('SAN ANTONIO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('ALVARADO'),'descripcion'=>strtoupper('ALVARADO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('ANZOÁTEGUI'),'descripcion'=>strtoupper('ANZOÁTEGUI'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CAJAMARCA'),'descripcion'=>strtoupper('CAJAMARCA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('COELLO'),'descripcion'=>strtoupper('COELLO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('ESPINAL'),'descripcion'=>strtoupper('ESPINAL'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('FLANDES'),'descripcion'=>strtoupper('FLANDES'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('IBAGUe'),'descripcion'=>strtoupper('IBAGUe'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PIEDRAS'),'descripcion'=>strtoupper('PIEDRAS'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('ROVIRA'),'descripcion'=>strtoupper('ROVIRA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SAN LUIS'),'descripcion'=>strtoupper('SAN LUIS'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('VALLE DE SAN JUAN'),'descripcion'=>strtoupper('VALLE DE SAN JUAN'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('ALPUJARRA'),'descripcion'=>strtoupper('ALPUJARRA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('DOLORES'),'descripcion'=>strtoupper('DOLORES'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('GUAMO'),'descripcion'=>strtoupper('GUAMO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PRADO'),'descripcion'=>strtoupper('PRADO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PURIFICACIÓN'),'descripcion'=>strtoupper('PURIFICACIÓN'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SALDAÑA'),'descripcion'=>strtoupper('SALDAÑA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SUÁREZ'),'descripcion'=>strtoupper('SUÁREZ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CASABIANCA'),'descripcion'=>strtoupper('CASABIANCA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('HERVEO'),'descripcion'=>strtoupper('HERVEO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('LeRIDA'),'descripcion'=>strtoupper('LeRIDA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('LiBANO'),'descripcion'=>strtoupper('LiBANO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('MURILLO'),'descripcion'=>strtoupper('MURILLO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SANTA ISABEL'),'descripcion'=>strtoupper('SANTA ISABEL'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('VENADILLO'),'descripcion'=>strtoupper('VENADILLO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('VILLAHERMOSA'),'descripcion'=>strtoupper('VILLAHERMOSA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('ANDALUCÍA'),'descripcion'=>strtoupper('ANDALUCÍA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('BUGA'),'descripcion'=>strtoupper('BUGA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('BUGALAGRANDE'),'descripcion'=>strtoupper('BUGALAGRANDE'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CALIMA'),'descripcion'=>strtoupper('CALIMA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('EL CERRITO'),'descripcion'=>strtoupper('EL CERRITO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('GINEBRA'),'descripcion'=>strtoupper('GINEBRA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('GUACARÍ'),'descripcion'=>strtoupper('GUACARÍ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('RESTREPO'),'descripcion'=>strtoupper('RESTREPO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('RIOFRIO'),'descripcion'=>strtoupper('RIOFRIO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SAN PEDRO'),'descripcion'=>strtoupper('SAN PEDRO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('TRUJILLO'),'descripcion'=>strtoupper('TRUJILLO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('TULUÁ'),'descripcion'=>strtoupper('TULUÁ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('YOTOCO'),'descripcion'=>strtoupper('YOTOCO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('ALCALa'),'descripcion'=>strtoupper('ALCALa'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('ANSERMANUEVO'),'descripcion'=>strtoupper('ANSERMANUEVO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('ARGELIA'),'descripcion'=>strtoupper('ARGELIA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('BOLÍVAR'),'descripcion'=>strtoupper('BOLÍVAR'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CARTAGO'),'descripcion'=>strtoupper('CARTAGO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('EL ÁGUILA'),'descripcion'=>strtoupper('EL ÁGUILA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('EL CAIRO'),'descripcion'=>strtoupper('EL CAIRO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('EL DOVIO'),'descripcion'=>strtoupper('EL DOVIO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('LA UNIÓN'),'descripcion'=>strtoupper('LA UNIÓN'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('LA VICTORIA'),'descripcion'=>strtoupper('LA VICTORIA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('OBANDO'),'descripcion'=>strtoupper('OBANDO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('ROLDANILLO'),'descripcion'=>strtoupper('ROLDANILLO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('TORO'),'descripcion'=>strtoupper('TORO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('ULLOA'),'descripcion'=>strtoupper('ULLOA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('VERSALLES'),'descripcion'=>strtoupper('VERSALLES'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('ZARZAL'),'descripcion'=>strtoupper('ZARZAL'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('BUENAVENTURA'),'descripcion'=>strtoupper('BUENAVENTURA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CAICEDONIA'),'descripcion'=>strtoupper('CAICEDONIA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SEVILLA'),'descripcion'=>strtoupper('SEVILLA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CALI'),'descripcion'=>strtoupper('CALI'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CANDELARIA'),'descripcion'=>strtoupper('CANDELARIA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('DAGUA'),'descripcion'=>strtoupper('DAGUA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('FLORIDA'),'descripcion'=>strtoupper('FLORIDA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('JAMUNDÍ'),'descripcion'=>strtoupper('JAMUNDÍ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('LA CUMBRE'),'descripcion'=>strtoupper('LA CUMBRE'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PALMIRA'),'descripcion'=>strtoupper('PALMIRA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PRADERA'),'descripcion'=>strtoupper('PRADERA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('VIJES'),'descripcion'=>strtoupper('VIJES'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('YUMBO'),'descripcion'=>strtoupper('YUMBO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CARURU'),'descripcion'=>strtoupper('CARURU'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('MITÚ'),'descripcion'=>strtoupper('MITÚ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PACOA'),'descripcion'=>strtoupper('PACOA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PAPUNAHUA'),'descripcion'=>strtoupper('PAPUNAHUA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('TARAIRA'),'descripcion'=>strtoupper('TARAIRA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('YAVARATÉ'),'descripcion'=>strtoupper('YAVARATÉ'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('CUMARIBO'),'descripcion'=>strtoupper('CUMARIBO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('LA PRIMAVERA'),'descripcion'=>strtoupper('LA PRIMAVERA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('PUERTO CARREÑO'),'descripcion'=>strtoupper('PUERTO CARREÑO'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],
                        ['slug'=>strtoupper('CIUDAD'),'nombre'=>strtoupper('SANTA ROSALÍA'),'descripcion'=>strtoupper('SANTA ROSALÍA'),'activo'=>'SI', 'listas_id'=>17,'user_id'=>1, 'created_at' => Carbon::now()->format('Y-m-d H:i:s')],

                        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // spatie documentation
        app()->make(\Spatie\Permission\PermissionRegistrar::class)->forgetCachedPermissions();
        
      // Permission::create(['name' => 'user_index'])->syncRoles(['admin']);
      $permissions = [

        'tablero_administrador',

        'tablero_fundacion',

        'listar_permisos',
        'crear_permiso',
        'ver_permiso',
        'editar_permiso',
        'eliminar_permiso',

       'listar_roles',
        'crear_rol',
        'ver_rol',
        'editar_rol',
        'eliminar_rol',

        'lista_usuarios',
        'crear_usuario',
        'ver_datos_usuario',
        'editar_usuario',
        'eliminar_usuario',

        'lista_fundaciones',
        

        'lista_mascotas',
        'crear_mascota',
        'ver_datos_mascota',
        'editar_mascota',
        'eliminar_mascota',

        'lista_calendarios',
        'crear_calendario',
        'ver_datos_calendario',
        'editar_calendario',
        'eliminar_calendario',


        'lista_preadopciones',
        'ver_preadopcion',
        'editar_preadopcion',
       
       

    ];

    //guarde en la base de datos estos permisos
    foreach ($permissions as $permission) {
        Permission::create([
            'name' => $permission
        ]);
    }
    }
}

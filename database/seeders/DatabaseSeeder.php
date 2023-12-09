<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //Datos de prueba
        
        DB::table('roles')->insertGetId([
            'rol' => 'admin_propiedad',
            'desc_rol' => 'Administrador de la propiedad horizontal',
        ]);

        $rol = DB::table('roles')->insertGetId([
            'rol' => 'residente',
            'desc_rol' => 'Residente de la propiedad horizontal',
        ]);

        DB::table('users')->insert([
            'name' => 'Jorge Osorio',
            'email' => 'jorgearmanbolivar'.'@hotmail.com',
            'rol_id' => $rol,
            'password'=>''
        ]);
    }
}

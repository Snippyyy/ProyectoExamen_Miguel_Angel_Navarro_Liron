<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Roles;
use Illuminate\Support\Str;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Roles::create([
            'name' => 'admin',
            'display_name' => 'Administrador',
            'description' => 'Administrador de la aplicación – Puede hacer y deshacer todo',
        ]);

        Roles::create([
            'name' => 'creator',
            'display_name' => 'Creador',
            'description' => 'Puede crear post y modificarlos mientras estén en modo draft.',
        ]);

        Roles::create([
            'name' => 'editor',
            'display_name' => 'Editor',
            'description' => 'Puede editar un post solo si está en modo pending',
        ]);

        Roles::create([
            'name' => 'validator',
            'display_name' => 'Verificador',
            'description' => 'Puede cambiar el estado de un post de pending a published.',
        ]);

        Roles::create([
            'name' => 'eraser',
            'display_name' => 'Eliminador',
            'description' => 'Puede borrar un post en cualquier momento.',
        ]);

        Roles::create([
            'name' => 'reader',
            'display_name' => 'Lector',
            'description' => 'Solo puede acceder al listado de los posts y a cada uno de ellos de manera individual.',
        ]);
    }
}

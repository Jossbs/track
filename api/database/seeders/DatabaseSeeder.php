<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     *
     * El MVP es single-user y no tiene entidad de usuarios, por lo que aquí
     * no se siembran usuarios. Los seeders de proyectos/columnas/tareas se
     * agregarán conforme se implementen esas entidades.
     */
    public function run(): void
    {
        //
    }
}

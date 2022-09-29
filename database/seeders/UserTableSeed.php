<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert([
            "name" => "Administrador",
            "email" => "cadastrocultural@riobranco.ac.gov.br",
            "password" => Hash::make("master@2378")
        ]);
    }
}

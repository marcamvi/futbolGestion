<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\entidade;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $gryffindor = new entidade();
        $gryffindor->Nombre = "Gryffindor";
        $gryffindor->save();
        $hufflepuff = new entidade();
        $hufflepuff->Nombre = "Hufflepuff";
        $hufflepuff->save();
        $ravenclaw = new entidade();
        $ravenclaw->Nombre = "Ravenclaw";
        $ravenclaw->save();
        $slytherin = new entidade();
        $slytherin->Nombre = "Slytherin";
        $slytherin->save();
    }
}

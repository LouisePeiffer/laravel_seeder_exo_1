<?php

namespace Database\Seeders;

use App\Models\Personne;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('personnes')->insert([
            [
                "nom"=>"Louise",
                "age"=>"22",
                "email"=>"badb@gmail.com",
                "telephone"=>"1111",
                "created_at"=>now(),
            ],
            [
                "nom"=>"Maxence",
                "age"=>"26",
                "email"=>"loyd@gmail.com",
                "telephone"=>"2222",
                "created_at"=>now(),
            ],
            [
                "nom"=>"Alex",
                "age"=>"23",
                "email"=>"mhnou@gmail.com",
                "telephone"=>"3333",
                "created_at"=>now(),
            ],
            [
                "nom"=>"Bene",
                "age"=>"22",
                "email"=>"camion@gmail.com",
                "telephone"=>"4444",
                "created_at"=>now(),
            ],
        ]);
    }
}

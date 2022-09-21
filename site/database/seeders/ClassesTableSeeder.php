<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("classes")->insert([
            ["libelle"=>"6ieme"],
            ["libelle"=>"5ieme"],
            ["libelle"=>"4ieme"],
            ["libelle"=>"3ieme"],
            ["libelle"=>"2nd"],
            ["libelle"=>"1ere"],
            ["libelle"=>"Terminale"],
        ]);
    }
}

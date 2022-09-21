<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("classes_")->insert([
            ["libelle"=>"6ime"],
            ["libelle"=>"5ime"],
            ["libelle"=>"4ime"],
            ["libelle"=>"3ime"],
            ["libelle"=>"seconde"],
            ["libelle"=>"1ere"],
            ["libelle"=>"Term"],
        ]);
    }
}

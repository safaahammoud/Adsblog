<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();

        DB::table('categories')->insert([
            'category_name'=> 'Jeep'
        ]);
        DB::table('categories')->insert([
            'category_name'=> 'Truck'
        ]);
        DB::table('categories')->insert([
            'category_name'=> 'Sports'
        ]);
        DB::table('categories')->insert([
            'category_name'=> 'Standard'
        ]);

    }
}


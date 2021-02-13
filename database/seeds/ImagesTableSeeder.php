<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();

        DB::table('images')->insert([
            'post_id'=>1,
            'image' => 'http://localhost:8000/images/img1.jpg'
        ]);
        DB::table('images')->insert([
            'post_id'=>2,
            'image' => 'http://localhost:8000/images/img2.jpg'
        ]);
        DB::table('images')->insert([
            'post_id'=>3,
            'image' => 'http://localhost:8000/images/img3.jpg'
        ]);
        DB::table('images')->insert([
            'post_id'=>4,
            'image' => 'http://localhost:8000/images/img4.jpg'
        ]);
        DB::table('images')->insert([
            'post_id'=>5,
            'image' => 'http://localhost:8000/images/img5.jpg'
        ]);
        DB::table('images')->insert([
            'post_id'=>6,
            'image' => 'http://localhost:8000/images/img6.jpg'
        ]);
        DB::table('images')->insert([
            'post_id'=>7,
            'image' => 'http://localhost:8000/images/img7.jpg'
        ]);
        DB::table('images')->insert([
            'post_id'=>8,
            'image' => 'http://localhost:8000/images/img7.jpg'
        ]);
        DB::table('images')->insert([
            'post_id'=>9,
            'image' => 'http://localhost:8000/images/img4.jpg'
        ]);

    }
}


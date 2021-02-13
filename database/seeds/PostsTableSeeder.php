<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();

        DB::table('posts')->insert([
            'title'=>$faker->text($maxNbChars=50),
            'text'=>$faker->text,
            'price'=>$faker->randomNumber(4),
            'user_id'=>$faker->numberBetween(1,5),
            'category_id'=>3,
            'country_id'=>$faker->numberBetween(1,5)
        ]);
        DB::table('posts')->insert([
            'title'=>$faker->text($maxNbChars=50),
            'text'=>$faker->text,
            'price'=>$faker->randomNumber(4),
            'user_id'=>$faker->numberBetween(1,5),
            'category_id'=>3,
            'country_id'=>$faker->numberBetween(1,5),
        ]);
        DB::table('posts')->insert([
            'title'=>$faker->text($maxNbChars=50),
            'text'=>$faker->text,
            'price'=>$faker->randomNumber(4),
            'user_id'=>$faker->numberBetween(1,5),
            'category_id'=>3,
            'country_id'=>$faker->numberBetween(1,5),
        ]);
        DB::table('posts')->insert([
            'title'=>$faker->text($maxNbChars=50),
            'text'=>$faker->text,
            'price'=>$faker->randomNumber(4),
            'user_id'=>$faker->numberBetween(1,5),
            'category_id'=>4,
            'country_id'=>$faker->numberBetween(1,5),
        ]);
        DB::table('posts')->insert([
            'title'=>$faker->text($maxNbChars=50),
            'text'=>$faker->text,
            'price'=>$faker->randomNumber(4),
            'user_id'=>$faker->numberBetween(1,5),
            'category_id'=>4,
            'country_id'=>$faker->numberBetween(1,5),
        ]);
        DB::table('posts')->insert([
            'title'=>$faker->text($maxNbChars=50),
            'text'=>$faker->text,
            'price'=>$faker->randomNumber(4),
            'user_id'=>$faker->numberBetween(1,5),
            'category_id'=>4,
            'country_id'=>$faker->numberBetween(1,5),
        ]);
        DB::table('posts')->insert([
            'title'=>$faker->text($maxNbChars=50),
            'text'=>$faker->text,
            'price'=>$faker->randomNumber(4),
            'user_id'=>$faker->numberBetween(1,5),
            'category_id'=>$faker->numberBetween(1,5),
            'country_id'=>$faker->numberBetween(1,5),
        ]);
        DB::table('posts')->insert([
            'title'=>$faker->text($maxNbChars=50),
            'text'=>$faker->text,
            'price'=>$faker->randomNumber(4),
            'user_id'=>$faker->numberBetween(1,5),
            'category_id'=>$faker->numberBetween(1,5),
            'country_id'=>$faker->numberBetween(1,5),
        ]);
        DB::table('posts')->insert([
            'title'=>$faker->text($maxNbChars=50),
            'text'=>$faker->text,
            'price'=>$faker->randomNumber(4),
            'user_id'=>$faker->numberBetween(1,5),
            'category_id'=>$faker->numberBetween(1,5),
            'country_id'=>$faker->numberBetween(1,5),
        ]);

    }
}


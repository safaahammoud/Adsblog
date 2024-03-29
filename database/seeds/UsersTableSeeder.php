<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();
        for($i=0;$i<20;$i++){
	        DB::table('users')->insert([
		        'name'=>$faker->unique()->userName,
		        'email'=>$faker->unique()->email,
		       'password' => bcrypt($faker->word),
		        'role_id'=>$faker->numberBetween(1,2),
		        ]);
	    }
    }
}

<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {	

    	$faker = Faker::create();
        // $this->call(UsersTableSeeder::class);

        $users_array = array(
            array(
                "name"=>"superman",
                "email"=>"admin@gmail.com",
                "password"=>bcrypt(123456),
            )
        );


        foreach ($users_array as $key => $value) {
            User::firstOrCreate($value);       
        }


    	 $sql = file_get_contents(database_path() . '/seeds/data.sql');
    
         DB::statement($sql);
        // $this->call(UsersTableSeeder::class);
    }
}

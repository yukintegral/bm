<?php
use Illuminate\Database\Seeder;

    class UsersTableSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            //Cmd: php artisan db:seed --class="UsersTableSeeder"
            
            $faker = Faker\Factory::create("ja_JP");
            
            for( $i=0; $i<10; $i++ ){

                App\User::create([
					"user_name" => $faker->name(),
					"lid" => $faker->word(),
					"lpw" => $faker->word(),
					"email" => $faker->safeEmail(),
					"class" => $faker->word(),
					"avatar" => $faker->word(),
					"self_introducion" => $faker->word(),
					"sns1" => $faker->word(),
					"sns2" => $faker->word(),
					"sns3" => $faker->word(),
					"kanri_flg" => $faker->randomDigit(),
					"created_at" => $faker->dateTime("now"),
					"updated_at" => $faker->dateTime("now")
                ]);
            }
        }
    }
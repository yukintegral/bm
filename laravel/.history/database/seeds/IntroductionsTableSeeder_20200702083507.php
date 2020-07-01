<?php
use Illuminate\Database\Seeder;

    class IntroductionsTableSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            //Cmd: php artisan db:seed --class="IntroductionsTableSeeder"
            DB::statement('SET FOREIGN_KEY_CHECKS=0;');
            
            $faker = Faker\Factory::create("ja_JP");
            
            for( $i=0; $i<10; $i++ ){

                App\Introduction::create([
					"user_id" => $faker->randomDigit(),
					"content" => $faker->word(),
					"created_at" => $faker->dateTime("now"),
					"updated_at" => $faker->dateTime("now")
                ]);
            }

            DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        }
    }
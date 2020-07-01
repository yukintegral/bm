<?php
use Illuminate\Database\Seeder;

    class PostMessagesTableSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            //Cmd: php artisan db:seed --class="PostMessagesTableSeeder"
            
            $faker = Faker\Factory::create("ja_JP");
            
            for( $i=0; $i<10; $i++ ){

                App\PostMessage::create([
					"post_message" => $faker->word(),
					"post_id" => $faker->randomDigit(),
					"user_id" => $faker->randomDigit(),
					"file" => $faker->word(),
					"created_at" => $faker->dateTime("now"),
					"updated_at" => $faker->dateTime("now")
                ]);
            }
        }
    }
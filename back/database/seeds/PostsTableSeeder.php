<?php
use Illuminate\Database\Seeder;

    class PostsTableSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            //Cmd: php artisan db:seed --class="PostsTableSeeder"
            
            $faker = Faker\Factory::create("ja_JP");
            
            for( $i=0; $i<10; $i++ ){

                App\Post::create([
					"user_id" => $faker->randomDigit(),
					"content" => $faker->word(),
					"category_id" => $faker->randomDigit(),
					"post_name" => $faker->name(),
					"price" => $faker->randomDigit(),
					"post_status_id" => $faker->randomDigit(),
					"created_at" => $faker->dateTime("now"),
					"updated_at" => $faker->dateTime("now")
                ]);
            }
        }
    }
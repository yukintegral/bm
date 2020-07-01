<?php
use Illuminate\Database\Seeder;

    class PostFilesTableSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            //Cmd: php artisan db:seed --class="PostFilesTableSeeder"
            
            $faker = Faker\Factory::create("ja_JP");
            
            for( $i=0; $i<10; $i++ ){

                App\Post_file::create([
					"post_id" => $faker->randomDigit(),
					"file" => $faker->randomDigit(),
					"update_at" => $faker->date()." ".$faker->time(),
					"created_at" => $faker->dateTime("now"),
					"updated_at" => $faker->dateTime("now")
                ]);
            }
        }
    }
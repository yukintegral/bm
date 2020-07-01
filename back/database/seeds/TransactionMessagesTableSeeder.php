<?php
use Illuminate\Database\Seeder;

    class TransactionMessagesTableSeeder extends Seeder
    {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
            //Cmd: php artisan db:seed --class="TransactionMessagesTableSeeder"
            
            $faker = Faker\Factory::create("ja_JP");
            
            for( $i=0; $i<10; $i++ ){

                App\Transaction_message::create([
					"transaction_message" => $faker->word(),
					"transaction_id" => $faker->randomDigit(),
					"sender_id" => $faker->randomDigit(),
					"receiver_id" => $faker->randomDigit(),
					"created_at" => $faker->dateTime("now"),
					"updated_at" => $faker->dateTime("now")
                ]);
            }
        }
    }
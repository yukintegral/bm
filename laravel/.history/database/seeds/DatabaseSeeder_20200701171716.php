<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //********************************************
        // Cmd:[ php artisan db:seed ]
        //********************************************
        // $this->call(UsersTableSeeder::class);
		$this->call(UsersTableSeeder::class);
		$this->call(IntroductionsTableSeeder::class);
		$this->call(PlantRedTableSeeder::class);
		$this->call(PlantBlueTableSeeder::class);
		$this->call(PlantYellowTableSeeder::class);
		$this->call(PlantWhiteTableSeeder::class);
		$this->call(PlantPinkTableSeeder::class);
		$this->call(UserLikesTableSeeder::class);
		$this->call(PostsTableSeeder::class);
		$this->call(PostMessagesTableSeeder::class);
		$this->call(PostFilesTableSeeder::class);
		$this->call(CategoriesTableSeeder::class);
		$this->call(PostLikesTableSeeder::class);
		$this->call(PostStatusesTableSeeder::class);
		$this->call(TransactionsTableSeeder::class);
		$this->call(TransactionMessagesTableSeeder::class);
		$this->call(InformationsTableSeeder::class);
   }
}
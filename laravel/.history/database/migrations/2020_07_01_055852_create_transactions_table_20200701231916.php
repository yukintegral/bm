<?php
            use Illuminate\Support\Facades\Schema;
            use Illuminate\Database\Schema\Blueprint;
            use Illuminate\Database\Migrations\Migration;
            
            class CreateTransactionsTable extends Migration
            {
                /**
                 * Run the migrations.
                 *
                 * @return void
                 */
                public function up()
                {
                    Schema::create("transactions", function (Blueprint $table) {
						$table->increments('id');
                        $table->integer('post_id')->unsigned(); 
                        $table->foreign('post_id')->references('id')->on('users')->onDelete('cascade'); 
						$table->integer('user_id');
						$table->timestamps();
						$table->softDeletes();

                    });
                }
    
                /**
                 * Reverse the migrations.
                 *
                 * @return void
                 */
                public function down()
                {
                    Schema::dropIfExists("transactions");
                }
            }
        
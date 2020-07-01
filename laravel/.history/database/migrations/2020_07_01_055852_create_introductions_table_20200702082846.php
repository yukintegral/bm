<?php
            use Illuminate\Support\Facades\Schema;
            use Illuminate\Database\Schema\Blueprint;
            use Illuminate\Database\Migrations\Migration; 
            use Illuminate\Fa
            
            class CreateIntroductionsTable extends Migration
            {
                /**
                 * Run the migrations.
                 *
                 * @return void
                 */
                public function up()
                {
                    DB::statement('SET FOREIGN_KEY_CHECKS=0;');

                    Schema::create("introductions", function (Blueprint $table) {
						$table->increments('id');
                        $table->integer('user_id')->unsigned();
                        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); 
						$table->text('content');
						$table->timestamps();
						$table->softDeletes();

                    });

                    DB::statement('SET FOREIGN_KEY_CHECKS=0;');
                }
    
                /**
                 * Reverse the migrations.
                 *
                 * @return void
                 */
                public function down()
                {
                    Schema::dropIfExists("introductions"); 
                    
                }
            }
        
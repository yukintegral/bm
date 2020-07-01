<?php
            use Illuminate\Support\Facades\Schema;
            use Illuminate\Database\Schema\Blueprint;
            use Illuminate\Database\Migrations\Migration;
            
            class CreateUserLikesTable extends Migration
            {
                /**
                 * Run the migrations.
                 *
                 * @return void
                 */
                public function up()
                {
                    Schema::create("user_likes", function (Blueprint $table) {
						$table->increments('id');
						$table->integer('liking_user_id')->unsigned();
						$table->integer('liked_user_id')->unsigned();
						$table->timestamps();
                        $table->softDeletes(); 

                        //seederでトラブルが発生するため、動作確認段階ではユニークせっていは
                        // $table->unique(['liking_user_id', 'liked_user_id']); 

                    });
                }
    
                /**
                 * Reverse the migrations.
                 *
                 * @return void
                 */
                public function down()
                {
                    Schema::dropIfExists("user_likes");
                }
            }
        
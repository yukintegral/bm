<?php
            use Illuminate\Support\Facades\Schema;
            use Illuminate\Database\Schema\Blueprint;
            use Illuminate\Database\Migrations\Migration;
            
            class CreatePostsTable extends Migration
            {
                /**
                 * Run the migrations.
                 *
                 * @return void
                 */
                public function up()
                {
                    Schema::create("posts", function (Blueprint $table) {
						$table->increments('id');
                        $table->integer('user_id')->unsigned(); 
                        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); 
						$table->text('content');
                        $table->integer('category_id')->unsigned(); 
                        $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade'); 
						$table->string('post_name');
						$table->integer('price')->nullable();
                        $table->integer('post_status_id')->unsigned(); 
                        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); 
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
                    Schema::dropIfExists("posts");
                }
            }
        
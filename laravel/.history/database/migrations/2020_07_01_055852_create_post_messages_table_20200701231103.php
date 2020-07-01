<?php
            use Illuminate\Support\Facades\Schema;
            use Illuminate\Database\Schema\Blueprint;
            use Illuminate\Database\Migrations\Migration;
            
            class CreatePostMessagesTable extends Migration
            {
                /**
                 * Run the migrations.
                 *
                 * @return void
                 */
                public function up()
                {
                    Schema::create("post_messages", function (Blueprint $table) {
						$table->increments('id');
						$table->text('post_message');
                        $table->integer('post_id')->unsigned(); 
                        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); 
						$table->integer('user_id');
						$table->text('file');
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
                    Schema::dropIfExists("post_messages");
                }
            }
        
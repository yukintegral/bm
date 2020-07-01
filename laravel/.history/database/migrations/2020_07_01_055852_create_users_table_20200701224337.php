<?php
            use Illuminate\Support\Facades\Schema;
            use Illuminate\Database\Schema\Blueprint;
            use Illuminate\Database\Migrations\Migration;
            
            class CreateUsersTable extends Migration
            {
                /**
                 * Run the migrations.
                 *
                 * @return void
                 */
                public function up()
                {
                    Schema::create("users", function (Blueprint $table) {
						$table->increments('id')-a;
						$table->string('user_name');
						$table->string('lid');
						$table->string('lpw');
						$table->string('email');
						$table->string('class')->nullable();
						$table->text('avatar')->nullable();
						$table->text('self_introducion')->nullable();
						$table->text('sns1')->nullable();
						$table->text('sns2')->nullable();
						$table->text('sns3')->nullable();
						$table->integer('kanri_flg');
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
                    Schema::dropIfExists("users");
                }
            }
        
<?php
            use Illuminate\Support\Facades\Schema;
            use Illuminate\Database\Schema\Blueprint;
            use Illuminate\Database\Migrations\Migration;
            
            class CreatePlantYellowTable extends Migration
            {
                /**
                 * Run the migrations.
                 *
                 * @return void
                 */
                public function up()
                {
                    Schema::create("plant_yellow", function (Blueprint $table) {
                        $table->integer('user_id')->unsigned(); 
                        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade'); 
						$table->integer('plant_yellow');
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
                    Schema::dropIfExists("plant_yellow");
                }
            }
        
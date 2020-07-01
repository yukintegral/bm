<?php
            use Illuminate\Support\Facades\Schema;
            use Illuminate\Database\Schema\Blueprint;
            use Illuminate\Database\Migrations\Migration;
            
            class CreateTransactionMessagesTable extends Migration
            {
                /**
                 * Run the migrations.
                 *
                 * @return void
                 */
                public function up()
                {
                    Schema::create("transaction_messages", function (Blueprint $table) {
						$table->increments('id');
						$table->string('transaction_message');
						$table->integer('transaction_id');
						$table->integer('sender_id');
						$table->integer('receiver_id');
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
                    Schema::dropIfExists("transaction_messages");
                }
            }
        
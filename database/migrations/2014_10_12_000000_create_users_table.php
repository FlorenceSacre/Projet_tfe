<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id')->unique(); //primary key
            $table->string('username');
            $table->string('lastname');
            $table->string('firstname');
            $table->string('gender');
            $table->date('birthday');
            $table->string('postal_code');
            $table->string('city');
            $table->string('country');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password',60);
            $table->enum('role',['customer', 'provider', 'customer and provider']);
            $table->boolean('admin')->default(false);
            $table->rememberToken();
            $table->timestamps(); //create_at et update_at
            // $table->bigInteger('id_subscription')->unsigned();

            $table->bigInteger('subscription_id')
                  ->unsigned()
                  ->index();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}

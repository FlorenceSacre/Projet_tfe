<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->bigIncrements('id')->unique(); //primary key
            $table->string('stripe_id');
            $table->string('email');
            $table->string('name');
            $table->unsignedInteger('amount');
            $table->string('street');
            $table->string('postcode');
            $table->string('city');
            $table->string('country');
            $table->string('unsubscription_token')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subscriptions');
    }
}

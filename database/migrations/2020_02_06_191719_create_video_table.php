<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('video', function (Blueprint $table) {
            $table->bigIncrements('id'); //primary key
            $table->string('titre');
            $table->text('description');
            $table->string('resolution');
            $table->string('format_video');
            $table->string('frame_rate');
            $table->string('taille');
            $table->string('ratio_video');
            $table->string('time')->nullable();

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
        Schema::dropIfExists('video');
    }
}

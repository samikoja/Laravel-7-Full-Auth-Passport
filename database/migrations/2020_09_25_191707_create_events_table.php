<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->date('start_date');
            $table->date('end_date');
            $table->string('discription');
            $table->string('image');
            $table->string('title');
            $table->boolean('is_avaliable');
            $table->boolean('is_freez');
            $table->string('seat');
            $table->string('cost');
            $table->string('discount')->nullable();
            $table->date('start_date_postpone')->nullable();
            $table->date('end_date_postpone')->nullable();
            // $table->timestamps('updated_at');
            $table->boolean('is_deleted');
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
        Schema::dropIfExists('events');
    }
}

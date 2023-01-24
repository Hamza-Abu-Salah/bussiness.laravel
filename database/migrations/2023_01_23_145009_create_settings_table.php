<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('logo_header');
            $table->string('logo_footer');
            $table->string('btn_Services');
            $table->string('btn_blogs');
            $table->string('title_service');
            $table->string('text_service');
            $table->string('title_blogs');
            $table->string('text_blogs');
            $table->string('phones');
            $table->string('email');
            $table->date('date');
            $table->integer('hour');
            $table->integer('from_the_hour');
            $table->integer('to_the_hour');
            $table->string('address');
            $table->integer('added_by');
            $table->tinyInteger('active');
            $table->integer('updated_by')->nullable();
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
        Schema::dropIfExists('settings');
    }
};

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSlidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sliders', function (Blueprint $table) {
            $table->increments('id');
            $table->text('thumbnail_wide')->nullable(true);
            $table->string('thumbnail_wide_title')->nullable(true);
            $table->text('thumbnail_square')->nullable(true);
            $table->string('thumbnail_square_title')->nullable(true);
            $table->string('background_color')->nullable(true);
            $table->text('background_text')->nullable(true);
            $table->text('background_thumbnail')->nullable(true);
            $table->tinyInteger('status');
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
        Schema::dropIfExists('sliders');
    }
}

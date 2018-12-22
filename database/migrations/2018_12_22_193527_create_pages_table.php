<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('submenu_id');
            $table->string('name');
            $table->string('slug')->index();
            $table->text('before_thumbnail')->nullable(true);
            $table->text('after_thumbnail')->nullable(true);
            $table->string('title');
            $table->text('description');
            $table->timestamps();

            $table->foreign('submenu_id')->references('id')->on('submenus')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pages');
    }
}

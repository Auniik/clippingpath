<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactConfigsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contact_configs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('location_one');
            $table->text('address_one');
            $table->string('location_two');
            $table->text('address_two');
            $table->string('location_one');
            $table->text('address_three');
            $table->string('google_maps');
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
        Schema::dropIfExists('contact_configs');
    }
}

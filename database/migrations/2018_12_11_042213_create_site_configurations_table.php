<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiteConfigurationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('site_configurations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('website_name',255);
            $table->string('website_email',255);
            $table->string('website_phone',255);
            $table->text('message');
            $table->string('company_name', 255);
            $table->string('licence_number', 255);
            $table->text('address');
            $table->string('owner_name',255);
            $table->string('owner_phone',255);
            $table->string('owner_email',255);
            $table->text('logo');
            $table->text('favicon');
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
        Schema::dropIfExists('site_configurations');
    }
}

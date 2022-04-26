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
        Schema::create('footer_banners', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('caption');
            $table->string('subtitle');
            $table->string('short');
            $table->text('image')->default(null);
            $table->text('link');
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
        Schema::dropIfExists('footer_banners');
    }
};

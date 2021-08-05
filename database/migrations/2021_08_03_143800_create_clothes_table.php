<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClothesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clothes', function (Blueprint $table) {
            $table->id();
            $table->string('category');
            $table->string('name');
            $table->double('price', 10, 2);
            $table->double('old_price', 10, 2)->nullable()->default(null);
            $table->integer('status')->default(0)->nullable();
            $table->string('img_path');
            $table->integer('reviews')->default(0);
            $table->text('description')->default(null);
            $table->string('tags')->default(null);
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
        Schema::dropIfExists('clothes');
    }
}

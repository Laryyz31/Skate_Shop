<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkatesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('skates', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',75)->unique();
            $table->text('description')->nullable();
            $table->integer('brand_id');
            $table->integer('category_id');
            $table->date('model_manufacture_date');
            $table->timestamps();        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('skates');
    }
}

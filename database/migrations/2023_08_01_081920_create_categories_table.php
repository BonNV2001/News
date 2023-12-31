<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->integer('parent_id')->nullable();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('image_url');
            $table->integer('sort_order')->nullable();
            $table->tinyInteger('status')->unsigned()->default(1)->comment('0: inactive, 1: active');
            $table->timestamps();

            $table->foreign('parent_id')->references('id')->on('categories')
                  ->onDelete('set null');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}

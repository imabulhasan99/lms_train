<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('short_desc')->nullable();
            $table->text('overview')->nullable();
            $table->string('lession');
            $table->string('duration');
            $table->bigInteger('enrolled')->nullable();
            $table->float('price')->nullable();
            $table->string('level');
            $table->foreignId('instrctor_id')->constrained('users');
            $table->foreignId('reviews_id')->constrained('reviews');
            $table->string('category');
            $table->timestamps();
            $table->softDeletes();
           
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}

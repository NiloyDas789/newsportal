<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('top')->nullable();
            $table->string('bottom')->nullable();
            $table->string('slug');
            $table->string('image');
            $table->integer('reporter')->unsigned();
            $table->longtext('description');
            $table->integer('user_id')->unsigned();
            $table->date('date');
            $table->string('view_count')->nullable();
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
        Schema::dropIfExists('posts');
    }
}

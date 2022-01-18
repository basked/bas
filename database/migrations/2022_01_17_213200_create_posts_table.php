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
            $table->foreignId('user_id')->index('post_user_idx')->constrained('users')->onDelete('cascade');
            $table->foreignId('category_id')->index('post_category_idx')->constrained('categories')->onDelete('cascade');
            $table->string('title');
            $table->string('slug');
            $table->string('excerpt', 500)->nullable();
            $table->text('content')->nullable();
            $table->integer('status')->default(1);
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

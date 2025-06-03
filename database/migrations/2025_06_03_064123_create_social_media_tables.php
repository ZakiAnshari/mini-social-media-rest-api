<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //Membuat tabel Post
        Schema::create('post', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->text('content');
            $table->string('image_url')->nullable();
            $table->timestamps(0);
            $table->softDeletes();
        });
        //Membuat tabel Comments
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('post_id');
            $table->text('content');
            $table->timestamps(0);
            $table->softDeletes();
        });
        //Membuat tabel Likes
        Schema::create('likes', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('post_id');
            $table->timestamps(0);
            $table->softDeletes();
        });
        //Membuat tabel Messages
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->integer('sender_id');
            $table->integer('receiver_id');
            $table->text('message_content');
            $table->timestamps(0);
            $table->softDeletes();
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post');
        Schema::dropIfExists('comments');
        Schema::dropIfExists('likes');
        Schema::dropIfExists('messages');
    }
};

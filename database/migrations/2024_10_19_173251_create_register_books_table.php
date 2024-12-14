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
        Schema::create('register_books', function (Blueprint $table) {
            $table->id();
            $table->string('title')->comment('本のタイトル')->nullable();
            $table->foreignId('category_id')->comment('カテゴリID')->constrained('categories')->nullable();
            $table->string('author')->comment('作者')->nullable();
            $table->text('summary')->comment('概要')->nullable();
            $table->text('recommend_point')->comment('おすすめポイント')->nullable();
            $table->integer('recommend_level')->comment('レコメンド')->nullable();
            $table->string('image_cover')->comment('ファイルパス_1')->nullable();
            $table->string('image_2')->comment('ファイルパス_2')->nullable();
            $table->string('image_3')->comment('ファイルパス_3')->nullable();
            $table->integer('publish_year')->comment('発行年')->nullable();
            $table->boolean('is_draft')->comment('下書フラグ');
            $table->foreignId('user_id')->comment('ユーザID')->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('register_books');
    }
};

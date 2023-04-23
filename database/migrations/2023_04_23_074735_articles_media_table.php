<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('articles_media', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('article_id')->unsigned()->index();
            $table->string('name');
            $table->string('path');
            $table->integer('size')->nullable();
            $table->enum('type', ['IMAGE', 'VIDEO', 'AUDIO'])->default('IMAGE');
            $table->timestamps();

            $table->foreign('article_id')->references('id')->on('articles')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('articles_media');
    }
};

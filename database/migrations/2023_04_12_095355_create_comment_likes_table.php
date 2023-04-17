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
        Schema::create('comment_likes', function (Blueprint $table) {
            $table->bigInteger('user_id')->unsigned()->index();
            $table->bigInteger('comment_id')->unsigned()->index();
            $table->integer('like_type_id')->unsigned()->index();

            $table->primary(['user_id', 'comment_id', 'like_type_id']);
            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('cascade');
            $table->foreign('comment_id')->references('id')->on('comments')
                ->onDelete('cascade');
            $table->foreign('like_type_id')->references('id')->on('like_types')
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
        Schema::dropIfExists('comment_likes');
    }
};

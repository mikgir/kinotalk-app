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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('parent_id')->unsigned()->nullable()->default(null);
            $table->foreign('parent_id')->references('id')->on('comments')
                ->onUpdate('cascade')->onDelete('set null');
            $table->bigInteger('user_id')->unsigned()->index();
            $table->bigInteger('article_id')->unsigned()->index();
            $table->text('body');
            $table->enum('status', ['PUBLISHED', 'DRAFT', 'PENDING'])->default('DRAFT');
            $table->boolean('featured')->default(0);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('cascade');
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
        Schema::dropIfExists('comments');
    }
};
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(UsersTableSeeder::class);
        $this->call(LikeTypesTableSeeder::class);
        $this->call(TagsTableSeeder::class);
        $this->call(NewsCategoriesTableSeeder::class);
        $this->call(ArticlesTableSeeder::class);
        $this->call(CommentsTableSeeder::class);
        $this->call(ArticleTagsTableSeeder::class);
        $this->call(ArticleLikesTableSeeder::class);
        $this->call(CommentLikesTableSeeder::class);
    }
}

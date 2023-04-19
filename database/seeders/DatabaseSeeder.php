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
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            PermissionsSeeder::class,
            UsersTableSeeder::class,
            LikeTypesTableSeeder::class,
            TagsTableSeeder::class,
            NewsCategoriesTableSeeder::class,
            ArticlesTableSeeder::class,
            CommentsTableSeeder::class,
            ArticleLikesTableSeeder::class,
            CommentLikesTableSeeder::class,
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        Artisan::call('love:reaction-type-add --default');
        $this->call([
            PermissionsSeeder::class,
            UsersTableSeeder::class,
            TagsTableSeeder::class,
            NewsCategoriesTableSeeder::class,
            ArticlesTableSeeder::class,
            CommentsTableSeeder::class,
            ArticleLikesTableSeeder::class,
            CommentLikesTableSeeder::class,
            ProfileTableSeeder::class,
            ArticlesMediaTableSeeder::class,
        ]);
    }
}

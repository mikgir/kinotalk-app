<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\ArticlesMedia;
use Faker\Factory;
use Illuminate\Database\Seeder;

class ArticlesMediaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $faker = Factory::create();
        $articles = Article::all();

        foreach ($articles as $article) {
            $mediaInArticle = rand(1, 3);

            for ($i = 1; $i <= $mediaInArticle; $i++) {
                ArticlesMedia::create([
                    'article_id' => $article['id'],
                    'name' => $faker->sentence(rand(1, 5)),
                    'path' => 'articles/' . ($article['id']) . '-' . $i . '.png',
                    'type' => 'IMAGE',
                ]);
            }
        }
    }
}

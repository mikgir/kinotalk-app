<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleTagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('article_tags')->insert($this->getData());
    }

    private function getData(): array
    {
        $data = [];

        for ($i = 0; $i < 20; $i++) {
            for ($j = 0; $j < 10; $j++) {
                $hasTagProbability = rand(1, 10);

                if ($hasTagProbability > 5) {
                    $data[] = [
                        'article_id' => $i + 1,
                        'tag_id' => $j + 1,
                    ];
                }
            }
        }

        return $data;
    }
}

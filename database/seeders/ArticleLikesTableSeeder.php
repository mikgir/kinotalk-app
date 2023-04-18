<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleLikesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('article_likes')->insert($this->getData());
    }

    private function getData(): array
    {
        $data = [];

        for ($i = 0; $i < 20; $i++) {
            for ($j = 1; $j < 5; $j++) {
                for ($k = 0; $k < 4; $k++) {
                    $willGetLikeProbability = rand(1, 10);

                    if ($willGetLikeProbability > 5) {
                        $data[] = [
                            'article_id' => $i + 1,
                            'user_id' => $j + 1,
                            'like_type_id' => $k + 1,
                        ];
                    }
                }
            }
        }

        return $data;
    }
}

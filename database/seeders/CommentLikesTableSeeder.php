<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentLikesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('comment_likes')->insert($this->getData());
    }

    private function getData(): array
    {
        $data = [];

        for ($i = 0; $i < 50; $i++) {
            for ($j = 1; $j < 5; $j++) {
                $hasNoLike = true;

                for ($k = 0; $k < 2; $k++) {
                    $willGetLikeProbability = rand(1, 10);

                    if ($hasNoLike && $willGetLikeProbability > 5) {
                        $data[] = [
                            'comment_id' => $i + 1,
                            'user_id' => $j + 1,
                            'like_type_id' => $k + 1,
                        ];
                        $hasNoLike = false;
                    }
                }
            }
        }

        return $data;
    }
}

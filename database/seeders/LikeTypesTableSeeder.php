<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LikeTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('like_types')->insert($this->getData());
    }

    private function getData(): array
    {
        $data = [];
        $arr = ['like', 'dislike', 'love', 'hate'];

        foreach ($arr as $value) {
            $data[] = [
                'name' => $value,
                'created_at' => now(),
            ];
        }

        return $data;
    }
}

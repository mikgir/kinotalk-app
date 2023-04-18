<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('tags')->insert($this->getData());
    }

    private function getData(): array
    {
        $data = [];
        $arr = ['Сериал', 'Оскар', 'Фильм', 'Знаменитости', 'Автор',
            'Книга', 'Режиссёр', 'Культура', 'Голливуд', 'Искусство'];

        foreach ($arr as $value) {
            $data[] = [
                'name' => $value,
                'slug' => Str::slug($value),
                'created_at' => now(),
            ];
        }

        return $data;
    }
}

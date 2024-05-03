<?php

namespace Database\Seeders;

use App\Models\NewsItem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        NewsItem::factory(50)->create();
    }
}

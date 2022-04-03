<?php

namespace Joy\VoyagerBreadArticleCategory\Database\Seeders;

use Joy\VoyagerBreadArticleCategory\Models\ArticleCategory;
use Illuminate\Database\Seeder;

class DummyArticleCategoriesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 100;
        ArticleCategory::factory()
            ->count($count)
            ->state(function (array $attributes) use ($count) {
                return [
                    'name' => 'ArticleCategory ' . time()
                        . ' ' . rand(1, $count)
                        . ' ' . rand(1, $count)
                        . ' ' . rand(1, $count),
                    'description' => 'ArticleCategory Description ' . time()
                        . ' ' . rand(1, $count)
                        . ' ' . rand(1, $count)
                        . ' ' . rand(1, $count)
                ];
            })
            ->create();
    }
}

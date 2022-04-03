<?php

namespace Joy\VoyagerBreadArticleCategory\Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\DataType;

class DataTypesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $dataType = $this->dataType('slug', 'article-categories');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'article_categories',
                'display_name_singular' => __('joy-voyager-bread-article-category::seeders.data_types.article_category.singular'),
                'display_name_plural'   => __('joy-voyager-bread-article-category::seeders.data_types.article_category.plural'),
                'icon'                  => 'voyager-bread',
                'model_name'            => 'Joy\\VoyagerBreadArticleCategory\\Models\\ArticleCategory',
                // 'policy_name'           => 'Joy\\VoyagerBreadArticleCategory\\Policies\\ArticleCategoryPolicy',
                // 'controller'            => 'Joy\\VoyagerBreadArticleCategory\\Http\\Controllers\\VoyagerBreadArticleCategoryController',
                'generate_permissions'  => 1,
                'description'           => '',
            ])->save();
        }
    }

    /**
     * [dataType description].
     *
     * @param [type] $field [description]
     * @param [type] $for   [description]
     *
     * @return [type] [description]
     */
    protected function dataType($field, $for)
    {
        return DataType::firstOrNew([$field => $for]);
    }
}

<?php

namespace Joy\VoyagerBreadArticleCategory\Database\Seeders;

use Illuminate\Database\Seeder;
use Joy\VoyagerBreadArticleCategory\Models\ArticleCategory;
use TCG\Voyager\Models\DataType;
use TCG\Voyager\Models\MenuItem;
use TCG\Voyager\Models\Translation;

class TranslationsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $this->dataTypesTranslations();
        $this->articleCategoriesTranslations();
        $this->menusTranslations();
    }

    /**
     * Auto generate Categories Translations.
     *
     * @return void
     */
    private function articleCategoriesTranslations()
    {
        // Adding translations for 'article_categories'
        //
        $cat = ArticleCategory::where('name', 'article-category-1')->first();
        if ($cat->exists) {
            $this->trans('pt', $this->arr(['article_categories', 'name'], $cat->id), 'article-category-1');
            $this->trans('pt', $this->arr(['article_categories', 'description'], $cat->id), 'ArticleCategory 1');
        }
        $cat = ArticleCategory::where('name', 'article-category-2')->first();
        if ($cat->exists) {
            $this->trans('pt', $this->arr(['article_categories', 'name'], $cat->id), 'article-category-2');
            $this->trans('pt', $this->arr(['article_categories', 'description'], $cat->id), 'ArticleCategory 2');
        }
    }

    /**
     * Auto generate DataTypes Translations.
     *
     * @return void
     */
    private function dataTypesTranslations()
    {
        // Adding translations for 'display_name_singular'
        //
        $_fld = 'display_name_singular';
        $_tpl = ['data_types', $_fld];
        
        $dtp = DataType::where($_fld, __('joy-voyager-bread-article-category::seeders.data_types.category.singular'))->firstOrFail();
        if ($dtp->exists) {
            $this->trans('pt', $this->arr($_tpl, $dtp->id), 'ArticleCategory');
        }

        // Adding translations for 'display_name_plural'
        //
        $_fld = 'display_name_plural';
        $_tpl = ['data_types', $_fld];
        $dtp = DataType::where($_fld, __('joy-voyager-bread-article-category::seeders.data_types.category.plural'))->firstOrFail();
        if ($dtp->exists) {
            $this->trans('pt', $this->arr($_tpl, $dtp->id), 'ArticleCategories');
        }
    }

    /**
     * Auto generate Menus Translations.
     *
     * @return void
     */
    private function menusTranslations()
    {
        $_tpl = ['menu_items', 'title'];
        $_item = $this->findMenuItem(__('joy-voyager-bread-article-category::seeders.menu_items.article_categories'));
        if ($_item->exists) {
            $this->trans('pt', $this->arr($_tpl, $_item->id), 'ArticleCategories');
        }
    }

    private function findMenuItem($title)
    {
        return MenuItem::where('title', $title)->firstOrFail();
    }

    private function arr($par, $id)
    {
        return [
            'table_name'  => $par[0],
            'column_name' => $par[1],
            'foreign_key' => $id,
        ];
    }

    private function trans($lang, $keys, $value)
    {
        $_t = Translation::firstOrNew(array_merge($keys, [
            'locale' => $lang,
        ]));

        if (!$_t->exists) {
            $_t->fill(array_merge(
                $keys,
                ['value' => $value]
            ))->save();
        }
    }
}

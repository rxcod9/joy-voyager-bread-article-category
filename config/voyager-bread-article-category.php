<?php

return [

    /*
     * If enabled for voyager-bread-article-category package.
     */
    'enabled' => env('VOYAGER_BREAD_ARTICLE_CATEGORY_ENABLED', true),

    /*
     * The config_key for voyager-bread-article-category package.
     */
    'config_key' => env('VOYAGER_BREAD_ARTICLE_CATEGORY_CONFIG_KEY', 'joy-voyager-bread-article-category'),

    /*
     * The route_prefix for voyager-bread-article-category package.
     */
    'route_prefix' => env('VOYAGER_BREAD_ARTICLE_CATEGORY_ROUTE_PREFIX', 'joy-voyager-bread-article-category'),

    /*
    |--------------------------------------------------------------------------
    | Controllers config
    |--------------------------------------------------------------------------
    |
    | Here you can specify voyager controller settings
    |
    */

    'controllers' => [
        'namespace' => 'Joy\\VoyagerBreadArticleCategory\\Http\\Controllers',
    ],
];

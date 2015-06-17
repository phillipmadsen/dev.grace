<?php namespace Grace\Providers;

use View;
use Illuminate\Support\ServiceProvider;

class ComposerServiceProvider extends ServiceProvider {

    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function boot()
    {
        // Frontend
        View::composer('frontend.layout.menu', 'Grace\Composers\MenuComposer');
        View::composer('frontend.layout.layout', 'Grace\Composers\SettingComposer');
        View::composer('frontend.layout.footer', 'Grace\Composers\ArticleComposer');
        View::composer('frontend.news.sidebar', 'Grace\Composers\NewsComposer');

        // Backend
        View::composer('backend/layout/layout', 'Grace\Composers\Admin\MenuComposer');
    }

    /**
     * Register
     *
     * @return void
     */
    public function register()
    {

    }

}
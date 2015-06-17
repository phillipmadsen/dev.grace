<?php namespace Grace\Providers;

use Illuminate\Support\ServiceProvider;

use Grace\Models\Article;
use Grace\Models\Category;
use Grace\Models\Page;
use Grace\Models\Faq;
use Grace\Models\News;
Use Grace\Models\PhotoGallery;
use Grace\Models\Project;
use Grace\Models\Tag;
use Grace\Models\Video;
use Grace\Models\Menu;
use Grace\Models\Slider;
use Grace\Models\Setting;

use Grace\Repositories\Article\ArticleRepository;
use Grace\Repositories\Article\CacheDecorator as ArticleCacheDecorator;

use Grace\Repositories\Category\CategoryRepository;
use Grace\Repositories\Category\CacheDecorator as CategoryCacheDecorator;

use Grace\Repositories\Page\PageRepository;
use Grace\Repositories\Page\CacheDecorator as PageCacheDecorator;

use Grace\Repositories\Faq\FaqRepository;
use Grace\Repositories\Faq\CacheDecorator as FaqCacheDecorator;

use Grace\Repositories\News\NewsRepository;
use Grace\Repositories\News\CacheDecorator as NewsCacheDecorator;

use Grace\Repositories\PhotoGallery\PhotoGalleryRepository;
use Grace\Repositories\PhotoGallery\CacheDecorator as PhotoGalleryCacheDecorator;

use Grace\Repositories\Project\ProjectRepository;
use Grace\Repositories\Project\CacheDecorator as ProjectCacheDecorator;

use Grace\Repositories\Tag\TagRepository;
use Grace\Repositories\Tag\CacheDecorator as TagCacheDecorator;

use Grace\Repositories\Video\VideoRepository;
use Grace\Repositories\Video\CacheDecorator as VideoCacheDecorator;

use Grace\Repositories\Menu\MenuRepository;
use Grace\Repositories\Menu\CacheDecorator as MenuCacheDecorator;

use Grace\Repositories\Slider\SliderRepository;
use Grace\Repositories\Slider\CacheDecorator as SliderCacheDecorator;

use Grace\Repositories\Setting\SettingRepository;
use Grace\Repositories\Setting\CacheDecorator as SettingCacheDecorator;

use Grace\Services\Cache\GraceCache;

/**
 * Class RepositoryServiceProvider
 * @package Grace\Repositories
 * @author Phillip Madsen
 */
class RepositoryServiceProvider extends ServiceProvider {

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register() {

        $app = $this->app;

        //dd($app['config']->get('fully.cache'));

        // article
        $app->bind('Grace\Repositories\Article\ArticleInterface', function ($app) {

            $article = new ArticleRepository(
                new Article
            );

            if ($app['config']->get('fully.cache') === true && $app['config']->get('is_admin', false) == false) {

                $article = new ArticleCacheDecorator(
                    $article,
                    new GraceCache($app['cache'], 'articles')
                );
            }

            return $article;
        });

        // category
        $app->bind('Grace\Repositories\Category\CategoryInterface', function ($app) {

            $category = new CategoryRepository(
                new Category
            );


            if ($app['config']->get('fully.cache') === true && $app['config']->get('is_admin', false) == false) {

                $category = new CategoryCacheDecorator(
                    $category,
                    new GraceCache($app['cache'], 'categories')
                );
            }

            return $category;
        });


        // page
        $app->bind('Grace\Repositories\Page\PageInterface', function ($app) {

            $page = new PageRepository(
                new Page
            );

            if ($app['config']->get('fully.cache') === true && $app['config']->get('is_admin', false) == false) {

                $page = new PageCacheDecorator(
                    $page,
                    new GraceCache($app['cache'], 'pages')
                );
            }

            return $page;
        });


        // faq
        $app->bind('Grace\Repositories\Faq\FaqInterface', function ($app) {

            $faq = new FaqRepository(
                new Faq
            );

            if ($app['config']->get('fully.cache') === true && $app['config']->get('is_admin', false) == false) {

                $faq = new FaqCacheDecorator(
                    $faq,
                    new GraceCache($app['cache'], 'faqs')
                );
            }

            return $faq;
        });


        // news
        $app->bind('Grace\Repositories\News\NewsInterface', function ($app) {

            $news = new NewsRepository(
                new News
            );

            if ($app['config']->get('fully.cache') === true && $app['config']->get('is_admin', false) == false) {

                $news = new NewsCacheDecorator(
                    $news,
                    new GraceCache($app['cache'], 'pages')
                );
            }

            return $news;
        });

        // photo gallery
        $app->bind('Grace\Repositories\PhotoGallery\PhotoGalleryInterface', function ($app) {

            $photoGallery = new PhotoGalleryRepository(
                new PhotoGallery
            );

            if ($app['config']->get('fully.cache') === true && $app['config']->get('is_admin', false) == false) {

                $photoGallery = new PhotoGalleryCacheDecorator(
                    $photoGallery,
                    new GraceCache($app['cache'], 'photo_galleries')
                );
            }

            return $photoGallery;
        });


        // project
        $app->bind('Grace\Repositories\Project\ProjectInterface', function ($app) {

            $project = new ProjectRepository(
                new Project
            );

            if ($app['config']->get('fully.cache') === true && $app['config']->get('is_admin', false) == false) {

                $project = new ProjectCacheDecorator(
                    $project,
                    new GraceCache($app['cache'], 'projects')
                );
            }

            return $project;
        });

        // tag
        $app->bind('Grace\Repositories\Tag\TagInterface', function ($app) {

            $tag = new TagRepository(
                new Tag
            );

            if ($app['config']->get('fully.cache') === true && $app['config']->get('is_admin', false) == false) {

                $tag = new TagCacheDecorator(
                    $tag,
                    new GraceCache($app['cache'], 'tags')
                );
            }

            return $tag;
        });

        // video
        $app->bind('Grace\Repositories\Video\VideoInterface', function ($app) {

            $video = new VideoRepository(
                new Video
            );

            if ($app['config']->get('fully.cache') === true && $app['config']->get('is_admin', false) == false) {

                $video = new VideoCacheDecorator(
                    $video,
                    new GraceCache($app['cache'], 'pages')
                );
            }

            return $video;
        });

        // menu
        $app->bind('Grace\Repositories\Menu\MenuInterface', function ($app) {

            $menu = new MenuRepository(
                new Menu
            );

            if ($app['config']->get('fully.cache') === true && $app['config']->get('is_admin', false) == false) {

                $menu = new MenuCacheDecorator(
                    $menu,
                    new GraceCache($app['cache'], 'menus')
                );
            }

            return $menu;
        });

        // slider
        $app->bind('Grace\Repositories\Slider\SliderInterface', function ($app) {

            $slider = new SliderRepository(
                new Slider
            );

            if ($app['config']->get('fully.cache') === true && $app['config']->get('is_admin', false) == false) {

                $slider = new SliderCacheDecorator(
                    $slider,
                    new GraceCache($app['cache'], 'sliders')
                );
            }

            return $slider;
        });

        // setting
        $app->bind('Grace\Repositories\Setting\SettingInterface', function ($app) {

            $setting = new SettingRepository(
                new Setting
            );

            if ($app['config']->get('fully.cache') === true && $app['config']->get('is_admin', false) == false) {

                $setting = new SettingCacheDecorator(
                    $setting,
                    new GraceCache($app['cache'], 'settings')
                );
            }

            return $setting;
        });
    }
}
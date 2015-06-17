<?php namespace Grace\Composers;

use News;
use Grace\Repositories\News\NewsInterface;

/**
 * Class MenuComposer
 * @package Grace\Composers
 * @author Phillip Madsen
 */
class NewsComposer {

    /**
     * @var \Grace\Repositories\News\NewsInterface
     */
    protected $news;

    /**
     * @param ArticleInterface $article
     */
    public function __construct(NewsInterface $news) {

        $this->news = $news;
    }

    /**
     * @param $view
     */
    public function compose($view) {

        $news = $this->news->getLastNews(5);
        $view->with('news', $news);
    }
}


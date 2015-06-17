<?php namespace Grace\Composers;

use Article;
use Grace\Repositories\Article\ArticleInterface;

/**
 * Class ArticleComposer
 * @package Grace\Composers
 * @author Phillip Madsen
 */
class ArticleComposer {

    /**
     * @var \Grace\Repositories\Article\ArticleInterface
     */
    protected $article;

    /**
     * @param ArticleInterface $article
     */
    public function __construct(ArticleInterface $article) {

        $this->article = $article;
    }

    /**
     * @param $view
     */
    public function compose($view) {

        $articles = $this->article->getLastArticle(3);
        $view->with('articles', $articles);
    }
}


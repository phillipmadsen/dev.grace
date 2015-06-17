<?php namespace Grace\Repositories\Article;

use Grace\Repositories\RepositoryInterface;

/**
 * Interface ArticleInterface
 * @package Grace\Repositories\Article
 * @author Phillip Madsen
 */
interface ArticleInterface extends RepositoryInterface {

    /**
     * @param $slug
     * @return mixed
     */
    public function getBySlug($slug);
}
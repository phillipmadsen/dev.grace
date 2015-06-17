<?php namespace Grace\Repositories\News;

use Grace\Repositories\RepositoryInterface;

/**
 * Interface NewsInterface
 * @package Grace\Repositories\News
 * @author Phillip Madsen
 */
interface NewsInterface extends RepositoryInterface {

    /**
     * @param $slug
     * @return mixed
     */
    public function getBySlug($slug);
}
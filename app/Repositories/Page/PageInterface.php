<?php namespace Grace\Repositories\Page;

use Grace\Repositories\RepositoryInterface;

/**
 * Interface PageInterface
 * @package Grace\Repositories\Page
 * @author Phillip Madsen
 */
interface PageInterface extends RepositoryInterface {

    /**
     * @param $slug
     * @return mixed
     */
    public function getBySlug($slug, $isPublished = false);
}
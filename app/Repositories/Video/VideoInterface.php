<?php namespace Grace\Repositories\Video;

use Grace\Repositories\RepositoryInterface;

/**
 * Interface VideoInterface
 * @package Grace\Repositories\Video
 * @author Phillip Madsen
 */
interface VideoInterface extends RepositoryInterface {

    /**
     * @param $slug
     * @return mixed
     */
    public function getBySlug($slug);
}
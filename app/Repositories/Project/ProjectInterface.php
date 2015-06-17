<?php namespace Grace\Repositories\Project;

use Grace\Repositories\RepositoryInterface;

/**
 * Interface ProjectInterface
 * @package Grace\Repositories\Project
 * @author Phillip Madsen
 */
interface ProjectInterface extends RepositoryInterface {

    /**
     * @param $slug
     * @return mixed
     */
    public function getBySlug($slug);
}
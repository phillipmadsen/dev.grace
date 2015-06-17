<?php namespace Grace\Repositories\PhotoGallery;

use Grace\Repositories\RepositoryInterface;

/**
 * Interface PhotoGalleryInterface
 * @package Grace\Repositories\PhotoGallery
 * @author Phillip Madsen
 */
interface PhotoGalleryInterface extends RepositoryInterface {

    /**
     * @param $slug
     * @return mixed
     */
    public function getBySlug($slug);
}
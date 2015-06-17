<?php namespace Grace\Search;

use Grace\Models\News;
use Grace\Models\Article;
use Grace\Models\PhotoGallery;

/**
 * Class Search
 * @package Grace\Search
 * @author Phillip Madsen
 */
class Search {

    public function search($search) {

        $newsResult = News::search($search)->get()->toArray();
        $articleResult = Article::search($search)->get()->toArray();
        $photoGalleryResult = PhotoGallery::search($search)->get()->toArray();
        $result = array_merge($newsResult, $articleResult, $photoGalleryResult);
        return $result;
    }
}

<?php namespace Grace\Http\Controllers;

use Grace\Repositories\Page\PageInterface;
use Grace\Repositories\Page\PageRepository as Page;

use SEOMeta;
use OpenGraph;
use Twitter;
## or
use SEO;

/**
 * Class PageController
 * @author Phillip Madsen
 */
class PageController extends Controller {

    protected $page;

    public function __construct(PageInterface $page) {

        $this->page = $page;
    }

    /**
     * Display page
     * @param $slug
     * @return \Illuminate\View\View
     */
    public function show($slug) {

        $page = $this->page->getBySlug($slug, true);

        if($page === null)
            return Response::view('errors.missing', array(), 404);

        return view('frontend.page.show', compact('page'));
    }
}

<?php namespace Grace\Http\Controllers;

use Grace\Repositories\Article\ArticleRepository as Article;
use Grace\Repositories\Category\CategoryRepository as Category;
use Grace\Repositories\Tag\TagRepository as Tag;
use Grace\Repositories\Category\CategoryInterface;
use Grace\Repositories\Article\ArticleInterface;
use Grace\Repositories\Tag\TagInterface;
use Input;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;

/**
 * Class CategoryController
 * @author Phillip Madsen
 */
class CategoryController extends Controller {

    protected $article;
    protected $tag;
    protected $category;

    public function __construct(ArticleInterface $article, TagInterface $tag, CategoryInterface $category) {

        $this->article = $article;
        $this->tag = $tag;
        $this->category = $category;
    }

    /**
     * Display a listing of the resource by slug.
     * @param $slug
     * @return mixed
     */
    public function index($slug) {

        $articles = $this->category->getArticlesBySlug($slug);
        $tags = $this->tag->all();
        //$categories = $this->category->all();

        $page = Input::get('page', 1);
        $perPage = 10;
        $pagiData = $this->category->paginate($page, $perPage, false);

        $categories = new LengthAwarePaginator($pagiData->items, $pagiData->totalItems, $perPage, [
            'path' => Paginator::resolveCurrentPath()
        ]);

        $categories->setPath("");


        return view('frontend.category.index', compact('articles', 'tags', 'categories'));
    }
}

<?php namespace Grace\Http\Controllers;

use Grace\Repositories\Video\VideoRepository as Video;
use Grace\Repositories\Video\VideoInterface;
use Input;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;

/**
 * Class VideoController
 * @author Phillip Madsen
 */
class VideoController extends Controller {

    /**
     * @var
     */
    protected $video;

    /**
     * @param VideoInterface $video
     */
    public function __construct(VideoInterface $video) {

        $this->video = $video;
    }

    /**
     * Display videos page
     * @param $id
     * @return \Illuminate\View\View
     */
    public function index() {

        //$videos = $this->video->paginate();

        $page = Input::get('page', 1);
        $perPage = 12;
        $pagiData = $this->video->paginate($page, $perPage, false);

        $videos = new LengthAwarePaginator($pagiData->items, $pagiData->totalItems, $perPage, [
            'path' => Paginator::resolveCurrentPath()
        ]);

        $videos->setPath("");

        return view('frontend.video.index', compact('videos'));
    }

    /**
     * @param $slug
     * @return mixed
     */
    public function show($slug) {

        $video=$this->video->getBySlug($slug);

        if($video === null)
            return Response::view('errors.missing', array(), 404);

        return view('frontend.video.show', compact('video'));
    }
}

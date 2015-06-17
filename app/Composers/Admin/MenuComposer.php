<?php namespace Grace\Composers\Admin;

use Grace\Models\FormPost;

/**
 * Class MenuComposer
 * @package Grace\Composers\Admin
 * @author Phillip Madsen
 */
class MenuComposer {

    /**
     * @param $view
     */
    public function compose($view) {

        $view->with('formPost', FormPost::where('is_answered', 0)->get());
    }
}


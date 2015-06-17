<?php namespace Grace\Http\Controllers\Admin;

use Grace\Http\Controllers\Controller;
use Redirect;
use View;
use Input;
use Config;

use LaravelLocalization;


/**
 * Class FaqController
 * @package App\Controllers\Admin
 * @author Phillip Madsen
 */
class LanguageController extends Controller {

    public function setLocale($language) {

        var_dump($language);

        var_dump(Config::get('app.locale'));
        LaravelLocalization::setLocale($language);
        var_dump(Config::get('app.locale'));
    }
}
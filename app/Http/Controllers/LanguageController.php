<?php namespace Grace\Http\Controllers;

/**
 * Class LanguageController
 * @author Phillip Madsen
 */
class LanguageController extends Controller {

    public function setLocale($language) {

        LaravelLocalization::setLocale($language);
        return Redirect::route('dashboard');
    }
}

<?php namespace Grace\Search\Facade;

use Illuminate\Support\Facades\Facade;

/**
 * Class Search
 * @package Grace\Facades
 * @author Phillip Madsen
 */
class Search extends Facade {

    protected static function getFacadeAccessor() {

        return 'search';
    }
}

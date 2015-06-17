<?php namespace Grace\LogViewer\Facade;

use Illuminate\Support\Facades\Facade;

/**
 * Class LogViewer
 * @package Grace\Facades
 * @author Phillip Madsen
 */
class LogViewer extends Facade {

    protected static function getFacadeAccessor() {

        return 'logviewer';
    }
}

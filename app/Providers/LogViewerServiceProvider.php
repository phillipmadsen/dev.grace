<?php namespace Grace\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Class LogViewerServiceProvider
 * @package Grace\Providers
 * @author Phillip Madsen
 */
class LogViewerServiceProvider extends ServiceProvider {

    public function register() {

        $this->app->bind('logviewer', 'Grace\LogViewer\LogViewer');
    }
}

<?php namespace Grace\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Class SearchServiceProvider
 * @package Grace\Providers
 * @author Phillip Madsen
 */
class SearchServiceProvider extends ServiceProvider {

    public function register() {

        $this->app->bind('search', 'Grace\Search\Search');
    }
}

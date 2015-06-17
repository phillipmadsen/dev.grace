<?php namespace Grace\Providers;

use Illuminate\Support\ServiceProvider;
use Grace\Feeder\Feeder;

/**
 * Class FeederServiceProvider
 * @package Grace\Providers
 * @author Phillip Madsen
 */
class FeederServiceProvider extends ServiceProvider {

    /**
     * Register
     */
    public function register() {

        $this->app->bind('feeder', 'Grace\Feeder\Feeder');
    }
}

<?php namespace Grace\Events;

use Log;
use Cache;

/**
 * @deprecated
 * Class AuthEventHandler
 * @package Grace\Events
 * @author Phillip Madsen
 */
class AuthEventHandler {

    /**
     * @param $events
     */
    public function subscribe($events) {

        $events->listen('user.login', 'Grace\Events\AuthEventHandler@login');
        $events->listen('user.logout', 'Grace\Events\AuthEventHandler@logout');
    }

    /**
     * @param $user
     */
    public function login($user) {

        Cache::flush();
        Log::info('User login. ID: ' . $user->id);
    }

    /**
     * @param $user
     */
    public function logout($user) {

        //Cache::flush();
        Log::info('User logout. ID: ' . $user->id);
    }
}

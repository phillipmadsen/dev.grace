<?php namespace Grace\Http\Controllers\Admin;

use Grace\Http\Controllers\Controller;
use Grace\Models\User;
use Grace\Models\Logger;

/**
 * Class DashboardController
 * @package Grace\Controllers\Admin
 * @author Phillip Madsen
 */
class DashboardController extends Controller {

    function index() {

        $logger = new Logger();
        /*$chartData = $logger->getLogPercent();*/

        $chartData = array();

        return view('backend/layout/dashboard', compact('chartData'))->with('active', 'home');
    }
}

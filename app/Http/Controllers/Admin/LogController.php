<?php namespace Grace\Http\Controllers\Admin;

use Grace\Http\Controllers\Controller;
use View;
use LogViewer;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Input;

/**
 * Class LogController
 * @package App\Controllers\Admin
 * @author Phillip Madsen
 */
class LogController extends Controller {

    public function index() {

        /*$level = Input::get('levels', 'all');
        $levels = array(
            'all'       => 'ALL',
            'debug'     => 'DEBUG',
            'info'      => 'INFO',
            'notice'    => 'NOTICE',
            'warning'   => 'WARNING',
            'error'     => 'ERROR',
            'critical'  => 'CRITICAL',
            'alert'     => 'ALERT',
            'emergency' => 'EMERGENCY',
        );


        $logs = LogViewer::getLogs($level);

        $paginator = new LengthAwarePaginator($logs,count($logs), 25, [
            'path' => Paginator::resolveCurrentPath()
        ]);
        */

        return view('backend.log.index');
    }
}

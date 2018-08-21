<?php

namespace App\Http\Controllers;

use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;
use Helper;

class PagesController extends Controller
{
    public function audiosearch()
    {
        $sermons = Helper::getSermonSearchlist();

        return view('audiosearch')->with('sermons', $sermons);
        ;
    }

    public function howler()
    {
        $sermons = Helper::getSermonPlaylist();

        return view('howler')->with('sermons', $sermons);
    }

    public function howler_update(Request $request)
    {
        $title = $request->input('title');
        $sermons = Helper::getSermon($title);

        //return ['title' => urlencode($title)];
        return view('howler')->with('sermons', $sermons);
    }


    public function clearcache()
    {
        // Commandline Equivilent
        //$ /opt/php71/bin/php artisan config:cache
        //$ /opt/php71/bin/php artisan cache:clear
        //$ /opt/php71/bin/php artisan view:clear
        $process = new Process('php artisan config:cache');
        $process->run();
        $process = new Process('php artisan cache:clear');
        $process->run();
        $process = new Process('php artisan view:clear');
        $process->run();
        return 'Cache Clear';
    }
}

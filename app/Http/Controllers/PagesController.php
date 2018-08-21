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

        return view('howler')->with('sermons', $sermons);
    }

}

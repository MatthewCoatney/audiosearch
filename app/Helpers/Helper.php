<?php // Code within app\Helpers\Helper.php

namespace App\Helpers;

use Carbon\Carbon;
use DB;

class Helper
{
    public static function getSermon($str)
    {
        $playlist = array();

        // Fetch sermon record
        $songs = DB::table('sermons')
              ->where('title', 'like', urldecode($str))
              ->limit(1)
              ->get();


        foreach ($songs as $s) {
            $song = array(
                                  "title" => $s->title,
                                  "file" => $s->file,
                                  "howl" => null,
                          );


            array_push($playlist, $song);
        }

        return json_encode($playlist); //JSON encoding w/o header info
    }

    // Build JSON playlist for use with HOWLER.js
    public static function getSermonPlaylist()
    {
        $now = Carbon::now();

        $playlist = array();

        // Fetch latest 7 sermon records
        $songs = DB::table('sermons')
              ->latest('date')
              ->limit(7)
              ->get();


        foreach ($songs as $s) {
            $song = array(
                                  "title" => $s->title,
                                  "file" => $s->file,
                                  "howl" => null,
                          );

            // Merge the playlist array into the return array
            array_push($playlist, $song);
        }

        return json_encode($playlist); //JSON encoding w/o header info
    }

    // Build JSON criteria for TIPUE search
    // with a limit of 208 (1 year = 208)
    public static function getSermonSearchlist()
    {
        $playlist = array(); // return array

        // Fetch sermon records
        $songs = DB::table('sermons')
              ->where('id', '>', 0)
              ->latest('date')
              ->limit(208)
              ->orderBy('date')
              ->get(); //->toSql();

        $baseurl = 'howler-update?title=';

        foreach ($songs as $s) {
            $song = array(
                                  "title" => $s->title,
                                  "text" => $s->text,
                                  "url" => "javascript:setupPlaylist('" . $baseurl . $s->title . "');",
                                  "tags" => $s->tags,
                          );

            // Merge the playlist array into the return array
            array_push($playlist, $song);
        }

        return json_encode($playlist); //JSON encoding w/o header info
    }
}

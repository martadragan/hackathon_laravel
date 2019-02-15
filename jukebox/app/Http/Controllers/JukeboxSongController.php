<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class JukeboxSongController extends Controller
{
    public function video (Request $request)
    {
        $song_id = $_GET['id'];

        if ($request -> has('id')){
            $query = "
            SELECT  *
            FROM `jukebox`
            WHERE `id` = $song_id
            LIMIT 1
            ";
            $song = DB::selectOne($query, [$request->input('id')]);
            
        }



        

        $song_view = view('jukebox/song', [
            'song' => $song
        ]);
        return $song_view;
    }

}

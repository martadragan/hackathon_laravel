<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class JukeboxDisplayController extends Controller
{
    public function display (Request $request) {
       
        $query = "
            SELECT *
            FROM `jukebox`
            WHERE 1

        ";
        $songs = DB::select($query); 
        $display_view = view('jukebox/jukebox', [
            'songs' => $songs
        ]);
        return $display_view;
    }

}

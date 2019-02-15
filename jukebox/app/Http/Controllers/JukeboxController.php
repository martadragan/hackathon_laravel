<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;

class JukeboxController extends Controller
{   

    public function edit(Request $request)
    {
        if ($request->has('id')){
            $query = "
                SELECT *
                FROM `jukebox`
                WHERE `id` = ?
                LIMIT 1
            ";
            $song = DB::selectOne($query, [
                $request->input('id')
            ]);
        } else {
            $song = (object)[
                'id'          => null,
                'title'       => null,
                'code'        => null,
                'author'      => null,
                'date'        => null,
                'url'         => null,
                'description' => null
            ];
        }

        if ($request->method() == 'POST'){
            $this->validate($request, [
                'title' => 'required',
                'code' => 'required',
                'author' => 'required',
                'url' => 'required',
                'description' => 'required'
            ]);

            $song->title = $request->input('title');
            $song->code = $request->input('code');
            $song->author = $request->input('author');
            $song->url = $request->input('url');
            $song->description = $request->input('description');

            if ($request->has('id')) {
                $query = 
                   "UPDATE `jukebox`
                    SET `title` = ?,
                        `code` = ?,
                        `author` = ?,
                        `url` = ?,
                        `description` = ?
                    WHERE `id` = ?
                    LIMIT 1
                "; 
                DB::update($query, [
                    $song->title,
                    $song->code,
                    $song->author,
                    $song->url,
                    $song->description,
                    $request->input('id')
                ]);
            } else {
                $query = 
                   "INSERT
                    INTO `jukebox`
                    (`title`, `code`, `author`, `url`, `description`)
                    VALUES
                    (?, ?, ?, ?, ?)
                ";
                DB::insert($query, [
                    $song->title,
                    $song->code,
                    $song->author,
                    $song->url,
                    $song->description
                ]);
                $song->id = DB::getPdo()->lastInsertId();
            }

           
            Session::flash('success_message', 'Song was successfully saved.');

            return redirect('jukebox/edit?id='.$song->id);
        } 
        $edit_form = view('jukebox/edit', [
            'song' => $song
        ]);

        return $edit_form;
    }

    public function delete (Request $request)
    {
      
        if ($request->has('id')){
            $query = "
                DELETE  
                FROM `jukebox`
                WHERE `id` = ?
                LIMIT 1
            ";
            DB::delete ($query, [
                $request->input('id')
            ]);
            Session::flash('success_message', 'Song was successfully deleted.');
            return redirect('jukebox/edit');
        }

        $song = (object)[
            'id'          => null,
            'title'       => null,
            'code'        => null,
            'author'      => null,
            'date'        => null,
            'url'         => null,
            'description' => null
        ];
        $edit_form = view('jukebox/edit', [
            'song' => $song
        ]);

        return $edit_form;
    }
}




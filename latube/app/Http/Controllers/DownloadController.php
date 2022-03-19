<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;
use Illuminate\Support\Facades\Auth;

class DownloadController extends Controller
{
    public function add(Request $request)
    {


        if($request->isMethod('get'))
        {

            return view('layouts.add');

        }

        if($request->isMethod('post'))
        {

            $validate = $request->validate([
                'title' => 'required|min:6|max:15',
                'description' => 'required|min:15',
                'img' => 'required|mimes:jpeg,jpg,png,gif',
                'video' => 'required|mimes:mp4,avi'
            ]);

            $title = $request->input('title');
            $description = $request->input('description');
            $imgFile = $request->file('img');
            $video = $request->file('video');

            $imgFile->move(public_path() . '/img/', $imgFile->getClientOriginalName());
            $video->move(public_path() . '/video/', $video->getClientOriginalName());

            Video::create([
                'title' => $title,
                'description' => $description,
                'img_path' => 'img/' . $imgFile->getClientOriginalName(),
                'video_path' => 'video/' . $video->getClientOriginalName(),
                'author_id' => Auth::user()->id
            ]);

            return redirect()->back()->with('success', 'Видео успешно добавлено!');


        }

    }
}

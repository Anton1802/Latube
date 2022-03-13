<?php

namespace App\Http\Controllers;

use App\Events\PostHasViewed;
use Illuminate\Http\Request;
use App\Models\Video;
use BE\Server\VideoStream;



class VideoController extends Controller
{

    public function index($id)
    {

        $video = Video::where('id', $id)->first();

         Video::where('id', $id)->update([
          'views' => $video->views + 1
         ]);

        return view('layouts.single', compact('video'));

    }

    public function stream($id)
    {

        $video = Video::where('id', $id)->first();
        $stream = new VideoStream($video->video_path, 'video/mp4');

        return response()->stream(function() use ($stream) {
            $stream->start();
        });

    }


}

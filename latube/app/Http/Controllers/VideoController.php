<?php

namespace App\Http\Controllers;

use App\Events\PostHasViewed;
use Illuminate\Http\Request;
use App\Models\Video;



class VideoController extends Controller
{

    public function show($id)
    {

        $video = Video::where('id', $id)->first();

        Video::where('id', $id)->update([
          'views' => $video->views + 1
        ]);

        return response()->file($video->video_path);

    }


}

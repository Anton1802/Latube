<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;



class VideoController extends Controller
{

    public function show($id)
    {

        $video = Video::where('id', $id)->first();

		return response()->file($video->video_path);

    }


}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;

class MainController extends Controller
{

    public function index()
    {

        $videos = Video::all();

        return view('layouts.video', compact('videos'));

    }

    public function show($id)
    {



    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Video;

class UserController extends Controller
{
    public function show()
    {

    $user = Auth::user();
    $videos = Video::where('author_id', Auth::user()->id)->get();

    return view('user.user_info', compact('user', 'videos'));

    }
}

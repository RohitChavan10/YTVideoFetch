<?php

namespace App\Http\Controllers;

use Alaouy\Youtube\Facades\Youtube;
use App\Models\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
     public function index()
    {
        $videos = Video::all();
        return view('videos.index', compact('videos'));
    }

    public function store(Request $request)
    {
        $request->validate(['url' => 'required|url']);
        
        // Extract video ID from URL
        $videoId = Youtube::parseVidFromURL($request->url);
        
        // Fetch video info using API key
        $video = Youtube::getVideoInfo($videoId);

        // Save in DB
        Video::create([
            'url' => $request->url,
            'description' => $video->snippet->description,
        ]);

        return redirect()->route('videos.index');
    }
}

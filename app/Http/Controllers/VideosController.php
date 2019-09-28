<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateVideoRequest;
use Request;
use App\Http\Controllers\Controller;
use App\Video;
use Auth;
use Session;
use App\Category;

class VideosController extends Controller
{
    public function __construct(){
        $this->middleware('auth', ['only'=>'create']);
    }

    public function index(){
        $videos = Video::latest()->get();
        return view('videos.index')->with('videos', $videos);
    }

    public function show($id){
        $video = Video::findOrFail($id);
        return view('videos.show')->with('videos', $video);
    }

    public function create(){
        $categories = Category::all()->pluck('name', 'id')->toArray();
        return view('videos.create', compact('categories'));
    }

    public function store(CreateVideoRequest $request){
        $video = new Video($request->all());
        Auth::user()->videos()->save($video);

        $categoryIds = $request->get('categories')->input('categoryList');
        $video->categories()->attach($categoryIds);

        Session::flash('video_created', 'Twój film został dodany.');
        return redirect('videos');
    }

    public function edit($id){
        $categories = Category::all()->pluck('name', 'id')->toArray();
        $video = Video::findOrFail($id);
        return view('videos.edit', compact('video', 'categories'));
    }

    public function update($id, CreateVideoRequest $request){
        $video = Video::findOrFail($id);
        $video->update($request->all());
        $video->categories()->sync($request->input('CategoryList'));

        return redirect('videos');
    }
}

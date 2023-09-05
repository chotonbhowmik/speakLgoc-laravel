<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
// use APP\Models\Backend\Post;
use Image;
use File;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::orderBy('id', 'desc')->get();
        return view('backend.pages.post.manage', compact('posts'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data['posts'] = Post::orderBy('id', 'desc')->get();
        return view('backend.pages.post.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $post = new Post();
        $post-> heading = $request->heading;
        $post->slug = str::slug($request->heading);
        $post->paragraph = $request->paragraph;
        $post->description = $request->description;
        if ($request->image) {
            $image = $request->file('image');
            $img = rand() . '.' . $image->getClientOriginalExtension();
            $location = public_path('Backend/img/post/' . $img);

            $image->move(public_path('Backend/img/post'), $img);
            $post->image = $img;
        }



        $post->save();
        return redirect()->route('post.create');


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::find($id);
        if (!is_null($post)) {
            return view('backend.pages.post.manage', compact('post'));

        } else {

            return redirect()->route('post.manage');

        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {


        $post = Post::find($id);
        $post->heading = $request->heading;
        $post->slug = str::slug($request->heading);
        $post->paragraph = $request->paragraph;
        $post->description = $request->description;

        if (!is_null($request->image))
         {
            if (File::exists('Backend/img/post/' . $post->image)) {
               File::delete('Backend/img/post/' . $post->image);
            }
            $image = $request->file('image');
            $img = rand() . '.' . $image->getClientOriginalExtension();
            $location = public_path('Backend/img/post/' . $img);

            $image->move(public_path('Backend/img/post'), $img);
            $post->image = $img;
        }
        $post->save();
        return redirect()->route('post.manage');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

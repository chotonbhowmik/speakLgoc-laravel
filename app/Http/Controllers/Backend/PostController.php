<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\Post;
use App\Models\Backend\AnalysisQuestion;
use App\Models\Backend\AnalysisAnswer;
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
        return view('backend.pages.post.create', compact('posts'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()

    {


        $posts = Post::orderBy('id', 'desc')->get();
        return view('backend.pages.post.create', compact('posts'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $post = new Post();

        // Set the properties of the post model from the form inputs
        $post->article_title = $request->input('article_title');
        $post->provider_name = $request->input('provider_name');
        $post->person_name = $request->input('person_name');
        $post->person_location = $request->input('person_location');
        $post->use_given_set = $request->input('flexRadioDefault') == 'yes'; // Assuming 'yes' is the value for Yes option
        $post->people_location = $request->input('people_location');
        $post->consideration = $request->input('consideration');
        $post->event_name = $request->input('event_name');
        $post->event_location = $request->input('event_location');
        $post->event_date = $request->input('event_date');
        $post->event_time = $request->input('event_time');
        $post->information_before_event = $request->input('information_before_event');
        $post->mother_nature = $request->input('mother_nature');
        $post->function_executed = $request->input('negative_function');
        $post->problem_developed = $request->input('problem_developed');
        $post->Relationship_if_any_between = $request->input('Relationship_if_any_between');
        $post->aricale_description = $request->input('aricale_description');
$post->Pre_event_observation = $request->input('Pre_event_observation');
$post->Post_event_observation = $request->input('Post_event_observation');


        $post->product_type = $request->product_type;
        $post->product_function = $request->product_function;
        $post->problem_solved = $request->problem_solved;
        $post->function_executed_review = $request->function_executed_review;
        $post->is_problem_solved = $request->is_problem_solved;
        $post->additional_information = $request->additional_information;
        $post->product_url = $request->product_url;
        $post->provider_contact = $request->provider_contact;
        $post->reviewer_contact = $request->reviewer_contact;
        $post->Function_executed_from_event = $request->input('Function_executed_from_event');
        if ($request->image) {
            $image = $request->file('image');
            $img = rand() . '.' . $image->getClientOriginalExtension();
            $location = public_path('Backend/img/post/' . $img);

            $image->move(public_path('Backend/img/post'), $img);
            $post->image = $img;
        }
        // Save the post to the database
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
            return view('backend.pages.post.create', compact('post'));

        } else {

            return redirect()->route('post.create');

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

        if (!is_null($request->image)) {
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
        return redirect()->route('post.create');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $post = Post::find($id);

        if (!is_null($post)) {
            // Delete associated image file
            if (File::exists(public_path('Backend/img/post/' . $post->image))) {
                File::delete(public_path('Backend/img/post/' . $post->image));
            }

            // Delete the post
            $post->delete();

            return redirect()->route('post.create')->with('success', 'Post deleted successfully');
        } else {
            return redirect()->route('post.create')->with('error', 'Post not found');
        }
    }


}

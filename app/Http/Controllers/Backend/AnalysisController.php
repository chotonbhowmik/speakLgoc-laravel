<?php

namespace App\Http\Controllers\Backend;

use App\Models\Backend\Analysis;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AnalysisController extends Controller
{
    public function index()
    {
        $analyses = Analysis::all();
        dd($analyses);
        return view('backend.pages.post.create', compact('analyses'));
    }

    public function create()
    {


        $analyses = Analysis::orderBy('id', 'desc')->get();
        return view('backend.pages.post.create', compact('analyses'));
    }

    public function store(Request $request)
    {
        $analysis = new Analysis();
        $analysis->post_id = $request->input('post_id');
        $analysis->content = $request->input('analysis_description');
        $analysis->save();

        return redirect()->route('post.create');
    }
}

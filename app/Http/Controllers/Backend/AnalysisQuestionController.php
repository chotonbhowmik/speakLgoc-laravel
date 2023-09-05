<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\AnalysisQuestion;
use App\Models\Backend\Post;

class AnalysisQuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $analysisDatas = AnalysisQuestion::orderBy('id', 'desc')->get();
        return view('backend.pages.analysisQuestion.manage', compact('analysisDatas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()

    {
        $blogpost = Post::orderBy('id', 'desc')->get();

        $analysisDatas = AnalysisQuestion::orderBy('id', 'desc')->get();
        return view('backend.pages.analysisQuestion.create', compact('analysisDatas', 'blogpost'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $analysisData = new AnalysisQuestion();
        $analysisData->heading = $request->heading;
        $analysisData->question = $request->question;
        $analysisData->description = $request->description;




        $analysisData->save();
        return redirect()->route('analysisQuestion.create');
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
        $analysisDatas = AnalysisQuestion::find($id);
        $blogpost = Post::orderBy('id', 'desc')->get();
        if (!is_null($analysisDatas)) {
            return view('backend.pages.analysisQuestion.create', compact('analysisDatas', 'blogpost'));

        } else {

            return redirect()->route('analysisQuestion.create');

        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $analysisData = AnalysisQuestion::find($id);
        $analysisData->heading = $request->heading;
        $analysisData->question = $request->question;
        $analysisData->description = $request->description;


        $analysisData->save();
        return redirect()->route('analysisQuestion.create');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $analysisData = AnalysisQuestion::find($id);
        if (!is_null($analysisData)) {

            $analysisData->delete();
            return redirect()->route('analysisQuestion.create');
        } else {
            return redirect()->route('analysisQuestion.create');

        }
    }
}

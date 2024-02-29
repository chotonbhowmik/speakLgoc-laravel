<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\AnalysisAnswer;
use App\Models\Backend\Post;

class AnalysisAnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $analysisDatas = AnalysisAnswer::orderBy('id', 'desc')->get();
        return view('backend.pages.analysisAnswer.manage', compact('analysisDatas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $blogpost = Post::orderBy('id', 'desc')->get();

        $analysisAnswers = AnalysisAnswer::orderBy('id', 'desc')->get();
        return view('backend.pages.analysisAnswer.create', compact('analysisAnswers', 'blogpost'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $analysisAnswer = new AnalysisAnswer();
        $analysisAnswer->heading = $request->heading;
        $analysisAnswer->paragraph = $request->paragraph;
        $analysisAnswer->question = $request->question;
        $analysisAnswer->description = $request->description;




        $analysisAnswer->save();
        return redirect()->route('analysisAnswer.create');
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
        $analysisAnswers = AnalysisAnswer::find($id);
        $blogpost = Post::orderBy('id', 'desc')->get();
        if (!is_null($analysisAnswers)) {
            return view('backend.pages.analysisAnswer.create', compact('analysisAnswers', 'blogpost'));

        } else {

            return redirect()->route('analysisAnswer.create');

        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $analysisAnswer = AnalysisAnswer::find($id);
        $analysisAnswer->heading = $request->heading;
        $analysisAnswer->paragraph = $request->paragraph;
        $analysisAnswer->question = $request->question;
        $analysisAnswer->description = $request->description;


        $analysisAnswer->save();
        return redirect()->route('analysisAnswer.create');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $analysisAnswer = AnalysisAnswer::find($id);
        if (!is_null($analysisAnswer)) {

            $analysisAnswer->delete();
            return redirect()->route('analysisAnswer.create');
        } else {
            return redirect()->route('analysisAnswer.create');

        }
    }
}

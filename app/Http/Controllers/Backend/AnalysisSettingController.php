<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\AnalysisSetting;

class AnalysisSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $analysisSetting = AnalysisSetting::first();
        return view('backend.pages.analysissetting.create', compact('analysisSetting'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $analysisSetting = AnalysisSetting::firstOrNew([]);

        $analysisSetting->enable_analysis = $request->has('enable_analysis') ? 1 : 0;
        $analysisSetting->enable_comment = $request->has('enable_comment') ? 1 : 0;
        $analysisSetting->enable_analysis_comment = $request->has('enable_analysis_comment') ? 1 : 0;
        $analysisSetting->enable_subject = $request->has('enable_subject') ? 1 : 0;
        $analysisSetting->enable_analysis_before_posting = $request->has('enable_analysis_before_posting') ? 1 : 0;
        $analysisSetting->enable_comment_before_posting = $request->has('enable_comment_before_posting') ? 1 : 0;

        $analysisSetting->save();

        return redirect()->route('analysissetting.create')->with('success', 'Analysis settings saved successfully.');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

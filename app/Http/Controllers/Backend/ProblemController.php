<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Problem;

class ProblemController extends Controller
{
    public function store(Request $request)
    {



        $problem = new Problem();
        $problem->post_id = $request['post_id'];
        $problem->actual_problem = $request['actual_problem'];
        $problem->problem_name = $request['problem_name'];
        $problem->actual_error = $request['actual_error'];
        $problem->problem_description = $request['problem_description'];
        $problem->save();

        return redirect()->route('post.create');
    }
    public function destroy($id)
    {
        $problem = Problem::findOrFail($id);
        $problem->delete();

        return redirect()->route('post.create');
    }

}

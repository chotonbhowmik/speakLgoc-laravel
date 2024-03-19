<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backend\Answer;
class AnswerController extends Controller
{
    public function store(Request $request)
    {



        $answer = new Answer();
        $answer->post_id = $request['post_id'];
        $answer->actual_question = $request['actual_question'];
        $answer->entity_question_point_to = $request['entity_question_point_to'];
        $answer->information_answer_point_to = $request['information_answer_point_to'];
        $answer->actual_answer = $request['actual_answer'];
        $answer->save();

        return redirect()->route('post.create');
    }
    public function destroy($id)
    {
        $answer = Answer::findOrFail($id);
        $answer->delete();

        return redirect()->route('post.create');
    }
}

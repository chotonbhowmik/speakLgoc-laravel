<?php

namespace App\Http\Controllers\Backend;

use App\Models\Backend\Question;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function store(Request $request)
    {
        $question = new Question();
        $question->entity_question_point_to = $request['entity_question_point_to'];
        $question->actual_question = $request['actual_question'];
        $question->post_id = $request['post_id'];

        // Save the question
        $question->save();


        return redirect()->route('post.create');
    }
    public function destroy($id)
    {
        $question = Question::findOrFail($id);
        $question->delete();

        return redirect()->route('post.create');
    }
}

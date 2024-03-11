<?php

namespace App\Http\Controllers\Backend;

use App\Models\Backend\IdentifyError;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ErrorController extends Controller
{
    public function store(Request $request)
    {


        $identifyerror = new IdentifyError();
        $identifyerror->actual_error = $request->input('actual_error');
        $identifyerror->from_comm_app = $request->input('from_comm_app');
        $identifyerror->entity_error_point_to = $request->input('entity_error_point_to');
        $identifyerror->error_description = $request->input('error_description');
        $identifyerror->post_id = $request->input('post_id');

        $identifyerror->save();

        return redirect()->route('post.create');
    }
    public function destroy($id)
    {
        $error = IdentifyError::findOrFail($id);
        $error->delete();

        return redirect()->route('post.create');
    }
}

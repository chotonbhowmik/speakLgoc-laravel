<?php

namespace App\Http\Controllers\Backend;

use App\Models\Backend\IdentifyCompensator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IdentifyCompensatorController extends Controller
{
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'post_id' => 'required|exists:posts,id',
            'actual_compensator' => 'required|string',
            'actual_error_to_replace' => 'required|string',
            'in_actual_app_comm' => 'required|string',
            'compensator_description' => 'required|string',
        ]);

        // Create a new instance of IdentifyCompensator
        $compensator = new IdentifyCompensator();

        // Set the properties of the compensator from the form inputs
        $compensator->post_id = $request->input('post_id');
        $compensator->actual_compensator = $request->input('actual_compensator');
        $compensator->actual_error_to_replace = $request->input('actual_error_to_replace');
        $compensator->in_actual_app_comm = $request->input('in_actual_app_comm');
        $compensator->compensator_description = $request->input('compensator_description');

        // Save the compensator to the database
        $compensator->save();

        return redirect()->route('post.create');
    }
    public function destroy($id)
    {
        $compensator = IdentifyCompensator::findOrFail($id);
        $compensator->delete();

        return redirect()->route('post.create');
    }
}

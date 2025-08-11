<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'project_id' => 'required',
            'description' => 'string'
        ]);

        Task::create([
            'project_id' => $request->input('project_id'),
            'description' => $request->input('description')
        ]);

        return back()->with('success','Task created successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $task = Task::whereHas('project', function ($q) {
            $q->where('user_id', Auth::id());
        })->findOrFail($id);

        if ($task) {
            $task->delete();
        }

        return redirect()->route('projects.index')->with('success','Task deleted successfully.');
    }
}

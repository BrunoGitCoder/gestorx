<?php

namespace App\Services;

use App\Http\Requests\ProjectRequest;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;

class ProjectService
{
    public function index()
    {
        return Project::whereBelongsTo(Auth::user())->orderBy('id', 'asc')->with('tasks')->get();
    }

    public function store(ProjectRequest $request)
    {
        Project::create([
            'user_id' => Auth::user()->id,
            'title' => $request->input('title'),
            'description' => $request->input('description')
        ]);
    }

    public function show(string $id)
    {
        return Project::whereBelongsTo(Auth::user())->find($id);
    }

    public function update(ProjectRequest $request, string $id)
    {
        $project = Project::whereBelongsTo(Auth::user())->findOrFail($id);

        $project->update([
            'title' => $request->input('title'),
            'description' => $request->input('description')
        ]);
    }

    public function destroy($id)
    {
        $ptoject = Project::whereBelongsTo(Auth::user())->findOrFail($id);
        $ptoject->delete();
    }
}
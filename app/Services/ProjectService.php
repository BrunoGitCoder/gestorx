<?php

namespace App\Services;

use App\Http\Requests\ProjectRequest;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;

class ProjectService
{
    public function store(ProjectRequest $request)
    {
        Project::create([
            'user_id' => Auth::user()->id,
            'title' => $request->input('title'),
            'description' => $request->input('description')
        ]);
    }
}
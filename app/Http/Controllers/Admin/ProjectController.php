<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Gate;
use App\Http\Requests\Project\CreateProjectRequest;
use App\Http\Requests\Project\UpdateProjectRequest;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('admin.project.index');
        $data['projects'] = Project::with('media')->latest()->get();
        return view('admin.project.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('admin.project.create');
        return view('admin.project.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateProjectRequest $request)
    {
        $meetings = Project::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'content' => $request->content ?? NULL,
            'status' => $request->status,
        ]);
        if ($request->hasFile('attach')) {
            $meetings->addMedia($request->attach)->toMediaCollection('attach');
        }
        notify()->success('Meeting Successfully Added.', 'Added');
        return redirect()->route('admin.project.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        Gate::authorize('admin.project.create');
        return view('admin.project.form')->with(compact('meeting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProjectRequest $request, Project $project)
    {
        $project->update([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'content' => $request->content ?? NULL,
            'status' => $request->status,
        ]);
        if ($request->hasFile('attach')) {
            $project->addMedia($request->attach)->toMediaCollection('attach');
        }
        notify()->success('Meeting Successfully Updated.', 'Updated');
        return redirect()->route('admin.project.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        Gate::authorize('admin.project.destroy');
        $project->delete();        
        notify()->success("Meeting Successfully Deleted", "Deleted");
        return back();
    }
}

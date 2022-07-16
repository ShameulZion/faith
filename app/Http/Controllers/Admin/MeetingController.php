<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Meeting;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Gate;
use App\Http\Requests\Meeting\CreateMeetingRequest;
use App\Http\Requests\Meeting\UpdateMeetingRequest;

class MeetingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('admin.meeting.index');
        $data['meetings'] = Meeting::with('media')->latest()->get();
        return view('admin.meeting.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('admin.meeting.create');
        return view('admin.meeting.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateMeetingRequest $request)
    {
        $meetings = Meeting::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'content' => $request->content ?? NULL,
            'status' => $request->status,
        ]);
        if ($request->hasFile('attach')) {
            $meetings->addMedia($request->attach)->toMediaCollection('attach');
        }
        notify()->success('Meeting Successfully Added.', 'Added');
        return redirect()->route('admin.meeting.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Meeting  $meeting
     * @return \Illuminate\Http\Response
     */
    public function edit(Meeting $meeting)
    {
        Gate::authorize('admin.meeting.create');
        return view('admin.meeting.form')->with(compact('meeting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Meeting  $meeting
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMeetingRequest $request, Meeting $meeting)
    {
        $meeting->update([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'content' => $request->content ?? NULL,
            'status' => $request->status,
        ]);
        if ($request->hasFile('attach')) {
            $meeting->addMedia($request->attach)->toMediaCollection('attach');
        }
        notify()->success('Meeting Successfully Updated.', 'Updated');
        return redirect()->route('admin.meeting.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Meeting  $meeting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Meeting $meeting)
    {
        Gate::authorize('admin.meeting.destroy');
        $meeting->delete();        
        notify()->success("Meeting Successfully Deleted", "Deleted");
        return back();
    }
}

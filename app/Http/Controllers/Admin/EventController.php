<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Gate;
use App\Http\Requests\Event\CreateEventRequest;
use App\Http\Requests\Event\UpdateEventRequest;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('admin.event.index');
        $data['events'] = Event::with('media')->latest()->get();
        return view('admin.event.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('admin.event.create');
        return view('admin.event.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateEventRequest $request)
    {
        $events = Event::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'content' => $request->content ?? NULL,
            'status' => $request->status,
        ]);
        if ($request->hasFile('attach')) {
            $events->addMedia($request->attach)->toMediaCollection('attach');
        }
        notify()->success('Event Successfully Added.', 'Added');
        return redirect()->route('admin.event.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        Gate::authorize('admin.event.create');
        return view('admin.event.form')->with(compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEventRequest $request, Event $event)
    {
        $event->update([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'content' => $request->content ?? NULL,
            'status' => $request->status,
        ]);
        if ($request->hasFile('attach')) {
            $event->addMedia($request->attach)->toMediaCollection('attach');
        }
        notify()->success('Event Successfully Updated.', 'Updated');
        return redirect()->route('admin.event.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        Gate::authorize('admin.event.destroy');
        $event->delete();        
        notify()->success("Event Successfully Deleted", "Deleted");
        return back();
    }
}

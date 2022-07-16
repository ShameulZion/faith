<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Report;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Gate;
use App\Http\Requests\Report\CreateReportRequest;
use App\Http\Requests\Report\UpdateReportRequest;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Gate::authorize('admin.report.index');
        $data['reports'] = Report::with('media')->latest()->get();
        return view('admin.report.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Gate::authorize('admin.report.create');
        return view('admin.report.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateReportRequest $request)
    {
        $reports = Report::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'content' => $request->content ?? NULL,
            'status' => $request->status,
        ]);
        if ($request->hasFile('attach')) {
            $reports->addMedia($request->attach)->toMediaCollection('attach');
        }
        notify()->success('Meeting Successfully Added.', 'Added');
        return redirect()->route('admin.report.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function edit(Report $report)
    {
        Gate::authorize('admin.report.create');
        return view('admin.report.form')->with(compact('meeting'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateReportRequest $request, Report $report)
    {
        $report->update([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'content' => $request->content ?? NULL,
            'status' => $request->status,
        ]);
        if ($request->hasFile('attach')) {
            $report->addMedia($request->attach)->toMediaCollection('attach');
        }
        notify()->success('Meeting Successfully Updated.', 'Updated');
        return redirect()->route('admin.report.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function destroy(Report $report)
    {
        Gate::authorize('admin.report.destroy');
        $report->delete();        
        notify()->success("Meeting Successfully Deleted", "Deleted");
        return back();
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Event;
use App\Models\Meeting;
use App\Models\Project;
use App\Models\Report;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $data['projects'] = Project::with('media')->where('status',true)->latest()->take(3)->get();
        return view('frontend.layout',$data);
    }


    public function about()
    {
        return view('frontend.pages.about.about');
    }

    public function leadership()
    {
        return view('frontend.pages.about.leadership');
    }

    public function guidelines()
    {
        return view('frontend.pages.about.guidelines');
    }

    public function work()
    {
        return view('frontend.pages.about.weWork');
    }

    public function comming()
    {
        return view('frontend.coming-soon');
    }

    public function significant()
    {
        return view('frontend.pages.about.significant');
    }

    public function drrAndCca()
    {
        return view('frontend.pages.what-we-do.drrAndCca');
    }

    public function healthNutritionWash()
    {
        return view('frontend.pages.what-we-do.healthNutritionWash');
    }

    public function empowerment()
    {
        return view('frontend.pages.what-we-do.empowerment');
    }

    public function childRights()
    {
        return view('frontend.pages.what-we-do.childRights');
    }

    public function humanitarianResponse()
    {
        return view('frontend.pages.what-we-do.humanitarianResponse');
    }

    public function tearfund()
    {
        return view('frontend.pages.what-we-do.tearfund');
    }

    public function worldRenew()
    {
        return view('frontend.pages.what-we-do.worldRenew');
    }

    public function germany()
    {
        return view('frontend.pages.what-we-do.germany');
    }

    public function canadian()
    {
        return view('frontend.pages.what-we-do.canadian');
    }

    public function australia()
    {
        return view('frontend.pages.what-we-do.australia');
    }

    public function singapore()
    {
        return view('frontend.pages.what-we-do.singapore');
    }

    public function hoffnungszeichen()
    {
        return view('frontend.pages.what-we-do.hoffnungszeichen');
    }

    public function bangladeshGovt()
    {
        return view('frontend.pages.what-we-do.bangladeshGovt');
    }

    public function usaid()
    {
        return view('frontend.pages.what-we-do.usaid');
    }

    public function scanBangladesh()
    {
        return view('frontend.pages.network.scanBangladesh');
    }

    public function micahGlobal()
    {
        return view('frontend.pages.network.micahGlobal');
    }


    public function events()
    {
        $data['events'] = Event::with('media')->latest()->get();
        return view('frontend.pages.event.events',$data);
    }


    public function meetings()
    {
        $data['meetings'] = Meeting::with('media')->latest()->get();
        return view('frontend.pages.event.meetings',$data);
    }

    public function reports()
    {
        $data['reports'] = Report::with('media')->latest()->get();
        return view('frontend.pages.about.reports',$data);
    }


    public function projects()
    {
        $data['projects'] = Project::with('media')->latest()->get();
        return view('frontend.pages.event.projects',$data);
    }

    public function donate()
    {
        return view('frontend.pages.donate');
    }


    public function commitment()
    {
        return view('frontend.pages.other.commitment');
    }


    public function legal()
    {
        return view('frontend.pages.other.legal');
    }


    public function emerge()
    {
        return view('frontend.pages.other.emerge');
    }


    public function contact()
    {
        return view('frontend.pages.contact');
    }


    public function contactData(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);
        Contact::create([
            'name'      => $request->name,
            'email'     => $request->email,
            'subject'   => $request->subject,
            'message'   => $request->message,
            'type'      => "contact-us"
        ]);
        notify()->success('Meeting Successfully Added.', 'Added');
        return back();
    }


    public function join()
    {
        return view('frontend.pages.join');
    }

    public function joinData(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);
        Contact::create([
            'name'      => $request->name,
            'email'     => $request->email,
            'subject'   => $request->subject,
            'message'   => $request->message,
            'type'      => "join-us"
        ]);
        notify()->success('Meeting Successfully Added.', 'Added');
        return back();
    }

    public function slug($slug)
    {
        $data['events'] = Event::with('media')->where('slug', $slug)->get();
        $data['reports'] = Report::with('media')->where('slug', $slug)->get();
        $data['meetings'] = Meeting::with('media')->where('slug', $slug)->get();
        $data['projects'] = Project::with('media')->where('slug', $slug)->get();
        return view('frontend.pages.single',$data);
    }
}

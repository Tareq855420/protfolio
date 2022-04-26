<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use App\Models\Education;
use App\Models\Service;
use App\Models\Main;
use App\Models\Skill;
use App\Models\Project;
use App\Models\Counter;
use App\Models\FooterBanner;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        $main = Main::first();
        $services = Service::all();
        $educations = Education::all();
        $abouts = About::all();
        $skills = Skill::all();
        $projects = Project::all();
        $counters = Counter::all();
        $banners = FooterBanner::all();
        $contacts = Contact::all();
        return view('front.home', compact('main','services','projects','counters','educations','skills','banners','contacts','abouts'));
    }
    public function about(){
        $main = Main::first();
        $services = Service::all();
        $educations = Education::all();
        $abouts = About::all();
        $skills = Skill::all();
        $projects = Project::all();
        $counters = Counter::all();
        $banners = FooterBanner::all();
        $contacts = Contact::all();
        return view('front.home', compact('main','services','projects','counters','educations','skills','banners','contacts','abouts'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Skill;
use App\Models\Project;
use App\Models\Experience;
use App\Models\SocialLink;
use App\Models\About;
use App\Models\Testimonial;
use App\Models\Setting;

class HomeController extends Controller
{
    public function index()
    {
        // Fetch the first (and only) profile
        $profile = Profile::first();
        $about = About::first();
        $testimonials = Testimonial::where('is_approved', true)->latest()->get();
        $settings = Setting::first();
        // Fetch all dynamic content from the database
        $skills = Skill::all();
        $projects = Project::all();
        $experiences = Experience::all();
        $socials = SocialLink::all();

        // Pass everything to the view
        return view('home', compact('profile', 'about', 'testimonials', 'settings','skills', 'projects', 'experiences', 'socials'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Skill;
use App\Models\Project;
use App\Models\Experience;
use App\Models\SocialLink;

class HomeController extends Controller
{
    public function index()
    {
        // Fetch the first (and only) profile
        $profile = Profile::first();

        // Fetch all dynamic content from the database
        $skills = Skill::all();
        $projects = Project::all();
        $experiences = Experience::all();
        $socials = SocialLink::all();

        // Pass everything to the view
        return view('home', compact('profile', 'skills', 'projects', 'experiences', 'socials'));
    }
}

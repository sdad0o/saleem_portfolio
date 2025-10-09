<?php

namespace App\Http\Controllers;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email',
            'position' => 'required|string|max:255',
            'message' => 'required|string|max:1000',
        ]);

        Testimonial::create($data); // saves as unapproved by default

        return response()->json(['success' => true]);
    }
}

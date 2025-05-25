<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lead;


class LeadController extends Controller
{

    public function storeStayUpPop(Request $request)
{
    $validated = $request->validate([
        'email' => 'required|email',
    ]);

    Lead::create([
        'email' => $validated['email'],
        'post_url' => "https://webcoredigitalsolutions.com.au",
        'company_name' => "webcoredigitalsolutions",
        'lead_type_id' => 1,
        'message' => "Stay up to date popup"
    ]);

    return redirect()->back()->with('success', 'Thanks for signing up!');
}

    public function storeHomePageGetStarteted(Request $request)
    {
        // Validate the email
        $validated = $request->validate([
            'email' => 'required|email',
        ]);

        Lead::create([
            'email' => $validated['email'],
            'post_url' => "https://webcoredigitalsolutions.com.au",
            'company_name' => "webcoredigitalsolutions",
            'lead_type_id' => 1,
            'message' => "Home page get started button"
        ]);

        return redirect()->back()->with('success', 'Thanks for signing up!');
    }
}

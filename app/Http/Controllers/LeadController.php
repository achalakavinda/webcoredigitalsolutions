<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Lead;

class LeadController extends Controller
{
        /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $lead = Lead::create([
            'post_url'=>'https://webcoredigitalsolutions.com.au/contact-us',
            'company_name'=>'webCoreDigitalSolutions',
            'lead_type_id'=>1,
            'message'=>$request->question." | ".$request->leadName." | ".$request->leadEmail." | ".$request->leadMessage
        ]);

        $lead->save();

        return redirect()
        ->back()
        ->with('created');

    }
}

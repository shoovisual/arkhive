<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LegalController extends Controller
{
    public function terms()
    {
        $services = \App\Models\Service::all();
        return view('legal.terms', compact('services'));
    }

    public function privacy()
    {
        $services = \App\Models\Service::all();
        return view('legal.privacy', compact('services'));
    }

    public function cookie()
    {
        $services = \App\Models\Service::all();
        return view('legal.cookie', compact('services'));
    }

    public function compliance()
    {
        $services = \App\Models\Service::all();
        return view('legal.compliance', compact('services'));
    }
}

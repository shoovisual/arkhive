<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class AboutController extends Controller
{
    public function index()
    {
        $services = Service::all();
        $sectors = json_decode(file_get_contents(public_path('data/sectors.json')), true);
        $coreValues = [
            'Attention to detail' => 'For accuracy and ultimate security of stored and digitized documents to enable effective search and access',
            'Collaboration' => 'There is no break in the chain, from Operations to Client Services to IT ',
            'Openness + Honesty' => 'Any gaps, any issues are discussed and addressed so that sensitive and protected information is always secure and accessible.',
            'Strategic' => 'To drive efficiency and effectiveness for a service that is reliable and sustainable.',
        ];
        return view('about.index', compact('services', 'coreValues', 'sectors'));
    }
}

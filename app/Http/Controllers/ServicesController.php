<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\View\View;

class ServicesController extends Controller
{

    public function index(): View
    {
        $services = Service::orderBy('order')->get();
        $sectors = json_decode(file_get_contents(public_path('data/sectors.json')), true);
        return view('services.index', compact('services', 'sectors'));
    }

    // public function index(): View
    // {
    //     $sectors = json_decode(file_get_contents(public_path('data/sectors.json')), true);
    //     return view('services.document-archiving', compact('sectors'));
    // }
}

<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $services = Service::orderBy('order')->get();
        $sectors = json_decode(file_get_contents(public_path('data/sectors.json')), true);
        return view('home-alt', compact('services', 'sectors'));
    }
}

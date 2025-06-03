<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServicesController;


Route::get('/', [HomeController::class, 'index']);

Route::get('home-2', function () {
    $services = \App\Models\Service::all();
    return view('home-2', compact('services'));
});

Route::get('/process', function () {
    $services = \App\Models\Service::all();
    return view('process.index', compact('services'));
});

Route::get('/services', [ServicesController::class, 'index'])->name('services.index');

Route::get('document-archiving', function () {
    $currentService = \App\Models\Service::where('title', 'Storage')->first();
    $otherServices = \App\Models\Service::where('title', '!=', 'Storage')->get();
    $sectors = json_decode(file_get_contents(public_path('data/sectors.json')), true);
    return view('services.document-archiving', compact('currentService', 'otherServices', 'sectors'));
});

Route::get('document-scanning', function () {
    $currentService = \App\Models\Service::where('title', 'Scanning')->first();
    $otherServices = \App\Models\Service::where('title', '!=', 'Scanning')->get();
    $sectors = json_decode(file_get_contents(public_path('data/sectors.json')), true);
    return view('services.document-scanning', compact('currentService', 'otherServices', 'sectors'));
});

Route::get('document-shredding', function () {
    $currentService = \App\Models\Service::where('title', 'Destruction')->first();
    $otherServices = \App\Models\Service::where('title', '!=', 'Destruction')->get();
    $sectors = json_decode(file_get_contents(public_path('data/sectors.json')), true);
    return view('services.document-shredding', compact('currentService', 'otherServices', 'sectors'));
});

Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

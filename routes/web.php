<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ServiceFormController;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\LegalController;

Route::get('/', [HomeController::class, 'index']);

Route::get('home-2', function () {
    $services = \App\Models\Service::all();
    return view('home-2', compact('services'));
});

Route::get('/process', function () {
    $services = \App\Models\Service::all();
    $sectors = json_decode(file_get_contents(public_path('data/sectors.json')), true);
    return view('process.index', compact('services', 'sectors'));
});

Route::get('/services', [ServicesController::class, 'index'])->name('services.index');

Route::get('document-archiving', [ServicesController::class, 'showArchiving'])->name('services.archiving');
Route::get('document-scanning', [ServicesController::class, 'showScanning'])->name('services.scanning');
Route::get('document-shredding', [ServicesController::class, 'showShredding'])->name('services.shredding');

Route::post('service-form', [ServiceFormController::class, 'submit'])->name('service.form.submit');

Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');


Route::prefix('legal')->group(function () {
    Route::get('/terms', [LegalController::class, 'terms'])->name('legal.terms');
    Route::get('/privacy', [LegalController::class, 'privacy'])->name('legal.privacy');
    Route::get('/cookie', [LegalController::class, 'cookie'])->name('legal.cookie');
    Route::get('/compliance', [LegalController::class, 'compliance'])->name('legal.compliance');
});

<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\View\View;

class ServicesController extends Controller
{

    private function getServiceQuestions(string $title): array
    {
        return match ($title) {
            'Storage' => [
                ['text' => 'Are you running out of space in your current office for document archives?'],
                ['text' => 'Do you have physical documents that require secure, off-site storage?'],
                ['text' => 'Do you need to retain documents for regulatory or historical purposes, but rarely access them?'],
            ],
            'Scanning' => [
                ['text' => 'Do you have a large volume of paper documents you wish to convert to digital format?'],
                ['text' => 'Would having searchable digital versions of your documents improve your operational efficiency?']
            ],
            'Destruction' => [
                ['text' => 'Do you have sensitive or confidential documents that need to be securely disposed of?'],
                ['text' => 'Are you concerned about complying with data protection regulations when discarding documents?'],
                ['text' => 'Do you want assurance that your documents are destroyed beyond recovery?'],
                ['text' => 'Do you require a Certificate of Destruction as proof of secure disposal?']
            ],
            default => []
        };
    }

    public function index(): View
    {
        $services = Service::orderBy('order')->get();
        foreach ($services as $service) {
            $service->questions = json_encode($this->getServiceQuestions($service->title));
        }
        $sectors = json_decode(file_get_contents(public_path('data/sectors.json')), true);
        return view('services.index', compact('services', 'sectors'));
    }

    public function showArchiving(): View
    {
        $currentService = Service::where('title', 'Storage')->first();
        $currentService->questions = json_encode($this->getServiceQuestions($currentService->title));
        $otherServices = Service::where('title', '!=', 'Storage')->get();
        $sectors = json_decode(file_get_contents(public_path('data/sectors.json')), true);
        $services = Service::all();
        return view('services.document-archiving', compact('currentService', 'otherServices', 'sectors', 'services'));
    }

    public function showScanning(): View
    {
        $currentService = Service::where('title', 'Scanning')->first();
        $currentService->questions = json_encode($this->getServiceQuestions($currentService->title));
        $otherServices = Service::where('title', '!=', 'Scanning')->get();
        $sectors = json_decode(file_get_contents(public_path('data/sectors.json')), true);
        $services = Service::all();
        return view('services.document-scanning', compact('currentService', 'otherServices', 'sectors', 'services'));
    }

    public function showShredding(): View
    {
        $currentService = Service::where('title', 'Destruction')->first();
        $currentService->questions = json_encode($this->getServiceQuestions($currentService->title));
        $otherServices = Service::where('title', '!=', 'Destruction')->get();
        $sectors = json_decode(file_get_contents(public_path('data/sectors.json')), true);
        $services = Service::all();
        return view('services.document-shredding', compact('currentService', 'otherServices', 'sectors', 'services'));
    }
}

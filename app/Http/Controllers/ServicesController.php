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
                ['text' => 'Are you running out of space to store physical documents?'],
                ['text' => 'Do you need quick access to your archived files when needed?'],
            ],
            'Scanning' => [
                ['text' => 'Do you have critical documents that should be digitized'],
                ['text' => 'Is it difficult to search and retrieve specific documents in your current system?']
            ],
            'Destruction' => [
                ['text' => 'Do you have sensitive documents that need to be destroyed?'],
                ['text' => 'Are you looking for a safe and compliant way to dispose of documents?'],
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

    public function showPDPCCompliance(): View
    {
        $sectors = json_decode(file_get_contents(public_path('data/sectors.json')), true);
        $services = Service::all();
        return view('services.pdpc-compliance', compact('sectors', 'services'));
    }
}

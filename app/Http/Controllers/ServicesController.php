<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use App\Mail\PDPCDownloadMail;

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

    public function showPDPCComplianceAlt(): View
    {
        $sectors = json_decode(file_get_contents(public_path('data/sectors.json')), true);
        $services = Service::all();
        return view('services.pdpc-compliance-alt', compact('sectors', 'services'));
    }

    public function downloadPDPC(Request $request)
    {
        // Validate email
        $validatedData = $request->validate([
            'email' => 'required|email|max:255',
        ]);

        try {
            $email = $validatedData['email'];
            $filePath = public_path('img/pdpc/PDPA Awareness Attachment.pdf');
            
            // Check if file exists
            if (!file_exists($filePath)) {
                Log::error('PDPC file not found: ' . $filePath);
                if ($request->ajax() || $request->wantsJson()) {
                    return response()->json([
                        'success' => false,
                        'message' => 'File not found. Please contact us.'
                    ], 404);
                }
                return back()->with('error', 'File not found. Please contact us.');
            }

            // Send email notification
            try {
                Mail::to('clientservices@arkhive.africa')
                    ->send(new PDPCDownloadMail($email));
                Log::info('PDPC download notification sent', ['email' => $email]);
            } catch (\Exception $mailException) {
                Log::error('Failed to send PDPC download email: ' . $mailException->getMessage());
                // Continue with download even if email fails
            }

            // For AJAX requests, return file as blob
            if ($request->ajax() || $request->wantsJson()) {
                $fileContent = file_get_contents($filePath);
                return response($fileContent)
                    ->header('Content-Type', 'application/pdf')
                    ->header('Content-Disposition', 'attachment; filename="PDPA-Awareness-Guide.pdf"')
                    ->header('Content-Length', filesize($filePath));
            }

            // For direct requests, return download response
            return response()->download($filePath, 'PDPA-Awareness-Guide.pdf', [
                'Content-Type' => 'application/pdf',
            ]);

        } catch (\Exception $e) {
            Log::error('PDPC download error: ' . $e->getMessage());
            if ($request->ajax() || $request->wantsJson()) {
                return response()->json([
                    'success' => false,
                    'message' => 'An error occurred. Please try again later.'
                ], 500);
            }
            return back()->with('error', 'An error occurred. Please try again later.');
        }
    }
}

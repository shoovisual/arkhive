<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        $services = [

            [
                'title' => 'Scanning',
                'sub_1' => 'Digital',
                'sub_2' => null,
                'full_title' => 'Digital Scanning',
                'description' => 'Efficient document scanning and indexing solutions',
                'cover_image' => '/img/services/scanning-cover.webp',
                'service_icon' => '/img/services/icons/scanning.svg',
                'image_path' => '/img/services/scanning.webp',
                'url' => '/document-scanning',
                'order' => 3,
                'sub_services' => json_encode([
                    [
                        'title' => 'Bulk Document Scanning',
                        'description' => 'High-volume document scanning services with OCR technology',
                        'features' => [
                            'Digitizes paper records and captures data (off or on-site).',
                            'Uses industry-leading scanning technology.',
                            'Delivers in your preferred format.',
                            'Heavy-duty scanners handle up to 10,000 pages daily.',
                            'Allows for centralized and organized information.',
                        ]
                    ],
                    [
                        'title' => 'Professional Indexing',
                        'description' => 'Professional indexing services for easy document retrieval and management',
                        'features' => [
                            'ARKHIVE will advise and index your digitized records in line with your search and access requirements, giving you the ability to pull up a record in minutes.',
                        ]
                    ]
                ])
            ],
            [
                'title' => 'Storage',
                'sub_1' => 'Document',
                'sub_2' => null,
                'full_title' => 'Document Storage',
                'description' => 'Professional document archiving and retrieval services',
                'cover_image' => '/img/services/archiving-cover.webp',
                'image_path' => '/img/services/archiving.webp',
                'service_icon' => '/img/services/icons/archive.svg',
                'url' => '/document-archiving',
                'order' => 2,
                'sub_services' => json_encode([
                    [
                        'title' => 'Document Archiving',
                        'description' => 'Secure storage facilities for your physical documents with climate control and fire protection',
                        'features' => [
                            'Archiving is complex—ARKHIVE provides expert systematization and secure record safeguarding.',
                            'Our warehouse includes fire and climate control, CCTV, and 24/7 armed security access monitoring.                    ',
                            'Documents are sorted, indexed, boxed, barcoded, and securely managed by our trained professionals.',
                            'We operate with O’NEIL, a globally trusted system for reliable records and inventory management.',
                            'We ensure compliance with TRA, BOT, TIRA, legal standards, and Personal Data Protection laws.',
                        ]
                    ],
                    [
                        'title' => 'Document Retrieval',
                        'description' => 'Cloud-based digital storage solutions with advanced encryption and backup systems',
                        'features' => [
                            'Our systems ensure fast and efficient retrieval, with secure delivery by our own trusted couriers.',
                            'We retrieve, scan, encrypt, and email your documents securely—whenever you need them.',
                            'Our team is available to respond to your document requests at any time of day.',
                            'All retrievals and returns are strictly tracked, verified, and signed off at every stage.',
                        ]
                    ]
                ])
            ],
            [
                'title' => 'Destruction',
                'sub_1' => 'Document',
                'sub_2' => 'Certified',
                'full_title' => 'Document Destruction Certified',
                'description' => 'Secure document shredding and recycling services',
                'cover_image' => '/img/services/shredding.webp',
                'service_icon' => '/img/services/icons/shredding.svg',
                'image_path' => '/img/services/shredding.webp',
                'url' => '/document-shredding',
                'order' => 1,
                'sub_services' => json_encode([
                    [
                        'title' => 'Secure Shredding',
                        'description' => 'Confidential document destruction with certified security protocols',
                        'features' => [
                            'Cross-cut shredding technology',
                            'Certificate of destruction',
                            'On-site shredding service',
                            'Secure collection bins'
                        ]
                    ],
                    [
                        'title' => 'Document Recycling',
                        'description' => 'Environmentally responsible document disposal and recycling services',
                        'features' => [
                            'Eco-friendly processing',
                            'Recycling certification',
                            'Bulk paper recycling',
                            'Sustainable practices'
                        ]
                    ]
                ])
            ]
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}

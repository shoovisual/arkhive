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
                            'Managing an archive is a major and complex task for any business.',
                            'In allowing ARKHIVE as specialists to handle this function on your behalf, you can be sure that your records are systematized and safeguarded on a professional level.',
                            'Our document storage warehouse is specifically set up with industry specific shelving, fire control, climate control and access control. It is in a gated compound with 24/7 armed security, CCTV and intruder alarm. Access is strictly monitored.',
                            'Our staff are trained in sorting, indexing, boxing and barcoding for effective search and retrieving, as well as for disposal.',
                            'Documents are managed with our globally renowned record management system, O’NEIL.',
                            'We ensure you stay compliant with regulations by TRA, BOT, TIRA, legal system and the Personal Data Protection (Collection and Processing of Personal Data) regulations.',
                        ]
                    ],
                    [
                        'title' => 'Document Retrieval',
                        'description' => 'Cloud-based digital storage solutions with advanced encryption and backup systems',
                        'features' => [
                            'Our systems are set up to make retrieval of your documents quick and efficient. We use our own couriers to securely deliver your documents.',
                            'We also retrieve, scan, encrypt and email required documents as you need them.',
                            'We can respond to your requests at any time of day.',
                            'Retrievals and returns are strictly controlled and tracked end to end and signed off at each point.'
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

<?php

namespace App\Console\Commands;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;
use Illuminate\Console\Command;

class GenerateSitemap extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:sitemap';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate a sitemap for the application';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Sitemap::create()
        ->add(Url::create('/'))
        ->add(Url::create('/about'))
        ->add(Url::create('/contact'))
        ->add(Url::create('/services'))
        ->add(Url::create('/document-shredding'))
        ->add(Url::create('/document-scanning'))
        ->add(Url::create('/document-archiving'))
        ->add(Url::create('/process'))
        ->writeToFile(public_path('sitemap.xml'));
    $this->info('Sitemap generated successfully!');
    }
}

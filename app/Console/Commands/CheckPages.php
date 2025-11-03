<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CheckPages extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:check-pages';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Checking Pages...');

        $pages = \App\Models\Page::all();
        $this->info('Total pages: ' . $pages->count());

        foreach ($pages as $page) {
            $status = $page->is_active ? 'Active' : 'Inactive';
            $this->line("{$page->slug}: {$page->title} ({$status})");
        }
    }
}

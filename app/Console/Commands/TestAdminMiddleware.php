<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class TestAdminMiddleware extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:test-admin-middleware';

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
        $this->info('Testing AdminMiddleware...');

        // Test with admin user
        $adminUser = \App\Models\User::where('role', 'admin')->first();
        if ($adminUser) {
            $this->info("Admin user found: {$adminUser->name}");
            $this->info("isAdmin(): " . ($adminUser->isAdmin() ? 'true' : 'false'));
        } else {
            $this->error('No admin user found!');
        }

        // Test with regular user
        $regularUser = \App\Models\User::where('role', 'user')->first();
        if ($regularUser) {
            $this->info("Regular user found: {$regularUser->name}");
            $this->info("isAdmin(): " . ($regularUser->isAdmin() ? 'true' : 'false'));
        } else {
            $this->error('No regular user found!');
        }

        $this->info('Middleware test completed.');
    }
}

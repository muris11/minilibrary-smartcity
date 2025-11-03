<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class TestMiddleware extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:test-middleware';

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
        $this->info('Testing AdminMiddleware Logic...');

        $admin = \App\Models\User::where('role', 'admin')->first();
        $user = \App\Models\User::where('role', 'user')->first();

        if ($admin) {
            $this->info("Admin user: {$admin->name} - Role: {$admin->role}");
            $this->info("Should pass middleware: " . ($admin->role === 'admin' ? 'YES' : 'NO'));
        }

        if ($user) {
            $this->info("Regular user: {$user->name} - Role: {$user->role}");
            $this->info("Should pass middleware: " . ($user->role === 'admin' ? 'YES' : 'NO'));
        }
    }
}

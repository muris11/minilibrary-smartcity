<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class TestUserModel extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:test-user-model';

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
        $this->info('Testing User Model...');

        $users = \App\Models\User::all();
        $this->info('Total users: ' . $users->count());

        foreach ($users as $user) {
            $this->line("User: {$user->name} (ID: {$user->id})");
            $this->line("  Role: {$user->role}");
            $this->line("  isAdmin(): " . ($user->isAdmin() ? 'true' : 'false'));
            $this->line("  isUser(): " . ($user->isUser() ? 'true' : 'false'));
            $this->line('');
        }
    }
}

<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CheckAdminUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:check-admin-user';

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
        $this->info('Checking Admin User...');

        $admin = \App\Models\User::where('email', 'admin@example.com')->first();

        if ($admin) {
            $this->info("Admin found: {$admin->name}");
            $this->info("Email: {$admin->email}");
            $this->info("Role: {$admin->role}");
            $this->info("isAdmin(): " . ($admin->isAdmin() ? 'true' : 'false'));
        } else {
            $this->error('Admin user not found!');
            $this->info('Creating admin user...');

            \App\Models\User::create([
                'name' => 'Admin User',
                'nim' => 'ADMIN001',
                'email' => 'admin@example.com',
                'password' => \Illuminate\Support\Facades\Hash::make('password'),
                'role' => 'admin',
            ]);

            $this->info('Admin user created successfully!');
        }
    }
}

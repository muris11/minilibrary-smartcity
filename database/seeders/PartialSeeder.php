<?php

namespace Database\Seeders;

use App\Models\Partial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PartialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $partials = [
            [
                'name' => 'Introduction',
                'slug' => 'intro',
                'content' => file_get_contents(resource_path('views/partials/intro.blade.php')),
                'active' => true,
            ],
            [
                'name' => '6 Pillars',
                'slug' => 'pillars',
                'content' => file_get_contents(resource_path('views/partials/pillars.blade.php')),
                'active' => true,
            ],
            [
                'name' => 'Lampung City Challenges',
                'slug' => 'challenges',
                'content' => file_get_contents(resource_path('views/partials/challenges.blade.php')),
                'active' => true,
            ],
            [
                'name' => 'Technology',
                'slug' => 'technologies',
                'content' => file_get_contents(resource_path('views/partials/technologies.blade.php')),
                'active' => true,
            ],
            [
                'name' => 'Benefits',
                'slug' => 'benefits',
                'content' => file_get_contents(resource_path('views/partials/benefits.blade.php')),
                'active' => true,
            ],
            [
                'name' => 'Our Team',
                'slug' => 'team',
                'content' => file_get_contents(resource_path('views/partials/team.blade.php')),
                'active' => true,
            ],
            [
                'name' => 'Quiz',
                'slug' => 'quiz',
                'content' => file_get_contents(resource_path('views/partials/quiz.blade.php')),
                'active' => true,
            ],
            [
                'name' => 'Get In Touch',
                'slug' => 'contact',
                'content' => file_get_contents(resource_path('views/partials/contact.blade.php')),
                'active' => true,
            ],
        ];

        foreach ($partials as $partial) {
            Partial::updateOrCreate(
                ['slug' => $partial['slug']],
                $partial
            );
        }
    }
}

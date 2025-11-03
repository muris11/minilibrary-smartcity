<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pages = [
            [
                'slug' => 'intro',
                'title' => 'Introduction',
                'content' => '<h2>Welcome to Mini Library Smart City</h2>
<p>This is the introduction section where you can describe your smart city library project.</p>
<p>Edit this content through the admin panel to customize your introduction.</p>',
                'is_active' => true,
            ],
            [
                'slug' => 'pillars',
                'title' => '6 Pillars',
                'content' => '<h2>The 6 Pillars of Smart City</h2>
<p>Describe the six pillars that form the foundation of your smart city initiative.</p>
<ul>
<li><strong>Pillar 1:</strong> Description here</li>
<li><strong>Pillar 2:</strong> Description here</li>
<li><strong>Pillar 3:</strong> Description here</li>
<li><strong>Pillar 4:</strong> Description here</li>
<li><strong>Pillar 5:</strong> Description here</li>
<li><strong>Pillar 6:</strong> Description here</li>
</ul>',
                'is_active' => true,
            ],
            [
                'slug' => 'challenges',
                'title' => 'Lampung City Challenges',
                'content' => '<h2>Challenges Faced by Lampung City</h2>
<p>Describe the specific challenges that Lampung City faces and how your smart city solutions address them.</p>
<p>This section should highlight the problems your project aims to solve.</p>',
                'is_active' => true,
            ],
            [
                'slug' => 'technologies',
                'title' => 'Technology Solutions',
                'content' => '<h2>Technology Stack & Solutions</h2>
<p>Detail the technologies and solutions implemented in your smart city library project.</p>
<p>Include information about IoT, AI, cloud computing, and other technologies used.</p>',
                'is_active' => true,
            ],
            [
                'slug' => 'benefits',
                'title' => 'Benefits & Impact',
                'content' => '<h2>Benefits and Impact</h2>
<p>Explain the benefits and positive impact of your smart city library project.</p>
<p>Cover aspects like improved efficiency, cost savings, environmental benefits, and quality of life improvements.</p>',
                'is_active' => true,
            ],
            [
                'slug' => 'team',
                'title' => 'Our Team',
                'content' => '<h2>Meet Our Team</h2>
<p>Introduce the team members behind this smart city library project.</p>
<p>Include information about team members, their roles, and expertise.</p>',
                'is_active' => true,
            ],
            [
                'slug' => 'quiz',
                'title' => 'Knowledge Quiz',
                'content' => '<h2>Test Your Knowledge</h2>
<p>Take our interactive quiz to test your understanding of smart city concepts and our library project.</p>
<p>The quiz covers topics related to smart cities, IoT, and sustainable urban development.</p>',
                'is_active' => true,
            ],
        ];

        foreach ($pages as $page) {
            \App\Models\Page::create($page);
        }
    }
}

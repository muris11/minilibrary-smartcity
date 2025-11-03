<?php

namespace Database\Seeders;

use App\Models\TeamMember;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamMemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teamMembers = [
            [
                'name' => 'Dr. Ahmad Rahman',
                'position' => 'Project Director',
                'description' => 'Experienced urban planner with over 15 years in smart city development. Leads the strategic direction and implementation of innovative urban solutions.',
                'skills' => ['Urban Planning', 'Project Management', 'Strategic Leadership', 'Smart City Development'],
                'image' => null, // Will be uploaded by admin
                'sort_order' => 1,
                'is_active' => true,
            ],
            [
                'name' => 'Siti Nurhaliza',
                'position' => 'IoT Specialist',
                'description' => 'Technology expert specializing in Internet of Things implementations. Manages sensor networks and data analytics for urban infrastructure monitoring.',
                'skills' => ['IoT Systems', 'Sensor Networks', 'Data Analytics', 'Embedded Systems'],
                'image' => null,
                'sort_order' => 2,
                'is_active' => true,
            ],
            [
                'name' => 'Budi Santoso',
                'position' => 'Data Analyst',
                'description' => 'Data scientist focused on urban analytics and predictive modeling. Transforms raw data into actionable insights for city management.',
                'skills' => ['Data Analysis', 'Predictive Modeling', 'Machine Learning', 'Urban Analytics'],
                'image' => null,
                'sort_order' => 3,
                'is_active' => true,
            ],
            [
                'name' => 'Maya Sari',
                'position' => 'Community Liaison',
                'description' => 'Community engagement specialist ensuring resident participation in smart city initiatives. Bridges the gap between technology and community needs.',
                'skills' => ['Community Engagement', 'Stakeholder Relations', 'Public Relations', 'Communication'],
                'image' => null,
                'sort_order' => 4,
                'is_active' => true,
            ],
            [
                'name' => 'Rizki Pratama',
                'position' => 'Software Developer',
                'description' => 'Full-stack developer creating user-friendly interfaces for smart city applications. Specializes in web technologies and mobile app development.',
                'skills' => ['Full-Stack Development', 'Web Technologies', 'Mobile Apps', 'UI/UX Design'],
                'image' => null,
                'sort_order' => 5,
                'is_active' => true,
            ],
        ];

        foreach ($teamMembers as $member) {
            TeamMember::create($member);
        }
    }
}

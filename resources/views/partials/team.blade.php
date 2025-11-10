<!-- Team Members Section -->
<div id="team" class="section">
    <div class="content-card">
        <div class="card-header">
            <h1>Our Teammm</h1>
            <p class="card-subtitle">Meet our dedicated team of experts working on Smart City innovations and research
            </p>
        </div>

        <div class="team-stats-grid">
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="bi bi-people-fill"></i>
                </div>
                <div class="stat-content">
                    <h3>{{ \App\Models\TeamMember::active()->count() }}</h3>
                    <p>Team Members</p>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="bi bi-clock-history"></i>
                </div>
                <div class="stat-content">
                    <h3>15+</h3>
                    <p>Years Experience</p>
                </div>
            </div>
        </div>
    </div>

    <div class="content-card">
        <div class="card-header">
            <h2>Team Members</h2>
        </div>

        @php
            $teamMembers = \App\Models\TeamMember::active()->ordered()->get();
        @endphp

        @if ($teamMembers->count() > 0)
            <div class="team-members-grid">
                @foreach ($teamMembers as $member)
                    <div class="member-card">
                        <div class="member-image">
                            @if ($member->image)
                                <img src="{{ asset($member->image) }}" alt="{{ $member->name }}">
                            @else
                                <div class="member-placeholder">
                                    <i class="bi bi-person-circle"></i>
                                </div>
                            @endif
                        </div>
                        <div class="member-content">
                            <h3>{{ $member->name }}</h3>
                            <p class="member-position">{{ $member->position ?? 'Team Member' }}</p>
                            <p class="member-description">
                                {{ $member->description ?? 'Dedicated professional contributing to smart city initiatives.' }}
                            </p>
                            <div class="member-skills">
                                @if ($member->skills && count($member->skills) > 0)
                                    @foreach ($member->skills as $skill)
                                        <span class="skill-tag">{{ $skill }}</span>
                                    @endforeach
                                @else
                                    <span class="skill-tag">Smart City</span>
                                    <span class="skill-tag">Innovation</span>
                                    <span class="skill-tag">Technology</span>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="empty-state">
                <div class="empty-icon">
                    <i class="bi bi-people"></i>
                </div>
                <h3>No Team Members Yet</h3>
                <p>Team members will be displayed here once added by administrators.</p>
            </div>
        @endif
    </div>
</div>

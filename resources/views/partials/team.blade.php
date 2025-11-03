<!-- Team Members Section -->
<div id="team" class="section">
    <div class="card">
        <h1>Our Team</h1>
        <p style="text-align: center; font-size: 1.125rem; color: var(--text-secondary); margin-bottom: 2rem;">
            Meet our dedicated team of experts working on Smart City innovations and research.
        </p>
    </div>

    <div class="team-grid">
        <div class="team-card modern-card">
            <div class="team-content">
                <div class="stat-icon">
                    <i class="bi bi-people-fill"></i>
                </div>
                <h3>{{ \App\Models\TeamMember::active()->count() }}</h3>
                <p class="role">Team Members</p>
                <p class="description">
                    Our dedicated team of experts working on Smart City innovations and research.
                </p>
                <div class="skills">
                    <span class="skill-tag">Smart City</span>
                    <span class="skill-tag">Innovation</span>
                    <span class="skill-tag">Technology</span>
                </div>
            </div>
        </div>
        <div class="team-card modern-card">
            <div class="team-content">
                <div class="stat-icon">
                    <i class="bi bi-clock-history"></i>
                </div>
                <h3>15+</h3>
                <p class="role">Years Experience</p>
                <p class="description">
                    Combined experience in smart infrastructure development and IoT implementation.
                </p>
                <div class="skills">
                    <span class="skill-tag">Urban Tech</span>
                    <span class="skill-tag">Innovation</span>
                    <span class="skill-tag">Sustainability</span>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="team-grid">
            @php
                $teamMembers = \App\Models\TeamMember::active()->ordered()->get();
                // Debug: tampilkan data untuk memastikan query bekerja
                // echo '<pre style="background:#f8f9fa;padding:10px;margin:10px;border:1px solid #dee2e6;">' . json_encode($teamMembers->toArray(), JSON_PRETTY_PRINT) . '</pre>';
            @endphp

            @forelse($teamMembers as $member)
                <!-- Team Member {{ $member->id }} -->
                <div class="team-card">
                    <div class="team-image">
                        @if ($member->image)
                            <img src="{{ asset($member->image) }}" alt="{{ $member->name }}">
                        @else
                            <div class="no-image-placeholder">
                                <i class="bi bi-person-circle"></i>
                            </div>
                        @endif
                    </div>
                    <div class="team-content">
                        <h3>{{ $member->name }}</h3>
                        <p class="role">{{ $member->position ?? 'Team Member' }}</p>
                        <p class="description">
                            {{ $member->description ?? 'Dedicated professional contributing to smart city initiatives.' }}
                        </p>
                        <div class="skills">
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
            @empty
                <div class="col-12">
                    <div class="text-center py-5">
                        <i class="bi bi-people" style="font-size: 3rem; color: var(--text-light);"></i>
                        <p class="mt-3 text-muted">Team members will be displayed here once added by administrators.</p>
                    </div>
                </div>
            @endforelse
        </div>
    </div>
</div>

<div class="card">
    <div class="contact-section">
        <h2>Get In Touch</h2>
        <p>Interested in collaborating with our team? We'd love to hear from you.</p>
        <div class="contact-info">
            <div class="contact-item">
                <i class="bi bi-envelope"></i>
                <span>team@smartcitylibrary.com</span>
            </div>
            <div class="contact-item">
                <i class="bi bi-telephone"></i>
                <span>+62 123 456 7890</span>
            </div>
            <div class="contact-item">
                <i class="bi bi-geo-alt"></i>
                <span>Lampung, Indonesia</span>
            </div>
        </div>
    </div>
</div>
</div>

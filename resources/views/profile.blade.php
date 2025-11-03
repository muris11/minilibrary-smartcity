@extends('layout.app')

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/profile-settings.css') }}">
@endpush

@section('content')
    <div class="profile-settings-page">
        <!-- Profile Header -->
        <div class="profile-header">
            <div class="profile-avatar">
                <img src="https://ui-avatars.com/api/?name={{ urlencode(auth()->user()->name) }}&background=1976d2&color=fff&size=120"
                    alt="Profile Avatar">
            </div>
            <h1 class="profile-name">{{ auth()->user()->name }}</h1>
            <p class="profile-email">{{ auth()->user()->email }}</p>
            <div class="profile-stats">
                <div class="stat-item">
                    <span class="stat-number">{{ auth()->user()->created_at->diffForHumans() }}</span>
                    <span class="stat-label">Member Since</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number">{{ auth()->user()->created_at->format('M Y') }}</span>
                    <span class="stat-label">Joined</span>
                </div>
            </div>
        </div>

        <!-- Profile Information Card -->
        <div class="settings-card">
            <div class="settings-card-header">
                <div class="settings-card-icon">👤</div>
                <div>
                    <h2 class="settings-card-title">Profile Information</h2>
                    <p class="settings-card-description">Your personal information and account details</p>
                </div>
            </div>
            <div class="profile-info">
                <div class="info-item">
                    <span class="info-label">Full Name</span>
                    <span class="info-value">{{ auth()->user()->name }}</span>
                </div>
                <div class="info-item">
                    <span class="info-label">Email Address</span>
                    <span class="info-value">{{ auth()->user()->email }}</span>
                </div>
                <div class="info-item">
                    <span class="info-label">Account Created</span>
                    <span class="info-value">{{ auth()->user()->created_at->format('F j, Y \a\t g:i A') }}</span>
                </div>
                <div class="info-item">
                    <span class="info-label">Last Updated</span>
                    <span class="info-value">{{ auth()->user()->updated_at->format('F j, Y \a\t g:i A') }}</span>
                </div>
                <div class="info-item">
                    <span class="info-label">Account Status</span>
                    <span class="info-value" style="color: var(--profile-success)">Active</span>
                </div>
            </div>
        </div>

        <!-- Quick Actions Card -->
        <div class="settings-card">
            <div class="settings-card-header">
                <div class="settings-card-icon">🚀</div>
                <div>
                    <h2 class="settings-card-title">Quick Actions</h2>
                    <p class="settings-card-description">Common account management tasks</p>
                </div>
            </div>
            <div class="form-actions">
                <a href="{{ route('setting') }}" class="btn btn-primary">
                    <i>⚙️</i>
                    Edit Profile
                </a>
                <a href="{{ route('setting') }}" class="btn btn-secondary">
                    <i>🔒</i>
                    Change Password
                </a>
                <a href="{{ route('dashboard') }}" class="btn btn-secondary">
                    <i>🏠</i>
                    Back to Dashboard
                </a>
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/profile-settings.css') }}">
@endpush

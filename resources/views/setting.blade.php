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
                    <span class="stat-number">Active</span>
                    <span class="stat-label">Status</span>
                </div>
            </div>
        </div>

        @if (session('success'))
            <div class="alert alert-success">
                <i class="alert-icon">✓</i>
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-error">
                <i class="alert-icon">⚠️</i>
                <ul style="margin: 0; padding-left: 1rem;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Update Profile Card -->
        <div class="settings-card">
            <div class="settings-card-header">
                <div class="settings-card-icon">👤</div>
                <div>
                    <h2 class="settings-card-title">Update Profile</h2>
                    <p class="settings-card-description">Keep your personal information up to date</p>
                </div>
            </div>
            <form method="POST" action="{{ route('profile.update') }}" class="profile-form">
                @csrf
                <div class="form-row">
                    <div class="form-group">
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text" id="name" name="name" class="form-input"
                            value="{{ old('name', auth()->user()->name) }}" required placeholder="Enter your full name">
                    </div>
                    <div class="form-group">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" id="email" name="email" class="form-input"
                            value="{{ old('email', auth()->user()->email) }}" required
                            placeholder="Enter your email address">
                    </div>
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">
                        <i>💾</i>
                        Save Changes
                    </button>
                    <a href="{{ route('profile') }}" class="btn btn-secondary">
                        <i>👁️</i>
                        View Profile
                    </a>
                </div>
            </form>
        </div>

        <!-- Change Password Card -->
        <div class="settings-card">
            <div class="settings-card-header">
                <div class="settings-card-icon">🔒</div>
                <div>
                    <h2 class="settings-card-title">Change Password</h2>
                    <p class="settings-card-description">Update your password to keep your account secure</p>
                </div>
            </div>
            <form method="POST" action="{{ route('password.change') }}" class="profile-form">
                @csrf
                <div class="form-group">
                    <label for="current_password" class="form-label">Current Password</label>
                    <input type="password" id="current_password" name="current_password" class="form-input" required
                        placeholder="Enter your current password">
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="password" class="form-label">New Password</label>
                        <input type="password" id="password" name="password" class="form-input" required
                            placeholder="Enter new password" minlength="8">
                        <div class="password-strength">
                            <div class="strength-meter">
                                <div class="strength-fill" id="password-strength-fill"></div>
                            </div>
                            <span class="strength-text" id="password-strength-text">Password strength</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation" class="form-label">Confirm New Password</label>
                        <input type="password" id="password_confirmation" name="password_confirmation" class="form-input"
                            required placeholder="Confirm new password">
                    </div>
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn btn-success">
                        <i>🔒</i>
                        Update Password
                    </button>
                    <button type="button" class="btn btn-secondary" onclick="generatePassword()">
                        <i>🎲</i>
                        Generate Strong Password
                    </button>
                </div>
            </form>
        </div>

        <!-- Account Management Card -->
        <div class="settings-card">
            <div class="settings-card-header">
                <div class="settings-card-icon">⚠️</div>
                <div>
                    <h2 class="settings-card-title">Account Management</h2>
                    <p class="settings-card-description">Danger zone - irreversible actions</p>
                </div>
            </div>
            <div
                style="background: rgba(239, 68, 68, 0.05); border: 1px solid rgba(239, 68, 68, 0.2); border-radius: var(--profile-radius); padding: 1rem; margin-bottom: 1rem;">
                <h4 style="color: var(--profile-error); margin: 0 0 0.5rem 0;">Delete Account</h4>
                <p style="color: var(--profile-text-secondary); margin: 0; font-size: 0.9rem;">
                    Once you delete your account, there is no going back. Please be certain.
                </p>
            </div>

            <!-- Delete Account Form -->
            <div id="delete-account-form" style="display: none; margin-bottom: 1rem;">
                <form method="POST" action="{{ route('account.delete') }}"
                    onsubmit="return confirm('Are you sure you want to delete your account? This action cannot be undone.')">
                    @csrf
                    @method('DELETE')
                    <div class="form-group">
                        <label for="delete_current_password" class="form-label"
                            style="color: var(--profile-error);">Confirm Current Password</label>
                        <input type="password" id="delete_current_password" name="current_password" class="form-input"
                            required placeholder="Enter your current password to confirm">
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-danger">
                            <i>🗑️</i>
                            Yes, Delete My Account
                        </button>
                        <button type="button" class="btn btn-secondary" onclick="hideDeleteForm()">
                            <i>❌</i>
                            Cancel
                        </button>
                    </div>
                </form>
            </div>

            <div class="form-actions">
                <button type="button" class="btn btn-danger" onclick="showDeleteForm()">
                    <i>🗑️</i>
                    Delete Account
                </button>
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

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Password strength checker
            const passwordInput = document.getElementById('password');
            const strengthFill = document.getElementById('password-strength-fill');
            const strengthText = document.getElementById('password-strength-text');

            passwordInput.addEventListener('input', function() {
                const password = this.value;
                let strength = 0;
                let feedback = [];

                if (password.length >= 8) strength++;
                if (/[a-z]/.test(password)) strength++;
                if (/[A-Z]/.test(password)) strength++;
                if (/[0-9]/.test(password)) strength++;
                if (/[^A-Za-z0-9]/.test(password)) strength++;

                strengthFill.className = 'strength-fill';

                if (strength <= 2) {
                    strengthFill.classList.add('weak');
                    strengthText.textContent = 'Weak password';
                    strengthText.style.color = 'var(--profile-error)';
                } else if (strength <= 3) {
                    strengthFill.classList.add('medium');
                    strengthText.textContent = 'Medium password';
                    strengthText.style.color = 'var(--profile-warning)';
                } else {
                    strengthFill.classList.add('strong');
                    strengthText.textContent = 'Strong password';
                    strengthText.style.color = 'var(--profile-success)';
                }
            });

            // Password confirmation validation
            const confirmPassword = document.getElementById('password_confirmation');
            confirmPassword.addEventListener('input', function() {
                if (this.value !== passwordInput.value) {
                    this.setCustomValidity('Passwords do not match');
                } else {
                    this.setCustomValidity('');
                }
            });
        });

        function generatePassword() {
            const chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*';
            let password = '';
            for (let i = 0; i < 12; i++) {
                password += chars.charAt(Math.floor(Math.random() * chars.length));
            }
            document.getElementById('password').value = password;
            document.getElementById('password_confirmation').value = password;

            // Trigger password strength check
            document.getElementById('password').dispatchEvent(new Event('input'));
        }

        function showDeleteForm() {
            document.getElementById('delete-account-form').style.display = 'block';
        }

        function hideDeleteForm() {
            document.getElementById('delete-account-form').style.display = 'none';
        }
    </script>
@endpush

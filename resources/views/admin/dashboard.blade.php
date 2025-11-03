@extends('layout.app')

@section('content')
    <div class="admin-dashboard">
        <div class="admin-header">
            <h1>Admin Dashboard</h1>
            <p>Manage users and system settings</p>
        </div>

        <div class="admin-stats">
            <div class="stat-card">
                <div class="stat-icon">👥</div>
                <div class="stat-info">
                    <h3>{{ $totalUsers }}</h3>
                    <p>Total Users</p>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">👑</div>
                <div class="stat-info">
                    <h3>{{ $adminUsers }}</h3>
                    <p>Admin Users</p>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">👤</div>
                <div class="stat-info">
                    <h3>{{ $regularUsers }}</h3>
                    <p>Regular Users</p>
                </div>
            </div>
        </div>

        <div class="admin-actions">
            <a href="{{ route('admin.users') }}" class="admin-btn">
                <i>👥</i>
                Manage Users
            </a>
            <a href="{{ route('admin.pages') }}" class="admin-btn">
                <i>📄</i>
                Manage Pages
            </a>
            <a href="{{ route('dashboard') }}" class="admin-btn secondary">
                <i>🏠</i>
                Back to Dashboard
            </a>
        </div>
    </div>
@endsection

@push('styles')
    <style>
        .admin-dashboard {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem 1rem;
        }

        .admin-header {
            text-align: center;
            margin-bottom: 3rem;
        }

        .admin-header h1 {
            font-size: 2.5rem;
            color: var(--primary-color);
            margin-bottom: 0.5rem;
        }

        .admin-header p {
            font-size: 1.1rem;
            color: var(--text-color);
            opacity: 0.8;
        }

        .admin-stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .stat-card {
            background: var(--card-bg);
            border-radius: var(--profile-radius-lg);
            padding: 2rem;
            box-shadow: var(--profile-shadow);
            display: flex;
            align-items: center;
            gap: 1.5rem;
            transition: transform 0.3s ease;
        }

        .stat-card:hover {
            transform: translateY(-5px);
        }

        .stat-icon {
            font-size: 3rem;
            opacity: 0.8;
        }

        .stat-info h3 {
            font-size: 2.5rem;
            color: var(--primary-color);
            margin: 0;
            font-weight: 700;
        }

        .stat-info p {
            margin: 0.5rem 0 0 0;
            color: var(--text-color);
            opacity: 0.7;
            font-weight: 500;
        }

        .admin-actions {
            display: flex;
            gap: 1rem;
            justify-content: center;
            flex-wrap: wrap;
        }

        .admin-btn {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 1rem 2rem;
            background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
            color: white;
            text-decoration: none;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(25, 118, 210, 0.2);
        }

        .admin-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(25, 118, 210, 0.3);
        }

        .admin-btn.secondary {
            background: linear-gradient(135deg, #6c757d, #495057);
        }

        .admin-btn.secondary:hover {
            box-shadow: 0 6px 20px rgba(108, 117, 125, 0.3);
        }

        @media (max-width: 768px) {
            .admin-stats {
                grid-template-columns: 1fr;
                gap: 1rem;
            }

            .stat-card {
                padding: 1.5rem;
            }

            .admin-actions {
                flex-direction: column;
                align-items: center;
            }

            .admin-btn {
                width: 100%;
                max-width: 300px;
                justify-content: center;
            }
        }
    </style>
@endpush

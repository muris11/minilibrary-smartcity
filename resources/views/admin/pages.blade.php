@extends('layout.app')

@section('content')
    <div class="admin-pages">
        <div class="admin-header">
            <h1>Page Management</h1>
            <p>Edit website content and pages</p>
        </div>

        @if (session('success'))
            <div class="alert alert-success">
                <i class="alert-icon">✓</i>
                {{ session('success') }}
            </div>
        @endif

        <div class="pages-container">
            <div class="pages-grid">
                @foreach ($pages as $page)
                    <div class="page-card">
                        <div class="page-header">
                            <h3>{{ $page->title }}</h3>
                            <span class="page-slug">{{ $page->slug }}</span>
                        </div>
                        <div class="page-content">
                            <p>{{ Str::limit(strip_tags($page->content), 150) }}</p>
                        </div>
                        <div class="page-actions">
                            <a href="{{ route('admin.pages.edit', $page) }}" class="action-btn edit">
                                <i>✏️</i>
                                Edit
                            </a>
                            <span class="status {{ $page->is_active ? 'active' : 'inactive' }}">
                                {{ $page->is_active ? 'Active' : 'Inactive' }}
                            </span>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="admin-actions">
            <a href="{{ route('admin.dashboard') }}" class="admin-btn secondary">
                <i>⬅️</i>
                Back to Dashboard
            </a>
        </div>
    </div>
@endsection

@push('styles')
    <style>
        .admin-pages {
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

        .pages-container {
            margin-bottom: 2rem;
        }

        .pages-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 1.5rem;
            margin-bottom: 2rem;
        }

        .page-card {
            background: var(--card-bg);
            border-radius: var(--profile-radius-lg);
            padding: 1.5rem;
            box-shadow: var(--profile-shadow);
            transition: all 0.3s ease;
            border: 1px solid var(--profile-border);
        }

        .page-card:hover {
            transform: translateY(-2px);
            box-shadow: var(--profile-shadow-lg);
        }

        .page-header {
            margin-bottom: 1rem;
        }

        .page-header h3 {
            font-size: 1.3rem;
            color: var(--primary-color);
            margin-bottom: 0.5rem;
        }

        .page-slug {
            display: inline-block;
            background: var(--primary-light);
            color: var(--primary-color);
            padding: 0.25rem 0.5rem;
            border-radius: 12px;
            font-size: 0.8rem;
            font-weight: 600;
        }

        .page-content {
            margin-bottom: 1rem;
        }

        .page-content p {
            color: var(--text-color);
            line-height: 1.5;
            opacity: 0.8;
        }

        .page-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .action-btn {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.5rem 1rem;
            border: none;
            border-radius: 20px;
            font-weight: 600;
            font-size: 0.9rem;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
        }

        .action-btn.edit {
            background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
            color: white;
        }

        .action-btn.edit:hover {
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(25, 118, 210, 0.3);
        }

        .status {
            padding: 0.25rem 0.75rem;
            border-radius: 12px;
            font-size: 0.8rem;
            font-weight: 600;
        }

        .status.active {
            background: rgba(40, 167, 69, 0.1);
            color: #28a745;
        }

        .status.inactive {
            background: rgba(108, 117, 125, 0.1);
            color: #6c757d;
        }

        .admin-actions {
            text-align: center;
        }

        .admin-btn {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.75rem 1.5rem;
            border: none;
            border-radius: 25px;
            font-weight: 600;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            background: linear-gradient(135deg, #6c757d, #495057);
            color: white;
            box-shadow: 0 4px 15px rgba(108, 117, 125, 0.2);
        }

        .admin-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(108, 117, 125, 0.3);
        }

        .alert {
            padding: 1rem 1.5rem;
            border-radius: var(--profile-radius);
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 0.75rem;
            font-weight: 500;
        }

        .alert-success {
            background: rgba(40, 167, 69, 0.1);
            color: #28a745;
            border: 1px solid rgba(40, 167, 69, 0.2);
        }

        .alert-icon {
            font-size: 1.2rem;
        }

        @media (max-width: 768px) {
            .pages-grid {
                grid-template-columns: 1fr;
            }

            .page-actions {
                flex-direction: column;
                gap: 0.5rem;
                align-items: flex-start;
            }
        }
    </style>
@endpush

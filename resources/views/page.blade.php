@extends('layout.app')

@section('content')
    <div class="page-content">
        <div class="page-container">
            <div class="page-header">
                <h1>{{ $page->title }}</h1>
                @auth
                    @if (Auth::user() && Auth::user()->role === 'admin')
                        <div class="admin-actions">
                            <a href="{{ route('admin.pages.edit', $page) }}" class="admin-edit-btn">
                                <i class="bi bi-pencil-square"></i>
                                Edit Page
                            </a>
                            <a href="{{ route('admin.pages') }}" class="admin-edit-btn secondary">
                                <i class="bi bi-list"></i>
                                All Pages
                            </a>
                        </div>
                    @endif
                @endauth
            </div>

            <div class="page-body">
                {!! $page->content !!}
            </div>

            @auth
                @if (Auth::user() && Auth::user()->role === 'admin')
                    <div class="admin-notice">
                        <i class="bi bi-info-circle"></i>
                        <span>You are viewing this page as an administrator. Regular users see the published content.</span>
                    </div>
                @endif
            @endauth
        </div>
    </div>
@endsection

@push('styles')
    <style>
        .page-content {
            max-width: 1000px;
            margin: 0 auto;
            padding: 2rem 1rem;
        }

        .page-container {
            background: var(--card-bg);
            border-radius: var(--profile-radius-lg);
            padding: 2rem;
            box-shadow: var(--profile-shadow);
        }

        .page-header {
            text-align: center;
            margin-bottom: 2rem;
            border-bottom: 2px solid var(--primary-light);
            padding-bottom: 1rem;
            position: relative;
        }

        .page-header h1 {
            font-size: 2.5rem;
            color: var(--primary-color);
            margin: 0;
        }

        .admin-actions {
            position: absolute;
            top: 0;
            right: 0;
            display: flex;
            gap: 0.5rem;
        }

        .admin-edit-btn {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.5rem 1rem;
            background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
            color: white;
            text-decoration: none;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: 600;
            transition: all 0.3s ease;
            box-shadow: 0 2px 8px rgba(25, 118, 210, 0.2);
        }

        .admin-edit-btn:hover {
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(25, 118, 210, 0.3);
        }

        .admin-edit-btn.secondary {
            background: linear-gradient(135deg, var(--secondary-color), var(--secondary-dark));
            box-shadow: 0 2px 8px rgba(108, 117, 125, 0.2);
        }

        .admin-edit-btn.secondary:hover {
            box-shadow: 0 4px 12px rgba(108, 117, 125, 0.3);
        }

        .page-body {
            line-height: 1.8;
            color: var(--text-color);
        }

        .page-body h2 {
            color: var(--primary-color);
            margin-top: 2rem;
            margin-bottom: 1rem;
            font-size: 1.8rem;
        }

        .page-body h3 {
            color: var(--primary-dark);
            margin-top: 1.5rem;
            margin-bottom: 0.75rem;
            font-size: 1.4rem;
        }

        .page-body p {
            margin-bottom: 1rem;
        }

        .page-body ul,
        .page-body ol {
            margin-bottom: 1rem;
            padding-left: 2rem;
        }

        .page-body li {
            margin-bottom: 0.5rem;
        }

        .page-body strong {
            font-weight: 600;
            color: var(--primary-dark);
        }

        .admin-notice {
            margin-top: 2rem;
            padding: 1rem;
            background: linear-gradient(135deg, #e3f2fd, #bbdefb);
            border: 1px solid #2196f3;
            border-radius: 8px;
            display: flex;
            align-items: center;
            gap: 0.75rem;
            color: #1565c0;
            font-weight: 500;
        }

        .admin-notice i {
            font-size: 1.2rem;
            color: #1976d2;
        }

        @media (max-width: 768px) {
            .page-content {
                padding: 1rem 0.5rem;
            }

            .page-container {
                padding: 1.5rem;
            }

            .page-header h1 {
                font-size: 2rem;
            }

            .admin-actions {
                position: static;
                margin-top: 1rem;
                justify-content: center;
                flex-wrap: wrap;
            }

            .admin-edit-btn {
                font-size: 0.8rem;
                padding: 0.4rem 0.8rem;
            }

            .admin-notice {
                flex-direction: column;
                text-align: center;
                gap: 0.5rem;
            }
        }
    </style>
@endpush

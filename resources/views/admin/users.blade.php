@extends('layout.app')

@section('content')
    <div class="admin-users">
        <div class="admin-header">
            <h1>User Management</h1>
            <p>Manage all users in the system</p>
        </div>

        @if (session('success'))
            <div class="alert alert-success">
                <i class="alert-icon">✓</i>
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-error">
                <i class="alert-icon">⚠️</i>
                {{ session('error') }}
            </div>
        @endif

        <div class="users-actions">
            <a href="{{ route('admin.users.create') }}" class="admin-btn">
                <i>➕</i>
                Add New User
            </a>
            <a href="{{ route('admin.pages') }}" class="admin-btn">
                <i>📄</i>
                Manage Pages
            </a>
            <a href="{{ route('admin.dashboard') }}" class="admin-btn secondary">
                <i>⬅️</i>
                Back to Dashboard
            </a>
        </div>

        <div class="users-table-container">
            <table class="users-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>NIM</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Created</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->nim }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                                <span class="role-badge {{ $user->role }}">
                                    {{ ucfirst($user->role) }}
                                </span>
                            </td>
                            <td>{{ $user->created_at->format('M d, Y') }}</td>
                            <td class="actions">
                                <a href="{{ route('admin.users.edit', $user) }}" class="action-btn edit">
                                    <i>✏️</i>
                                </a>
                                @if ($users->count() > 1 || !$user->isAdmin())
                                    <form action="{{ route('admin.users.delete', $user) }}" method="POST"
                                        class="inline-form"
                                        onsubmit="return confirm('Are you sure you want to delete this user?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="action-btn delete">
                                            <i>🗑️</i>
                                        </button>
                                    </form>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@push('styles')
    <style>
        .admin-users {
            max-width: 1400px;
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

        .users-actions {
            display: flex;
            gap: 1rem;
            margin-bottom: 2rem;
            justify-content: center;
            flex-wrap: wrap;
        }

        .admin-btn {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.8rem 1.5rem;
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

        .users-table-container {
            background: var(--card-bg);
            border-radius: var(--profile-radius-lg);
            overflow: hidden;
            box-shadow: var(--profile-shadow-lg);
        }

        .users-table {
            width: 100%;
            border-collapse: collapse;
        }

        .users-table th {
            background: linear-gradient(90deg, var(--primary-color), var(--primary-dark));
            color: white;
            padding: 1rem;
            text-align: left;
            font-weight: 600;
            font-size: 0.9rem;
        }

        .users-table td {
            padding: 1rem;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
            font-size: 0.9rem;
        }

        .users-table tbody tr:hover {
            background-color: rgba(25, 118, 210, 0.05);
        }

        .role-badge {
            padding: 0.25rem 0.75rem;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
            text-transform: uppercase;
        }

        .role-badge.admin {
            background: linear-gradient(135deg, #ff9800, #f57c00);
            color: white;
        }

        .role-badge.user {
            background: linear-gradient(135deg, #4caf50, #388e3c);
            color: white;
        }

        .actions {
            display: flex;
            gap: 0.5rem;
        }

        .action-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 35px;
            height: 35px;
            border-radius: 50%;
            border: none;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 1rem;
        }

        .action-btn.edit {
            background: linear-gradient(135deg, #2196f3, #1976d2);
            color: white;
        }

        .action-btn.edit:hover {
            background: linear-gradient(135deg, #1976d2, #1565c0);
            transform: scale(1.1);
        }

        .action-btn.delete {
            background: linear-gradient(135deg, #f44336, #d32f2f);
            color: white;
        }

        .action-btn.delete:hover {
            background: linear-gradient(135deg, #d32f2f, #b71c1c);
            transform: scale(1.1);
        }

        .inline-form {
            display: inline;
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
            background: rgba(16, 185, 129, 0.1);
            color: var(--profile-success);
            border: 1px solid rgba(16, 185, 129, 0.2);
        }

        .alert-error {
            background: rgba(239, 68, 68, 0.1);
            color: var(--profile-error);
            border: 1px solid rgba(239, 68, 68, 0.2);
        }

        .alert-icon {
            font-size: 1.2rem;
        }

        @media (max-width: 768px) {
            .users-actions {
                flex-direction: column;
                align-items: center;
            }

            .admin-btn {
                width: 100%;
                max-width: 300px;
                justify-content: center;
            }

            .users-table {
                font-size: 0.8rem;
            }

            .users-table th,
            .users-table td {
                padding: 0.5rem;
            }

            .actions {
                flex-direction: column;
                gap: 0.25rem;
            }

            .action-btn {
                width: 30px;
                height: 30px;
                font-size: 0.9rem;
            }
        }
    </style>
@endpush

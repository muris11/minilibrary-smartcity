@extends('layout.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title mb-0">
                            <i class="bi bi-people-fill me-2"></i>
                            Manage Team Members
                        </h3>
                        <a href="{{ route('admin.team-members.create') }}" class="btn btn-success btn-sm">
                            <i class="bi bi-plus-circle me-1"></i>Add Team Member
                        </a>
                    </div>
                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <i class="bi bi-check-circle me-2"></i>
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        @endif

                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="table-dark">
                                    <tr>
                                        <th><i class="bi bi-hash me-1"></i>ID</th>
                                        <th><i class="bi bi-image me-1"></i>Photo</th>
                                        <th><i class="bi bi-person me-1"></i>Name</th>
                                        <th><i class="bi bi-briefcase me-1"></i>Position</th>
                                        <th><i class="bi bi-sort-numeric-up me-1"></i>Order</th>
                                        <th><i class="bi bi-toggle-on me-1"></i>Status</th>
                                        <th><i class="bi bi-calendar me-1"></i>Updated</th>
                                        <th><i class="bi bi-gear me-1"></i>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($teamMembers as $member)
                                        <tr>
                                            <td>{{ $member->id }}</td>
                                            <td>
                                                @if ($member->image)
                                                    <img src="{{ asset($member->image) }}" alt="{{ $member->name }}"
                                                        class="rounded-circle" width="40" height="40"
                                                        style="object-fit: cover;">
                                                @else
                                                    <div class="bg-secondary rounded-circle d-flex align-items-center justify-content-center"
                                                        style="width: 40px; height: 40px;">
                                                        <i class="bi bi-person text-white"></i>
                                                    </div>
                                                @endif
                                            </td>
                                            <td>
                                                <strong>{{ $member->name }}</strong>
                                            </td>
                                            <td>{{ $member->position ?? '-' }}</td>
                                            <td>{{ $member->sort_order }}</td>
                                            <td>
                                                @if ($member->is_active)
                                                    <span class="badge bg-success">
                                                        <i class="bi bi-check-circle me-1"></i>Active
                                                    </span>
                                                @else
                                                    <span class="badge bg-secondary">
                                                        <i class="bi bi-x-circle me-1"></i>Inactive
                                                    </span>
                                                @endif
                                            </td>
                                            <td>{{ $member->updated_at->format('M d, Y H:i') }}</td>
                                            <td>
                                                <div class="btn-group" role="group">
                                                    <a href="{{ route('admin.team-members.edit', $member) }}"
                                                        class="btn btn-sm btn-primary">
                                                        <i class="bi bi-pencil me-1"></i>Edit
                                                    </a>
                                                    <form action="{{ route('admin.team-members.delete', $member) }}"
                                                        method="POST" class="d-inline"
                                                        onsubmit="return confirm('Are you sure you want to delete this team member?')">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-danger">
                                                            <i class="bi bi-trash me-1"></i>Delete
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="8" class="text-center py-4">
                                                <i class="bi bi-info-circle me-2"></i>
                                                No team members found.
                                                <a href="{{ route('admin.team-members.create') }}"
                                                    class="text-decoration-none">
                                                    Add your first team member
                                                </a>
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <style>
        .card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        }

        .card-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border-radius: 12px 12px 0 0 !important;
            border: none;
            padding: 1.5rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .table th {
            border-top: none;
            font-weight: 600;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .table td {
            vertical-align: middle;
            padding: 1rem;
        }

        .btn-group .btn {
            margin-right: 0.25rem;
        }

        .btn-group .btn:last-child {
            margin-right: 0;
        }

        .badge {
            font-size: 0.75rem;
            padding: 0.375rem 0.75rem;
        }

        .rounded-circle {
            border: 2px solid #e9ecef;
        }
    </style>
@endpush

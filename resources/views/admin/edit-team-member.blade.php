@extends('layout.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title mb-0">
                            <i class="bi bi-pencil-square me-2"></i>
                            Edit Team Member: {{ $teamMember->name }}
                        </h3>
                        <a href="{{ route('admin.team-members') }}" class="btn btn-outline-light btn-sm">
                            <i class="bi bi-arrow-left me-1"></i>Back to Team Members
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

                        <form action="{{ route('admin.team-members.update', $teamMember) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="row">
                                <div class="col-md-8">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">
                                            <i class="bi bi-person me-1"></i>Name *
                                        </label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            value="{{ old('name', $teamMember->name) }}" required>
                                        @error('name')
                                            <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="position" class="form-label">
                                            <i class="bi bi-briefcase me-1"></i>Position
                                        </label>
                                        <input type="text" class="form-control" id="position" name="position"
                                            value="{{ old('position', $teamMember->position) }}"
                                            placeholder="e.g., Project Manager, Developer, etc.">
                                        @error('position')
                                            <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="description" class="form-label">
                                            <i class="bi bi-textarea me-1"></i>Description
                                        </label>
                                        <textarea class="form-control" id="description" name="description" rows="4"
                                            placeholder="Brief description about this team member...">{{ old('description', $teamMember->description) }}</textarea>
                                        @error('description')
                                            <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="skills" class="form-label">
                                            <i class="bi bi-tags me-1"></i>Skills/Tags
                                        </label>
                                        <input type="text" class="form-control" id="skills" name="skills"
                                            value="{{ old('skills', $teamMember->skills ? implode(', ', $teamMember->skills) : '') }}"
                                            placeholder="e.g., Smart City, IoT, Data Analysis, Project Management (separate with commas)">
                                        <small class="text-muted">Enter skills separated by commas</small>
                                        @error('skills')
                                            <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="sort_order" class="form-label">
                                            <i class="bi bi-sort-numeric-up me-1"></i>Display Order
                                        </label>
                                        <input type="number" class="form-control" id="sort_order" name="sort_order"
                                            value="{{ old('sort_order', $teamMember->sort_order) }}" min="0">
                                        <small class="text-muted">Lower numbers appear first (0 = highest priority)</small>
                                        @error('sort_order')
                                            <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="card border-info">
                                        <div class="card-header bg-info text-white">
                                            <i class="bi bi-image me-1"></i>Profile Photo
                                        </div>
                                        <div class="card-body">
                                            <div class="mb-3">
                                                <label for="image" class="form-label">Change Photo</label>
                                                <input type="file" class="form-control" id="image" name="image"
                                                    accept="image/*" onchange="previewImage(this)">
                                                <small class="text-muted">Leave empty to keep current photo. Accepted
                                                    formats: JPG, PNG, GIF, SVG, WebP (Max: 2MB)</small>
                                                @error('image')
                                                    <div class="text-danger mt-1">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="text-center">
                                                <div id="image-preview">
                                                    @if ($teamMember->image)
                                                        <img id="preview-img" src="{{ asset($teamMember->image) }}"
                                                            alt="{{ $teamMember->name }}"
                                                            class="img-thumbnail rounded-circle"
                                                            style="width: 120px; height: 120px; object-fit: cover;">
                                                    @else
                                                        <div id="no-image" class="text-muted">
                                                            <i class="bi bi-person-circle" style="font-size: 4rem;"></i>
                                                            <p>No image</p>
                                                        </div>
                                                    @endif
                                                </div>
                                                <small class="text-muted mt-2 d-block">Current Photo</small>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card border-success mt-3">
                                        <div class="card-header bg-success text-white">
                                            <i class="bi bi-check-circle me-1"></i>Settings
                                        </div>
                                        <div class="card-body">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="is_active"
                                                    name="is_active" value="1"
                                                    {{ old('is_active', $teamMember->is_active) ? 'checked' : '' }}>
                                                <label class="form-check-label" for="is_active">
                                                    <strong>Active</strong>
                                                    <br><small class="text-muted">Show this team member on the
                                                        website</small>
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-3">
                                        <button type="submit" class="btn btn-success w-100">
                                            <i class="bi bi-check-circle me-1"></i>Update Team Member
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
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

        .form-label {
            font-weight: 600;
            color: #495057;
            margin-bottom: 0.5rem;
        }

        .form-control {
            border: 2px solid #e9ecef;
            border-radius: 8px;
            padding: 0.75rem;
            font-size: 0.95rem;
        }

        .form-control:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.25);
        }

        textarea.form-control {
            resize: vertical;
            min-height: 100px;
        }

        .btn-success {
            background: linear-gradient(135deg, #28a745, #20c997);
            border: none;
            padding: 0.75rem 1.5rem;
            border-radius: 8px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-success:hover {
            transform: translateY(-1px);
            box-shadow: 0 4px 15px rgba(40, 167, 69, 0.3);
        }

        .card.border-info {
            border-color: #17a2b8 !important;
        }

        .card-header.bg-info {
            background: linear-gradient(135deg, #17a2b8, #138496) !important;
            border: none;
        }

        .card.border-success {
            border-color: #28a745 !important;
        }

        .card-header.bg-success {
            background: linear-gradient(135deg, #28a745, #20c997) !important;
            border: none;
        }

        .img-thumbnail {
            border: 3px solid #dee2e6;
        }

        #no-image {
            padding: 2rem 0;
            color: #6c757d;
        }

        #no-image i {
            display: block;
            margin-bottom: 0.5rem;
        }
    </style>
@endpush

@push('scripts')
    <script>
        function previewImage(input) {
            const previewImg = document.getElementById('preview-img');
            const noImage = document.getElementById('no-image');

            if (input.files && input.files[0]) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    if (previewImg) {
                        previewImg.src = e.target.result;
                        if (noImage) noImage.style.display = 'none';
                    } else {
                        // Create new image element if it doesn't exist
                        const img = document.createElement('img');
                        img.id = 'preview-img';
                        img.src = e.target.result;
                        img.className = 'img-thumbnail rounded-circle';
                        img.style.width = '120px';
                        img.style.height = '120px';
                        img.style.objectFit = 'cover';
                        document.getElementById('image-preview').appendChild(img);
                        if (noImage) noImage.style.display = 'none';
                    }
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endpush

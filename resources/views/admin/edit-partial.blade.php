@extends('layout.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title mb-0">
                            <i class="bi bi-pencil-square me-2"></i>
                            Edit Section: {{ $partial->name }}
                        </h3>
                        <a href="{{ route('admin.partials') }}" class="btn btn-outline-light btn-sm">
                            <i class="bi bi-arrow-left me-1"></i>Back to Sections
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

                        <form action="{{ route('admin.partials.update', $partial) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="row">
                                <div class="col-md-8">
                                    <div class="mb-3">
                                        <label for="name" class="form-label">
                                            <i class="bi bi-tag me-1"></i>Section Name
                                        </label>
                                        <input type="text" class="form-control" id="name" name="name"
                                            value="{{ old('name', $partial->name) }}" required>
                                        @error('name')
                                            <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label for="description" class="form-label">
                                            <i class="bi bi-textarea me-1"></i>Description/Summary
                                            <small class="text-muted">(Brief description of this section)</small>
                                        </label>
                                        <textarea class="form-control" id="description" name="description" rows="3"
                                            placeholder="Enter a brief description of this section...">{{ old('description', $partial->description ?? '') }}</textarea>
                                        @error('description')
                                            <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <!-- Image Upload Section -->
                                    <div class="mb-4">
                                        <label class="form-label">
                                            <i class="bi bi-images me-1"></i>Images
                                            <small class="text-muted">(Upload new images to replace existing ones)</small>
                                        </label>

                                        <!-- Display existing images -->
                                        @php
                                            $existingImages = [];
                                            preg_match_all(
                                                '/asset\([\'"]([^\'"]*\.(?:png|jpg|jpeg|gif|svg|webp))[\'"]\)/i',
                                                $partial->content,
                                                $matches,
                                            );
                                            if (!empty($matches[1])) {
                                                $existingImages = $matches[1];
                                            }
                                        @endphp

                                        @if (count($existingImages) > 0)
                                            <div class="existing-images mb-3">
                                                <h6 class="text-muted mb-2">Current Images:</h6>
                                                <div class="d-flex flex-wrap gap-2">
                                                    @foreach ($existingImages as $index => $image)
                                                        <div class="image-preview">
                                                            <img src="{{ asset($image) }}" alt="Current image"
                                                                class="img-thumbnail"
                                                                style="width: 100px; height: 100px; object-fit: cover;">
                                                            <div class="image-info">
                                                                <small class="text-muted">{{ basename($image) }}</small>
                                                                <input type="file"
                                                                    name="replace_image_{{ $index }}"
                                                                    class="form-control form-control-sm mt-1"
                                                                    accept="image/*">
                                                                <input type="hidden"
                                                                    name="original_image_{{ $index }}"
                                                                    value="{{ $image }}">
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        @endif

                                        <!-- Upload new images -->
                                        <div class="new-images">
                                            <h6 class="text-muted mb-2">Add New Images:</h6>
                                            <div id="image-upload-container">
                                                <div class="image-upload-item mb-2">
                                                    <input type="file" name="new_images[]" class="form-control"
                                                        accept="image/*" multiple>
                                                </div>
                                            </div>
                                            <button type="button" class="btn btn-outline-primary btn-sm"
                                                id="add-more-images">
                                                <i class="bi bi-plus-circle me-1"></i>Add More Images
                                            </button>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="content" class="form-label">
                                            <i class="bi bi-file-earmark-text me-1"></i>Full Content
                                            <small class="text-muted">(HTML supported - you can reference uploaded
                                                images)</small>
                                        </label>
                                        <textarea class="form-control" id="content" name="content" rows="15" required>{!! old('content', $partial->content) !!}</textarea>
                                        @error('content')
                                            <div class="text-danger mt-1">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="card border-info">
                                        <div class="card-header bg-info text-white">
                                            <i class="bi bi-info-circle me-1"></i>Section Information
                                        </div>
                                        <div class="card-body">
                                            <p class="mb-2">
                                                <strong>Slug:</strong>
                                                <code>{{ $partial->slug }}</code>
                                            </p>
                                            <p class="mb-2">
                                                <strong>Last Updated:</strong>
                                                {{ $partial->updated_at->format('M d, Y H:i') }}
                                            </p>
                                            <p class="mb-3">
                                                <strong>Status:</strong>
                                                @if ($partial->active)
                                                    <span class="badge bg-success">Active</span>
                                                @else
                                                    <span class="badge bg-secondary">Inactive</span>
                                                @endif
                                            </p>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="active"
                                                    name="active" value="1"
                                                    {{ old('active', $partial->active) ? 'checked' : '' }}>
                                                <label class="form-check-label" for="active">
                                                    <strong>Active</strong>
                                                    <br><small class="text-muted">Show this section on the website</small>
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="mt-3">
                                        <button type="submit" class="btn btn-success w-100">
                                            <i class="bi bi-check-circle me-1"></i>Update Section
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

        .card-header .btn {
            margin-left: auto;
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
            font-family: 'Monaco', 'Menlo', 'Ubuntu Mono', monospace;
            font-size: 0.9rem;
            line-height: 1.5;
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

        code {
            background: #f8f9fa;
            padding: 0.25rem 0.5rem;
            border-radius: 4px;
            font-size: 0.875rem;
        }

        .badge {
            font-size: 0.75rem;
            padding: 0.375rem 0.75rem;
        }

        .existing-images .image-preview {
            display: inline-block;
            text-align: center;
            margin-right: 1rem;
            margin-bottom: 1rem;
        }

        .existing-images .image-preview img {
            border-radius: 8px;
            margin-bottom: 0.5rem;
        }

        .existing-images .image-info {
            font-size: 0.8rem;
        }

        .existing-images .image-info input[type="file"] {
            font-size: 0.75rem;
        }

        .new-images .image-upload-item {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .new-images .image-upload-item .btn-remove {
            background: #dc3545;
            color: white;
            border: none;
            border-radius: 50%;
            width: 24px;
            height: 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 12px;
            cursor: pointer;
        }

        .new-images .image-upload-item .btn-remove:hover {
            background: #c82333;
        }
    </style>
@endpush

@push('scripts')
    <script>
        // Auto-save functionality (optional)
        let autoSaveTimeout;
        const contentTextarea = document.getElementById('content');

        contentTextarea.addEventListener('input', function() {
            clearTimeout(autoSaveTimeout);
            autoSaveTimeout = setTimeout(function() {
                // Could implement auto-save here if needed
                console.log('Content changed - auto-save could be implemented');
            }, 2000);
        });

        // Image upload functionality
        document.getElementById('add-more-images').addEventListener('click', function() {
            const container = document.getElementById('image-upload-container');
            const newItem = document.createElement('div');
            newItem.className = 'image-upload-item mb-2';
            newItem.innerHTML = `
                <input type="file" name="new_images[]" class="form-control" accept="image/*">
                <button type="button" class="btn-remove" onclick="removeImageUpload(this)">
                    <i class="bi bi-x"></i>
                </button>
            `;
            container.appendChild(newItem);
        });

        function removeImageUpload(button) {
            button.closest('.image-upload-item').remove();
        }

        // Image preview functionality
        document.querySelectorAll('input[type="file"][accept="image/*"]').forEach(input => {
            input.addEventListener('change', function(e) {
                const file = e.target.files[0];
                if (file) {
                    // You could add image preview here if needed
                    console.log('Selected file:', file.name);
                }
            });
        });
    </script>
@endpush

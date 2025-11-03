@extends('layout.app')

@section('content')
    <div class="admin-form">
        <div class="form-header">
            <h1>Edit Page: {{ $page->title }}</h1>
            <p>Update page content</p>
        </div>

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

        <div class="form-container">
            <form method="POST" action="{{ route('admin.pages.update', $page) }}">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="title" class="form-label">Page Title</label>
                    <input type="text" id="title" name="title" class="form-input"
                        value="{{ old('title', $page->title) }}" required placeholder="Enter page title">
                </div>

                <div class="form-group">
                    <label for="content" class="form-label">Page Content</label>
                    <textarea id="content" name="content" class="form-textarea" rows="15" required
                        placeholder="Enter page content (HTML allowed)">{{ old('content', $page->content) }}</textarea>
                </div>

                <div class="form-group">
                    <label class="checkbox-label">
                        <input type="checkbox" name="is_active" value="1"
                            {{ old('is_active', $page->is_active) ? 'checked' : '' }}>
                        <span class="checkmark"></span>
                        Page is active (visible to users)
                    </label>
                </div>

                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">
                        <i>💾</i>
                        Update Page
                    </button>
                    <a href="{{ route('admin.pages') }}" class="btn btn-secondary">
                        <i>❌</i>
                        Cancel
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('styles')
    <style>
        .admin-form {
            max-width: 1000px;
            margin: 0 auto;
            padding: 2rem 1rem;
        }

        .form-header {
            text-align: center;
            margin-bottom: 3rem;
        }

        .form-header h1 {
            font-size: 2.5rem;
            color: var(--primary-color);
            margin-bottom: 0.5rem;
        }

        .form-header p {
            font-size: 1.1rem;
            color: var(--text-color);
            opacity: 0.8;
        }

        .form-container {
            background: var(--card-bg);
            border-radius: var(--profile-radius-lg);
            padding: 2rem;
            box-shadow: var(--profile-shadow-lg);
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        .form-label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
            color: var(--text-color);
        }

        .form-input,
        .form-textarea {
            width: 100%;
            padding: 0.75rem 1rem;
            border: 2px solid var(--profile-border);
            border-radius: var(--profile-radius);
            font-size: 1rem;
            transition: all 0.3s ease;
            background: white;
        }

        .form-input:focus,
        .form-textarea:focus {
            outline: none;
            border-color: var(--primary-color);
            box-shadow: 0 0 0 3px rgba(25, 118, 210, 0.1);
        }

        .form-textarea {
            resize: vertical;
            min-height: 300px;
            font-family: 'Courier New', monospace;
            line-height: 1.4;
        }

        .checkbox-label {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            cursor: pointer;
            font-weight: 500;
            color: var(--text-color);
        }

        .checkbox-label input[type="checkbox"] {
            display: none;
        }

        .checkmark {
            width: 20px;
            height: 20px;
            border: 2px solid var(--profile-border);
            border-radius: 4px;
            position: relative;
            transition: all 0.3s ease;
        }

        .checkbox-label input[type="checkbox"]:checked+.checkmark {
            background: var(--primary-color);
            border-color: var(--primary-color);
        }

        .checkbox-label input[type="checkbox"]:checked+.checkmark::after {
            content: '✓';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            font-size: 12px;
            font-weight: bold;
        }

        .form-actions {
            display: flex;
            gap: 1rem;
            justify-content: center;
            margin-top: 2rem;
            flex-wrap: wrap;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.75rem 1.5rem;
            border: none;
            border-radius: 50px;
            font-weight: 600;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
        }

        .btn-primary {
            background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
            color: white;
            box-shadow: 0 4px 15px rgba(25, 118, 210, 0.2);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(25, 118, 210, 0.3);
        }

        .btn-secondary {
            background: linear-gradient(135deg, #6c757d, #495057);
            color: white;
            box-shadow: 0 4px 15px rgba(108, 117, 125, 0.2);
        }

        .btn-secondary:hover {
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

        .alert-error {
            background: rgba(239, 68, 68, 0.1);
            color: var(--profile-error);
            border: 1px solid rgba(239, 68, 68, 0.2);
        }

        .alert-icon {
            font-size: 1.2rem;
        }

        @media (max-width: 768px) {
            .form-actions {
                flex-direction: column;
                align-items: center;
            }

            .btn {
                width: 100%;
                max-width: 300px;
                justify-content: center;
            }
        }
    </style>
@endpush

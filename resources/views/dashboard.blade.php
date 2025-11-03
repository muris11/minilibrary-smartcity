@extends('layout.app')

@php
    use Illuminate\Support\Facades\Blade;
@endphp

@section('content')
    <div class="container">
        <div class="content">
            @php
                $partials = \App\Models\Partial::where('active', true)->orderBy('id')->get();
            @endphp

            @foreach ($partials as $partial)
                @php
                    echo Blade::render($partial->content);
                @endphp
            @endforeach
        </div>
    </div>

    <script>
        // Initialize with intro section active
        document.addEventListener('DOMContentLoaded', function() {
            showSection('intro');
        });
    </script>
@endsection

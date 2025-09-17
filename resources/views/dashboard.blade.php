@extends('layout.app')

@section('content')
    <div class="container">
        <div class="content">
            
            <!-- Introduction -->
            @include('intro')
            <!-- Pillars -->
            @include('pillars')
            <!-- Technologies -->
            @include('technologies')
            <!-- Benefits -->
            @include('benefits')
            <!-- Challenges -->
            @include('challenges')
            <!-- Quiz -->
            @include('quiz')

        </div>
    </div>
    </div>
@endsection

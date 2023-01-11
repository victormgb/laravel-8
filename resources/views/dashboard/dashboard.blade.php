@extends('layouts.dashboard')
<div id="app">
        <!-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Dashboard
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    
                    <ul class="navbar-nav me-auto">

                    </ul>

                    
                    <ul class="navbar-nav ms-auto">
                        
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <div class="container">
                
                <app></app>
            </div>
        </main> -->

        <app></app>
        
    </div>




@section('scripts')
<script src="/js/dashboard/index.js"></script>
@endsection

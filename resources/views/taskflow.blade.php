<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'TaskFlow') }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-body-tertiary">
        <nav class="navbar navbar-expand-lg bg-white border-bottom">
            <div class="container">
                <a class="navbar-brand fw-bold text-primary" href="{{ url('/') }}">TaskFlow</a>
                <span class="navbar-text">Project management for focused teams</span>
            </div>
        </nav>

        <main class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body p-5 text-center">
                            <span class="badge text-bg-primary mb-3">Your workspace</span>
                            <h1 class="display-6 fw-semibold">A clear place to move work forward.</h1>
                            <p class="lead text-secondary mt-3 mb-4">
                                TaskFlow is ready. Start by building workspace and membership workflows.
                            </p>
                            <button class="btn btn-primary btn-lg" type="button" disabled>
                                Workspace setup is the first project milestone
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>

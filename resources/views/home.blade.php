@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <section class="hero">
        <h1>Welcome to Our Homepage</h1>
        <p class="lead">This page was successfully migrated from native PHP to Laravel Blade templates!</p>
        <p>Explore our navigation bar above to view other pages seamlessly without duplicating HTML structure.</p>
    </section>

    <section class="anatomy" aria-label="How this page is built">
        <h2>How this page is built</h2>
        <p class="muted">The navbar and footer come from one master layout. Only the highlighted block changes on each page.</p>

        <div class="shell">
            <div class="shell-part">
                <span>Navbar</span>
                <code>layouts/app.blade.php</code>
            </div>
            <div class="shell-slot">
                <span>Page content</span>
                <code>@@yield('content')</code>
                <small>Filled by home.blade.php, about.blade.php, services.blade.php, or contact.blade.php</small>
            </div>
            <div class="shell-part">
                <span>Footer</span>
                <code>layouts/app.blade.php</code>
            </div>
        </div>
    </section>
@endsection
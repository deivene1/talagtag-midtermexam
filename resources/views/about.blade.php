@extends('layouts.app')

@section('title', 'About Us')

@section('content')
    <h1>About Our System</h1>
    <p class="lead">Learn more about our institutional mission, course objectives, and student web development projects.</p>

    <div class="rows">
        <div class="row">
            <h3>Mission</h3>
            <p>Prepare students to build clean, maintainable web applications using modern frameworks.</p>
        </div>
        <div class="row">
            <h3>Course objectives</h3>
            <p>Move from repeated native PHP includes to Laravel layout inheritance, routing, and asset management.</p>
        </div>
        <div class="row">
            <h3>Student projects</h3>
            <p>Each student migrates a multi-page website into Blade views that share one master layout.</p>
        </div>
    </div>
@endsection
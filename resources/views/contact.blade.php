@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
    <h1>Get in Touch</h1>
    <p class="lead">Reach out to our team via email or visit our university laboratory workstation.</p>

    <form class="form" onsubmit="return false;">
        <label for="name">Name</label>
        <input id="name" type="text" placeholder="Your full name">

        <label for="email">Email</label>
        <input id="email" type="email" placeholder="you@school.edu">

        <label for="message">Message</label>
        <textarea id="message" rows="4" placeholder="How can we help?"></textarea>

        <button type="submit">Send message</button>
        <p class="muted small">This form is a demo and does not send messages yet.</p>
    </form>
@endsection
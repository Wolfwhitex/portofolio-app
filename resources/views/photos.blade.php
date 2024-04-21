@extends('layouts.app')
@section('title')
    Photos
@endsection
@section('content')
    <main class="main-container home-section">
        <main class="main-container project-section">
            <section class="projects">
                <div class="page-title">
                    <h2>{{ $user->username }}.<span class="green">gallery</span></h2>
                </div>
                <p class="section-description">
                    See <a class="hyperlink" href="{{ $user->insta_url }}">instagram</a> profile for more details.
                </p>
                <div class="project-cards-container">
                    @foreach ($photos as $photo)
                            <div class="card">
                                <img src="{{ asset('storage/' . $photo->image) }}" alt="Project Preview Screenshot"
                                    class="photo-img">
                            </div>
                    @endforeach
                </div>
            </section>
        </main>
    @endsection

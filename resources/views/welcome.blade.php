@extends('layouts.app')
@section('title')
    Home
@endsection
@section('content')
<link rel="stylesheet" href="{{ asset('css/footer.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('css/header.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('css/projects.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('css/home.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('css/main.css') }}" type="text/css">
    <main class="main-container home-section">
        <section id="home">
            <div class="landing-page-details">
                <h1 class="small-title">Hello,</h1>
                <h2 class="big-title">I'm <span class="my-name {{ $user->name }}">{{ $user->name }}</span></h2>
                <h3 class="medium-title"><em>{{ $user->title }} @<a class="green"
                            href="{{ $user->github_url }}">{{ $user->username }}</a></em></h3>
            </div>
            <div class="art-me">
                <img src="{{ asset('storage/' . $user->img_profile) }}" alt="{{ $user->name }}">
            </div>
            <div class="landing-page-socials">
                <ul>
                    <li class="social-link">
                        <a href="{{ $user->linkedin_url }}" aria-label="LinkedIn" target="_blank">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </a>
                    </li>
                    <li class="social-link">
                        <a href="{{ $user->github_url }}" aria-label="GitHub" target="_blank">
                            <i class="fa-brands fa-github"></i>
                        </a>
                    </li>
                    <li class="social-link">
                        <a href="{{ $user->insta_url }}" aria-label="Instagram" target="_blank">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </section>
        <section class="projects" id="select-projects">
            <h2>Select Projects</h2>
            <p class="section-description">
                Here are some personal projects I have worked on.<br>
                You can find more on <a class="hyperlink" href="https://github.com/Wolfwhitex">GitHub</a>.
            </p>
            <div class="project-cards-container">
                @php $count = 0 @endphp
                @foreach ($projects as $project)
                @if ($count < 4)
                    <div class="card">
                        <img src="{{ asset('storage/'.$project->image) }}" alt="Project Preview Screenshot"
                            class="card-preview-img">
                        <div class="card-info">
                            <div class="title-and-links">
                                <span class="project-title">
                                    {{ $project->title }}
                                </span>
                                <div class="project-links">
                                    <a href="{{ $project->url }}">
                                        <i class="fas fa-external-link-alt"></i>
                                    </a>
                                    <a href="{{ $project->url }}">
                                        <i class="fa-brands fa-github"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="project-skills">
                                @php
                                    $keywords = explode(',', $project->keywords);
                                @endphp
                                @foreach ($keywords as $keyword)
                                    <span>{{ $keyword }}</span>
                                @endforeach
                            </div>
                            <p class="project-description">
                                {{ $project->descriptions }}
                            </p>
                        </div>
                    @php $count++ @endphp
                    @else
                    @break
                    @endif
                    </div>
                    
                @endforeach
        </section>
        <div class="cta-container">
            <a href="/projects" class="cta">
                <img src="{{ asset('img/arrow.png') }}" alt="Code Icon">
                <span>Explore More</span>
            </a>
        </div>
    </main>
@endsection

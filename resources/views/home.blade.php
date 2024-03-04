@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
    <div>
<!-- <div class="container-fluid">
    <div class="row">
        <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-view-dashboard"></i> Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-link"></i> Shortcuts
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-widgets"></i> Overview
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-calendar"></i> Events
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-info-circle"></i> About
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-gear"></i> Services
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-chat-dots"></i> Contact
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Simple Sidebar</h1>
            </div>
            <p>
                Make sure to keep all page content within the
                <code>#content</code>.
            </p>
        </main>
    </div>
</div> -->

<div class="container-fluid">
    <div class="row">
        <nav id="sidebar" class="col-md-3 col-lg-2 d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    
                    <li class="nav-item">
                        <a class="nav-link" href="customers">
                            <i class="bi bi-link"></i> Customers
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="managers">
                            <i class="bi bi-widgets"></i> Managers
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="roles">
                            <i class="bi bi-calendar"></i> roles
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="salons">
                            <i class="bi bi-info-circle"></i> salons
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="services">
                            <i class="bi bi-gear"></i> Services
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="stylists">
                            <i class="bi bi-chat-dots"></i> stylists
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="users">
                            <i class="bi bi-view-dashboard"></i> Users
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Simple Sidebar</h1>
            </div>
            <p>
                Make sure to keep all page content within the
                <code>#content</code>.
            </p>
        </main>
    </div>
</div>

@endsection


<nav class="navbar navbar-expand-md navbar-dark bg-dark">
<a class="navbar-brand" href="/">1-laravel-besicwebsite</a>

<button class="navbar-toggler" id="show" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        {{-- home --}}
        <li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
        <a class="nav-link" href="/">Home</a>
        </li>
        {{-- about --}}
        <li class="nav-item {{ Request::is('about') ? 'active' : '' }}">
        <a class="nav-link" href="/about">About</a>
        </li>
        {{-- contact --}}
        <li class="nav-item {{ Request::is('contact') ? 'active' : '' }}">
        <a class="nav-link" href="/contact">Contact</a>
        </li>
        {{-- messages --}}
        <li class="nav-item {{ Request::is('messages') ? 'active' : '' }}">
        <a class="nav-link" href="/messages">Messages</a>
        </li>
    </ul>
</div>
</nav>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    @livewireStyles
    @yield('css')
</head>
<style>
    .active-link {
        color: blue !important;
    }
</style>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">Navbar</a>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link {{ request()->is('post/create') ? 'active-link' : '' }}" aria-current="page" href="{{ route('mostra_post') }}">Post create</a>
                <a class="nav-link {{ request()->is('index') ? 'active-link' : '' }}" href="{{ route('index') }}">Filtro de usuarios</a>
                <a class="nav-link {{ request()->is('pricing') ? 'active-link' : '' }}" href="#">Pricing</a>
            </div>
        </div>
    </div>
</nav>
    <div class="container">
    @yield('content')
    </div>
    @livewireScripts
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>

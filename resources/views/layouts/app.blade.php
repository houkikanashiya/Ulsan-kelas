<!DOCTYPE html>
<html lang="En">
    <head>
        <meta charset="utf-8">
        <title>Ulsan Kelas</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    </head>
        <header class="mb-4">
                <nav class="navbar navbar-expand-sm navbar-dark" style="background-color:#87ceeb;"> 
                <a class="navbar-brand" href="{{ route('reviews.index') }}">Ulasan Kelas</a>
                 <ul class="navbar-nav mr-auto"></ul>
               @if (Auth::check())
                <div class="nav-item">{!! link_to_route('logout.get', 'Logout') !!}</div>
               @else
               <div class="nav-item">{!! link_to_route('login', 'Login', [], ['class' => 'nav-link']) !!}</div>
               @endif
            </nav>
         </header>
    <body>
        
        <div class="container">
            @include('commons.error_reviews')
            
            @yield('content')
        </div>
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.2.0/js/all.js"></script>
    </body>
</html>
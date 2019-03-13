<!doctype html>
<html lang="En">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <title>Ulasan Kelas</title>
        
        <style>
          
            .content{
                margin-top:200px;
                font-size:20px;
            }
            .title{
                font-size:70px;
                color:#fff;
            }
            .subtitle{
                font-size:25px;
                color:#fff;
            }
            .navbar-brand{
                padding-left:15px;
                font-family:bold;
            }
            .navbar-nav{
                color:#fff;
                padding-right:20px;
            }
            body{
                background-image:url("./image/ulsan kelas image.jpg");
                background-position: 50% 50%;               
                background-repeat:no-repeat;
            }
            
        </style>
    </head>
    <header class="mb-4">
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark"> 
        <a class="navbar-brand" href="/">Ulasan Kelas</a>
         <ul class="navbar-nav mr-auto"></ul>
            <div class="nav-item">{!! link_to_route('login', 'Login', [], ['class' => 'nav-link']) !!}</div>
        
    </nav>
</header>
    <body>
        <div class="text-center content">
                <div class="title ">
                     <p>Ulasan Kelas<p>
                </div>
                <div class="subtitle">
                    <p>Share the course review<br>for UM students</p>
                </div>
                {!! link_to_route('signup.get', 'Sign up', [], ['class' => 'btn btn-lg btn-primary']) !!}
        </div>
        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.2.0/js/all.js"></script>
    </body>
</html>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Jekyll v3.8.6">
        <title>Activities System</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">        <!-- Favicons -->
    </head>
    <body>
    <style>
    .nav-link {
        display: block;
        padding: .5rem 4rem;
    }
    </style>

        <header>

            <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-info">
                <a class="navbar-brand" href="/">Activities System</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#"> <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"></a>
                        </li>
                    </ul>
                    <ul style="margin: 0!important ; list-style-type: none;">
                        <li class="nav-item dropdown">
                            <!--<a class="nav-link dropdown-toggle" style="color:white" 
                                href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
                            </a>-->
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="#">Change Password</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="/logout">Logout</a>
                            </div>
                      </li>                        
                    </ul>
                </div>
            </nav>

        </header>
        <main role="main">
            <div class="container" style="margin-top: 100px">
                @yield('content')            
            </div>
        </main>
        <script src="/js/jquery.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
    </body>
</html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        
        <!-- CSS -->
        <link href="/bootstrap.min.css" rel="stylesheet">
        <style>
           html {
                    height: 100%;
                }

            body {
                    height: 100%;
                    margin: 0;
                    display: flex;
                    flex-direction: column;
                }

            main {
                        flex: 1 0 auto;
                    }

            footer {
                    flex-shrink: 0;
                    }

        </style>
 
    </head>
    <body class="antialiased">
    <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <img src="/laravel logo.png"  width="80" height="50" class="d-inline-block align-top" alt="">
                <p class="navbar-brand" href="#">My Website</p>
                

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Home </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/posts">Posts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Disabled</a>
                    </li>
                    </ul>
                </div>
            </nav>
</header>
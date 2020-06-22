<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mattpress</title>
    {{-- Bootstrap --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    {{-- Main CSS --}}
    <link rel="stylesheet" href=" {{ asset('css/app.css') }} ">
    {{-- Google fonts / Inter --}}
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;400;600&display=swap" rel="stylesheet">

</head>
<body>

    <header class="main-header">
        <nav class="navbar navbar-expand">
            <a class="navbar-brand" href=" {{ route('home') }} "> <h1>Mattpress</h1> </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-links "id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="" >Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href=" ">User</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="">Blog</a>
                </li>
              </ul>
            </div>
        </nav>
    </header>
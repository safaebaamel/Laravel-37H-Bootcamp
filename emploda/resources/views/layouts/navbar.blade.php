<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emploda</title>
    <link rel="stylesheet" href="{{asset('template/Style/style.css')}}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>

<body>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200&display=swap');
    </style>
    <!-- Navbar -->
    <nav>
        <div class="container">
            <a htrf="#" id="logo">Emploda</a>
            <div class="links">
                <a id="icon" href="#"><img id="menu-icon" class="image" src="Assets/Imgs/menu.png" alt="icon"></a>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Find an Expert</a></li>
                    <li><a href="#">Become an Expert</a></li>
                    <li><a href="#">Our Community</a></li>
                    <li><a id="btn_signup" href="{{ route('admin') }}">Log In</a></li>
                </ul>
            </div>
        </div>
    </nav>

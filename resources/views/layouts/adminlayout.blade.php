<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <meta name="description" content="@yield('meta_description', 'Default meta description for your site')">
    <title>@yield('meta_title', 'Default Title')</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="icon" type="image/jpg" href="{{ URL('images/flags/favicon.jpg') }}">
    <link href="{{ asset('css/adminsidebar.css') }}" rel="stylesheet">
</head>
<body>
<div class="d-flex" id="wrapper">
@include('layouts.adminsidebar')


        <div id="page-content-wrapper" class="flex-grow-1">
            <div class="container-fluid">
            @yield('admincontent')
            </div>
        </div>
    </div>

    <button class="btn btn-primary" id="menu-toggle">Toggle Menu</button>


           



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script>
        $("#menu-toggle").click(function (e) {
            e.preventDefault();
            $("#wrapper").toggleClass("toggled");
        });
    </script>
</body>
</html>
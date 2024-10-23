<!-- resources/views/layouts/app.blade.php -->
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
    <style>
        /* Add your custom CSS styles here */
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }
        .navbar {
            background-color: #1a1a1a;
        }
        .navbar-brand {
            font-weight: 600;
            color: #ff0042 !important;
        }
        .nav-link {
            color: #f4f4f9 !important;
        }
        .nav-link:hover {
    color: #ff0042 !important; /* Color on hover for nav links */
}

        .dropdown-menu {
        background-color: #1a1a1a; /* Match navbar color */
        border: none; /* Remove border */
    }
    .dropdown-item {
        color: #ffffff; /* Text color */
    }
    .dropdown-item:hover {
        background-color: #fff; /* Darker on hover */
        color:#ff0042 !important;
    }

    /* Show dropdown on hover */
    .navbar-nav .dropdown:hover .dropdown-menu {
        display: block; /* Show the dropdown */
    }
    .nav-item.active .nav-link {
    color: #0FFCBE !important; /* Active state color for the nav link */
    font-weight: bold; /* Bold active link for emphasis */
}
        footer {
            background-color: #343a40;
        }
        footer a {
            text-decoration: none;
            transition: color 0.3s;
        }
        footer a:hover {
            text-decoration: underline;
            color: #f0c14b;
        }
        footer h5 {
            margin-bottom: 1.5em;
            font-weight: bold;
        }
    </style>
</head>
<body>
    @include('layouts.navbar')

    <div class="container-fluid p-0">
        @yield('content')
    </div>

    @include('layouts.footer')

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>
</html>

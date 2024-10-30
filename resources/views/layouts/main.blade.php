
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <meta name="description" content="@yield('meta_description', 'Default meta description for your site')">
    <title>@yield('meta_title', 'Default Title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="icon" type="image/jpg" href="{{ URL('images/flags/favicon.jpg') }}">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <style>
      

        /* Popup Form Styles */
        #popupForm {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: white;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            z-index: 1060;
        }

        /* Overlay Styles */
        #overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1059;
        }
    </style>
   
</head>
<body>
<!-- <div id="popupForm">
        <h2>Contact Us</h2>
        @include('components.enquiry-form')
    </div>

 
    <div id="overlay"></div> -->
    @include('layouts.navbar')

    <div class="container-fluid p-0">
        @yield('content')
    </div>

    @include('layouts.footer')

   

   
    <!-- Toastr JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <!-- <script>
    function openPopup() {
        document.getElementById('popupForm').style.display = 'block';
        document.getElementById('overlay').style.display = 'block';
    }

    function closePopup() {
        document.getElementById('popupForm').style.display = 'none';
        document.getElementById('overlay').style.display = 'none';
    }

    // Open the popup after 3 seconds
    setTimeout(openPopup, 3000);

    // Handle form submission (for demonstration)
    document.getElementById('contactForm').addEventListener('submit', function(e) {
        e.preventDefault(); // Prevent the form from submitting

        // Get form values
        const name = document.getElementById('name').value;
        const email = document.getElementById('email').value;
        const message = document.getElementById('message').value;

        // Display an alert or log the values (you can also use local storage, etc.)
        alert(`Name: ${name}\nEmail: ${email}\nMessage: ${message}`);

        // Close the popup after submission
        closePopup();
    });
</script> -->
</body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        <!-- Icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
        <script src="https://kit.fontawesome.com/0c64e32fd9.js" crossorigin="anonymous"></script>

        <!-- Dropzone CSS -->
        <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />

        <!-- Tailwind -->
        <script src="https://cdn.tailwindcss.com"></script>

        <!-- Flowbite JS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />

        <!-- Scripts -->
        {{-- @ vite(['resources/css/app.css', 'resources/js/app.js'])--}}

        <!-- JQuery -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

        <!-- Dropzone JS -->
        <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>

        <style>
            .font-poppins {
                font-family: 'Poppins', sans-serif;
            }
            .brand-text {
                color: #f4fdfb;
            }
            .brand-text-secondary {
                color: #65acb3;
            }
            .brand-text-primary {
                color: #f4fdfb;
            }
            .brand-text-accent {
                color: #df5554;
            }
            .brand-text-bg {
                color: #202d32;
            }
            .brand-bg {
                background-color: #202d32;
            }
            .brand-bg-secondary {
                background-color: #65acb3;
            }
            .brand-primary {
                background-color: #f4fdfb;
            }
            .brand-secondary {
                background-color: #65acb3;
            }
            .brand-accent {
                background-color: #df5554;
            }
            .brand-border-secondary {
                border-color: #65acb3;
            }
            .brand-border-accent {
                border-color: #df5554;
            }
             /* Back to top button */
            #backToTopBtn {
                display: none; /* Hidden by default */
                position: fixed; /* Fixed position */
                bottom: 20px; /* Place the button at the bottom of the page */
                right: 30px; /* Place the button 30px from the right */
                z-index: 99; /* Make sure it does not overlap */
                border: none; /* Remove borders */
                outline: none; /* Remove outline */
                cursor: pointer; /* Add a mouse pointer on hover */
                padding: 15px 19px; /* Some padding */
                font-size: 18px; /* Increase font size */
            }
        </style>

        @yield('styles')
        @stack('styles')
    </head>

    <body class="h-screen flex flex-col justify-between brand-bg brand-text font-poppins">

        @yield('modals')

        @if (Request::is('admin*') || Request::is('profile*'))
            @include('layouts.admin.main')
        @else
            @include('layouts.public.main')
        @endif

        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

        @yield('scripts')
        @stack('scripts')

        <script>
            $(document).ready(function() {
                // Show or hide the button based on scroll position
                $(window).scroll(function() {
                    if ($(this).scrollTop() > 300) {
                        $('#backToTopBtn').fadeIn();
                    } else {
                        $('#backToTopBtn').fadeOut();
                    }
                });

                // Scroll to the top when the button is clicked
                $('#backToTopBtn').click(function(event) {
                    event.preventDefault();
                    $('html, body').animate({scrollTop: 0}, 500);
                    return false;
                });
            });
        </script>
    </body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Module Ecommerce</title>


    <link rel="stylesheet"
        href="{{ Module::asset('ecommerce:vendor/line-awesome/line-awesome/line-awesome/css/line-awesome.min.css') }}">
    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="{{ Module::asset('ecommerce:css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ Module::asset('ecommerce:css/plugins/owl-carousel/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ Module::asset('ecommerce:css/plugins/magnific-popup/magnific-popup.css') }} ">
    <link rel="stylesheet" href="{{ Module::asset('ecommerce:css/plugins/jquery.countdown.css') }} ">
    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{ Module::asset('ecommerce:css/style.css') }} ">
    <link rel="stylesheet" href="{{ Module::asset('ecommerce:css/demos/demo-14.css') }}">

</head>

<body>
    @yield('content')

    {{-- Laravel Mix - JS File --}}


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <script src="{{ Module::asset('ecommerce:js/ecommerce.js') }}"></script>




    <script src=" {{ Module::asset('ecommerce:js/jquery.hoverIntent.min.js') }}"></script>
    <script src=" {{ Module::asset('ecommerce:js/jquery.waypoints.min.js') }} "></script>
    <script src="{{ Module::asset('ecommerce:js/superfish.min.js') }} "></script>
    <script src="{{ Module::asset('ecommerce:js/owl.carousel.min.js') }} "></script>
    <script src="{{ Module::asset('ecommerce:js/bootstrap-input-spinner.js') }} "></script>
    <script src="{{ Module::asset('ecommerce:js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ Module::asset('ecommerce:js/jquery.plugin.min.js') }} "></script>
    <script src="{{ Module::asset('ecommerce:js/jquery.countdown.min.js') }}"></script>
    <!-- Main JS File -->
    <script src="{{ Module::asset('ecommerce:js/main.js') }} "></script>
    <script src="{{ Module::asset('ecommerce:js/demos/demo-14.js') }}"></script>
</body>

</html>

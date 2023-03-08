@php
    $dir = (config('app.locale') == 'ar' || config('app.locale') == 'hr') ? 'rtl' : 'ltr';
    config(['app.direction' => $dir]);

    function langUrl($lang = '') {
        $url = url()->full()."/";

            return str_replace("/".config('app.locale')."/", "/".$lang."/", $url);
    } 
@endphp

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Amani LandingPage</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.jsx'])

    {{-- <link rel="stylesheet" href="{{ asset('assets/front-end/css/main.css') }}?v={{ rand(0, 99) }}">
    <link rel="stylesheet" href="{{ asset('assets/front-end/css/responsive.css') }}?v={{ rand(0, 99) }}"> --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script> --}}
    {{-- <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css"> --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-
     alpha/css/bootstrap.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
</head>

<body dir={{ $dir }} >
<style>
        body {
            font-family: 'FF Shamel';
        }
    </style>
     <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
    <!-- Start Header -->
    @include('layout.front-end.partials._header')
    <!-- End Header -->
    @yield('content')
    <!-- Start footer -->
    @include('layout.front-end.partials._footer')
    <!-- End footer -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        AOS.init();
    </script>
     <script src="{{ asset('assets/front-end/js/main.js') }}"></script>
</body>

</html>
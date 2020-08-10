<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>D-ETRANS-2019</title>


        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css')}}">
        <link rel="stylesheet" href="{{ asset('css/style.css')}}">

    </head>
    <body>
         <!-- Navigation -->
        <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
            <h5 class="my-2 mr-md-auto font-weight-normal">Dietary Transmission 2019</h5>
        </div>
        
        <!-- Main container -->
        <div class="container">

            @yield('content')

            <!--Footer -->
            @include('inc.footer')
            
        </div>
        
         <!-- Core script -->
        <script src="{{ asset('js/app.js')}}"></script>
        <script src="{{ asset('js/loading.js')}}"></script>
    </body>
</html>

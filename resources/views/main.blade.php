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
            <div class="col-md-12 bg-white card">
                <h2 class="my-4">Please select to start 😄</h2>
                <div class="row">
                    <a class="{{ Route::is('home') ? 'btn btn-success m-3' : 'btn btn-outline-success m-3'}}" href="{{ route('home')}}">PER HOUSEHOLD</a>
                    <a class="{{ Route::is('eacode') ? 'btn btn-success m-3' : 'btn btn-outline-success m-3'}}" href="{{ route('eacode')}}">PER EACODE</a>
                </div>
            </div>

            @yield('content')

            <!--Footer -->
            @include('inc.footer')
            
        </div>
        
         <!-- Core script -->
        <script src="{{ asset('js/app.js')}}"></script>
        <script src="{{ asset('js/loading.js')}}"></script>
    </body>
</html>

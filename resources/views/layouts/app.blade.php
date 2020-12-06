<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Fraccionamientos') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="{{ asset('css/jquery.dataTables.min.css') }} ">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }} ">
        <link rel="stylesheet" href="{{ asset('css/styles.css') }} ">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }} ">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/jquery-3.5.1.js')}}"></script>
        <script src="{{ asset('js/jquery.dataTables.min.js')}}"></script>
        <script src="{{ asset('js/bootstrap.js')}}"></script>
        <script src="{{ asset('js/bootstrap.min.js')}}"></script>
        <script src="{{ asset('js/functions.js')}}"></script>
        <script src="https://kit.fontawesome.com/82df56ccae.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <script>
            $(document).ready(function() {
            // Data table
            var table = $('#example').DataTable( {
                responsive: true
            } );        
            //new $.fn.dataTable.FixedHeader( table );
            });
        </script>
    
    <div>
        @include('partials.navigation')
        @include('partials.messages')
        <div class="container mb-4 ml-4">
            <div class="row">
                <div class="col-md-3">
                    @include('partials.sideMenu')
                </div>

        @stack('modals')
        @livewireScripts
    </body>
</html>

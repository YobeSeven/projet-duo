<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{env("APP_NAME")}}</title>
    
    {{-- LINK CSS --}}
    <link rel="stylesheet" href={{asset('css/bootstrap.min.css')}}>
    <link rel="stylesheet" href={{asset('css/style.css')}}>
    <link rel="stylesheet" href={{asset('css/responsive.css')}}>
    <link rel="stylesheet" href={{asset('css/colors.css')}}>
</head>

<body>
    <header id="masthead" class="site-header" data-anchor-target=".hero" data-top="background: rgba(59,58,54,0); border-bottom-color: rgba(226,226,226,0);" data-top-bottom="background: rgba(59,58,54,1); border-bottom-color: rgba(226,226,226,1);">
        @include('contents.header')
    </header>
    @include('contents.main')

    @include('contents.footer')





    {{-- LINK JS --}}

    <script src={{asset('js/app.js')}}></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src={{asset('js/bootstrap.min.js')}}></script>
    <script src={{asset('js/jquery.countTo.min.js')}}></script>
    <script src={{asset('js/jquery.shuffle.min.js')}}></script>
    <script src={{asset('js/slick.min.js')}}></script>
    <script src={{asset('js/touchswipe.min.js')}}></script>
    <script src={{asset('js/skrollr.min.js')}}></script>
    <script src={{asset('js/jquery.slicknav.min.js')}}></script>
    <script src={{asset('js/script.js')}}></script>
    
</body>
</html>
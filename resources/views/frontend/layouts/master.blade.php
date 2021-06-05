<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

</head>
<body>

    @include('frontend.partials.header')

    {{-- Main --}}
    <main role="main">

        @yield('content')

        @include('frontend.partials.footer')
    </main>
    {{--End Main --}}

    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield('title','Asia Tours')</title>

    <meta name="description" content="@yield('meta_description','Best Asia tours & travel experiences')">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="canonical" href="{{ url()->current() }}">

    {{-- Open Graph --}}
    <meta property="og:title" content="@yield('title')">
    <meta property="og:description" content="@yield('meta_description')">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">

    {{-- CSS --}}
    <link rel="stylesheet" href="/css/style.css">

    @stack('head')
</head>
<body>

@include('frontend.partials.header')

<main>
    @yield('content')
</main>

@include('frontend.partials.footer')

</body>
</html>

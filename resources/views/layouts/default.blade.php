<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <title>Guidance.pet</title>
    @include('includes.header')
</head>

<body>

<div id="main-wrapper">
    <span class="drop-shadow"></span>

    @include('includes.head')

    @if (Request::is('/'))
        @include('includes.navbar')
    @else
        @include('includes.category_nave')
    @endif

    @include('includes.mobile_menu')

    @yield('content')

    @include('includes.footer')

</div>
</body>

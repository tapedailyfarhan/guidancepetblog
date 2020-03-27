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

    @include('includes.navbar')

    @include('includes.mobile_menu')

    {{--@include('includes.category_nave')--}}

    @yield('content')

    @include('includes.footer')

</div>
</body>

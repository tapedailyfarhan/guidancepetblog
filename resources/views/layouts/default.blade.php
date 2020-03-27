<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <title>Guidance.pet</title>
    @include('includes.header')
</head>

<body>

<!-- Main wrapper - style you can find in reboot.scss -->
<div id="main-wrapper">

    <!-- Topbar header - style you can find in structure/navbar.scss -->
    <span class="drop-shadow"></span>
    @include('includes.navbar')

    @yield('content')

    @include('includes.footer')

</div>
</body>

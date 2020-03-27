@extends('layouts.default')

@section('content')
    <!-- Information header visible only in mobile -->
    <div class="bg-info text-center d-lg-none">
        <div class="container">
            <p class="text-white p-3 mb-0">30% off + FREE shipping on your first <br> Repeat Delivery order.
            </p>
        </div>
    </div>
    <!-- End information header visible only in mobile -->
    <!-- Pet Categories -->
    <!-- End pet categories -->
    <!-- Banner Image -->
    <div class="top-banner" style="background-image: url(../assets/images/banner.jpg);">
        <div class="container h-100">
            <div class="row d-flex align-items-center justify-content-center h-100 text-center">
                <div class="col-md-8">
                    <h1 class="text-white display-5">Find the Best for your Pets</h1>
                    <form class="mt-4">
                        <div class="search-group">
                            <input type="text" class="form-control category-search"
                                   placeholder="Search anything like food and health...">
                            <button type="button" class="btn btn-danger submit-btn"><i data-feather="search"
                                                                                       class="text-white"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner Image -->
    <!-- Section 1 -->
    <section class="spacer">
        <div class="container">
            <h1 class="heading-title text-primary">Featured Video</h1>
            <span class="underline"></span>
            <P class="font-18 mt-4">It's not just a healthy option, it's the more you time option. Plan weekly menus
                in
                minutes and the rest is history. This is going to be the dummy Recipes that fit your tastes and
                goal.</P>
            <div class="row mt-5 d-flex align-items-center">
                <div class="col-lg-6">
                    <h2 class="text-primary">Planning your pet’s meals is <br>
                        easier than ever.</h2>
                    <ul class="list-unstyled mt-4">
                        <li class="font-18">It's not just a healthy option, it's the more you time option. Plan
                            weekly menus in
                            minutes and the rest is history. </li>
                        <li class="font-18 mt-3">Did we mention the recipes are incredible too? </li>
                    </ul>
                    <button type="button" class="btn btn-danger btn-rounded mt-4">Read More</button>
                </div>
                <div class="col-lg-6 text-center mt-4 mt-lg-0">
                    <img src="../assets/images/video-image.jpg" class="video-img img-fluid" alt="video-image" />
                    <div class="embed-responsive d-none embed-responsive-16by9">
                        <video class="video" controls>
                            <source src="../assets/video/running.mp4" type="video/mp4"> Your browser does not
                            support HTML5 video.
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Section 1 -->
    <!-- Section 2 -->
    <section class="mini-spacer">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-8">
                    <div class="row no-gutters">
                        <div class="col-md-6">
                            <div class="dog-details" style="background-image: url(../assets/images/dog-bg.jpg)">
                            </div>
                        </div>
                        <div class="col-md-6 bg-warning">
                            <div class="pl-5 pl-md-0 my-5">
                                <h2 class="text-dark">What you need to <br>
                                    know about dog?</h2>
                                <ul class="mb-0 mt-3 pet-details list-unstyled">
                                    <li><a href="javascript: void(0);">Food</a></li>
                                    <li><a href="javascript: void(0);">Health</a></li>
                                    <li><a href="javascript: void(0);">Care</a></li>
                                    <li><a href="javascript: void(0);">Breeds</a></li>
                                    <li><a href="javascript: void(0);">Reviews</a></li>
                                    <li><a href="javascript: void(0);">News</a></li>
                                    <li><a href="javascript: void(0);">Brands</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 fish-details"
                     style="background-image: url(../assets/images/fish-bg.jpg)">
                    <div class="row h-100">
                        <div class="col-md-6 offset-6">
                            <div class="d-flex align-items-end h-100">
                                <div class="mb-5 ml-0 ml-md-n2">
                                    <h2 class="text-white">Fishes <br>
                                        Wish</h2>
                                    <button type="button" class="btn btn-warning btn-rounded mt-2">Read
                                        More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 bird-details"
                     style="background-image: url(../assets/images/bird-bg.jpg)">
                    <div class="row pl-5">
                        <div class="col-md-12">
                            <h2 class="text-dark mt-5">Beautiful Birds</h2>
                            <button type="button" class="btn btn-success btn-rounded mt-2">Read
                                More</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row no-gutters">
                        <div class="col-md-6 bg-secondary">
                            <div class="my-5 pl-5">
                                <h2 class="text-dark">Cats are always <br> adorable.</h2>
                                <ul class="mb-0 mt-3 pet-details list-unstyled">
                                    <li><a href="javascript: void(0);">Food</a></li>
                                    <li><a href="javascript: void(0);">Health</a></li>
                                    <li><a href="javascript: void(0);">Care</a></li>
                                    <li><a href="javascript: void(0);">Breeds</a></li>
                                    <li><a href="javascript: void(0);">Reviews</a></li>
                                    <li><a href="javascript: void(0);">News</a></li>
                                    <li><a href="javascript: void(0);">Brands</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="cat-details" style="background-image: url(../assets/images/cat-bg.png)">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Section 2 -->
    <!-- Section 3 -->
    <section class="mini-spacer bg-light">
        <div class="container">
            <h1 class="heading-title text-primary">News & Updates</h1>
            <span class="underline"></span>
            <P class="font-18 mt-4">It's not just a healthy option, it's the more you time option. Plan weekly menus
                in
                minutes and the rest is history. This is going to be the dummy Recipes that fit your tastes and
                goal.</P>
            <div class="row mt-5">
                <div class="col-md-12">
                    <div class="card anchor-card" onclick="location.href='category.html';">
                        <div class="row no-gutters">
                            <div class="col-md-6">
                                <img src="../assets/images/blog1.jpg" class="card-img" alt="blog">
                            </div>
                            <div class="col-md-6">
                                <div class="card-body p-4">
                                    <p>21st July 2019 by <a href="javascript: void(0);" class="text-primary">Mark
                                            Freeman</a></p>
                                    <h2 class="text-primary mt-3">Your Pet is family member of yours
                                        starting and have</h2>
                                    <p class="font-18 mt-3">It's not just a healthy option, it's the more you time
                                        option. Plan weekly
                                        menus in minutes.</p>
                                    <button type="button" class="btn btn-danger btn-rounded mt-3">Read More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card anchor-card" onclick="location.href='category.html';">
                        <div class="row no-gutters">
                            <div class="col-md-6">
                                <img src="../assets/images/blog2.jpg" class="card-img" alt="blog">
                            </div>
                            <div class="col-md-6">
                                <div class="card-body p-4">
                                    <p>21st July 2019 by <a href="javascript: void(0);" class="text-primary">Mark
                                            Freeman</a></p>
                                    <h3 class="text-primary mt-3">Planning your pet’s
                                        meal is easier</h3>
                                    <p class="font-18 mt-3">It's not just a healthy option,
                                        weekly menus in minutes.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card anchor-card" onclick="location.href='category.html';">
                        <div class="row no-gutters">
                            <div class="col-md-6">
                                <img src="../assets/images/blog2.jpg" class="card-img" alt="blog">
                            </div>
                            <div class="col-md-6">
                                <div class="card-body p-4">
                                    <p>21st July 2019 by <a href="javascript: void(0);" class="text-primary">Mark
                                            Freeman</a></p>
                                    <h3 class="text-primary mt-3">Planning your pet’s
                                        meal is easier</h3>
                                    <p class="font-18 mt-3">It's not just a healthy option,
                                        weekly menus in minutes.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Section 3 -->
    <!-- Section 4 -->
    <section class="mini-spacer">
        <div class="container text-center">
            <h1 class="heading-title text-primary">Reviews by Users</h1>
            <span class="underline center"></span>
            <div class="testi-text testimonial mt-5">
                <div class="owl-carousel owl-theme reviews2" id="sync2">
                    <div class="item">
                        <div class="row justify-content-center testi">
                            <div class="col-md-8">
                                <p class="font-proximanova-regularit">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.
                                </p>
                                <h3 class="mt-4 text-primary">Nina Anderson</h3>
                                <ul class="list-inline">
                                    <li class="list-inline-item"><i class="fas fa-star text-danger font-11"></i>
                                    </li>
                                    <li class="list-inline-item"><i class="fas fa-star text-danger font-11"></i>
                                    </li>
                                    <li class="list-inline-item"><i class="fas fa-star text-danger font-11"></i>
                                    </li>
                                    <li class="list-inline-item"><i class="fas fa-star text-danger font-11"></i>
                                    </li>
                                    <li class="list-inline-item"><i class="fas fa-star text-danger font-11"></i>
                                    </li>
                                </ul>
                                <img src="../assets/images/2.jpg" alt="wrapkit" class="d-none" />
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row justify-content-center testi">
                            <div class="col-md-8">
                                <p class="font-proximanova-regularit">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.
                                </p>
                                <h3 class="mt-4 text-primary">Nina Anderson</h3>
                                <ul class="list-inline">
                                    <li class="list-inline-item"><i class="fas fa-star text-danger font-11"></i>
                                    </li>
                                    <li class="list-inline-item"><i class="fas fa-star text-danger font-11"></i>
                                    </li>
                                    <li class="list-inline-item"><i class="fas fa-star text-danger font-11"></i>
                                    </li>
                                    <li class="list-inline-item"><i class="fas fa-star text-danger font-11"></i>
                                    </li>
                                    <li class="list-inline-item"><i class="fas fa-star text-danger font-11"></i>
                                    </li>
                                </ul>
                                <img src="../assets/images/2.jpg" alt="wrapkit" class="d-none" />
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row justify-content-center testi">
                            <div class="col-md-8">
                                <p class="font-proximanova-regularit">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.
                                </p>
                                <h3 class="mt-4 text-primary">Nina Anderson</h3>
                                <ul class="list-inline">
                                    <li class="list-inline-item"><i class="fas fa-star text-danger font-11"></i>
                                    </li>
                                    <li class="list-inline-item"><i class="fas fa-star text-danger font-11"></i>
                                    </li>
                                    <li class="list-inline-item"><i class="fas fa-star text-danger font-11"></i>
                                    </li>
                                    <li class="list-inline-item"><i class="fas fa-star text-danger font-11"></i>
                                    </li>
                                    <li class="list-inline-item"><i class="fas fa-star text-danger font-11"></i>
                                    </li>
                                </ul>
                                <img src="../assets/images/2.jpg" alt="wrapkit" class="d-none" />
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row justify-content-center testi">
                            <div class="col-md-8">
                                <p class="font-proximanova-regularit">
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat.
                                </p>
                                <h3 class="mt-4 text-primary">Nina Anderson</h3>
                                <ul class="list-inline">
                                    <li class="list-inline-item"><i class="fas fa-star text-danger font-11"></i>
                                    </li>
                                    <li class="list-inline-item"><i class="fas fa-star text-danger font-11"></i>
                                    </li>
                                    <li class="list-inline-item"><i class="fas fa-star text-danger font-11"></i>
                                    </li>
                                    <li class="list-inline-item"><i class="fas fa-star text-danger font-11"></i>
                                    </li>
                                    <li class="list-inline-item"><i class="fas fa-star text-danger font-11"></i>
                                    </li>
                                </ul>
                                <img src="../assets/images/2.jpg" alt="wrapkit" class="d-none" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial mt-5">
                <div class="container">
                    <div class="owl-carousel owl-theme reviews" id="sync1">
                        <div class="item">
                            <img src="../assets/images/2.jpg" class="img-circle" />
                        </div>
                        <div class="item">
                            <img src="../assets/images/3.jpg" class="img-circle" />
                        </div>
                        <div class="item">
                            <img src="../assets/images/4.jpg" class="img-circle" />
                        </div>
                        <div class="item">
                            <img src="../assets/images/4.jpg" class="img-circle" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Section 4 -->
    <!-- Section 5 -->
    <section class="brands bg-light py-5">
        <div class="container">
            <div
                class="owl-carousel owl-theme brands-slider d-block d-lg-flex align-items-center text-center text-lg-left justify-content-between mb-0">
                <div class="item">
                    <a href="#">
                        <span class="brand brand1"></span>
                    </a>
                </div>
                <div class="item">
                    <a href="#">
                        <span class="brand brand2"></span>
                    </a>
                </div>
                <div class="item">
                    <a href="#">
                        <span class="brand brand3"></span>
                    </a>
                </div>
                <div class="item">
                    <a href="#">
                        <span class="brand brand4"></span>
                    </a>
                </div>
                <div class="item">
                    <a href="#">
                        <span class="brand brand5"></span>
                    </a>
                </div>
                <div class="item">
                    <a href="#">
                        <span class="brand brand6"></span>
                    </a>
                </div>
                <div class="item">
                    <a href="#">
                        <span class="brand brand7"></span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- End Section 5 -->
@stop

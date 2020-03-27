@extends('layouts.default')

@section('content')
    <!-- Section 1 -->
    <section class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h1 class="text-primary">Nutrition</h1>
                    <span class="underline"></span>
                </div>
                <div class="col-lg-4">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 justify-content-lg-end px-0">
                            <li class="breadcrumb-item"><a href="#">Food</a></li>
                            <li class="breadcrumb-item"><a href="#">Nutrition</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Weight Management</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <P class="font-18 mt-4">It's not just a healthy option, it's the more you time option. Plan weekly menus
                in
                minutes and the rest is history. This is going to be the dummy Recipes that fit your tastes and
                goal.</P>
            <div class="row mt-4">
                <div class="col-lg-8 d-none d-md-block">
                    <div class="card dog-details anchor-card" onclick="location.href='category.html';"
                         style="background-image: url(../assets/images/dog-bg2.jpg)">
                        <div class="row">
                            <div class="col-lg-9">
                                <div class="p-5">
                                    <h2 class="text-primary">Do Dogs Smile? The Science
                                        Behind the Looks We Get <br>
                                        From a Happy Dog</h2>
                                    <p class="font-18 mt-3">It's not just a healthy option, it's the <br>
                                        more Plan weekly menus.</p>
                                    <button type="button" class="btn btn-danger btn-rounded mt-2">Read
                                        More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-3 mt-md-0 d-none d-md-block">
                    <div class="img-item dog-details call-to-action"
                         style="background-image: url(../assets/images/img1.jpg)">
                        <div class="pt-5 h-100 d-flex flex-column justify-content-between">
                            <div class="px-4 text-center">
                                <h3 class="text-white">Subscribe to Weight Management</h3>
                                <h4 class="text-white font-proximanova-regularit op-8">Signup for Weekly Updates
                                </h4>
                            </div>
                            <div class="px-4">
                                <form class="row justify-content-center">
                                    <div class="col-md-12">
                                        <div class="form-group subscribe mb-0">
                                            <input type="text"
                                                   class="form-control category-subscribe email-subscribe"
                                                   placeholder="Email Address">
                                            <button type="button" class="btn btn-danger submit-btn"><i
                                                    class="fas fa-paper-plane font-18 text-white px-1"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="px-4 py-3 text-center social-icons bg-light">
                                    <span class="font-18 text-primary">Follow us on Social
                                        Media</span>
                                <ul class="list-inline mb-0 mt-3">
                                    <li class="list-inline-item">
                                        <div class="round">
                                            <a href="#">
                                                <i class="fab fa-facebook-f"></i>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="list-inline-item">
                                        <div class="round">
                                            <a href="#">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="list-inline-item">
                                        <div class="round">
                                            <a href="#">
                                                <i class="fab fa-linkedin-in"></i>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="list-inline-item">
                                        <div class="round">
                                            <a href="#">
                                                <i class="fab fa-youtube"></i>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="list-inline-item">
                                        <div class="round">
                                            <a href="#">
                                                <i class="fab fa-pinterest-p"></i>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-4 mt-lg-0">
                    <div class="card anchor-card" onclick="location.href='category.html';">
                        <div class="row no-gutters">
                            <div class="col-md-6">
                                <img src="../assets/images/blog3.jpg" class="card-img" alt="blog">
                            </div>
                            <div class="col-md-6">
                                <div class="card-body p-4">
                                    <h3 class="text-primary mt-3">Planning your pet’s
                                        meal is easier</h3>
                                    <p class="font-18 mt-3">It's not just a healthy option,
                                        weekly menus in minutes.</p>
                                    <div class="d-flex align-items-center mt-4">
                                        <div class="">
                                            <img src="../assets/images/googleimage.jpg">
                                            <span class="font-12 font-proximanova-regularit">www.dogsite.com</span>
                                        </div>
                                        <div class="ml-auto">
                                            <button class="btn btn-outline-danger">Visit Site</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card anchor-card" onclick="location.href='category.html';">
                        <div class="row no-gutters">
                            <div class="col-md-6">
                                <img src="../assets/images/blog2.jpg" class="card-img" alt="blog">
                            </div>
                            <div class="col-md-6">
                                <div class="card-body p-4">
                                    <h3 class="text-primary mt-3">Planning your pet’s
                                        meal is easier</h3>
                                    <p class="font-18 mt-3">It's not just a healthy option,
                                        weekly menus in minutes.</p>
                                    <div class="row no-gutters mt-4">
                                        <div class="col-6">
                                            <p class="font-14">21st July 2019 by <br> <a href="javascript: void(0);"
                                                                                         class="text-primary">Mark
                                                    Freeman</a></p>
                                        </div>
                                        <div class="col-6 text-right">
                                            <button class="btn btn-outline-danger">Read More</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                                    <p class="font-18 mt-3">It's not just a healthy option, it's the
                                        more you time
                                        option. Plan weekly
                                        menus in minutes.</p>
                                    <button type="button" class="btn btn-danger btn-rounded mt-3">Read
                                        More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card anchor-card" onclick="location.href='category.html';">
                        <img class="card-img-top" src="../assets/images/blog4.jpg" alt="Card image cap">
                        <div class="card-body p-4">
                            <h3 class="text-primary">Planning your pet’s
                                meal is easier</h3>
                            <p class="font-18 mt-3">It's not just a healthy option,
                                weekly menus in minutes.</p>
                            <div class="row no-gutters mt-4">
                                <div class="col-6">
                                    <p class="font-14 mb-0">21st July 2019 by <br> <a href="javascript: void(0);"
                                                                                      class="text-primary">Mark
                                            Freeman</a></p>
                                </div>
                                <div class="col-6 text-right">
                                    <button class="btn btn-outline-danger">Read More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card anchor-card" onclick="location.href='category.html';">
                        <img class="card-img-top" src="../assets/images/blog5.jpg" alt="Card image cap">
                        <div class="card-body p-4">
                            <h3 class="text-primary">Planning your pet’s
                                meal is easier</h3>
                            <p class="font-18 mt-3">It's not just a healthy option,
                                weekly menus in minutes.</p>
                            <div class="d-flex align-items-center mt-4">
                                <div class="">
                                    <img src="../assets/images/googleimage.jpg">
                                    <span class="font-12 font-proximanova-regularit">www.dogsite.com</span>
                                </div>
                                <div class="ml-auto">
                                    <button class="btn btn-outline-danger">Visit Site</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="card anchor-card" onclick="location.href='category.html';">
                        <img class="card-img-top" src="../assets/images/blog6.jpg" alt="Card image cap">
                        <div class="card-body p-4">
                            <h3 class="text-primary">Planning your pet’s
                                meal is easier</h3>
                            <p class="font-18 mt-3">It's not just a healthy option,
                                weekly menus in minutes.</p>
                            <div class="row no-gutters mt-4">
                                <div class="col-6">
                                    <p class="font-14 mb-0">21st July 2019 by <br> <a href="javascript: void(0);"
                                                                                      class="text-primary">Mark
                                            Freeman</a></p>
                                </div>
                                <div class="col-6 text-right">
                                    <button class="btn btn-outline-danger">Read More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                                    <p class="font-18 mt-3">It's not just a healthy option, it's the
                                        more you time
                                        option. Plan weekly
                                        menus in minutes.</p>
                                    <button type="button" class="btn btn-danger btn-rounded mt-3">Read
                                        More</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card anchor-card" onclick="location.href='category.html';">
                        <div class="row no-gutters">
                            <div class="col-md-6">
                                <img src="../assets/images/blog2.jpg" class="card-img" alt="blog">
                            </div>
                            <div class="col-md-6">
                                <div class="card-body p-4">
                                    <h3 class="text-primary mt-3">Planning your pet’s
                                        meal is easier</h3>
                                    <p class="font-18 mt-3">It's not just a healthy option,
                                        weekly menus in minutes.</p>
                                    <div class="row no-gutters mt-4">
                                        <div class="col-6">
                                            <p class="font-14">21st July 2019 by <br> <a href="javascript: void(0);"
                                                                                         class="text-primary">Mark
                                                    Freeman</a></p>
                                        </div>
                                        <div class="col-6 text-right">
                                            <button class="btn btn-outline-danger">Read More</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card anchor-card" onclick="location.href='category.html';">
                        <div class="row no-gutters">
                            <div class="col-md-6">
                                <img src="../assets/images/blog3.jpg" class="card-img" alt="blog">
                            </div>
                            <div class="col-md-6">
                                <div class="card-body p-4">
                                    <h3 class="text-primary mt-3">Planning your pet’s
                                        meal is easier</h3>
                                    <p class="font-18 mt-3">It's not just a healthy option,
                                        weekly menus in minutes.</p>
                                    <div class="d-flex align-items-center mt-4">
                                        <div class="">
                                            <img src="../assets/images/googleimage.jpg">
                                            <span class="font-12 font-proximanova-regularit">www.dogsite.com</span>
                                        </div>
                                        <div class="ml-auto">
                                            <button class="btn btn-outline-danger">Visit Site</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mt-4">
                    <nav class="d-flex justify-content-center">
                        <ul class="pagination custom-pagination mb-0">
                            <li class="page-item"><a class="page-link" href="#">Prev</a></li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- End Section 1 -->
    <!-- Section 2 -->
    <section class="mini-spacer seo-section mt-5" style="background-image: url(../assets/images/section-bg.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h1 class="heading-title text-primary">Seo Content for Weight</h1>
                    <span class="underline"></span>
                    <h3 class="mt-4 text-primary">It's not just a healthy option, it's more you time option. Plan
                        weekly
                        menus in minutes and the rest is history.</h3>
                    <div class="position-relative scrollable pr-2" style="height: 250px;">
                        <p class="font-18 mt-4">It's not just a healthy option, it's the <span
                                class="text-primary font-proximanova-bold">more you time option</span>. Plan weekly
                            menus in minutes
                            and
                            dummy content for now, please put orginal details here for more Recipes that fit your
                            tastes
                            goes here. It's not just a healthy option, it's the more you time option. Plan weekly
                            menus
                            in
                            This is just dummy content for now, please put orginal details here for more.</p>
                        <p class="font-18 mt-4">It's not just a healthy option, it's the more you time option. Plan
                            weekly menus
                            in minutes
                            and
                            dummy <span class="text-primary font-proximanova-bold">content for now, please put
                                    orginal</span> details here for more Recipes that fit your tastes
                            goes here. It's not just a healthy option, it's the more you time option</p>
                        <p class="font-18 mt-4">It's not just a healthy option, it's the more you time option. Plan
                            weekly menus
                            in minutes
                            and
                            dummy <span class="text-primary font-proximanova-bold">content for now, please put
                                    orginal</span> details here for more Recipes that fit your tastes
                            goes here. It's not just a healthy option, it's the more you time option</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Section 2 -->
@endsection

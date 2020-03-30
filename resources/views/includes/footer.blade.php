@include('includes.subscribe')
<footer>
    <div class="category-bar footer-category bg-primary">
        <div class="category-navbar">
            <div class="container">
                <nav class="d-block d-md-flex navbar-dark px-0">
                    <div class="navbar-header d-none d-md-flex">
                        <!-- /. Logo -->
                        <div class="navbar-brand">
                            <!-- Logo icon -->
                            <a href="index.html">
                                <!-- Logo text -->
                                <span class="logo-text">
											<!-- dark Logo text -->
											<img src="../assets/images/footer-logo.png" alt="homepage" class="" />
										</span>
                            </a>
                        </div>
                        <!-- End Logo ./ -->
                    </div>
                    <div class="ml-auto">
                        <!-- toggle and nav items -->
                        <ul class="navbar-nav flex-row justify-content-center align-items-center ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    Cats
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    Dogs
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    Fish
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    Birds
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <div class="container">
            <div class="row py-5">
                <div class="col-lg-4">
                    <h4 class="text-white">About Us</h4>
                    <p class="text-footer my-4">Lorem ipsum dolor sit amet, consectetur adipiscin
                        elit. Morbi pellentesque vehicula magna, nec
                        lobortis lorem sagittis ut. </p>
                    <button type="button" class="btn btn-danger btn-rounded mt-2">Read More</button>
                </div>
                <div class="col-lg-5 mt-4 mt-lg-0">
                    <h4 class="text-white">Quick Links</h4>
                    <div class="row mt-4">
                        <div class="col-md-4">
                            <ul class="list-unstyled mb-0">
                                <li class="mb-2 font-18"><a href="#" class="text-footer">Health</a></li>
                                <li class="mb-2 font-18"><a href="#" class="text-footer">Emergency</a></li>
                                <li class="mb-2 font-18"><a href="#" class="text-footer">Care</a></li>
                                <li class="mb-2 font-18"><a href="#" class="text-footer">Breeds</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <ul class="list-unstyled mb-0">
                                <li class="mb-2 font-18"><a href="#" class="text-footer">Nutritions</a></li>
                                <li class="mb-2 font-18"><a href="#" class="text-footer">News</a></li>
                                <li class="mb-2 font-18"><a href="#" class="text-footer">Tools</a></li>

                            </ul>
                        </div>
                        <div class="col-md-4">
                            <ul class="list-unstyled mb-0">
                                <li class="mb-2 font-18"><a href="#" class="text-footer">Privacy Policy</a></li>
                                <li class="mb-2 font-18"><a href="#" class="text-footer">Terms & Conditions</a>
                                </li>
                                <li class="mb-2 font-18"><a href="#" class="text-footer">Help & Support</a></li>
                                <li class="mb-2 font-18"><a href="#" class="text-footer">Advertise</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mt-4 mt-lg-0">
                    <h4 class="text-white">Be Social</h4>
                    <ul class="list-inline social-icons mt-4">
                        <li class="list-inline-item font-30">
                            <a class="text-footer" href="javascript: void(0)">
                                <i class="fab fa-facebook-square"></i>
                            </a>
                        </li>
                        <li class="list-inline-item font-30">
                            <a class="text-footer" href="javascript: void(0)">
                                <i class="fab fa-twitter-square"></i>
                            </a>
                        </li>
                        <li class="list-inline-item font-30">
                            <a class="text-footer" href="javascript: void(0)">
                                <i class="fab fa-linkedin"></i>
                            </a>
                        </li>
                    </ul>
                    <p class="mt-4 text-footer">Copyright 2019, All Rights Reserved
                        by Guidance.pet</p>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- --------------------------------------------------------------------------------------- -->
<!-- Required Javascript Files Here -->
<!-- --------------------------------------------------------------------------------------- -->
<!-- Jquery v3.4.1 -->
<script src="{{ asset('assets/vendor/jquery/dist/jquery.min.js') }}"></script>
<!-- Popper Js -->
<script src="{{ asset('assets/vendor/popper.js/dist/umd/popper.min.js') }}"></script>
<!-- Bootstrap v4.3.1 -->
<script src="{{ asset('assets/vendor/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- Custom Required Javascript -->
<script src="{{ asset('assets/vendor/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}"></script>
<script src="{{ asset('dist/js/feather.min.js') }}"></script>
<script src="{{ asset('dist/js/custom.min.js') }}"></script>
<script src="{{ asset('assets/vendor/owl.carousel/dist/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/vendor/metis/dist/metisMenu.min.js') }}"></script>
<script src="{{ asset('dist/js/owl.init.min.js') }}"></script>
<script src="{{ asset('dist/js/init.min.js') }}"></script>

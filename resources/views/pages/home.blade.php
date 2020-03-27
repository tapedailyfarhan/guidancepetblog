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
    <div class="category-bar bg-primary d-none d-lg-block">
        <div class="container">
            <div class="category-navbar">
                <nav class="navbar navbar-expand-md navbar-dark">
                    <div class="d-flex justify-content-center w-100">
                        <!-- toggle and nav items -->
                        <ul class="navbar-nav align-items-center flex-row">
                            <li class="nav-item dropdown mega-menu">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <div class="d-flex align-items-center">
                                        <img src="../assets/images/cat.png" class="mr-3 d-none d-md-inline-block">
                                        <span>Cat</span>
                                        <i class="fas fa-chevron-down font-10 ml-2"></i>
                                    </div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <div class="row no-gutters">
                                        <div class="col-4 col-lg-2 col-md-3">
                                            <div class="nav flex-column nav-pills bg-light pt-4 h-100 category-tabs"
                                                 id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                                <a class="nav-link active" id="food" href="category.html">Food</a>
                                                <a class="nav-link" id="health" href="category.html">Health</a>
                                                <a class="nav-link" id="care" href="category.html">Care</a>
                                                <a class="nav-link" id="breeds" href="category.html">Breeds</a>
                                                <a class="nav-link" id="reviews" href="category.html">Reviews</a>
                                                <a class="nav-link" id="news" href="category.html">News</a>
                                                <a class="nav-link" id="brands" href="category.html">Brands</a>
                                            </div>
                                        </div>
                                        <div class="col-8 col-lg-10 col-md-9">
                                            <div class="tab-content py-4 px-5 category-tabs-content"
                                                 id="v-pills-tabContent">
                                                <div class="tab-pane active" id="food-tab" role="tabpanel"
                                                     aria-labelledby="food-tab">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-6">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a href="#">Common
                                                                            Symptoms</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Bad Breath</a></li>
                                                                <li class="mt-2"><a href="#">Chewing &
                                                                        Scratching</a></li>
                                                                <li class="mt-2"><a href="#">Eating Grass</a></li>
                                                                <li class="mt-2"><a href="#">Itching Ears</a></li>
                                                                <li class="mt-2"><a href="#">Lumps & Bumps</a></li>
                                                                <li class="mt-2"><a href="#">Diarrhea</a></li>
                                                                <li class="mt-2"><a href="#">Vomitting</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 mt-3 mt-md-0">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a href="#">Diseases &
                                                                            Illness</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Ear Infection</a></li>
                                                                <li class="mt-2"><a href="#">Skin Issues</a></li>
                                                                <li class="mt-2"><a href="#">Fleas</a></li>
                                                                <li class="mt-2"><a href="#">Poisoning</a></li>
                                                                <li class="mt-2"><a href="#">Lyme Disease</a></li>
                                                                <li class="mt-2"><a href="#">Other Disease</a></li>
                                                                <li class="mb-3 mt-4">
                                                                    <h4 class="text-primary"><a
                                                                            href="#">Allergies</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Allergy Testing</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 mt-3 mt-md-0">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a
                                                                            href="#">Insurance</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Accident Insurance</a>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Illness Insurance</a>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Buyer's Guide</a></li>
                                                                <li class="mt-2"><a href="#">Veterinarian
                                                                        Recommendations</a></li>
                                                                <li class="mt-2"><a href="#">Insurance Cost</a></li>
                                                                <li class="mt-2"><a href="#">Wellness coverage
                                                                        plans</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 mt-3 mt-md-0">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a
                                                                            href="#">Emergency</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">First Aid</a></li>
                                                                <li class="mt-2"><a href="#">Toxic Items</a></li>
                                                                <li class="mt-2"><a href="#">Disasters</a></li>
                                                                <li class="mt-2"><a href="#">Wound Management</a>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Emergency Tips for
                                                                        Owners</a></li>
                                                                <li class="mt-4">
                                                                    <h4><a href="#">Dog
                                                                            Safety</a></h4>
                                                                </li>
                                                                <li class="mt-3">
                                                                    <h4><a href="#">Vetarnary
                                                                            Tips</a></h4>
                                                                </li>
                                                                <li class="mt-3">
                                                                    <h4><a href="#">Vaccination</a></h4>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="health-tab" role="tabpanel"
                                                     aria-labelledby="health-tab">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-6">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a href="#">Common
                                                                            Symptoms</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Bad Breath</a></li>
                                                                <li class="mt-2"><a href="#">Chewing &
                                                                        Scratching</a></li>
                                                                <li class="mt-2"><a href="#">Eating Grass</a></li>
                                                                <li class="mt-2"><a href="#">Itching Ears</a></li>
                                                                <li class="mt-2"><a href="#">Lumps & Bumps</a></li>
                                                                <li class="mt-2"><a href="#">Diarrhea</a></li>
                                                                <li class="mt-2"><a href="#">Vomitting</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 mt-3 mt-md-0">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a href="#">Diseases &
                                                                            Illness</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Ear Infection</a></li>
                                                                <li class="mt-2"><a href="#">Skin Issues</a></li>
                                                                <li class="mt-2"><a href="#">Fleas</a></li>
                                                                <li class="mt-2"><a href="#">Poisoning</a></li>
                                                                <li class="mt-2"><a href="#">Lyme Disease</a></li>
                                                                <li class="mt-2"><a href="#">Other Disease</a></li>
                                                                <li class="mb-3 mt-4">
                                                                    <h4 class="text-primary"><a
                                                                            href="#">Allergies</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Allergy Testing</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 mt-3 mt-md-0">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a
                                                                            href="#">Insurance</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Accident Insurance</a>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Illness Insurance</a>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Buyer's Guide</a></li>
                                                                <li class="mt-2"><a href="#">Veterinarian
                                                                        Recommendations</a></li>
                                                                <li class="mt-2"><a href="#">Insurance Cost</a></li>
                                                                <li class="mt-2"><a href="#">Wellness coverage
                                                                        plans</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 mt-3 mt-md-0">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a
                                                                            href="#">Emergency</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">First Aid</a></li>
                                                                <li class="mt-2"><a href="#">Toxic Items</a></li>
                                                                <li class="mt-2"><a href="#">Disasters</a></li>
                                                                <li class="mt-2"><a href="#">Wound Management</a>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Emergency Tips for
                                                                        Owners</a></li>
                                                                <li class="mt-4">
                                                                    <h4><a href="#">Dog
                                                                            Safety</a></h4>
                                                                </li>
                                                                <li class="mt-3">
                                                                    <h4><a href="#">Vetarnary
                                                                            Tips</a></h4>
                                                                </li>
                                                                <li class="mt-3">
                                                                    <h4><a href="#">Vaccination</a></h4>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="care-tab" role="tabpanel"
                                                     aria-labelledby="care-tab">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-6">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a href="#">Common
                                                                            Symptoms</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Bad Breath</a></li>
                                                                <li class="mt-2"><a href="#">Chewing &
                                                                        Scratching</a></li>
                                                                <li class="mt-2"><a href="#">Eating Grass</a></li>
                                                                <li class="mt-2"><a href="#">Itching Ears</a></li>
                                                                <li class="mt-2"><a href="#">Lumps & Bumps</a></li>
                                                                <li class="mt-2"><a href="#">Diarrhea</a></li>
                                                                <li class="mt-2"><a href="#">Vomitting</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 mt-3 mt-md-0">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a href="#">Diseases &
                                                                            Illness</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Ear Infection</a></li>
                                                                <li class="mt-2"><a href="#">Skin Issues</a></li>
                                                                <li class="mt-2"><a href="#">Fleas</a></li>
                                                                <li class="mt-2"><a href="#">Poisoning</a></li>
                                                                <li class="mt-2"><a href="#">Lyme Disease</a></li>
                                                                <li class="mt-2"><a href="#">Other Disease</a></li>
                                                                <li class="mb-3 mt-4">
                                                                    <h4 class="text-primary"><a
                                                                            href="#">Allergies</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Allergy Testing</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 mt-3 mt-md-0">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a
                                                                            href="#">Insurance</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Accident Insurance</a>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Illness Insurance</a>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Buyer's Guide</a></li>
                                                                <li class="mt-2"><a href="#">Veterinarian
                                                                        Recommendations</a></li>
                                                                <li class="mt-2"><a href="#">Insurance Cost</a></li>
                                                                <li class="mt-2"><a href="#">Wellness coverage
                                                                        plans</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 mt-3 mt-md-0">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a
                                                                            href="#">Emergency</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">First Aid</a></li>
                                                                <li class="mt-2"><a href="#">Toxic Items</a></li>
                                                                <li class="mt-2"><a href="#">Disasters</a></li>
                                                                <li class="mt-2"><a href="#">Wound Management</a>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Emergency Tips for
                                                                        Owners</a></li>
                                                                <li class="mt-4">
                                                                    <h4><a href="#">Dog
                                                                            Safety</a></h4>
                                                                </li>
                                                                <li class="mt-3">
                                                                    <h4><a href="#">Vetarnary
                                                                            Tips</a></h4>
                                                                </li>
                                                                <li class="mt-3">
                                                                    <h4><a href="#">Vaccination</a></h4>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="breeds-tab" role="tabpanel"
                                                     aria-labelledby="breeds-tab">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-6">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a href="#">Common
                                                                            Symptoms</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Bad Breath</a></li>
                                                                <li class="mt-2"><a href="#">Chewing &
                                                                        Scratching</a></li>
                                                                <li class="mt-2"><a href="#">Eating Grass</a></li>
                                                                <li class="mt-2"><a href="#">Itching Ears</a></li>
                                                                <li class="mt-2"><a href="#">Lumps & Bumps</a></li>
                                                                <li class="mt-2"><a href="#">Diarrhea</a></li>
                                                                <li class="mt-2"><a href="#">Vomitting</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 mt-3 mt-md-0">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a href="#">Diseases &
                                                                            Illness</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Ear Infection</a></li>
                                                                <li class="mt-2"><a href="#">Skin Issues</a></li>
                                                                <li class="mt-2"><a href="#">Fleas</a></li>
                                                                <li class="mt-2"><a href="#">Poisoning</a></li>
                                                                <li class="mt-2"><a href="#">Lyme Disease</a></li>
                                                                <li class="mt-2"><a href="#">Other Disease</a></li>
                                                                <li class="mb-3 mt-4">
                                                                    <h4 class="text-primary"><a
                                                                            href="#">Allergies</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Allergy Testing</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 mt-3 mt-md-0">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a
                                                                            href="#">Insurance</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Accident Insurance</a>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Illness Insurance</a>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Buyer's Guide</a></li>
                                                                <li class="mt-2"><a href="#">Veterinarian
                                                                        Recommendations</a></li>
                                                                <li class="mt-2"><a href="#">Insurance Cost</a></li>
                                                                <li class="mt-2"><a href="#">Wellness coverage
                                                                        plans</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 mt-3 mt-md-0">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a
                                                                            href="#">Emergency</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">First Aid</a></li>
                                                                <li class="mt-2"><a href="#">Toxic Items</a></li>
                                                                <li class="mt-2"><a href="#">Disasters</a></li>
                                                                <li class="mt-2"><a href="#">Wound Management</a>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Emergency Tips for
                                                                        Owners</a></li>
                                                                <li class="mt-4">
                                                                    <h4><a href="#">Dog
                                                                            Safety</a></h4>
                                                                </li>
                                                                <li class="mt-3">
                                                                    <h4><a href="#">Vetarnary
                                                                            Tips</a></h4>
                                                                </li>
                                                                <li class="mt-3">
                                                                    <h4><a href="#">Vaccination</a></h4>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="reviews-tab" role="tabpanel"
                                                     aria-labelledby="reviews-tab">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-6">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a href="#">Common
                                                                            Symptoms</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Bad Breath</a></li>
                                                                <li class="mt-2"><a href="#">Chewing &
                                                                        Scratching</a></li>
                                                                <li class="mt-2"><a href="#">Eating Grass</a></li>
                                                                <li class="mt-2"><a href="#">Itching Ears</a></li>
                                                                <li class="mt-2"><a href="#">Lumps & Bumps</a></li>
                                                                <li class="mt-2"><a href="#">Diarrhea</a></li>
                                                                <li class="mt-2"><a href="#">Vomitting</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 mt-3 mt-md-0">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a href="#">Diseases &
                                                                            Illness</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Ear Infection</a></li>
                                                                <li class="mt-2"><a href="#">Skin Issues</a></li>
                                                                <li class="mt-2"><a href="#">Fleas</a></li>
                                                                <li class="mt-2"><a href="#">Poisoning</a></li>
                                                                <li class="mt-2"><a href="#">Lyme Disease</a></li>
                                                                <li class="mt-2"><a href="#">Other Disease</a></li>
                                                                <li class="mb-3 mt-4">
                                                                    <h4 class="text-primary"><a
                                                                            href="#">Allergies</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Allergy Testing</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 mt-3 mt-md-0">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a
                                                                            href="#">Insurance</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Accident Insurance</a>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Illness Insurance</a>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Buyer's Guide</a></li>
                                                                <li class="mt-2"><a href="#">Veterinarian
                                                                        Recommendations</a></li>
                                                                <li class="mt-2"><a href="#">Insurance Cost</a></li>
                                                                <li class="mt-2"><a href="#">Wellness coverage
                                                                        plans</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 mt-3 mt-md-0">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a
                                                                            href="#">Emergency</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">First Aid</a></li>
                                                                <li class="mt-2"><a href="#">Toxic Items</a></li>
                                                                <li class="mt-2"><a href="#">Disasters</a></li>
                                                                <li class="mt-2"><a href="#">Wound Management</a>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Emergency Tips for
                                                                        Owners</a></li>
                                                                <li class="mt-4">
                                                                    <h4><a href="#">Dog
                                                                            Safety</a></h4>
                                                                </li>
                                                                <li class="mt-3">
                                                                    <h4><a href="#">Vetarnary
                                                                            Tips</a></h4>
                                                                </li>
                                                                <li class="mt-3">
                                                                    <h4><a href="#">Vaccination</a></h4>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="news-tab" role="tabpanel"
                                                     aria-labelledby="news-tab">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-6">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a href="#">Common
                                                                            Symptoms</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Bad Breath</a></li>
                                                                <li class="mt-2"><a href="#">Chewing &
                                                                        Scratching</a></li>
                                                                <li class="mt-2"><a href="#">Eating Grass</a></li>
                                                                <li class="mt-2"><a href="#">Itching Ears</a></li>
                                                                <li class="mt-2"><a href="#">Lumps & Bumps</a></li>
                                                                <li class="mt-2"><a href="#">Diarrhea</a></li>
                                                                <li class="mt-2"><a href="#">Vomitting</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 mt-3 mt-md-0">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a href="#">Diseases &
                                                                            Illness</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Ear Infection</a></li>
                                                                <li class="mt-2"><a href="#">Skin Issues</a></li>
                                                                <li class="mt-2"><a href="#">Fleas</a></li>
                                                                <li class="mt-2"><a href="#">Poisoning</a></li>
                                                                <li class="mt-2"><a href="#">Lyme Disease</a></li>
                                                                <li class="mt-2"><a href="#">Other Disease</a></li>
                                                                <li class="mb-3 mt-4">
                                                                    <h4 class="text-primary"><a
                                                                            href="#">Allergies</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Allergy Testing</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 mt-3 mt-md-0">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a
                                                                            href="#">Insurance</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Accident Insurance</a>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Illness Insurance</a>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Buyer's Guide</a></li>
                                                                <li class="mt-2"><a href="#">Veterinarian
                                                                        Recommendations</a></li>
                                                                <li class="mt-2"><a href="#">Insurance Cost</a></li>
                                                                <li class="mt-2"><a href="#">Wellness coverage
                                                                        plans</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 mt-3 mt-md-0">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a
                                                                            href="#">Emergency</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">First Aid</a></li>
                                                                <li class="mt-2"><a href="#">Toxic Items</a></li>
                                                                <li class="mt-2"><a href="#">Disasters</a></li>
                                                                <li class="mt-2"><a href="#">Wound Management</a>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Emergency Tips for
                                                                        Owners</a></li>
                                                                <li class="mt-4">
                                                                    <h4><a href="#">Dog
                                                                            Safety</a></h4>
                                                                </li>
                                                                <li class="mt-3">
                                                                    <h4><a href="#">Vetarnary
                                                                            Tips</a></h4>
                                                                </li>
                                                                <li class="mt-3">
                                                                    <h4><a href="#">Vaccination</a></h4>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="brands-tab" role="tabpanel"
                                                     aria-labelledby="brands-tab">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-6">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a href="#">Common
                                                                            Symptoms</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Bad Breath</a></li>
                                                                <li class="mt-2"><a href="#">Chewing &
                                                                        Scratching</a></li>
                                                                <li class="mt-2"><a href="#">Eating Grass</a></li>
                                                                <li class="mt-2"><a href="#">Itching Ears</a></li>
                                                                <li class="mt-2"><a href="#">Lumps & Bumps</a></li>
                                                                <li class="mt-2"><a href="#">Diarrhea</a></li>
                                                                <li class="mt-2"><a href="#">Vomitting</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 mt-3 mt-md-0">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a href="#">Diseases &
                                                                            Illness</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Ear Infection</a></li>
                                                                <li class="mt-2"><a href="#">Skin Issues</a></li>
                                                                <li class="mt-2"><a href="#">Fleas</a></li>
                                                                <li class="mt-2"><a href="#">Poisoning</a></li>
                                                                <li class="mt-2"><a href="#">Lyme Disease</a></li>
                                                                <li class="mt-2"><a href="#">Other Disease</a></li>
                                                                <li class="mb-3 mt-4">
                                                                    <h4 class="text-primary"><a
                                                                            href="#">Allergies</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Allergy Testing</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 mt-3 mt-md-0">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a
                                                                            href="#">Insurance</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Accident Insurance</a>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Illness Insurance</a>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Buyer's Guide</a></li>
                                                                <li class="mt-2"><a href="#">Veterinarian
                                                                        Recommendations</a></li>
                                                                <li class="mt-2"><a href="#">Insurance Cost</a></li>
                                                                <li class="mt-2"><a href="#">Wellness coverage
                                                                        plans</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 mt-3 mt-md-0">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a
                                                                            href="#">Emergency</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">First Aid</a></li>
                                                                <li class="mt-2"><a href="#">Toxic Items</a></li>
                                                                <li class="mt-2"><a href="#">Disasters</a></li>
                                                                <li class="mt-2"><a href="#">Wound Management</a>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Emergency Tips for
                                                                        Owners</a></li>
                                                                <li class="mt-4">
                                                                    <h4><a href="#">Dog
                                                                            Safety</a></h4>
                                                                </li>
                                                                <li class="mt-3">
                                                                    <h4><a href="#">Vetarnary
                                                                            Tips</a></h4>
                                                                </li>
                                                                <li class="mt-3">
                                                                    <h4><a href="#">Vaccination</a></h4>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown mega-menu">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <div class="d-flex align-items-center">
                                        <img src="../assets/images/dog.png" class="mr-3 d-none d-md-inline-block">
                                        <span>Dog</span>
                                        <i class="fas fa-chevron-down font-10 ml-2"></i>
                                    </div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <div class="row no-gutters">
                                        <div class="col-4 col-lg-2 col-md-3">
                                            <div class="nav flex-column nav-pills bg-light pt-4 h-100 category-tabs1"
                                                 id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                                <a class="nav-link active" id="food1" href="category.html">Food</a>
                                                <a class="nav-link" id="health1" href="category.html">Health</a>
                                                <a class="nav-link" id="care1" href="category.html">Care</a>
                                                <a class="nav-link" id="breeds1" href="category.html">Breeds</a>
                                                <a class="nav-link" id="reviews1" href="category.html">Reviews</a>
                                                <a class="nav-link" id="news1" href="category.html">News</a>
                                                <a class="nav-link" id="brands1" href="category.html">Brands</a>
                                            </div>
                                        </div>
                                        <div class="col-8 col-lg-10 col-md-9">
                                            <div class="tab-content py-4 px-5 category-tabs-content1"
                                                 id="v-pills-tabContent">
                                                <div class="tab-pane active" id="food1-tab" role="tabpanel"
                                                     aria-labelledby="food-tab">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-6">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a href="#">Common
                                                                            Symptoms</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Bad Breath</a></li>
                                                                <li class="mt-2"><a href="#">Chewing &
                                                                        Scratching</a></li>
                                                                <li class="mt-2"><a href="#">Eating Grass</a></li>
                                                                <li class="mt-2"><a href="#">Itching Ears</a></li>
                                                                <li class="mt-2"><a href="#">Lumps & Bumps</a></li>
                                                                <li class="mt-2"><a href="#">Diarrhea</a></li>
                                                                <li class="mt-2"><a href="#">Vomitting</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 mt-3 mt-md-0">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a href="#">Diseases &
                                                                            Illness</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Ear Infection</a></li>
                                                                <li class="mt-2"><a href="#">Skin Issues</a></li>
                                                                <li class="mt-2"><a href="#">Fleas</a></li>
                                                                <li class="mt-2"><a href="#">Poisoning</a></li>
                                                                <li class="mt-2"><a href="#">Lyme Disease</a></li>
                                                                <li class="mt-2"><a href="#">Other Disease</a></li>
                                                                <li class="mb-3 mt-4">
                                                                    <h4 class="text-primary"><a
                                                                            href="#">Allergies</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Allergy Testing</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 mt-3 mt-md-0">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a
                                                                            href="#">Insurance</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Accident Insurance</a>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Illness Insurance</a>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Buyer's Guide</a></li>
                                                                <li class="mt-2"><a href="#">Veterinarian
                                                                        Recommendations</a></li>
                                                                <li class="mt-2"><a href="#">Insurance Cost</a></li>
                                                                <li class="mt-2"><a href="#">Wellness coverage
                                                                        plans</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 mt-3 mt-md-0">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a
                                                                            href="#">Emergency</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">First Aid</a></li>
                                                                <li class="mt-2"><a href="#">Toxic Items</a></li>
                                                                <li class="mt-2"><a href="#">Disasters</a></li>
                                                                <li class="mt-2"><a href="#">Wound Management</a>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Emergency Tips for
                                                                        Owners</a></li>
                                                                <li class="mt-4">
                                                                    <h4><a href="#">Dog
                                                                            Safety</a></h4>
                                                                </li>
                                                                <li class="mt-3">
                                                                    <h4><a href="#">Vetarnary
                                                                            Tips</a></h4>
                                                                </li>
                                                                <li class="mt-3">
                                                                    <h4><a href="#">Vaccination</a></h4>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="health1-tab" role="tabpanel"
                                                     aria-labelledby="health-tab">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-6">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a href="#">Common
                                                                            Symptoms</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Bad Breath</a></li>
                                                                <li class="mt-2"><a href="#">Chewing &
                                                                        Scratching</a></li>
                                                                <li class="mt-2"><a href="#">Eating Grass</a></li>
                                                                <li class="mt-2"><a href="#">Itching Ears</a></li>
                                                                <li class="mt-2"><a href="#">Lumps & Bumps</a></li>
                                                                <li class="mt-2"><a href="#">Diarrhea</a></li>
                                                                <li class="mt-2"><a href="#">Vomitting</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 mt-3 mt-md-0">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a href="#">Diseases &
                                                                            Illness</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Ear Infection</a></li>
                                                                <li class="mt-2"><a href="#">Skin Issues</a></li>
                                                                <li class="mt-2"><a href="#">Fleas</a></li>
                                                                <li class="mt-2"><a href="#">Poisoning</a></li>
                                                                <li class="mt-2"><a href="#">Lyme Disease</a></li>
                                                                <li class="mt-2"><a href="#">Other Disease</a></li>
                                                                <li class="mb-3 mt-4">
                                                                    <h4 class="text-primary"><a
                                                                            href="#">Allergies</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Allergy Testing</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 mt-3 mt-md-0">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a
                                                                            href="#">Insurance</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Accident Insurance</a>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Illness Insurance</a>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Buyer's Guide</a></li>
                                                                <li class="mt-2"><a href="#">Veterinarian
                                                                        Recommendations</a></li>
                                                                <li class="mt-2"><a href="#">Insurance Cost</a></li>
                                                                <li class="mt-2"><a href="#">Wellness coverage
                                                                        plans</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 mt-3 mt-md-0">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a
                                                                            href="#">Emergency</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">First Aid</a></li>
                                                                <li class="mt-2"><a href="#">Toxic Items</a></li>
                                                                <li class="mt-2"><a href="#">Disasters</a></li>
                                                                <li class="mt-2"><a href="#">Wound Management</a>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Emergency Tips for
                                                                        Owners</a></li>
                                                                <li class="mt-4">
                                                                    <h4><a href="#">Dog
                                                                            Safety</a></h4>
                                                                </li>
                                                                <li class="mt-3">
                                                                    <h4><a href="#">Vetarnary
                                                                            Tips</a></h4>
                                                                </li>
                                                                <li class="mt-3">
                                                                    <h4><a href="#">Vaccination</a></h4>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="care1-tab" role="tabpanel"
                                                     aria-labelledby="care-tab">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-6">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a href="#">Common
                                                                            Symptoms</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Bad Breath</a></li>
                                                                <li class="mt-2"><a href="#">Chewing &
                                                                        Scratching</a></li>
                                                                <li class="mt-2"><a href="#">Eating Grass</a></li>
                                                                <li class="mt-2"><a href="#">Itching Ears</a></li>
                                                                <li class="mt-2"><a href="#">Lumps & Bumps</a></li>
                                                                <li class="mt-2"><a href="#">Diarrhea</a></li>
                                                                <li class="mt-2"><a href="#">Vomitting</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 mt-3 mt-md-0">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a href="#">Diseases &
                                                                            Illness</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Ear Infection</a></li>
                                                                <li class="mt-2"><a href="#">Skin Issues</a></li>
                                                                <li class="mt-2"><a href="#">Fleas</a></li>
                                                                <li class="mt-2"><a href="#">Poisoning</a></li>
                                                                <li class="mt-2"><a href="#">Lyme Disease</a></li>
                                                                <li class="mt-2"><a href="#">Other Disease</a></li>
                                                                <li class="mb-3 mt-4">
                                                                    <h4 class="text-primary"><a
                                                                            href="#">Allergies</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Allergy Testing</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 mt-3 mt-md-0">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a
                                                                            href="#">Insurance</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Accident Insurance</a>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Illness Insurance</a>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Buyer's Guide</a></li>
                                                                <li class="mt-2"><a href="#">Veterinarian
                                                                        Recommendations</a></li>
                                                                <li class="mt-2"><a href="#">Insurance Cost</a></li>
                                                                <li class="mt-2"><a href="#">Wellness coverage
                                                                        plans</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 mt-3 mt-md-0">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a
                                                                            href="#">Emergency</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">First Aid</a></li>
                                                                <li class="mt-2"><a href="#">Toxic Items</a></li>
                                                                <li class="mt-2"><a href="#">Disasters</a></li>
                                                                <li class="mt-2"><a href="#">Wound Management</a>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Emergency Tips for
                                                                        Owners</a></li>
                                                                <li class="mt-4">
                                                                    <h4><a href="#">Dog
                                                                            Safety</a></h4>
                                                                </li>
                                                                <li class="mt-3">
                                                                    <h4><a href="#">Vetarnary
                                                                            Tips</a></h4>
                                                                </li>
                                                                <li class="mt-3">
                                                                    <h4><a href="#">Vaccination</a></h4>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="breeds1-tab" role="tabpanel"
                                                     aria-labelledby="breeds-tab">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-6">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a href="#">Common
                                                                            Symptoms</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Bad Breath</a></li>
                                                                <li class="mt-2"><a href="#">Chewing &
                                                                        Scratching</a></li>
                                                                <li class="mt-2"><a href="#">Eating Grass</a></li>
                                                                <li class="mt-2"><a href="#">Itching Ears</a></li>
                                                                <li class="mt-2"><a href="#">Lumps & Bumps</a></li>
                                                                <li class="mt-2"><a href="#">Diarrhea</a></li>
                                                                <li class="mt-2"><a href="#">Vomitting</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 mt-3 mt-md-0">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a href="#">Diseases &
                                                                            Illness</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Ear Infection</a></li>
                                                                <li class="mt-2"><a href="#">Skin Issues</a></li>
                                                                <li class="mt-2"><a href="#">Fleas</a></li>
                                                                <li class="mt-2"><a href="#">Poisoning</a></li>
                                                                <li class="mt-2"><a href="#">Lyme Disease</a></li>
                                                                <li class="mt-2"><a href="#">Other Disease</a></li>
                                                                <li class="mb-3 mt-4">
                                                                    <h4 class="text-primary"><a
                                                                            href="#">Allergies</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Allergy Testing</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 mt-3 mt-md-0">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a
                                                                            href="#">Insurance</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Accident Insurance</a>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Illness Insurance</a>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Buyer's Guide</a></li>
                                                                <li class="mt-2"><a href="#">Veterinarian
                                                                        Recommendations</a></li>
                                                                <li class="mt-2"><a href="#">Insurance Cost</a></li>
                                                                <li class="mt-2"><a href="#">Wellness coverage
                                                                        plans</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 mt-3 mt-md-0">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a
                                                                            href="#">Emergency</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">First Aid</a></li>
                                                                <li class="mt-2"><a href="#">Toxic Items</a></li>
                                                                <li class="mt-2"><a href="#">Disasters</a></li>
                                                                <li class="mt-2"><a href="#">Wound Management</a>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Emergency Tips for
                                                                        Owners</a></li>
                                                                <li class="mt-4">
                                                                    <h4><a href="#">Dog
                                                                            Safety</a></h4>
                                                                </li>
                                                                <li class="mt-3">
                                                                    <h4><a href="#">Vetarnary
                                                                            Tips</a></h4>
                                                                </li>
                                                                <li class="mt-3">
                                                                    <h4><a href="#">Vaccination</a></h4>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="reviews1-tab" role="tabpanel"
                                                     aria-labelledby="reviews-tab">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-6">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a href="#">Common
                                                                            Symptoms</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Bad Breath</a></li>
                                                                <li class="mt-2"><a href="#">Chewing &
                                                                        Scratching</a></li>
                                                                <li class="mt-2"><a href="#">Eating Grass</a></li>
                                                                <li class="mt-2"><a href="#">Itching Ears</a></li>
                                                                <li class="mt-2"><a href="#">Lumps & Bumps</a></li>
                                                                <li class="mt-2"><a href="#">Diarrhea</a></li>
                                                                <li class="mt-2"><a href="#">Vomitting</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 mt-3 mt-md-0">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a href="#">Diseases &
                                                                            Illness</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Ear Infection</a></li>
                                                                <li class="mt-2"><a href="#">Skin Issues</a></li>
                                                                <li class="mt-2"><a href="#">Fleas</a></li>
                                                                <li class="mt-2"><a href="#">Poisoning</a></li>
                                                                <li class="mt-2"><a href="#">Lyme Disease</a></li>
                                                                <li class="mt-2"><a href="#">Other Disease</a></li>
                                                                <li class="mb-3 mt-4">
                                                                    <h4 class="text-primary"><a
                                                                            href="#">Allergies</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Allergy Testing</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 mt-3 mt-md-0">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a
                                                                            href="#">Insurance</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Accident Insurance</a>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Illness Insurance</a>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Buyer's Guide</a></li>
                                                                <li class="mt-2"><a href="#">Veterinarian
                                                                        Recommendations</a></li>
                                                                <li class="mt-2"><a href="#">Insurance Cost</a></li>
                                                                <li class="mt-2"><a href="#">Wellness coverage
                                                                        plans</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 mt-3 mt-md-0">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a
                                                                            href="#">Emergency</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">First Aid</a></li>
                                                                <li class="mt-2"><a href="#">Toxic Items</a></li>
                                                                <li class="mt-2"><a href="#">Disasters</a></li>
                                                                <li class="mt-2"><a href="#">Wound Management</a>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Emergency Tips for
                                                                        Owners</a></li>
                                                                <li class="mt-4">
                                                                    <h4><a href="#">Dog
                                                                            Safety</a></h4>
                                                                </li>
                                                                <li class="mt-3">
                                                                    <h4><a href="#">Vetarnary
                                                                            Tips</a></h4>
                                                                </li>
                                                                <li class="mt-3">
                                                                    <h4><a href="#">Vaccination</a></h4>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="news1-tab" role="tabpanel"
                                                     aria-labelledby="news-tab">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-6">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a href="#">Common
                                                                            Symptoms</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Bad Breath</a></li>
                                                                <li class="mt-2"><a href="#">Chewing &
                                                                        Scratching</a></li>
                                                                <li class="mt-2"><a href="#">Eating Grass</a></li>
                                                                <li class="mt-2"><a href="#">Itching Ears</a></li>
                                                                <li class="mt-2"><a href="#">Lumps & Bumps</a></li>
                                                                <li class="mt-2"><a href="#">Diarrhea</a></li>
                                                                <li class="mt-2"><a href="#">Vomitting</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 mt-3 mt-md-0">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a href="#">Diseases &
                                                                            Illness</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Ear Infection</a></li>
                                                                <li class="mt-2"><a href="#">Skin Issues</a></li>
                                                                <li class="mt-2"><a href="#">Fleas</a></li>
                                                                <li class="mt-2"><a href="#">Poisoning</a></li>
                                                                <li class="mt-2"><a href="#">Lyme Disease</a></li>
                                                                <li class="mt-2"><a href="#">Other Disease</a></li>
                                                                <li class="mb-3 mt-4">
                                                                    <h4 class="text-primary"><a
                                                                            href="#">Allergies</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Allergy Testing</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 mt-3 mt-md-0">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a
                                                                            href="#">Insurance</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Accident Insurance</a>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Illness Insurance</a>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Buyer's Guide</a></li>
                                                                <li class="mt-2"><a href="#">Veterinarian
                                                                        Recommendations</a></li>
                                                                <li class="mt-2"><a href="#">Insurance Cost</a></li>
                                                                <li class="mt-2"><a href="#">Wellness coverage
                                                                        plans</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 mt-3 mt-md-0">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a
                                                                            href="#">Emergency</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">First Aid</a></li>
                                                                <li class="mt-2"><a href="#">Toxic Items</a></li>
                                                                <li class="mt-2"><a href="#">Disasters</a></li>
                                                                <li class="mt-2"><a href="#">Wound Management</a>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Emergency Tips for
                                                                        Owners</a></li>
                                                                <li class="mt-4">
                                                                    <h4><a href="#">Dog
                                                                            Safety</a></h4>
                                                                </li>
                                                                <li class="mt-3">
                                                                    <h4><a href="#">Vetarnary
                                                                            Tips</a></h4>
                                                                </li>
                                                                <li class="mt-3">
                                                                    <h4><a href="#">Vaccination</a></h4>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="brands1-tab" role="tabpanel"
                                                     aria-labelledby="brands-tab">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-6">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a href="#">Common
                                                                            Symptoms</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Bad Breath</a></li>
                                                                <li class="mt-2"><a href="#">Chewing &
                                                                        Scratching</a></li>
                                                                <li class="mt-2"><a href="#">Eating Grass</a></li>
                                                                <li class="mt-2"><a href="#">Itching Ears</a></li>
                                                                <li class="mt-2"><a href="#">Lumps & Bumps</a></li>
                                                                <li class="mt-2"><a href="#">Diarrhea</a></li>
                                                                <li class="mt-2"><a href="#">Vomitting</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 mt-3 mt-md-0">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a href="#">Diseases &
                                                                            Illness</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Ear Infection</a></li>
                                                                <li class="mt-2"><a href="#">Skin Issues</a></li>
                                                                <li class="mt-2"><a href="#">Fleas</a></li>
                                                                <li class="mt-2"><a href="#">Poisoning</a></li>
                                                                <li class="mt-2"><a href="#">Lyme Disease</a></li>
                                                                <li class="mt-2"><a href="#">Other Disease</a></li>
                                                                <li class="mb-3 mt-4">
                                                                    <h4 class="text-primary"><a
                                                                            href="#">Allergies</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Allergy Testing</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 mt-3 mt-md-0">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a
                                                                            href="#">Insurance</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Accident Insurance</a>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Illness Insurance</a>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Buyer's Guide</a></li>
                                                                <li class="mt-2"><a href="#">Veterinarian
                                                                        Recommendations</a></li>
                                                                <li class="mt-2"><a href="#">Insurance Cost</a></li>
                                                                <li class="mt-2"><a href="#">Wellness coverage
                                                                        plans</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 mt-3 mt-md-0">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a
                                                                            href="#">Emergency</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">First Aid</a></li>
                                                                <li class="mt-2"><a href="#">Toxic Items</a></li>
                                                                <li class="mt-2"><a href="#">Disasters</a></li>
                                                                <li class="mt-2"><a href="#">Wound Management</a>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Emergency Tips for
                                                                        Owners</a></li>
                                                                <li class="mt-4">
                                                                    <h4><a href="#">Dog
                                                                            Safety</a></h4>
                                                                </li>
                                                                <li class="mt-3">
                                                                    <h4><a href="#">Vetarnary
                                                                            Tips</a></h4>
                                                                </li>
                                                                <li class="mt-3">
                                                                    <h4><a href="#">Vaccination</a></h4>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown mega-menu">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <div class="d-flex align-items-center">
                                        <img src="../assets/images/fish.png" class="mr-3 d-none d-md-inline-block">
                                        <span>Fish</span>
                                        <i class="fas fa-chevron-down font-10 ml-2"></i>
                                    </div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <div class="row no-gutters">
                                        <div class="col-4 col-lg-2 col-md-3">
                                            <div class="nav flex-column nav-pills bg-light pt-4 h-100 category-tabs2"
                                                 id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                                <a class="nav-link active" id="food2" href="category.html">Food</a>
                                                <a class="nav-link" id="health2" href="category.html">Health</a>
                                                <a class="nav-link" id="care2" href="category.html">Care</a>
                                                <a class="nav-link" id="breeds2" href="category.html">Breeds</a>
                                                <a class="nav-link" id="reviews2" href="category.html">Reviews</a>
                                                <a class="nav-link" id="news2" href="category.html">News</a>
                                                <a class="nav-link" id="brands2" href="category.html">Brands</a>
                                            </div>
                                        </div>
                                        <div class="col-8 col-lg-10 col-md-9">
                                            <div class="tab-content py-4 px-5 category-tabs-content2"
                                                 id="v-pills-tabContent">
                                                <div class="tab-pane active" id="food2-tab" role="tabpanel"
                                                     aria-labelledby="food-tab">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-6">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a href="#">Common
                                                                            Symptoms</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Bad Breath</a></li>
                                                                <li class="mt-2"><a href="#">Chewing &
                                                                        Scratching</a></li>
                                                                <li class="mt-2"><a href="#">Eating Grass</a></li>
                                                                <li class="mt-2"><a href="#">Itching Ears</a></li>
                                                                <li class="mt-2"><a href="#">Lumps & Bumps</a></li>
                                                                <li class="mt-2"><a href="#">Diarrhea</a></li>
                                                                <li class="mt-2"><a href="#">Vomitting</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 mt-3 mt-md-0">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a href="#">Diseases &
                                                                            Illness</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Ear Infection</a></li>
                                                                <li class="mt-2"><a href="#">Skin Issues</a></li>
                                                                <li class="mt-2"><a href="#">Fleas</a></li>
                                                                <li class="mt-2"><a href="#">Poisoning</a></li>
                                                                <li class="mt-2"><a href="#">Lyme Disease</a></li>
                                                                <li class="mt-2"><a href="#">Other Disease</a></li>
                                                                <li class="mb-3 mt-4">
                                                                    <h4 class="text-primary"><a
                                                                            href="#">Allergies</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Allergy Testing</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 mt-3 mt-md-0">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a
                                                                            href="#">Insurance</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Accident Insurance</a>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Illness Insurance</a>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Buyer's Guide</a></li>
                                                                <li class="mt-2"><a href="#">Veterinarian
                                                                        Recommendations</a></li>
                                                                <li class="mt-2"><a href="#">Insurance Cost</a></li>
                                                                <li class="mt-2"><a href="#">Wellness coverage
                                                                        plans</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 mt-3 mt-md-0">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a
                                                                            href="#">Emergency</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">First Aid</a></li>
                                                                <li class="mt-2"><a href="#">Toxic Items</a></li>
                                                                <li class="mt-2"><a href="#">Disasters</a></li>
                                                                <li class="mt-2"><a href="#">Wound Management</a>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Emergency Tips for
                                                                        Owners</a></li>
                                                                <li class="mt-4">
                                                                    <h4><a href="#">Dog
                                                                            Safety</a></h4>
                                                                </li>
                                                                <li class="mt-3">
                                                                    <h4><a href="#">Vetarnary
                                                                            Tips</a></h4>
                                                                </li>
                                                                <li class="mt-3">
                                                                    <h4><a href="#">Vaccination</a></h4>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="health2-tab" role="tabpanel"
                                                     aria-labelledby="health-tab">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-6">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a href="#">Common
                                                                            Symptoms</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Bad Breath</a></li>
                                                                <li class="mt-2"><a href="#">Chewing &
                                                                        Scratching</a></li>
                                                                <li class="mt-2"><a href="#">Eating Grass</a></li>
                                                                <li class="mt-2"><a href="#">Itching Ears</a></li>
                                                                <li class="mt-2"><a href="#">Lumps & Bumps</a></li>
                                                                <li class="mt-2"><a href="#">Diarrhea</a></li>
                                                                <li class="mt-2"><a href="#">Vomitting</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 mt-3 mt-md-0">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a href="#">Diseases &
                                                                            Illness</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Ear Infection</a></li>
                                                                <li class="mt-2"><a href="#">Skin Issues</a></li>
                                                                <li class="mt-2"><a href="#">Fleas</a></li>
                                                                <li class="mt-2"><a href="#">Poisoning</a></li>
                                                                <li class="mt-2"><a href="#">Lyme Disease</a></li>
                                                                <li class="mt-2"><a href="#">Other Disease</a></li>
                                                                <li class="mb-3 mt-4">
                                                                    <h4 class="text-primary"><a
                                                                            href="#">Allergies</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Allergy Testing</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 mt-3 mt-md-0">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a
                                                                            href="#">Insurance</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Accident Insurance</a>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Illness Insurance</a>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Buyer's Guide</a></li>
                                                                <li class="mt-2"><a href="#">Veterinarian
                                                                        Recommendations</a></li>
                                                                <li class="mt-2"><a href="#">Insurance Cost</a></li>
                                                                <li class="mt-2"><a href="#">Wellness coverage
                                                                        plans</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 mt-3 mt-md-0">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a
                                                                            href="#">Emergency</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">First Aid</a></li>
                                                                <li class="mt-2"><a href="#">Toxic Items</a></li>
                                                                <li class="mt-2"><a href="#">Disasters</a></li>
                                                                <li class="mt-2"><a href="#">Wound Management</a>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Emergency Tips for
                                                                        Owners</a></li>
                                                                <li class="mt-4">
                                                                    <h4><a href="#">Dog
                                                                            Safety</a></h4>
                                                                </li>
                                                                <li class="mt-3">
                                                                    <h4><a href="#">Vetarnary
                                                                            Tips</a></h4>
                                                                </li>
                                                                <li class="mt-3">
                                                                    <h4><a href="#">Vaccination</a></h4>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="care2-tab" role="tabpanel"
                                                     aria-labelledby="care-tab">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-6">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a href="#">Common
                                                                            Symptoms</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Bad Breath</a></li>
                                                                <li class="mt-2"><a href="#">Chewing &
                                                                        Scratching</a></li>
                                                                <li class="mt-2"><a href="#">Eating Grass</a></li>
                                                                <li class="mt-2"><a href="#">Itching Ears</a></li>
                                                                <li class="mt-2"><a href="#">Lumps & Bumps</a></li>
                                                                <li class="mt-2"><a href="#">Diarrhea</a></li>
                                                                <li class="mt-2"><a href="#">Vomitting</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 mt-3 mt-md-0">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a href="#">Diseases &
                                                                            Illness</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Ear Infection</a></li>
                                                                <li class="mt-2"><a href="#">Skin Issues</a></li>
                                                                <li class="mt-2"><a href="#">Fleas</a></li>
                                                                <li class="mt-2"><a href="#">Poisoning</a></li>
                                                                <li class="mt-2"><a href="#">Lyme Disease</a></li>
                                                                <li class="mt-2"><a href="#">Other Disease</a></li>
                                                                <li class="mb-3 mt-4">
                                                                    <h4 class="text-primary"><a
                                                                            href="#">Allergies</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Allergy Testing</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 mt-3 mt-md-0">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a
                                                                            href="#">Insurance</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Accident Insurance</a>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Illness Insurance</a>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Buyer's Guide</a></li>
                                                                <li class="mt-2"><a href="#">Veterinarian
                                                                        Recommendations</a></li>
                                                                <li class="mt-2"><a href="#">Insurance Cost</a></li>
                                                                <li class="mt-2"><a href="#">Wellness coverage
                                                                        plans</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 mt-3 mt-md-0">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a
                                                                            href="#">Emergency</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">First Aid</a></li>
                                                                <li class="mt-2"><a href="#">Toxic Items</a></li>
                                                                <li class="mt-2"><a href="#">Disasters</a></li>
                                                                <li class="mt-2"><a href="#">Wound Management</a>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Emergency Tips for
                                                                        Owners</a></li>
                                                                <li class="mt-4">
                                                                    <h4><a href="#">Dog
                                                                            Safety</a></h4>
                                                                </li>
                                                                <li class="mt-3">
                                                                    <h4><a href="#">Vetarnary
                                                                            Tips</a></h4>
                                                                </li>
                                                                <li class="mt-3">
                                                                    <h4><a href="#">Vaccination</a></h4>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="breeds2-tab" role="tabpanel"
                                                     aria-labelledby="breeds-tab">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-6">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a href="#">Common
                                                                            Symptoms</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Bad Breath</a></li>
                                                                <li class="mt-2"><a href="#">Chewing &
                                                                        Scratching</a></li>
                                                                <li class="mt-2"><a href="#">Eating Grass</a></li>
                                                                <li class="mt-2"><a href="#">Itching Ears</a></li>
                                                                <li class="mt-2"><a href="#">Lumps & Bumps</a></li>
                                                                <li class="mt-2"><a href="#">Diarrhea</a></li>
                                                                <li class="mt-2"><a href="#">Vomitting</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 mt-3 mt-md-0">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a href="#">Diseases &
                                                                            Illness</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Ear Infection</a></li>
                                                                <li class="mt-2"><a href="#">Skin Issues</a></li>
                                                                <li class="mt-2"><a href="#">Fleas</a></li>
                                                                <li class="mt-2"><a href="#">Poisoning</a></li>
                                                                <li class="mt-2"><a href="#">Lyme Disease</a></li>
                                                                <li class="mt-2"><a href="#">Other Disease</a></li>
                                                                <li class="mb-3 mt-4">
                                                                    <h4 class="text-primary"><a
                                                                            href="#">Allergies</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Allergy Testing</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 mt-3 mt-md-0">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a
                                                                            href="#">Insurance</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Accident Insurance</a>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Illness Insurance</a>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Buyer's Guide</a></li>
                                                                <li class="mt-2"><a href="#">Veterinarian
                                                                        Recommendations</a></li>
                                                                <li class="mt-2"><a href="#">Insurance Cost</a></li>
                                                                <li class="mt-2"><a href="#">Wellness coverage
                                                                        plans</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 mt-3 mt-md-0">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a
                                                                            href="#">Emergency</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">First Aid</a></li>
                                                                <li class="mt-2"><a href="#">Toxic Items</a></li>
                                                                <li class="mt-2"><a href="#">Disasters</a></li>
                                                                <li class="mt-2"><a href="#">Wound Management</a>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Emergency Tips for
                                                                        Owners</a></li>
                                                                <li class="mt-4">
                                                                    <h4><a href="#">Dog
                                                                            Safety</a></h4>
                                                                </li>
                                                                <li class="mt-3">
                                                                    <h4><a href="#">Vetarnary
                                                                            Tips</a></h4>
                                                                </li>
                                                                <li class="mt-3">
                                                                    <h4><a href="#">Vaccination</a></h4>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="reviews2-tab" role="tabpanel"
                                                     aria-labelledby="reviews-tab">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-6">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a href="#">Common
                                                                            Symptoms</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Bad Breath</a></li>
                                                                <li class="mt-2"><a href="#">Chewing &
                                                                        Scratching</a></li>
                                                                <li class="mt-2"><a href="#">Eating Grass</a></li>
                                                                <li class="mt-2"><a href="#">Itching Ears</a></li>
                                                                <li class="mt-2"><a href="#">Lumps & Bumps</a></li>
                                                                <li class="mt-2"><a href="#">Diarrhea</a></li>
                                                                <li class="mt-2"><a href="#">Vomitting</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 mt-3 mt-md-0">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a href="#">Diseases &
                                                                            Illness</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Ear Infection</a></li>
                                                                <li class="mt-2"><a href="#">Skin Issues</a></li>
                                                                <li class="mt-2"><a href="#">Fleas</a></li>
                                                                <li class="mt-2"><a href="#">Poisoning</a></li>
                                                                <li class="mt-2"><a href="#">Lyme Disease</a></li>
                                                                <li class="mt-2"><a href="#">Other Disease</a></li>
                                                                <li class="mb-3 mt-4">
                                                                    <h4 class="text-primary"><a
                                                                            href="#">Allergies</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Allergy Testing</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 mt-3 mt-md-0">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a
                                                                            href="#">Insurance</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Accident Insurance</a>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Illness Insurance</a>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Buyer's Guide</a></li>
                                                                <li class="mt-2"><a href="#">Veterinarian
                                                                        Recommendations</a></li>
                                                                <li class="mt-2"><a href="#">Insurance Cost</a></li>
                                                                <li class="mt-2"><a href="#">Wellness coverage
                                                                        plans</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 mt-3 mt-md-0">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a
                                                                            href="#">Emergency</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">First Aid</a></li>
                                                                <li class="mt-2"><a href="#">Toxic Items</a></li>
                                                                <li class="mt-2"><a href="#">Disasters</a></li>
                                                                <li class="mt-2"><a href="#">Wound Management</a>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Emergency Tips for
                                                                        Owners</a></li>
                                                                <li class="mt-4">
                                                                    <h4><a href="#">Dog
                                                                            Safety</a></h4>
                                                                </li>
                                                                <li class="mt-3">
                                                                    <h4><a href="#">Vetarnary
                                                                            Tips</a></h4>
                                                                </li>
                                                                <li class="mt-3">
                                                                    <h4><a href="#">Vaccination</a></h4>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="news2-tab" role="tabpanel"
                                                     aria-labelledby="news-tab">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-6">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a href="#">Common
                                                                            Symptoms</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Bad Breath</a></li>
                                                                <li class="mt-2"><a href="#">Chewing &
                                                                        Scratching</a></li>
                                                                <li class="mt-2"><a href="#">Eating Grass</a></li>
                                                                <li class="mt-2"><a href="#">Itching Ears</a></li>
                                                                <li class="mt-2"><a href="#">Lumps & Bumps</a></li>
                                                                <li class="mt-2"><a href="#">Diarrhea</a></li>
                                                                <li class="mt-2"><a href="#">Vomitting</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 mt-3 mt-md-0">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a href="#">Diseases &
                                                                            Illness</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Ear Infection</a></li>
                                                                <li class="mt-2"><a href="#">Skin Issues</a></li>
                                                                <li class="mt-2"><a href="#">Fleas</a></li>
                                                                <li class="mt-2"><a href="#">Poisoning</a></li>
                                                                <li class="mt-2"><a href="#">Lyme Disease</a></li>
                                                                <li class="mt-2"><a href="#">Other Disease</a></li>
                                                                <li class="mb-3 mt-4">
                                                                    <h4 class="text-primary"><a
                                                                            href="#">Allergies</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Allergy Testing</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 mt-3 mt-md-0">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a
                                                                            href="#">Insurance</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Accident Insurance</a>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Illness Insurance</a>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Buyer's Guide</a></li>
                                                                <li class="mt-2"><a href="#">Veterinarian
                                                                        Recommendations</a></li>
                                                                <li class="mt-2"><a href="#">Insurance Cost</a></li>
                                                                <li class="mt-2"><a href="#">Wellness coverage
                                                                        plans</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 mt-3 mt-md-0">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a
                                                                            href="#">Emergency</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">First Aid</a></li>
                                                                <li class="mt-2"><a href="#">Toxic Items</a></li>
                                                                <li class="mt-2"><a href="#">Disasters</a></li>
                                                                <li class="mt-2"><a href="#">Wound Management</a>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Emergency Tips for
                                                                        Owners</a></li>
                                                                <li class="mt-4">
                                                                    <h4><a href="#">Dog
                                                                            Safety</a></h4>
                                                                </li>
                                                                <li class="mt-3">
                                                                    <h4><a href="#">Vetarnary
                                                                            Tips</a></h4>
                                                                </li>
                                                                <li class="mt-3">
                                                                    <h4><a href="#">Vaccination</a></h4>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="brands2-tab" role="tabpanel"
                                                     aria-labelledby="brands-tab">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-6">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a href="#">Common
                                                                            Symptoms</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Bad Breath</a></li>
                                                                <li class="mt-2"><a href="#">Chewing &
                                                                        Scratching</a></li>
                                                                <li class="mt-2"><a href="#">Eating Grass</a></li>
                                                                <li class="mt-2"><a href="#">Itching Ears</a></li>
                                                                <li class="mt-2"><a href="#">Lumps & Bumps</a></li>
                                                                <li class="mt-2"><a href="#">Diarrhea</a></li>
                                                                <li class="mt-2"><a href="#">Vomitting</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 mt-3 mt-md-0">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a href="#">Diseases &
                                                                            Illness</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Ear Infection</a></li>
                                                                <li class="mt-2"><a href="#">Skin Issues</a></li>
                                                                <li class="mt-2"><a href="#">Fleas</a></li>
                                                                <li class="mt-2"><a href="#">Poisoning</a></li>
                                                                <li class="mt-2"><a href="#">Lyme Disease</a></li>
                                                                <li class="mt-2"><a href="#">Other Disease</a></li>
                                                                <li class="mb-3 mt-4">
                                                                    <h4 class="text-primary"><a
                                                                            href="#">Allergies</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Allergy Testing</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 mt-3 mt-md-0">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a
                                                                            href="#">Insurance</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Accident Insurance</a>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Illness Insurance</a>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Buyer's Guide</a></li>
                                                                <li class="mt-2"><a href="#">Veterinarian
                                                                        Recommendations</a></li>
                                                                <li class="mt-2"><a href="#">Insurance Cost</a></li>
                                                                <li class="mt-2"><a href="#">Wellness coverage
                                                                        plans</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 mt-3 mt-md-0">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a
                                                                            href="#">Emergency</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">First Aid</a></li>
                                                                <li class="mt-2"><a href="#">Toxic Items</a></li>
                                                                <li class="mt-2"><a href="#">Disasters</a></li>
                                                                <li class="mt-2"><a href="#">Wound Management</a>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Emergency Tips for
                                                                        Owners</a></li>
                                                                <li class="mt-4">
                                                                    <h4><a href="#">Dog
                                                                            Safety</a></h4>
                                                                </li>
                                                                <li class="mt-3">
                                                                    <h4><a href="#">Vetarnary
                                                                            Tips</a></h4>
                                                                </li>
                                                                <li class="mt-3">
                                                                    <h4><a href="#">Vaccination</a></h4>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown mega-menu">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <div class="d-flex align-items-center">
                                        <img src="../assets/images/bird.png" class="mr-3 d-none d-md-inline-block">
                                        <span>Bird</span>
                                        <i class="fas fa-chevron-down font-10 ml-2"></i>
                                    </div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <div class="row no-gutters">
                                        <div class="col-4 col-lg-2 col-md-3">
                                            <div class="nav flex-column nav-pills bg-light pt-4 h-100 category-tabs3"
                                                 id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                                <a class="nav-link active" id="food3" href="category.html">Food</a>
                                                <a class="nav-link" id="health3" href="category.html">Health</a>
                                                <a class="nav-link" id="care3" href="category.html">Care</a>
                                                <a class="nav-link" id="breeds3" href="category.html">Breeds</a>
                                                <a class="nav-link" id="reviews3" href="category.html">Reviews</a>
                                                <a class="nav-link" id="news3" href="category.html">News</a>
                                                <a class="nav-link" id="brands3" href="category.html">Brands</a>
                                            </div>
                                        </div>
                                        <div class="col-8 col-lg-10 col-md-9">
                                            <div class="tab-content py-4 px-5 category-tabs-content3"
                                                 id="v-pills-tabContent">
                                                <div class="tab-pane active" id="food3-tab" role="tabpanel"
                                                     aria-labelledby="food-tab">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-6">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a href="#">Common
                                                                            Symptoms</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Bad Breath</a></li>
                                                                <li class="mt-2"><a href="#">Chewing &
                                                                        Scratching</a></li>
                                                                <li class="mt-2"><a href="#">Eating Grass</a></li>
                                                                <li class="mt-2"><a href="#">Itching Ears</a></li>
                                                                <li class="mt-2"><a href="#">Lumps & Bumps</a></li>
                                                                <li class="mt-2"><a href="#">Diarrhea</a></li>
                                                                <li class="mt-2"><a href="#">Vomitting</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 mt-3 mt-md-0">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a href="#">Diseases &
                                                                            Illness</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Ear Infection</a></li>
                                                                <li class="mt-2"><a href="#">Skin Issues</a></li>
                                                                <li class="mt-2"><a href="#">Fleas</a></li>
                                                                <li class="mt-2"><a href="#">Poisoning</a></li>
                                                                <li class="mt-2"><a href="#">Lyme Disease</a></li>
                                                                <li class="mt-2"><a href="#">Other Disease</a></li>
                                                                <li class="mb-3 mt-4">
                                                                    <h4 class="text-primary"><a
                                                                            href="#">Allergies</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Allergy Testing</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 mt-3 mt-md-0">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a
                                                                            href="#">Insurance</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Accident Insurance</a>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Illness Insurance</a>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Buyer's Guide</a></li>
                                                                <li class="mt-2"><a href="#">Veterinarian
                                                                        Recommendations</a></li>
                                                                <li class="mt-2"><a href="#">Insurance Cost</a></li>
                                                                <li class="mt-2"><a href="#">Wellness coverage
                                                                        plans</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 mt-3 mt-md-0">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a
                                                                            href="#">Emergency</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">First Aid</a></li>
                                                                <li class="mt-2"><a href="#">Toxic Items</a></li>
                                                                <li class="mt-2"><a href="#">Disasters</a></li>
                                                                <li class="mt-2"><a href="#">Wound Management</a>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Emergency Tips for
                                                                        Owners</a></li>
                                                                <li class="mt-4">
                                                                    <h4><a href="#">Dog
                                                                            Safety</a></h4>
                                                                </li>
                                                                <li class="mt-3">
                                                                    <h4><a href="#">Vetarnary
                                                                            Tips</a></h4>
                                                                </li>
                                                                <li class="mt-3">
                                                                    <h4><a href="#">Vaccination</a></h4>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="health3-tab" role="tabpanel"
                                                     aria-labelledby="health-tab">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-6">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a href="#">Common
                                                                            Symptoms</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Bad Breath</a></li>
                                                                <li class="mt-2"><a href="#">Chewing &
                                                                        Scratching</a></li>
                                                                <li class="mt-2"><a href="#">Eating Grass</a></li>
                                                                <li class="mt-2"><a href="#">Itching Ears</a></li>
                                                                <li class="mt-2"><a href="#">Lumps & Bumps</a></li>
                                                                <li class="mt-2"><a href="#">Diarrhea</a></li>
                                                                <li class="mt-2"><a href="#">Vomitting</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 mt-3 mt-md-0">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a href="#">Diseases &
                                                                            Illness</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Ear Infection</a></li>
                                                                <li class="mt-2"><a href="#">Skin Issues</a></li>
                                                                <li class="mt-2"><a href="#">Fleas</a></li>
                                                                <li class="mt-2"><a href="#">Poisoning</a></li>
                                                                <li class="mt-2"><a href="#">Lyme Disease</a></li>
                                                                <li class="mt-2"><a href="#">Other Disease</a></li>
                                                                <li class="mb-3 mt-4">
                                                                    <h4 class="text-primary"><a
                                                                            href="#">Allergies</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Allergy Testing</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 mt-3 mt-md-0">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a
                                                                            href="#">Insurance</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Accident Insurance</a>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Illness Insurance</a>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Buyer's Guide</a></li>
                                                                <li class="mt-2"><a href="#">Veterinarian
                                                                        Recommendations</a></li>
                                                                <li class="mt-2"><a href="#">Insurance Cost</a></li>
                                                                <li class="mt-2"><a href="#">Wellness coverage
                                                                        plans</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 mt-3 mt-md-0">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a
                                                                            href="#">Emergency</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">First Aid</a></li>
                                                                <li class="mt-2"><a href="#">Toxic Items</a></li>
                                                                <li class="mt-2"><a href="#">Disasters</a></li>
                                                                <li class="mt-2"><a href="#">Wound Management</a>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Emergency Tips for
                                                                        Owners</a></li>
                                                                <li class="mt-4">
                                                                    <h4><a href="#">Dog
                                                                            Safety</a></h4>
                                                                </li>
                                                                <li class="mt-3">
                                                                    <h4><a href="#">Vetarnary
                                                                            Tips</a></h4>
                                                                </li>
                                                                <li class="mt-3">
                                                                    <h4><a href="#">Vaccination</a></h4>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="care3-tab" role="tabpanel"
                                                     aria-labelledby="care-tab">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-6">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a href="#">Common
                                                                            Symptoms</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Bad Breath</a></li>
                                                                <li class="mt-2"><a href="#">Chewing &
                                                                        Scratching</a></li>
                                                                <li class="mt-2"><a href="#">Eating Grass</a></li>
                                                                <li class="mt-2"><a href="#">Itching Ears</a></li>
                                                                <li class="mt-2"><a href="#">Lumps & Bumps</a></li>
                                                                <li class="mt-2"><a href="#">Diarrhea</a></li>
                                                                <li class="mt-2"><a href="#">Vomitting</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 mt-3 mt-md-0">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a href="#">Diseases &
                                                                            Illness</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Ear Infection</a></li>
                                                                <li class="mt-2"><a href="#">Skin Issues</a></li>
                                                                <li class="mt-2"><a href="#">Fleas</a></li>
                                                                <li class="mt-2"><a href="#">Poisoning</a></li>
                                                                <li class="mt-2"><a href="#">Lyme Disease</a></li>
                                                                <li class="mt-2"><a href="#">Other Disease</a></li>
                                                                <li class="mb-3 mt-4">
                                                                    <h4 class="text-primary"><a
                                                                            href="#">Allergies</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Allergy Testing</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 mt-3 mt-md-0">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a
                                                                            href="#">Insurance</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Accident Insurance</a>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Illness Insurance</a>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Buyer's Guide</a></li>
                                                                <li class="mt-2"><a href="#">Veterinarian
                                                                        Recommendations</a></li>
                                                                <li class="mt-2"><a href="#">Insurance Cost</a></li>
                                                                <li class="mt-2"><a href="#">Wellness coverage
                                                                        plans</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 mt-3 mt-md-0">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a
                                                                            href="#">Emergency</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">First Aid</a></li>
                                                                <li class="mt-2"><a href="#">Toxic Items</a></li>
                                                                <li class="mt-2"><a href="#">Disasters</a></li>
                                                                <li class="mt-2"><a href="#">Wound Management</a>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Emergency Tips for
                                                                        Owners</a></li>
                                                                <li class="mt-4">
                                                                    <h4><a href="#">Dog
                                                                            Safety</a></h4>
                                                                </li>
                                                                <li class="mt-3">
                                                                    <h4><a href="#">Vetarnary
                                                                            Tips</a></h4>
                                                                </li>
                                                                <li class="mt-3">
                                                                    <h4><a href="#">Vaccination</a></h4>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="breeds3-tab" role="tabpanel"
                                                     aria-labelledby="breeds-tab">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-6">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a href="#">Common
                                                                            Symptoms</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Bad Breath</a></li>
                                                                <li class="mt-2"><a href="#">Chewing &
                                                                        Scratching</a></li>
                                                                <li class="mt-2"><a href="#">Eating Grass</a></li>
                                                                <li class="mt-2"><a href="#">Itching Ears</a></li>
                                                                <li class="mt-2"><a href="#">Lumps & Bumps</a></li>
                                                                <li class="mt-2"><a href="#">Diarrhea</a></li>
                                                                <li class="mt-2"><a href="#">Vomitting</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 mt-3 mt-md-0">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a href="#">Diseases &
                                                                            Illness</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Ear Infection</a></li>
                                                                <li class="mt-2"><a href="#">Skin Issues</a></li>
                                                                <li class="mt-2"><a href="#">Fleas</a></li>
                                                                <li class="mt-2"><a href="#">Poisoning</a></li>
                                                                <li class="mt-2"><a href="#">Lyme Disease</a></li>
                                                                <li class="mt-2"><a href="#">Other Disease</a></li>
                                                                <li class="mb-3 mt-4">
                                                                    <h4 class="text-primary"><a
                                                                            href="#">Allergies</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Allergy Testing</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 mt-3 mt-md-0">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a
                                                                            href="#">Insurance</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Accident Insurance</a>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Illness Insurance</a>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Buyer's Guide</a></li>
                                                                <li class="mt-2"><a href="#">Veterinarian
                                                                        Recommendations</a></li>
                                                                <li class="mt-2"><a href="#">Insurance Cost</a></li>
                                                                <li class="mt-2"><a href="#">Wellness coverage
                                                                        plans</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 mt-3 mt-md-0">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a
                                                                            href="#">Emergency</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">First Aid</a></li>
                                                                <li class="mt-2"><a href="#">Toxic Items</a></li>
                                                                <li class="mt-2"><a href="#">Disasters</a></li>
                                                                <li class="mt-2"><a href="#">Wound Management</a>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Emergency Tips for
                                                                        Owners</a></li>
                                                                <li class="mt-4">
                                                                    <h4><a href="#">Dog
                                                                            Safety</a></h4>
                                                                </li>
                                                                <li class="mt-3">
                                                                    <h4><a href="#">Vetarnary
                                                                            Tips</a></h4>
                                                                </li>
                                                                <li class="mt-3">
                                                                    <h4><a href="#">Vaccination</a></h4>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="reviews3-tab" role="tabpanel"
                                                     aria-labelledby="reviews-tab">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-6">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a href="#">Common
                                                                            Symptoms</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Bad Breath</a></li>
                                                                <li class="mt-2"><a href="#">Chewing &
                                                                        Scratching</a></li>
                                                                <li class="mt-2"><a href="#">Eating Grass</a></li>
                                                                <li class="mt-2"><a href="#">Itching Ears</a></li>
                                                                <li class="mt-2"><a href="#">Lumps & Bumps</a></li>
                                                                <li class="mt-2"><a href="#">Diarrhea</a></li>
                                                                <li class="mt-2"><a href="#">Vomitting</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 mt-3 mt-md-0">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a href="#">Diseases &
                                                                            Illness</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Ear Infection</a></li>
                                                                <li class="mt-2"><a href="#">Skin Issues</a></li>
                                                                <li class="mt-2"><a href="#">Fleas</a></li>
                                                                <li class="mt-2"><a href="#">Poisoning</a></li>
                                                                <li class="mt-2"><a href="#">Lyme Disease</a></li>
                                                                <li class="mt-2"><a href="#">Other Disease</a></li>
                                                                <li class="mb-3 mt-4">
                                                                    <h4 class="text-primary"><a
                                                                            href="#">Allergies</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Allergy Testing</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 mt-3 mt-md-0">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a
                                                                            href="#">Insurance</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Accident Insurance</a>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Illness Insurance</a>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Buyer's Guide</a></li>
                                                                <li class="mt-2"><a href="#">Veterinarian
                                                                        Recommendations</a></li>
                                                                <li class="mt-2"><a href="#">Insurance Cost</a></li>
                                                                <li class="mt-2"><a href="#">Wellness coverage
                                                                        plans</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 mt-3 mt-md-0">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a
                                                                            href="#">Emergency</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">First Aid</a></li>
                                                                <li class="mt-2"><a href="#">Toxic Items</a></li>
                                                                <li class="mt-2"><a href="#">Disasters</a></li>
                                                                <li class="mt-2"><a href="#">Wound Management</a>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Emergency Tips for
                                                                        Owners</a></li>
                                                                <li class="mt-4">
                                                                    <h4><a href="#">Dog
                                                                            Safety</a></h4>
                                                                </li>
                                                                <li class="mt-3">
                                                                    <h4><a href="#">Vetarnary
                                                                            Tips</a></h4>
                                                                </li>
                                                                <li class="mt-3">
                                                                    <h4><a href="#">Vaccination</a></h4>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="news3-tab" role="tabpanel"
                                                     aria-labelledby="news-tab">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-6">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a href="#">Common
                                                                            Symptoms</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Bad Breath</a></li>
                                                                <li class="mt-2"><a href="#">Chewing &
                                                                        Scratching</a></li>
                                                                <li class="mt-2"><a href="#">Eating Grass</a></li>
                                                                <li class="mt-2"><a href="#">Itching Ears</a></li>
                                                                <li class="mt-2"><a href="#">Lumps & Bumps</a></li>
                                                                <li class="mt-2"><a href="#">Diarrhea</a></li>
                                                                <li class="mt-2"><a href="#">Vomitting</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 mt-3 mt-md-0">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a href="#">Diseases &
                                                                            Illness</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Ear Infection</a></li>
                                                                <li class="mt-2"><a href="#">Skin Issues</a></li>
                                                                <li class="mt-2"><a href="#">Fleas</a></li>
                                                                <li class="mt-2"><a href="#">Poisoning</a></li>
                                                                <li class="mt-2"><a href="#">Lyme Disease</a></li>
                                                                <li class="mt-2"><a href="#">Other Disease</a></li>
                                                                <li class="mb-3 mt-4">
                                                                    <h4 class="text-primary"><a
                                                                            href="#">Allergies</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Allergy Testing</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 mt-3 mt-md-0">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a
                                                                            href="#">Insurance</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Accident Insurance</a>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Illness Insurance</a>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Buyer's Guide</a></li>
                                                                <li class="mt-2"><a href="#">Veterinarian
                                                                        Recommendations</a></li>
                                                                <li class="mt-2"><a href="#">Insurance Cost</a></li>
                                                                <li class="mt-2"><a href="#">Wellness coverage
                                                                        plans</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 mt-3 mt-md-0">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a
                                                                            href="#">Emergency</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">First Aid</a></li>
                                                                <li class="mt-2"><a href="#">Toxic Items</a></li>
                                                                <li class="mt-2"><a href="#">Disasters</a></li>
                                                                <li class="mt-2"><a href="#">Wound Management</a>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Emergency Tips for
                                                                        Owners</a></li>
                                                                <li class="mt-4">
                                                                    <h4><a href="#">Dog
                                                                            Safety</a></h4>
                                                                </li>
                                                                <li class="mt-3">
                                                                    <h4><a href="#">Vetarnary
                                                                            Tips</a></h4>
                                                                </li>
                                                                <li class="mt-3">
                                                                    <h4><a href="#">Vaccination</a></h4>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="brands3-tab" role="tabpanel"
                                                     aria-labelledby="brands-tab">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-6">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a href="#">Common
                                                                            Symptoms</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Bad Breath</a></li>
                                                                <li class="mt-2"><a href="#">Chewing &
                                                                        Scratching</a></li>
                                                                <li class="mt-2"><a href="#">Eating Grass</a></li>
                                                                <li class="mt-2"><a href="#">Itching Ears</a></li>
                                                                <li class="mt-2"><a href="#">Lumps & Bumps</a></li>
                                                                <li class="mt-2"><a href="#">Diarrhea</a></li>
                                                                <li class="mt-2"><a href="#">Vomitting</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 mt-3 mt-md-0">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a href="#">Diseases &
                                                                            Illness</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Ear Infection</a></li>
                                                                <li class="mt-2"><a href="#">Skin Issues</a></li>
                                                                <li class="mt-2"><a href="#">Fleas</a></li>
                                                                <li class="mt-2"><a href="#">Poisoning</a></li>
                                                                <li class="mt-2"><a href="#">Lyme Disease</a></li>
                                                                <li class="mt-2"><a href="#">Other Disease</a></li>
                                                                <li class="mb-3 mt-4">
                                                                    <h4 class="text-primary"><a
                                                                            href="#">Allergies</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Allergy Testing</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 mt-3 mt-md-0">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a
                                                                            href="#">Insurance</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Accident Insurance</a>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Illness Insurance</a>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Buyer's Guide</a></li>
                                                                <li class="mt-2"><a href="#">Veterinarian
                                                                        Recommendations</a></li>
                                                                <li class="mt-2"><a href="#">Insurance Cost</a></li>
                                                                <li class="mt-2"><a href="#">Wellness coverage
                                                                        plans</a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-lg-3 col-md-6 mt-3 mt-md-0">
                                                            <ul class="list-unstyled">
                                                                <li class="mb-3">
                                                                    <h4 class="text-primary"><a
                                                                            href="#">Emergency</a></h4>
                                                                    <span class="underline"></span>
                                                                </li>
                                                                <li class="mt-2"><a href="#">First Aid</a></li>
                                                                <li class="mt-2"><a href="#">Toxic Items</a></li>
                                                                <li class="mt-2"><a href="#">Disasters</a></li>
                                                                <li class="mt-2"><a href="#">Wound Management</a>
                                                                </li>
                                                                <li class="mt-2"><a href="#">Emergency Tips for
                                                                        Owners</a></li>
                                                                <li class="mt-4">
                                                                    <h4><a href="#">Dog
                                                                            Safety</a></h4>
                                                                </li>
                                                                <li class="mt-3">
                                                                    <h4><a href="#">Vetarnary
                                                                            Tips</a></h4>
                                                                </li>
                                                                <li class="mt-3">
                                                                    <h4><a href="#">Vaccination</a></h4>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- End pet categories -->
    <!-- sidebar menu visible only in mobile -->
    <aside class="left-sidebar d-lg-none">
        <a href="javascript:void(0)" class="sidebar-toggle">
            <i class="text-white" data-feather="x"></i>
        </a>
        <div class="scroll-sidebar">
            <nav class="sidebar-nav">
                <ul class="metismenu" id="menu1">
                    <li>
                        <a class="has-arrow plus" href="#" aria-expanded="false">Cat</a>
                        <ul class="mm-collapse">
                            <li>
                                <a class="has-arrow plus" href="#" aria-expanded="false">Food</a>
                                <ul class="mm-collapse">
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Common Symptoms</a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Bad Breath</a></li>
                                            <li><a href="#">Chewing & Scratching</a></li>
                                            <li><a href="#">Eating Grass</a></li>
                                            <li><a href="#">Itching Ears</a></li>
                                            <li><a href="#">Lumps & Bumps</a></li>
                                            <li><a href="#">Diarrhea</a></li>
                                            <li><a href="#">Vomitting</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Diseases & Illness</a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Ear Infection</a></li>
                                            <li><a href="#">Skin Issues</a></li>
                                            <li><a href="#">Fleas</a></li>
                                            <li><a href="#">Poisoning</a></li>
                                            <li><a href="#">Lyme Disease</a></li>
                                            <li><a href="#">Other Disease</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Allergies</a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Allergy Testing</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Insurance</a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Accident Insurance</a></li>
                                            <li><a href="#">Illness Insurance</a></li>
                                            <li><a href="#">Buyer's Guide</a></li>
                                            <li><a href="#">Veterinarian Recommendations</a></li>
                                            <li><a href="#">Insurance Cost</a></li>
                                            <li><a href="#">Wellness Coverage Plans</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Emergency</a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">First Aid</a></li>
                                            <li><a href="#">Toxic Items</a></li>
                                            <li><a href="#">Disasters</a></li>
                                            <li><a href="#">Wound Management</a></li>
                                            <li><a href="#">Emergency Tips For Owners</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Dog Safety</a></li>
                                    <li><a href="#">Vetarnary Tips</a></li>
                                    <li><a href="#">Vaccination</a></li>
                                    <li><a href="#">All Food</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="has-arrow plus" href="#" aria-expanded="false">Health</a>
                                <ul class="mm-collapse">
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Common Symptoms

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Bad Breath</a></li>
                                            <li><a href="#">Chewing & Scratching</a></li>
                                            <li><a href="#">Eating Grass</a></li>
                                            <li><a href="#">Itching Ears</a></li>
                                            <li><a href="#">Lumps & Bumps</a></li>
                                            <li><a href="#">Diarrhea</a></li>
                                            <li><a href="#">Vomitting</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Diseases & Illness

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Ear Infection</a></li>
                                            <li><a href="#">Skin Issues</a></li>
                                            <li><a href="#">Fleas</a></li>
                                            <li><a href="#">Poisoning</a></li>
                                            <li><a href="#">Lyme Disease</a></li>
                                            <li><a href="#">Other Disease</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Allergies

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Allergy Testing</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Insurance

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Accident Insurance</a></li>
                                            <li><a href="#">Illness Insurance</a></li>
                                            <li><a href="#">Buyer's Guide</a></li>
                                            <li><a href="#">Veterinarian Recommendations</a></li>
                                            <li><a href="#">Insurance Cost</a></li>
                                            <li><a href="#">Wellness Coverage Plans</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Emergency

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">First Aid</a></li>
                                            <li><a href="#">Toxic Items</a></li>
                                            <li><a href="#">Disasters</a></li>
                                            <li><a href="#">Wound Management</a></li>
                                            <li><a href="#">Emergency Tips For Owners</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Dog Safety</a></li>
                                    <li><a href="#">Vetarnary Tips</a></li>
                                    <li><a href="#">Vaccination</a></li>
                                    <li><a href="#">All Health</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="has-arrow plus" href="#" aria-expanded="false">Care</a>
                                <ul class="mm-collapse">
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Common Symptoms

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Bad Breath</a></li>
                                            <li><a href="#">Chewing & Scratching</a></li>
                                            <li><a href="#">Eating Grass</a></li>
                                            <li><a href="#">Itching Ears</a></li>
                                            <li><a href="#">Lumps & Bumps</a></li>
                                            <li><a href="#">Diarrhea</a></li>
                                            <li><a href="#">Vomitting</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Diseases & Illness

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Ear Infection</a></li>
                                            <li><a href="#">Skin Issues</a></li>
                                            <li><a href="#">Fleas</a></li>
                                            <li><a href="#">Poisoning</a></li>
                                            <li><a href="#">Lyme Disease</a></li>
                                            <li><a href="#">Other Disease</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Allergies

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Allergy Testing</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Insurance

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Accident Insurance</a></li>
                                            <li><a href="#">Illness Insurance</a></li>
                                            <li><a href="#">Buyer's Guide</a></li>
                                            <li><a href="#">Veterinarian Recommendations</a></li>
                                            <li><a href="#">Insurance Cost</a></li>
                                            <li><a href="#">Wellness Coverage Plans</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Emergency

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">First Aid</a></li>
                                            <li><a href="#">Toxic Items</a></li>
                                            <li><a href="#">Disasters</a></li>
                                            <li><a href="#">Wound Management</a></li>
                                            <li><a href="#">Emergency Tips For Owners</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Dog Safety</a></li>
                                    <li><a href="#">Vetarnary Tips</a></li>
                                    <li><a href="#">Vaccination</a></li>
                                    <li><a href="#">All Care</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="has-arrow plus" href="#" aria-expanded="false">Breeds</a>
                                <ul class="mm-collapse">
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Common Symptoms

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Bad Breath</a></li>
                                            <li><a href="#">Chewing & Scratching</a></li>
                                            <li><a href="#">Eating Grass</a></li>
                                            <li><a href="#">Itching Ears</a></li>
                                            <li><a href="#">Lumps & Bumps</a></li>
                                            <li><a href="#">Diarrhea</a></li>
                                            <li><a href="#">Vomitting</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Diseases & Illness

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Ear Infection</a></li>
                                            <li><a href="#">Skin Issues</a></li>
                                            <li><a href="#">Fleas</a></li>
                                            <li><a href="#">Poisoning</a></li>
                                            <li><a href="#">Lyme Disease</a></li>
                                            <li><a href="#">Other Disease</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Allergies

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Allergy Testing</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Insurance

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Accident Insurance</a></li>
                                            <li><a href="#">Illness Insurance</a></li>
                                            <li><a href="#">Buyer's Guide</a></li>
                                            <li><a href="#">Veterinarian Recommendations</a></li>
                                            <li><a href="#">Insurance Cost</a></li>
                                            <li><a href="#">Wellness Coverage Plans</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Emergency

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">First Aid</a></li>
                                            <li><a href="#">Toxic Items</a></li>
                                            <li><a href="#">Disasters</a></li>
                                            <li><a href="#">Wound Management</a></li>
                                            <li><a href="#">Emergency Tips For Owners</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Dog Safety</a></li>
                                    <li><a href="#">Vetarnary Tips</a></li>
                                    <li><a href="#">Vaccination</a></li>
                                    <li><a href="#">All Breeds</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="has-arrow plus" href="#" aria-expanded="false">Reviews</a>
                                <ul class="mm-collapse">
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Common Symptoms

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Bad Breath</a></li>
                                            <li><a href="#">Chewing & Scratching</a></li>
                                            <li><a href="#">Eating Grass</a></li>
                                            <li><a href="#">Itching Ears</a></li>
                                            <li><a href="#">Lumps & Bumps</a></li>
                                            <li><a href="#">Diarrhea</a></li>
                                            <li><a href="#">Vomitting</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Diseases & Illness

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Ear Infection</a></li>
                                            <li><a href="#">Skin Issues</a></li>
                                            <li><a href="#">Fleas</a></li>
                                            <li><a href="#">Poisoning</a></li>
                                            <li><a href="#">Lyme Disease</a></li>
                                            <li><a href="#">Other Disease</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Allergies

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Allergy Testing</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Insurance

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Accident Insurance</a></li>
                                            <li><a href="#">Illness Insurance</a></li>
                                            <li><a href="#">Buyer's Guide</a></li>
                                            <li><a href="#">Veterinarian Recommendations</a></li>
                                            <li><a href="#">Insurance Cost</a></li>
                                            <li><a href="#">Wellness Coverage Plans</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Emergency

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">First Aid</a></li>
                                            <li><a href="#">Toxic Items</a></li>
                                            <li><a href="#">Disasters</a></li>
                                            <li><a href="#">Wound Management</a></li>
                                            <li><a href="#">Emergency Tips For Owners</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Dog Safety</a></li>
                                    <li><a href="#">Vetarnary Tips</a></li>
                                    <li><a href="#">Vaccination</a></li>
                                    <li><a href="#">All Reviews</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="has-arrow plus" href="#" aria-expanded="false">News</a>
                                <ul class="mm-collapse">
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Common Symptoms

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Bad Breath</a></li>
                                            <li><a href="#">Chewing & Scratching</a></li>
                                            <li><a href="#">Eating Grass</a></li>
                                            <li><a href="#">Itching Ears</a></li>
                                            <li><a href="#">Lumps & Bumps</a></li>
                                            <li><a href="#">Diarrhea</a></li>
                                            <li><a href="#">Vomitting</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Diseases & Illness

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Ear Infection</a></li>
                                            <li><a href="#">Skin Issues</a></li>
                                            <li><a href="#">Fleas</a></li>
                                            <li><a href="#">Poisoning</a></li>
                                            <li><a href="#">Lyme Disease</a></li>
                                            <li><a href="#">Other Disease</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Allergies

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Allergy Testing</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Insurance

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Accident Insurance</a></li>
                                            <li><a href="#">Illness Insurance</a></li>
                                            <li><a href="#">Buyer's Guide</a></li>
                                            <li><a href="#">Veterinarian Recommendations</a></li>
                                            <li><a href="#">Insurance Cost</a></li>
                                            <li><a href="#">Wellness Coverage Plans</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Emergency

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">First Aid</a></li>
                                            <li><a href="#">Toxic Items</a></li>
                                            <li><a href="#">Disasters</a></li>
                                            <li><a href="#">Wound Management</a></li>
                                            <li><a href="#">Emergency Tips For Owners</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Dog Safety</a></li>
                                    <li><a href="#">Vetarnary Tips</a></li>
                                    <li><a href="#">Vaccination</a></li>
                                    <li><a href="#">All News</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="has-arrow plus" href="#" aria-expanded="false">Brands</a>
                                <ul class="mm-collapse">
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Common Symptoms

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Bad Breath</a></li>
                                            <li><a href="#">Chewing & Scratching</a></li>
                                            <li><a href="#">Eating Grass</a></li>
                                            <li><a href="#">Itching Ears</a></li>
                                            <li><a href="#">Lumps & Bumps</a></li>
                                            <li><a href="#">Diarrhea</a></li>
                                            <li><a href="#">Vomitting</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Diseases & Illness

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Ear Infection</a></li>
                                            <li><a href="#">Skin Issues</a></li>
                                            <li><a href="#">Fleas</a></li>
                                            <li><a href="#">Poisoning</a></li>
                                            <li><a href="#">Lyme Disease</a></li>
                                            <li><a href="#">Other Disease</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Allergies

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Allergy Testing</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Insurance

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Accident Insurance</a></li>
                                            <li><a href="#">Illness Insurance</a></li>
                                            <li><a href="#">Buyer's Guide</a></li>
                                            <li><a href="#">Veterinarian Recommendations</a></li>
                                            <li><a href="#">Insurance Cost</a></li>
                                            <li><a href="#">Wellness Coverage Plans</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Emergency

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">First Aid</a></li>
                                            <li><a href="#">Toxic Items</a></li>
                                            <li><a href="#">Disasters</a></li>
                                            <li><a href="#">Wound Management</a></li>
                                            <li><a href="#">Emergency Tips For Owners</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Dog Safety</a></li>
                                    <li><a href="#">Vetarnary Tips</a></li>
                                    <li><a href="#">Vaccination</a></li>
                                    <li><a href="#">All Brands</a></li>
                                </ul>
                            </li>
                            <li><a href="#">All Cats</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow plus" href="#" aria-expanded="false">Dog</a>
                        <ul class="mm-collapse">
                            <li>
                                <a class="has-arrow plus" href="#" aria-expanded="false">Food</a>
                                <ul class="mm-collapse">
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Common Symptoms</a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Bad Breath</a></li>
                                            <li><a href="#">Chewing & Scratching</a></li>
                                            <li><a href="#">Eating Grass</a></li>
                                            <li><a href="#">Itching Ears</a></li>
                                            <li><a href="#">Lumps & Bumps</a></li>
                                            <li><a href="#">Diarrhea</a></li>
                                            <li><a href="#">Vomitting</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Diseases & Illness</a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Ear Infection</a></li>
                                            <li><a href="#">Skin Issues</a></li>
                                            <li><a href="#">Fleas</a></li>
                                            <li><a href="#">Poisoning</a></li>
                                            <li><a href="#">Lyme Disease</a></li>
                                            <li><a href="#">Other Disease</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Allergies</a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Allergy Testing</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Insurance</a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Accident Insurance</a></li>
                                            <li><a href="#">Illness Insurance</a></li>
                                            <li><a href="#">Buyer's Guide</a></li>
                                            <li><a href="#">Veterinarian Recommendations</a></li>
                                            <li><a href="#">Insurance Cost</a></li>
                                            <li><a href="#">Wellness Coverage Plans</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Emergency</a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">First Aid</a></li>
                                            <li><a href="#">Toxic Items</a></li>
                                            <li><a href="#">Disasters</a></li>
                                            <li><a href="#">Wound Management</a></li>
                                            <li><a href="#">Emergency Tips For Owners</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Dog Safety</a></li>
                                    <li><a href="#">Vetarnary Tips</a></li>
                                    <li><a href="#">Vaccination</a></li>
                                    <li><a href="#">All Food</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="has-arrow plus" href="#" aria-expanded="false">Health</a>
                                <ul class="mm-collapse">
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Common Symptoms

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Bad Breath</a></li>
                                            <li><a href="#">Chewing & Scratching</a></li>
                                            <li><a href="#">Eating Grass</a></li>
                                            <li><a href="#">Itching Ears</a></li>
                                            <li><a href="#">Lumps & Bumps</a></li>
                                            <li><a href="#">Diarrhea</a></li>
                                            <li><a href="#">Vomitting</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Diseases & Illness

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Ear Infection</a></li>
                                            <li><a href="#">Skin Issues</a></li>
                                            <li><a href="#">Fleas</a></li>
                                            <li><a href="#">Poisoning</a></li>
                                            <li><a href="#">Lyme Disease</a></li>
                                            <li><a href="#">Other Disease</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Allergies

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Allergy Testing</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Insurance

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Accident Insurance</a></li>
                                            <li><a href="#">Illness Insurance</a></li>
                                            <li><a href="#">Buyer's Guide</a></li>
                                            <li><a href="#">Veterinarian Recommendations</a></li>
                                            <li><a href="#">Insurance Cost</a></li>
                                            <li><a href="#">Wellness Coverage Plans</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Emergency

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">First Aid</a></li>
                                            <li><a href="#">Toxic Items</a></li>
                                            <li><a href="#">Disasters</a></li>
                                            <li><a href="#">Wound Management</a></li>
                                            <li><a href="#">Emergency Tips For Owners</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Dog Safety</a></li>
                                    <li><a href="#">Vetarnary Tips</a></li>
                                    <li><a href="#">Vaccination</a></li>
                                    <li><a href="#">All Health</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="has-arrow plus" href="#" aria-expanded="false">Care</a>
                                <ul class="mm-collapse">
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Common Symptoms

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Bad Breath</a></li>
                                            <li><a href="#">Chewing & Scratching</a></li>
                                            <li><a href="#">Eating Grass</a></li>
                                            <li><a href="#">Itching Ears</a></li>
                                            <li><a href="#">Lumps & Bumps</a></li>
                                            <li><a href="#">Diarrhea</a></li>
                                            <li><a href="#">Vomitting</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Diseases & Illness

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Ear Infection</a></li>
                                            <li><a href="#">Skin Issues</a></li>
                                            <li><a href="#">Fleas</a></li>
                                            <li><a href="#">Poisoning</a></li>
                                            <li><a href="#">Lyme Disease</a></li>
                                            <li><a href="#">Other Disease</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Allergies

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Allergy Testing</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Insurance

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Accident Insurance</a></li>
                                            <li><a href="#">Illness Insurance</a></li>
                                            <li><a href="#">Buyer's Guide</a></li>
                                            <li><a href="#">Veterinarian Recommendations</a></li>
                                            <li><a href="#">Insurance Cost</a></li>
                                            <li><a href="#">Wellness Coverage Plans</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Emergency

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">First Aid</a></li>
                                            <li><a href="#">Toxic Items</a></li>
                                            <li><a href="#">Disasters</a></li>
                                            <li><a href="#">Wound Management</a></li>
                                            <li><a href="#">Emergency Tips For Owners</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Dog Safety</a></li>
                                    <li><a href="#">Vetarnary Tips</a></li>
                                    <li><a href="#">Vaccination</a></li>
                                    <li><a href="#">All Care</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="has-arrow plus" href="#" aria-expanded="false">Breeds</a>
                                <ul class="mm-collapse">
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Common Symptoms

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Bad Breath</a></li>
                                            <li><a href="#">Chewing & Scratching</a></li>
                                            <li><a href="#">Eating Grass</a></li>
                                            <li><a href="#">Itching Ears</a></li>
                                            <li><a href="#">Lumps & Bumps</a></li>
                                            <li><a href="#">Diarrhea</a></li>
                                            <li><a href="#">Vomitting</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Diseases & Illness

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Ear Infection</a></li>
                                            <li><a href="#">Skin Issues</a></li>
                                            <li><a href="#">Fleas</a></li>
                                            <li><a href="#">Poisoning</a></li>
                                            <li><a href="#">Lyme Disease</a></li>
                                            <li><a href="#">Other Disease</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Allergies

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Allergy Testing</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Insurance

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Accident Insurance</a></li>
                                            <li><a href="#">Illness Insurance</a></li>
                                            <li><a href="#">Buyer's Guide</a></li>
                                            <li><a href="#">Veterinarian Recommendations</a></li>
                                            <li><a href="#">Insurance Cost</a></li>
                                            <li><a href="#">Wellness Coverage Plans</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Emergency

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">First Aid</a></li>
                                            <li><a href="#">Toxic Items</a></li>
                                            <li><a href="#">Disasters</a></li>
                                            <li><a href="#">Wound Management</a></li>
                                            <li><a href="#">Emergency Tips For Owners</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Dog Safety</a></li>
                                    <li><a href="#">Vetarnary Tips</a></li>
                                    <li><a href="#">Vaccination</a></li>
                                    <li><a href="#">All Breeds</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="has-arrow plus" href="#" aria-expanded="false">Reviews</a>
                                <ul class="mm-collapse">
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Common Symptoms

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Bad Breath</a></li>
                                            <li><a href="#">Chewing & Scratching</a></li>
                                            <li><a href="#">Eating Grass</a></li>
                                            <li><a href="#">Itching Ears</a></li>
                                            <li><a href="#">Lumps & Bumps</a></li>
                                            <li><a href="#">Diarrhea</a></li>
                                            <li><a href="#">Vomitting</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Diseases & Illness

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Ear Infection</a></li>
                                            <li><a href="#">Skin Issues</a></li>
                                            <li><a href="#">Fleas</a></li>
                                            <li><a href="#">Poisoning</a></li>
                                            <li><a href="#">Lyme Disease</a></li>
                                            <li><a href="#">Other Disease</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Allergies

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Allergy Testing</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Insurance

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Accident Insurance</a></li>
                                            <li><a href="#">Illness Insurance</a></li>
                                            <li><a href="#">Buyer's Guide</a></li>
                                            <li><a href="#">Veterinarian Recommendations</a></li>
                                            <li><a href="#">Insurance Cost</a></li>
                                            <li><a href="#">Wellness Coverage Plans</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Emergency

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">First Aid</a></li>
                                            <li><a href="#">Toxic Items</a></li>
                                            <li><a href="#">Disasters</a></li>
                                            <li><a href="#">Wound Management</a></li>
                                            <li><a href="#">Emergency Tips For Owners</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Dog Safety</a></li>
                                    <li><a href="#">Vetarnary Tips</a></li>
                                    <li><a href="#">Vaccination</a></li>
                                    <li><a href="#">All Reviews</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="has-arrow plus" href="#" aria-expanded="false">News</a>
                                <ul class="mm-collapse">
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Common Symptoms

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Bad Breath</a></li>
                                            <li><a href="#">Chewing & Scratching</a></li>
                                            <li><a href="#">Eating Grass</a></li>
                                            <li><a href="#">Itching Ears</a></li>
                                            <li><a href="#">Lumps & Bumps</a></li>
                                            <li><a href="#">Diarrhea</a></li>
                                            <li><a href="#">Vomitting</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Diseases & Illness

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Ear Infection</a></li>
                                            <li><a href="#">Skin Issues</a></li>
                                            <li><a href="#">Fleas</a></li>
                                            <li><a href="#">Poisoning</a></li>
                                            <li><a href="#">Lyme Disease</a></li>
                                            <li><a href="#">Other Disease</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Allergies

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Allergy Testing</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Insurance

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Accident Insurance</a></li>
                                            <li><a href="#">Illness Insurance</a></li>
                                            <li><a href="#">Buyer's Guide</a></li>
                                            <li><a href="#">Veterinarian Recommendations</a></li>
                                            <li><a href="#">Insurance Cost</a></li>
                                            <li><a href="#">Wellness Coverage Plans</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Emergency

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">First Aid</a></li>
                                            <li><a href="#">Toxic Items</a></li>
                                            <li><a href="#">Disasters</a></li>
                                            <li><a href="#">Wound Management</a></li>
                                            <li><a href="#">Emergency Tips For Owners</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Dog Safety</a></li>
                                    <li><a href="#">Vetarnary Tips</a></li>
                                    <li><a href="#">Vaccination</a></li>
                                    <li><a href="#">All News</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="has-arrow plus" href="#" aria-expanded="false">Brands</a>
                                <ul class="mm-collapse">
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Common Symptoms

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Bad Breath</a></li>
                                            <li><a href="#">Chewing & Scratching</a></li>
                                            <li><a href="#">Eating Grass</a></li>
                                            <li><a href="#">Itching Ears</a></li>
                                            <li><a href="#">Lumps & Bumps</a></li>
                                            <li><a href="#">Diarrhea</a></li>
                                            <li><a href="#">Vomitting</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Diseases & Illness

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Ear Infection</a></li>
                                            <li><a href="#">Skin Issues</a></li>
                                            <li><a href="#">Fleas</a></li>
                                            <li><a href="#">Poisoning</a></li>
                                            <li><a href="#">Lyme Disease</a></li>
                                            <li><a href="#">Other Disease</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Allergies

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Allergy Testing</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Insurance

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Accident Insurance</a></li>
                                            <li><a href="#">Illness Insurance</a></li>
                                            <li><a href="#">Buyer's Guide</a></li>
                                            <li><a href="#">Veterinarian Recommendations</a></li>
                                            <li><a href="#">Insurance Cost</a></li>
                                            <li><a href="#">Wellness Coverage Plans</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Emergency

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">First Aid</a></li>
                                            <li><a href="#">Toxic Items</a></li>
                                            <li><a href="#">Disasters</a></li>
                                            <li><a href="#">Wound Management</a></li>
                                            <li><a href="#">Emergency Tips For Owners</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Dog Safety</a></li>
                                    <li><a href="#">Vetarnary Tips</a></li>
                                    <li><a href="#">Vaccination</a></li>
                                    <li><a href="#">All Brands</a></li>
                                </ul>
                            </li>
                            <li><a href="#">All Dogs</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow plus" href="#" aria-expanded="false">Fish</a>
                        <ul class="mm-collapse">
                            <li>
                                <a class="has-arrow plus" href="#" aria-expanded="false">Food</a>
                                <ul class="mm-collapse">
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Common Symptoms</a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Bad Breath</a></li>
                                            <li><a href="#">Chewing & Scratching</a></li>
                                            <li><a href="#">Eating Grass</a></li>
                                            <li><a href="#">Itching Ears</a></li>
                                            <li><a href="#">Lumps & Bumps</a></li>
                                            <li><a href="#">Diarrhea</a></li>
                                            <li><a href="#">Vomitting</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Diseases & Illness</a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Ear Infection</a></li>
                                            <li><a href="#">Skin Issues</a></li>
                                            <li><a href="#">Fleas</a></li>
                                            <li><a href="#">Poisoning</a></li>
                                            <li><a href="#">Lyme Disease</a></li>
                                            <li><a href="#">Other Disease</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Allergies</a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Allergy Testing</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Insurance</a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Accident Insurance</a></li>
                                            <li><a href="#">Illness Insurance</a></li>
                                            <li><a href="#">Buyer's Guide</a></li>
                                            <li><a href="#">Veterinarian Recommendations</a></li>
                                            <li><a href="#">Insurance Cost</a></li>
                                            <li><a href="#">Wellness Coverage Plans</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Emergency</a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">First Aid</a></li>
                                            <li><a href="#">Toxic Items</a></li>
                                            <li><a href="#">Disasters</a></li>
                                            <li><a href="#">Wound Management</a></li>
                                            <li><a href="#">Emergency Tips For Owners</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Dog Safety</a></li>
                                    <li><a href="#">Vetarnary Tips</a></li>
                                    <li><a href="#">Vaccination</a></li>
                                    <li><a href="#">All Food</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="has-arrow plus" href="#" aria-expanded="false">Health</a>
                                <ul class="mm-collapse">
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Common Symptoms

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Bad Breath</a></li>
                                            <li><a href="#">Chewing & Scratching</a></li>
                                            <li><a href="#">Eating Grass</a></li>
                                            <li><a href="#">Itching Ears</a></li>
                                            <li><a href="#">Lumps & Bumps</a></li>
                                            <li><a href="#">Diarrhea</a></li>
                                            <li><a href="#">Vomitting</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Diseases & Illness

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Ear Infection</a></li>
                                            <li><a href="#">Skin Issues</a></li>
                                            <li><a href="#">Fleas</a></li>
                                            <li><a href="#">Poisoning</a></li>
                                            <li><a href="#">Lyme Disease</a></li>
                                            <li><a href="#">Other Disease</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Allergies

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Allergy Testing</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Insurance

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Accident Insurance</a></li>
                                            <li><a href="#">Illness Insurance</a></li>
                                            <li><a href="#">Buyer's Guide</a></li>
                                            <li><a href="#">Veterinarian Recommendations</a></li>
                                            <li><a href="#">Insurance Cost</a></li>
                                            <li><a href="#">Wellness Coverage Plans</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Emergency

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">First Aid</a></li>
                                            <li><a href="#">Toxic Items</a></li>
                                            <li><a href="#">Disasters</a></li>
                                            <li><a href="#">Wound Management</a></li>
                                            <li><a href="#">Emergency Tips For Owners</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Dog Safety</a></li>
                                    <li><a href="#">Vetarnary Tips</a></li>
                                    <li><a href="#">Vaccination</a></li>
                                    <li><a href="#">All Health</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="has-arrow plus" href="#" aria-expanded="false">Care</a>
                                <ul class="mm-collapse">
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Common Symptoms

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Bad Breath</a></li>
                                            <li><a href="#">Chewing & Scratching</a></li>
                                            <li><a href="#">Eating Grass</a></li>
                                            <li><a href="#">Itching Ears</a></li>
                                            <li><a href="#">Lumps & Bumps</a></li>
                                            <li><a href="#">Diarrhea</a></li>
                                            <li><a href="#">Vomitting</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Diseases & Illness

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Ear Infection</a></li>
                                            <li><a href="#">Skin Issues</a></li>
                                            <li><a href="#">Fleas</a></li>
                                            <li><a href="#">Poisoning</a></li>
                                            <li><a href="#">Lyme Disease</a></li>
                                            <li><a href="#">Other Disease</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Allergies

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Allergy Testing</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Insurance

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Accident Insurance</a></li>
                                            <li><a href="#">Illness Insurance</a></li>
                                            <li><a href="#">Buyer's Guide</a></li>
                                            <li><a href="#">Veterinarian Recommendations</a></li>
                                            <li><a href="#">Insurance Cost</a></li>
                                            <li><a href="#">Wellness Coverage Plans</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Emergency

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">First Aid</a></li>
                                            <li><a href="#">Toxic Items</a></li>
                                            <li><a href="#">Disasters</a></li>
                                            <li><a href="#">Wound Management</a></li>
                                            <li><a href="#">Emergency Tips For Owners</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Dog Safety</a></li>
                                    <li><a href="#">Vetarnary Tips</a></li>
                                    <li><a href="#">Vaccination</a></li>
                                    <li><a href="#">All Care</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="has-arrow plus" href="#" aria-expanded="false">Breeds</a>
                                <ul class="mm-collapse">
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Common Symptoms

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Bad Breath</a></li>
                                            <li><a href="#">Chewing & Scratching</a></li>
                                            <li><a href="#">Eating Grass</a></li>
                                            <li><a href="#">Itching Ears</a></li>
                                            <li><a href="#">Lumps & Bumps</a></li>
                                            <li><a href="#">Diarrhea</a></li>
                                            <li><a href="#">Vomitting</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Diseases & Illness

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Ear Infection</a></li>
                                            <li><a href="#">Skin Issues</a></li>
                                            <li><a href="#">Fleas</a></li>
                                            <li><a href="#">Poisoning</a></li>
                                            <li><a href="#">Lyme Disease</a></li>
                                            <li><a href="#">Other Disease</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Allergies

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Allergy Testing</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Insurance

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Accident Insurance</a></li>
                                            <li><a href="#">Illness Insurance</a></li>
                                            <li><a href="#">Buyer's Guide</a></li>
                                            <li><a href="#">Veterinarian Recommendations</a></li>
                                            <li><a href="#">Insurance Cost</a></li>
                                            <li><a href="#">Wellness Coverage Plans</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Emergency

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">First Aid</a></li>
                                            <li><a href="#">Toxic Items</a></li>
                                            <li><a href="#">Disasters</a></li>
                                            <li><a href="#">Wound Management</a></li>
                                            <li><a href="#">Emergency Tips For Owners</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Dog Safety</a></li>
                                    <li><a href="#">Vetarnary Tips</a></li>
                                    <li><a href="#">Vaccination</a></li>
                                    <li><a href="#">All Breeds</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="has-arrow plus" href="#" aria-expanded="false">Reviews</a>
                                <ul class="mm-collapse">
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Common Symptoms

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Bad Breath</a></li>
                                            <li><a href="#">Chewing & Scratching</a></li>
                                            <li><a href="#">Eating Grass</a></li>
                                            <li><a href="#">Itching Ears</a></li>
                                            <li><a href="#">Lumps & Bumps</a></li>
                                            <li><a href="#">Diarrhea</a></li>
                                            <li><a href="#">Vomitting</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Diseases & Illness

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Ear Infection</a></li>
                                            <li><a href="#">Skin Issues</a></li>
                                            <li><a href="#">Fleas</a></li>
                                            <li><a href="#">Poisoning</a></li>
                                            <li><a href="#">Lyme Disease</a></li>
                                            <li><a href="#">Other Disease</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Allergies

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Allergy Testing</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Insurance

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Accident Insurance</a></li>
                                            <li><a href="#">Illness Insurance</a></li>
                                            <li><a href="#">Buyer's Guide</a></li>
                                            <li><a href="#">Veterinarian Recommendations</a></li>
                                            <li><a href="#">Insurance Cost</a></li>
                                            <li><a href="#">Wellness Coverage Plans</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Emergency

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">First Aid</a></li>
                                            <li><a href="#">Toxic Items</a></li>
                                            <li><a href="#">Disasters</a></li>
                                            <li><a href="#">Wound Management</a></li>
                                            <li><a href="#">Emergency Tips For Owners</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Dog Safety</a></li>
                                    <li><a href="#">Vetarnary Tips</a></li>
                                    <li><a href="#">Vaccination</a></li>
                                    <li><a href="#">All Reviews</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="has-arrow plus" href="#" aria-expanded="false">News</a>
                                <ul class="mm-collapse">
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Common Symptoms

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Bad Breath</a></li>
                                            <li><a href="#">Chewing & Scratching</a></li>
                                            <li><a href="#">Eating Grass</a></li>
                                            <li><a href="#">Itching Ears</a></li>
                                            <li><a href="#">Lumps & Bumps</a></li>
                                            <li><a href="#">Diarrhea</a></li>
                                            <li><a href="#">Vomitting</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Diseases & Illness

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Ear Infection</a></li>
                                            <li><a href="#">Skin Issues</a></li>
                                            <li><a href="#">Fleas</a></li>
                                            <li><a href="#">Poisoning</a></li>
                                            <li><a href="#">Lyme Disease</a></li>
                                            <li><a href="#">Other Disease</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Allergies

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Allergy Testing</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Insurance

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Accident Insurance</a></li>
                                            <li><a href="#">Illness Insurance</a></li>
                                            <li><a href="#">Buyer's Guide</a></li>
                                            <li><a href="#">Veterinarian Recommendations</a></li>
                                            <li><a href="#">Insurance Cost</a></li>
                                            <li><a href="#">Wellness Coverage Plans</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Emergency

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">First Aid</a></li>
                                            <li><a href="#">Toxic Items</a></li>
                                            <li><a href="#">Disasters</a></li>
                                            <li><a href="#">Wound Management</a></li>
                                            <li><a href="#">Emergency Tips For Owners</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Dog Safety</a></li>
                                    <li><a href="#">Vetarnary Tips</a></li>
                                    <li><a href="#">Vaccination</a></li>
                                    <li><a href="#">All News</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="has-arrow plus" href="#" aria-expanded="false">Brands</a>
                                <ul class="mm-collapse">
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Common Symptoms

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Bad Breath</a></li>
                                            <li><a href="#">Chewing & Scratching</a></li>
                                            <li><a href="#">Eating Grass</a></li>
                                            <li><a href="#">Itching Ears</a></li>
                                            <li><a href="#">Lumps & Bumps</a></li>
                                            <li><a href="#">Diarrhea</a></li>
                                            <li><a href="#">Vomitting</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Diseases & Illness

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Ear Infection</a></li>
                                            <li><a href="#">Skin Issues</a></li>
                                            <li><a href="#">Fleas</a></li>
                                            <li><a href="#">Poisoning</a></li>
                                            <li><a href="#">Lyme Disease</a></li>
                                            <li><a href="#">Other Disease</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Allergies

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Allergy Testing</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Insurance

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Accident Insurance</a></li>
                                            <li><a href="#">Illness Insurance</a></li>
                                            <li><a href="#">Buyer's Guide</a></li>
                                            <li><a href="#">Veterinarian Recommendations</a></li>
                                            <li><a href="#">Insurance Cost</a></li>
                                            <li><a href="#">Wellness Coverage Plans</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Emergency

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">First Aid</a></li>
                                            <li><a href="#">Toxic Items</a></li>
                                            <li><a href="#">Disasters</a></li>
                                            <li><a href="#">Wound Management</a></li>
                                            <li><a href="#">Emergency Tips For Owners</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Dog Safety</a></li>
                                    <li><a href="#">Vetarnary Tips</a></li>
                                    <li><a href="#">Vaccination</a></li>
                                    <li><a href="#">All Brands</a></li>
                                </ul>
                            </li>
                            <li><a href="#">All Fishes</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow plus" href="#" aria-expanded="false">Bird</a>
                        <ul class="mm-collapse">
                            <li>
                                <a class="has-arrow plus" href="#" aria-expanded="false">Food</a>
                                <ul class="mm-collapse">
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Common Symptoms</a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Bad Breath</a></li>
                                            <li><a href="#">Chewing & Scratching</a></li>
                                            <li><a href="#">Eating Grass</a></li>
                                            <li><a href="#">Itching Ears</a></li>
                                            <li><a href="#">Lumps & Bumps</a></li>
                                            <li><a href="#">Diarrhea</a></li>
                                            <li><a href="#">Vomitting</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Diseases & Illness</a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Ear Infection</a></li>
                                            <li><a href="#">Skin Issues</a></li>
                                            <li><a href="#">Fleas</a></li>
                                            <li><a href="#">Poisoning</a></li>
                                            <li><a href="#">Lyme Disease</a></li>
                                            <li><a href="#">Other Disease</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Allergies</a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Allergy Testing</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Insurance</a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Accident Insurance</a></li>
                                            <li><a href="#">Illness Insurance</a></li>
                                            <li><a href="#">Buyer's Guide</a></li>
                                            <li><a href="#">Veterinarian Recommendations</a></li>
                                            <li><a href="#">Insurance Cost</a></li>
                                            <li><a href="#">Wellness Coverage Plans</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Emergency</a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">First Aid</a></li>
                                            <li><a href="#">Toxic Items</a></li>
                                            <li><a href="#">Disasters</a></li>
                                            <li><a href="#">Wound Management</a></li>
                                            <li><a href="#">Emergency Tips For Owners</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Dog Safety</a></li>
                                    <li><a href="#">Vetarnary Tips</a></li>
                                    <li><a href="#">Vaccination</a></li>
                                    <li><a href="#">All Food</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="has-arrow plus" href="#" aria-expanded="false">Health</a>
                                <ul class="mm-collapse">
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Common Symptoms

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Bad Breath</a></li>
                                            <li><a href="#">Chewing & Scratching</a></li>
                                            <li><a href="#">Eating Grass</a></li>
                                            <li><a href="#">Itching Ears</a></li>
                                            <li><a href="#">Lumps & Bumps</a></li>
                                            <li><a href="#">Diarrhea</a></li>
                                            <li><a href="#">Vomitting</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Diseases & Illness

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Ear Infection</a></li>
                                            <li><a href="#">Skin Issues</a></li>
                                            <li><a href="#">Fleas</a></li>
                                            <li><a href="#">Poisoning</a></li>
                                            <li><a href="#">Lyme Disease</a></li>
                                            <li><a href="#">Other Disease</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Allergies

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Allergy Testing</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Insurance

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Accident Insurance</a></li>
                                            <li><a href="#">Illness Insurance</a></li>
                                            <li><a href="#">Buyer's Guide</a></li>
                                            <li><a href="#">Veterinarian Recommendations</a></li>
                                            <li><a href="#">Insurance Cost</a></li>
                                            <li><a href="#">Wellness Coverage Plans</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Emergency

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">First Aid</a></li>
                                            <li><a href="#">Toxic Items</a></li>
                                            <li><a href="#">Disasters</a></li>
                                            <li><a href="#">Wound Management</a></li>
                                            <li><a href="#">Emergency Tips For Owners</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Dog Safety</a></li>
                                    <li><a href="#">Vetarnary Tips</a></li>
                                    <li><a href="#">Vaccination</a></li>
                                    <li><a href="#">All Health</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="has-arrow plus" href="#" aria-expanded="false">Care</a>
                                <ul class="mm-collapse">
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Common Symptoms

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Bad Breath</a></li>
                                            <li><a href="#">Chewing & Scratching</a></li>
                                            <li><a href="#">Eating Grass</a></li>
                                            <li><a href="#">Itching Ears</a></li>
                                            <li><a href="#">Lumps & Bumps</a></li>
                                            <li><a href="#">Diarrhea</a></li>
                                            <li><a href="#">Vomitting</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Diseases & Illness

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Ear Infection</a></li>
                                            <li><a href="#">Skin Issues</a></li>
                                            <li><a href="#">Fleas</a></li>
                                            <li><a href="#">Poisoning</a></li>
                                            <li><a href="#">Lyme Disease</a></li>
                                            <li><a href="#">Other Disease</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Allergies

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Allergy Testing</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Insurance

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Accident Insurance</a></li>
                                            <li><a href="#">Illness Insurance</a></li>
                                            <li><a href="#">Buyer's Guide</a></li>
                                            <li><a href="#">Veterinarian Recommendations</a></li>
                                            <li><a href="#">Insurance Cost</a></li>
                                            <li><a href="#">Wellness Coverage Plans</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Emergency

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">First Aid</a></li>
                                            <li><a href="#">Toxic Items</a></li>
                                            <li><a href="#">Disasters</a></li>
                                            <li><a href="#">Wound Management</a></li>
                                            <li><a href="#">Emergency Tips For Owners</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Dog Safety</a></li>
                                    <li><a href="#">Vetarnary Tips</a></li>
                                    <li><a href="#">Vaccination</a></li>
                                    <li><a href="#">All Care</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="has-arrow plus" href="#" aria-expanded="false">Breeds</a>
                                <ul class="mm-collapse">
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Common Symptoms

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Bad Breath</a></li>
                                            <li><a href="#">Chewing & Scratching</a></li>
                                            <li><a href="#">Eating Grass</a></li>
                                            <li><a href="#">Itching Ears</a></li>
                                            <li><a href="#">Lumps & Bumps</a></li>
                                            <li><a href="#">Diarrhea</a></li>
                                            <li><a href="#">Vomitting</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Diseases & Illness

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Ear Infection</a></li>
                                            <li><a href="#">Skin Issues</a></li>
                                            <li><a href="#">Fleas</a></li>
                                            <li><a href="#">Poisoning</a></li>
                                            <li><a href="#">Lyme Disease</a></li>
                                            <li><a href="#">Other Disease</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Allergies

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Allergy Testing</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Insurance

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Accident Insurance</a></li>
                                            <li><a href="#">Illness Insurance</a></li>
                                            <li><a href="#">Buyer's Guide</a></li>
                                            <li><a href="#">Veterinarian Recommendations</a></li>
                                            <li><a href="#">Insurance Cost</a></li>
                                            <li><a href="#">Wellness Coverage Plans</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Emergency

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">First Aid</a></li>
                                            <li><a href="#">Toxic Items</a></li>
                                            <li><a href="#">Disasters</a></li>
                                            <li><a href="#">Wound Management</a></li>
                                            <li><a href="#">Emergency Tips For Owners</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Dog Safety</a></li>
                                    <li><a href="#">Vetarnary Tips</a></li>
                                    <li><a href="#">Vaccination</a></li>
                                    <li><a href="#">All Breeds</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="has-arrow plus" href="#" aria-expanded="false">Reviews</a>
                                <ul class="mm-collapse">
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Common Symptoms

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Bad Breath</a></li>
                                            <li><a href="#">Chewing & Scratching</a></li>
                                            <li><a href="#">Eating Grass</a></li>
                                            <li><a href="#">Itching Ears</a></li>
                                            <li><a href="#">Lumps & Bumps</a></li>
                                            <li><a href="#">Diarrhea</a></li>
                                            <li><a href="#">Vomitting</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Diseases & Illness

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Ear Infection</a></li>
                                            <li><a href="#">Skin Issues</a></li>
                                            <li><a href="#">Fleas</a></li>
                                            <li><a href="#">Poisoning</a></li>
                                            <li><a href="#">Lyme Disease</a></li>
                                            <li><a href="#">Other Disease</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Allergies

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Allergy Testing</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Insurance

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Accident Insurance</a></li>
                                            <li><a href="#">Illness Insurance</a></li>
                                            <li><a href="#">Buyer's Guide</a></li>
                                            <li><a href="#">Veterinarian Recommendations</a></li>
                                            <li><a href="#">Insurance Cost</a></li>
                                            <li><a href="#">Wellness Coverage Plans</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Emergency

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">First Aid</a></li>
                                            <li><a href="#">Toxic Items</a></li>
                                            <li><a href="#">Disasters</a></li>
                                            <li><a href="#">Wound Management</a></li>
                                            <li><a href="#">Emergency Tips For Owners</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Dog Safety</a></li>
                                    <li><a href="#">Vetarnary Tips</a></li>
                                    <li><a href="#">Vaccination</a></li>
                                    <li><a href="#">All Reviews</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="has-arrow plus" href="#" aria-expanded="false">News</a>
                                <ul class="mm-collapse">
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Common Symptoms

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Bad Breath</a></li>
                                            <li><a href="#">Chewing & Scratching</a></li>
                                            <li><a href="#">Eating Grass</a></li>
                                            <li><a href="#">Itching Ears</a></li>
                                            <li><a href="#">Lumps & Bumps</a></li>
                                            <li><a href="#">Diarrhea</a></li>
                                            <li><a href="#">Vomitting</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Diseases & Illness

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Ear Infection</a></li>
                                            <li><a href="#">Skin Issues</a></li>
                                            <li><a href="#">Fleas</a></li>
                                            <li><a href="#">Poisoning</a></li>
                                            <li><a href="#">Lyme Disease</a></li>
                                            <li><a href="#">Other Disease</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Allergies

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Allergy Testing</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Insurance

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Accident Insurance</a></li>
                                            <li><a href="#">Illness Insurance</a></li>
                                            <li><a href="#">Buyer's Guide</a></li>
                                            <li><a href="#">Veterinarian Recommendations</a></li>
                                            <li><a href="#">Insurance Cost</a></li>
                                            <li><a href="#">Wellness Coverage Plans</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Emergency

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">First Aid</a></li>
                                            <li><a href="#">Toxic Items</a></li>
                                            <li><a href="#">Disasters</a></li>
                                            <li><a href="#">Wound Management</a></li>
                                            <li><a href="#">Emergency Tips For Owners</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Dog Safety</a></li>
                                    <li><a href="#">Vetarnary Tips</a></li>
                                    <li><a href="#">Vaccination</a></li>
                                    <li><a href="#">All News</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="has-arrow plus" href="#" aria-expanded="false">Brands</a>
                                <ul class="mm-collapse">
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Common Symptoms

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Bad Breath</a></li>
                                            <li><a href="#">Chewing & Scratching</a></li>
                                            <li><a href="#">Eating Grass</a></li>
                                            <li><a href="#">Itching Ears</a></li>
                                            <li><a href="#">Lumps & Bumps</a></li>
                                            <li><a href="#">Diarrhea</a></li>
                                            <li><a href="#">Vomitting</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Diseases & Illness

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Ear Infection</a></li>
                                            <li><a href="#">Skin Issues</a></li>
                                            <li><a href="#">Fleas</a></li>
                                            <li><a href="#">Poisoning</a></li>
                                            <li><a href="#">Lyme Disease</a></li>
                                            <li><a href="#">Other Disease</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Allergies

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Allergy Testing</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Insurance

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">Accident Insurance</a></li>
                                            <li><a href="#">Illness Insurance</a></li>
                                            <li><a href="#">Buyer's Guide</a></li>
                                            <li><a href="#">Veterinarian Recommendations</a></li>
                                            <li><a href="#">Insurance Cost</a></li>
                                            <li><a href="#">Wellness Coverage Plans</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a class="has-arrow" href="#" aria-expanded="false">Emergency

                                        </a>
                                        <ul class="mm-collapse">
                                            <li><a href="#">First Aid</a></li>
                                            <li><a href="#">Toxic Items</a></li>
                                            <li><a href="#">Disasters</a></li>
                                            <li><a href="#">Wound Management</a></li>
                                            <li><a href="#">Emergency Tips For Owners</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Dog Safety</a></li>
                                    <li><a href="#">Vetarnary Tips</a></li>
                                    <li><a href="#">Vaccination</a></li>
                                    <li><a href="#">All Brands</a></li>
                                </ul>
                            </li>
                            <li><a href="#">All Birds</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow plus" href="#" aria-expanded="false">Quick Links</a>
                        <ul class="mm-collapse">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Faq</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>
    <!-- End sidebar menu visible only in mobile -->
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
    <!-- Section 6 -->
    <section class="call-to-action py-5 text-center" style="background-image: url(../assets/images/c2a-bg.jpg)">
        <div class="container">
            <h2 class="text-white">Subscribe to Newsletter</h2>
            <h4 class="text-white font-proximanova-regularit op-8">Signup for Weekly Updates</h4>
            <form class="row justify-content-center mt-4">
                <div class="col-lg-7">
                    <div class="form-group">
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input type="checkbox" class="custom-control-input" id="dogs">
                            <label class="custom-control-label text-white" for="dogs">Dogs</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input type="checkbox" class="custom-control-input" id="cats">
                            <label class="custom-control-label text-white" for="cats">Cats</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input type="checkbox" class="custom-control-input" id="fish">
                            <label class="custom-control-label text-white" for="fish">Fish</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-control-inline">
                            <input type="checkbox" class="custom-control-input" id="Birds">
                            <label class="custom-control-label text-white" for="Birds">Birds</label>
                        </div>
                    </div>
                    <div class="form-group subscribe mt-4 mb-0 mx-2 mx-md-0">
                        <input type="text" class="form-control category-subscribe" placeholder="Email Address">
                        <button type="button" class="btn btn-danger submit-btn">Subscribe</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!-- End Section 6 -->
@stop

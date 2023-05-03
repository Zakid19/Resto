@extends('layouts.front')
@section('content')
<div id="menu-page" class="page-hero-section division">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="hero-txt text-center white-color">
                    <h2 class="h2-xl">Menu Page</h2>
                </div>
            </div>
        </div>	  <!-- End row -->
    </div>	   <!-- End container -->
</div>	<!-- END PAGE HERO -->


<section id="menu-6" class="wide-70 menu-section division">
    <div class="container">
        <div class="row">
            @foreach($menus as $menu)
            <div class="col-sm-6 col-lg-3">
                <div class="menu-6-item bg-white">

                    <!-- IMAGE -->
                    <div class="menu-6-img rel">
                        <div class="hover-overlay">

                            <!-- Image -->
                            <img class="img-fluid" src="{{ Storage::url($menu->image) }}" alt="menu-image" />

                            <!-- Item Code -->
                            {{-- <span class="item-code bg-tra-dark">Code: 0850</span> --}}

                            <!-- Zoom Icon -->
                            <div class="menu-img-zoom ico-25">
                                <a href="images/menu/burger-11.jpg" class="image-link">
                                    <span class="flaticon-zoom"></span>
                                </a>
                            </div>

                        </div>
                    </div>

                    <!-- TEXT -->
                    <div class="menu-6-txt rel">

                        <!-- Rating -->
                        <div class="item-rating">
                            <div class="stars-rating stars-lg">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>

                        <!-- Like Icon -->
                        <div class="like-ico ico-25">
                            <a href="#"><span class="flaticon-heart"></span></a>
                        </div>

                        <!-- Title -->
                        <h5 class="h5-sm">{{ $menu->name }}</h5>

                        <!-- Description -->
                        <p class="grey-color">{{ $menu->description }}</p>

                        <!-- Price -->
                        <div class="menu-6-price bg-coffee">
                            <h5 class="h5-xs yellow-color">RP. {{ $menu->price }}</h5>
                        </div>

                        <!-- Add To Cart -->
                        {{-- <div class="add-to-cart bg-yellow ico-10">
                            <a href="product-single.html"><span class="flaticon-shopping-bag"></span> Add to Cart</a>
                        </div> --}}

                    </div>

                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

@endsection

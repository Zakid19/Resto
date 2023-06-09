@extends('layouts.front')

@section('content')

<section id="hero-1" class="hero-section division">

    <!-- SLIDER -->
    <div class="slider">
        <ul class="slides">


            <!-- SLIDE #1 -->
            <li id="slide-1">

                <!-- Background Image -->
                <img src="/frontend/images/slider/slide-1.jpg" alt="slide-background">

                <!-- Image Caption -->
                <div class="caption d-flex align-items-center center-align">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="caption-txt white-color">

                                    <!-- Title -->
                                    <div class="title"><h2>Good Time, Great Taste</h2></div>

                                    <!-- Text -->
                                    <p>Open Daily: <span class="yellow-color">11:30PM - 8:30PM</span></p>

                                </div>
                            </div>
                        </div>  <!-- End row -->
                    </div>  <!-- End container -->
                </div>	<!-- End Image Caption -->

            </li>	<!-- END SLIDE #1 -->


            <!-- SLIDE #2 -->
            <li id="slide-2">

                <!-- Background Image -->
                <img src="/frontend/images/slider/slide-2.jpg" alt="slide-background">

                <!-- Image Caption -->
                <div class="caption d-flex align-items-center center-align">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="caption-txt white-color">

                                    <!-- Title -->
                                    <div class="title"><h2>Discover The Real Burgers</h2></div>

                                    <!-- Text -->
                                    <p>Enjoy the food you love <span class="yellow-color">FROM $6.99</span></p>

                                </div>
                            </div>
                        </div>  <!-- End row -->
                    </div>  <!-- End container -->
                </div>	<!-- End Image Caption -->

            </li>	<!-- END SLIDE #2 -->


            <!-- SLIDE #3 -->
            <li id="slide-3">

                <!-- Background Image -->
                <img src="/frontend/images/slider/slide-3.jpg" alt="slide-background">

                <!-- Image Caption -->
                <div class="caption d-flex align-items-center center-align">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="caption-txt white-color">

                                    <!-- Title -->
                                    <div class="title"><h2>Big Burger, Little Money</h2></div>

                                    <!-- Text -->
                                    <p>Order Now: <span class="yellow-color"><a href="tel:123456789">789-654-3210</a></span></p>

                                </div>
                            </div>
                        </div>  <!-- End row -->
                    </div>  <!-- End container -->
                </div>	<!-- End Image Caption -->

            </li>	<!-- END SLIDE #3 -->

        </ul>
    </div>	<!-- END SLIDER -->

</section>

<section id="about-3" class="wide-60 about-section division">
    <div class="container">
        <div class="row d-flex align-items-center">


            <!-- ABOUT IMAGE -->
            <div class="col-md-5 col-lg-6">
                <div class="about-3-img text-center mb-40">
                    <img class="img-fluid" src="/frontend/images/about-01-img.png" alt="about-image">
                </div>
            </div>


            <!-- ABOUT TEXT -->
            <div class="col-md-7 col-lg-6">
                <div class="about-3-txt mb-40">

                    <!-- Title -->
                    <h2 class="h2-sm coffee-color">Nothing brings people together like a good burger</h2>

                    <!-- Text -->
                    <p class="p-md grey-color">Porta semper lacus cursus, feugiat primis ultrice a ligula risus auctor an tempus
                        feugiat dolor lacinia cubilia curae at integer orci congue and metus in mollislorem primis gravida
                    </p>

                    <!-- Icons List -->
                    <div class="abox-2-wrapper ico-70">
                        <div class="row text-center">

                            <!-- ABOUT BOX #1 -->
                            <div class="col-sm-3">
                                <div class="abox-2">

                                    <!-- Icon -->
                                    <div class="abox-2-ico grey-color"><span class="flaticon-burger"></span></div>

                                    <!-- Text -->
                                    <h6 class="h6-lg">Burgers</h6>

                                </div>
                            </div>

                            <!-- ABOUT BOX #2 -->
                            <div class="col-sm-3">
                                <div class="abox-2">

                                    <!-- Icon -->
                                    <div class="abox-2-ico grey-color"><span class="flaticon-french-fries"></span></div>

                                    <!-- Text -->
                                    <h6 class="h6-lg">Fries</h6>

                                </div>
                            </div>

                            <!-- ABOUT BOX #3 -->
                            <div class="col-sm-3">
                                <div class="abox-2">

                                    <!-- Icon -->
                                    <div class="abox-2-ico grey-color"><span class="flaticon-fried-chicken"></span></div>

                                    <!-- Text -->
                                    <h6 class="h6-lg">Chicken</h6>

                                </div>
                            </div>

                            <!-- ABOUT BOX #4 -->
                            <div class="col-sm-3">
                                <div class="abox-2">

                                    <!-- Icon -->
                                    <div class="abox-2-ico grey-color"><span class="flaticon-salad"></span></div>

                                    <!-- Text -->
                                    <h6 class="h6-lg">Salads</h6>

                                </div>
                            </div>

                        </div>
                    </div>	<!-- End Icons List -->

                </div>
            </div>	<!-- END ABOUT TEXT -->


        </div>	   <!-- End row -->
    </div>	   <!-- End container -->
</section>

<section id="menu-8" class="wide-70 menu-section division">
    <div class="container">

        <!-- SECTION TITLE -->
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="section-title mb-60 text-center">
                    <!-- Title 	-->
                    <h2 class="h2-xl red-color">Explore Our Category</h2>
                </div>
            </div>
        </div>


        <!-- TABS NAVIGATION -->
        <div id="tabs-nav">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <ul class="tabs-1 ico-55 red-tabs clearfix">

                        <!-- TAB-1 LINK -->
                        <li class="tab-link current" data-tab="tab-1">
                            <span class="flaticon-burger"></span>
                            <h5 class="h5-sm">Burgers</h5>
                        </li>

                        <!-- TAB-2 LINK -->
                        <li class="tab-link" data-tab="tab-2">
                            <span class="flaticon-fries"></span>
                            <h5 class="h5-sm">Deserts</h5>
                        </li>

                        {{-- <!-- TAB-3 LINK -->
                        <li class="tab-link" data-tab="tab-3">
                            <span class="flaticon-salad-1"></span>
                            <h5 class="h5-sm">Salads</h5>
                        </li>

                        <!-- TAB-3 LINK -->
                        <li class="tab-link" data-tab="tab-4">
                            <span class="flaticon-doughnut"></span>
                            <h5 class="h5-sm">Drink</h5>
                        </li> --}}

                    </ul>
                </div>
            </div>
        </div> <!-- END TABS NAVIGATION -->


        <!-- TABS CONTENT -->
        <div id="tabs-content">


            <!-- TAB-1 CONTENT -->
            <div id="tab-1" class="tab-content current">
                <div class="row">
                    @foreach($burgers->menus as $menu)
                    <div class="col-sm-6 col-lg-3">
                        <div class="menu-7-item">

                            <!-- IMAGE -->
                            <div class="menu-7-img rel">

                                <!-- Image -->
                                <img class="img-fluid" src="{{ Storage::url($menu->image) }}" alt="menu-image" />

                                <!-- Price -->
                                <div class="menu-7-price bg-coffee">
                                    <h5 class="h5-xs yellow-color">Rp. {{ $menu->price }}</h5>
                                </div>

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
                                <div class="like-ico ico-20">
                                    <a href="#"><span class="flaticon-heart"></span></a>
                                </div>

                            </div>

                            <!-- TEXT -->
                            <div class="menu-7-txt rel">

                                <!-- Title -->
                                <h5 class="h5-sm coffee-color">{{ $menu->name }}</h5>

                                <!-- Description -->
                                <p class="grey-color">{{ $menu->description }}</p>

                                <!-- Button -->
                                <a href="product-single.html" class="btn btn-sm btn-tra-grey yellow-hover">
                                    <span class="flaticon-shopping-bag"></span> Add to Cart
                                </a>

                            </div>

                        </div>
                    </div>
                    @endforeach
                </div>  <!-- End row -->
            </div>	<!-- END TAB-1 CONTENT -->


            <!-- TAB-2 CONTENT -->
            <div id="tab-2" class="tab-content">
                <div class="row">
                    @foreach($deserts->menus as $menu)
                    <!-- MENU ITEM #1 -->
                    <div class="col-sm-6 col-lg-3">
                        <div class="menu-7-item">

                            <!-- IMAGE -->
                            <div class="menu-7-img rel">

                                <!-- Image -->
                                <img class="img-fluid" src="{{ Storage::url($menu->image) }}" alt="menu-image" />

                                <!-- Price -->
                                <div class="menu-7-price bg-coffee">
                                    <h5 class="h5-xs yellow-color">RP. {{ $menu->price }}</h5>
                                </div>

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
                                <div class="like-ico ico-20">
                                    <a href="#"><span class="flaticon-heart"></span></a>
                                </div>

                            </div>

                            <!-- TEXT -->
                            <div class="menu-7-txt rel">

                                <!-- Title -->
                                <h5 class="h5-sm coffee-color">{{ $menu->name }}</h5>

                                <!-- Description -->
                                <p class="grey-color">{{ $menu->description }}</p>

                                <!-- Button -->
                                <a href="product-single.html" class="btn btn-sm btn-tra-grey yellow-hover">
                                    <span class="flaticon-shopping-bag"></span> Add to Cart
                                </a>

                            </div>

                        </div>
                    </div>	<!-- END MENU ITEM #1 -->
                    @endforeach
                </div>  <!-- End row -->
            </div>	<!-- END TAB-2 CONTENT -->


            <!-- TAB-3 CONTENT -->
            <div id="tab-3" class="tab-content">
                <div class="row">

                    <!-- MENU ITEM #1 -->
                    <div class="col-sm-6 col-lg-3">
                        <div class="menu-7-item">

                            <!-- IMAGE -->
                            <div class="menu-7-img rel">

                                <!-- Image -->
                                <img class="img-fluid" src="images/menu/salad-01.png" alt="menu-image" />

                                <!-- Price -->
                                <div class="menu-7-price bg-coffee">
                                    <h5 class="h5-xs yellow-color">$7.99</h5>
                                </div>

                                <!-- Rating -->
                                <div class="item-rating">
                                    <div class="stars-rating stars-lg">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                </div>

                                <!-- Like Icon -->
                                <div class="like-ico ico-20">
                                    <a href="#"><span class="flaticon-heart"></span></a>
                                </div>

                            </div>

                            <!-- TEXT -->
                            <div class="menu-7-txt rel">

                                <!-- Title -->
                                <h5 class="h5-sm coffee-color">Greek Salad</h5>

                                <!-- Description -->
                                <p class="grey-color">Tomatoes, cucumbers, olives, feta cheese, red onion, olive oil</p>

                                <!-- Button -->
                                <a href="product-single.html" class="btn btn-sm btn-tra-grey yellow-hover">
                                    <span class="flaticon-shopping-bag"></span> Add to Cart
                                </a>

                            </div>

                        </div>
                    </div>	<!-- END MENU ITEM #1 -->

                </div>  <!-- End row -->
            </div>	<!-- END TAB-3 CONTENT -->


            <!-- TAB-4 CONTENT -->
            <div id="tab-4" class="tab-content">
                <div class="row">

                    <!-- MENU ITEM #1 -->
                    <div class="col-sm-6 col-lg-3">
                        <div class="menu-7-item">

                            <!-- IMAGE -->
                            <div class="menu-7-img rel">

                                <!-- Image -->
                                <img class="img-fluid" src="images/menu/dessert-01.png" alt="menu-image" />

                                <!-- Price -->
                                <div class="menu-7-price bg-coffee">
                                    <h5 class="h5-xs yellow-color">$8.50</h5>
                                </div>

                                <!-- Rating -->
                                <div class="item-rating">
                                    <div class="stars-rating stars-lg">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>

                                <!-- Like Icon -->
                                <div class="like-ico ico-20">
                                    <a href="#"><span class="flaticon-heart"></span></a>
                                </div>

                            </div>

                            <!-- TEXT -->
                            <div class="menu-7-txt rel">

                                <!-- Title -->
                                <h5 class="h5-sm coffee-color">Strawberry Caken</h5>

                                <!-- Description -->
                                <p class="grey-color">Strawberry, soft cheese, icing sugar, butter softened</p>

                                <!-- Button -->
                                <a href="product-single.html" class="btn btn-sm btn-tra-grey yellow-hover">
                                    <span class="flaticon-shopping-bag"></span> Add to Cart
                                </a>

                            </div>

                        </div>
                    </div>	<!-- END MENU ITEM #1 -->

                </div>  <!-- End row -->
            </div>	<!-- END TAB-4 CONTENT -->


        </div>	<!-- END TABS CONTENT -->


    </div>	   <!-- End container -->
</section>

<section id="menu-6" class="wide-70 menu-section division">
    <div class="container">


        <!-- SECTION TITLE -->
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="section-title mb-60 text-center">

                    <!-- Title 	-->
                    <h2 class="h2-xl red-color">Explore Our Menu</h2>

                    <!-- Text -->
                    <p class="p-xl">Aliquam a augue suscipit, luctus neque purus ipsum neque undo dolor
                        primis libero tempus, blandit a cursus varius magna
                    </p>

                </div>
            </div>
        </div>


        <div class="row">
            @foreach($menus as $menu)
            <!-- MENU ITEM #1 -->
            <div class="col-sm-6 col-lg-3">
                <div class="menu-6-item bg-white">

                    <!-- IMAGE -->
                    <div class="menu-6-img rel">
                        <div class="hover-overlay">

                            <!-- Image -->
                            <img class="img-fluid" src="{{ Storage::url($menu->image) }}" alt="menu-image" />

                            <!-- Item Code -->
                            <span class="item-code bg-tra-dark">Code: 0850</span>

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
                        <h5 class="h5-sm coffee-color">{{ $menu->name }}</h5>

                        <!-- Description -->
                        <p class="grey-color">{{ $menu->description }}</p>

                        <!-- Price -->
                        <div class="menu-6-price bg-coffee">
                            <h5 class="h5-xs yellow-color">RP. {{ $menu->price }}</h5>
                        </div>

                        <!-- Add To Cart -->
                        <div class="add-to-cart bg-yellow ico-10">
                            <a href="product-single.html"><span class="flaticon-shopping-bag"></span> Add to Cart</a>
                        </div>

                    </div>

                </div>
            </div>
            @endforeach

        </div>	  <!-- End row -->
    </div>	   <!-- End container -->
</section>

<section id="promo-7" class="wide-100 promo-section division">
    <div class="container">


        <!-- SECTION TITLE -->
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="section-title mb-60 text-center">

                    <!-- Title 	-->
                    <h2 class="h2-xl red-color">Our Best Offers</h2>

                    <!-- Text -->
                    <p class="p-xl">Aliquam a augue suscipit, luctus neque purus ipsum neque undo dolor
                        primis libero tempus, blandit a cursus varius magna
                    </p>

                </div>
            </div>
        </div>


        <div class="row d-flex align-items-center">

            @foreach($menus as $menu)
            <div class="col-lg-4">
                <div class="pbox-7 clearfix">

                    <!-- Image -->
                    <div class="pbox-7-img rel">
                        <div class="hover-overlay">

                            <!-- Image -->
                            <img class="img-fluid" src="{{ Storage::url($menu->image) }}" alt="promo-image" />

                            <!-- Item Code -->
                            <span class="item-code bg-tra-dark">Code: 0961</span>

                            <!-- Zoom Icon -->
                            <div class="menu-img-zoom ico-25">
                                <a href="images/img-01.jpg" class="image-link">
                                    <span class="flaticon-zoom"></span>
                                </a>
                            </div>

                        </div>
                    </div>

                    <!-- Text -->
                    <div id="pb-7-1" class="pbox-7-txt rel">

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
                        <h4 class="h4-xs coffee-color">{{ $menu->name }}</h4>

                        <!-- Text -->
                        <p class="grey-color">{{ $menu->description }}</p>

                        <!-- Price -->
                        <div class="pbox-7-price">
                            <h5 class="h5-lg red-color"><span class="old-price">$11.80</span> $9.99</h5>
                        </div>

                        <!-- Add To Cart -->
                        <div class="add-to-cart bg-yellow ico-10">
                            <a href="product-single.html"><span class="flaticon-shopping-bag"></span> Add to Cart</a>
                        </div>

                    </div>

                </div>
            </div>
            @endforeach

        </div>    <!-- End row -->
    </div>	   <!-- End container -->
</section>


<section id="blog-1" class="wide-60 blog-section division">
    <div class="container">


        <!-- SECTION TITLE -->
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="section-title mb-60 text-center">

                    <!-- Title 	-->
                    <h2 class="h2-xl red-color">Events & Catering</h2>

                    <!-- Text -->
                    <p class="p-xl">Aliquam a augue suscipit, luctus neque purus ipsum neque undo dolor
                        primis libero tempus, blandit a cursus varius magna
                    </p>

                </div>
            </div>
        </div>


        <!-- BLOG POSTS HOLDER -->
        <div class="row">


            <!-- BLOG POST #1 -->
            <div class="col-md-6 col-lg-4">
                <div class="blog-post">

                    <!-- BLOG POST IMAGE -->
                    <div class="blog-post-img">
                        <div class="hover-overlay">
                            <img class="img-fluid" src="images/blog/img-01.jpg" alt="blog-post-image" />
                        </div>
                    </div>

                    <!-- BLOG POST TITLE -->
                    <div class="blog-post-txt">

                        <!-- Post Title -->
                        <h5 class="h5-lg coffee-color"><a href="single-post.html">Quaerat neque purus ipsum neque dolor</a></h5>

                        <!-- Post Text -->
                        <p class="grey-color">Quaerat neque purus ipsum neque dolor primis tempus impedit</p>

                    </div>

                </div>
            </div>	<!-- END  BLOG POST #1 -->


            <!-- BLOG POST #2 -->
            <div class="col-md-6 col-lg-4">
                <div class="blog-post">

                    <!-- BLOG POST IMAGE -->
                    <div class="blog-post-img">
                        <div class="hover-overlay">
                            <img class="img-fluid" src="images/blog/img-02.jpg" alt="blog-post-image" />
                        </div>
                    </div>

                    <!-- BLOG POST TEXT -->
                    <div class="blog-post-txt">

                        <!-- Post Title -->
                        <h5 class="h5-lg coffee-color"><a href="single-post.html">Tempor blandit sapien at gravida donec ipsum</a></h5>

                        <!-- Post Text -->
                        <p class="grey-color">Neque dolor primis libero tempus impedit tempor sapien gravida</p>

                    </div>

                </div>
            </div>	<!-- END  BLOG POST #2 -->


            <!-- BLOG POST #3 -->
            <div class="col-md-6 col-lg-4">
                <div class="blog-post">

                    <!-- BLOG POST IMAGE -->
                    <div class="blog-post-img">
                        <div class="hover-overlay">
                            <img class="img-fluid" src="images/blog/img-03.jpg" alt="blog-post-image" />
                        </div>
                    </div>

                    <!-- BLOG POST TEXT -->
                    <div class="blog-post-txt">

                        <!-- Post Title -->
                        <h5 class="h5-lg coffee-color"><a href="single-post.html">Neque dolor primis a libero tempus a tempor</a></h5>

                        <!-- Post Text -->
                        <p class="grey-color">Impedit tempor at donec sapien ipsum a neque dolor primis libero</p>

                    </div>

                </div>
            </div>	<!-- END  BLOG POST #3 -->


        </div>	<!-- END BLOG POSTS HOLDER -->


    </div>	   <!-- End container -->
</section>

@endsection

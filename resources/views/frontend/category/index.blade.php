@extends('layouts.front')
@section('content')
<div id="menu-page" class="page-hero-section division">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="hero-txt text-center white-color">
                    <!-- Title -->
                    <h2 class="h2-xl">Category</h2>
                </div>
            </div>
        </div>	  <!-- End row -->
    </div>	   <!-- End container -->
</div>

<section id="menu-8" class="wide-70 menu-section division">
    <div class="container">
         <div class="row">
            @foreach($categories as $category)
            <div class="col-sm-6 col-lg-3">
                <div class="menu-7-item">

                    <!-- IMAGE -->
                    <div class="menu-7-img rel">

                        <!-- Image -->
                        <img class="img-fluid" src="{{ Storage::url($category->image) }}" alt="menu-image" />

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
                        <h5 class="h5-sm">{{ $category->name }}</h5>

                        <!-- Description -->
                        <p class="grey-color">{{ $category->description }}</p>

                        <!-- Button -->
                        <a href="{{ route('category.show', $category) }}" class="btn btn-sm btn-tra-grey yellow-hover">
                            <span class="flaticon-shopping-bag"></span> Show
                        </a>

                    </div>

                </div>
            </div>
            @endforeach
        </div>


    </div>	   <!-- End container -->
</section>
@endsection

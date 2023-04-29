@extends('layouts.front')
@section('content')
<section class="menu">
    <div class="container mt-5" data-aos="fade-up">

        <div class="section-header">
          <h2>Our Category</h2>
          {{-- <p>Check Our <span>Yummy Menu</span></p> --}}
        </div>

        <div class="tab-content" data-aos="fade-up" data-aos-delay="300">

          <div class="tab-pane fade active show" id="menu-starters">

            <div class="tab-header text-center">
              <h3>Category</h3>
            </div>

            <div class="row gy-5">
                @foreach($categories as $category)
                    <div class="col-lg-4 menu-item">
                        <a href="{{ route('category.show',$category) }}" ><img src="{{ Storage::url($category->image) }}" class="menu-img img-fluid" alt=""></a>
                        <h4>{{ $category->name }}</h4>
                        <p class="ingredients text-center">
                        {{ $category->description }}
                        </p>
                    </div>
                @endforeach
            </div>
          </div>
        </div>

    </div>
</section>
@endsection

@extends('layouts.front')
@section('content')
<div id="booking-page" class="page-hero-section division">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="hero-txt text-center white-color">
                    <h2 class="h2-xl">Reserve A Table</h2>
                </div>
            </div>
        </div>	  <!-- End row -->
    </div>	   <!-- End container -->
</div>

<div id="booking-2" class="wide-70 booking-section division">
    <div class="container">
         <div class="row">


            <!-- BOOKING FORM -->
             <div class="col-lg-10 col-xl-8 offset-lg-1 offset-xl-2">
                 <div class="form-holder">

                     <!-- Text -->
                    <p class="p-xl text-center">
                        Fill in the form below or give us a call <a href="tel:123456789">789-654-3210</a>
                    </p>

                    <form action="{{ route('reservation.storeStepOne') }}" method="post" >
                        @csrf

                          <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Your Name .." value="{{ $reservation->name ?? '' }}">
                            @error('name')
                                <div class="mt-2 text-danger">{{ $message }}</div>
                            @enderror
                          </div>

                          <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Your Email .." value="{{ $reservation->email ?? '' }}">
                            @error('email')
                                <div class="mt-2 text-danger">{{ $message }}</div>
                            @enderror
                          </div>

                          <div class="mb-3">
                            <label for="no tlp" class="form-label">No Telp</label>
                            <input type="tel" class="form-control" name="no_tlp" id="no_tlp" placeholder="No Telp .." value="{{ $reservation->no_tlp ?? '' }}">
                            @error('no_tlp')
                                <div class="mt-2 text-danger">{{ $message }}</div>
                            @enderror
                          </div>

                          <div class="mb-3">
                            <label for="res date" class="form-label">Res Date</label>
                            <input type="datetime-local" class="form-control" name="res_date" id="res_date" placeholder=""
                            min="{{ $min_date->format('Y-m-d\TH:i:s') }}"
                            max="{{ $max_date->format('Y-m-d\TH:i:s') }}"
                            value="{{ $reservation ? $reservation->res_date->format('Y-m-d\TH:i:s') : '' }}"
                            <span class="text-xs">Pilih waktu dari jam berikut 17:00-23:00.</span>
                            @error('res_date')
                                <div class="mt-2 text-danger">{{ $message }}</div>
                            @enderror
                          </div>

                          <div class="mb-3">
                            <label for="name" class="form-label">Guest Number</label>
                            <input type="text" class="form-control" name="guest_number" id="guest_number" placeholder="Total Guest .." value="{{ $reservation->guest_number ?? '' }}">
                            @error('guest_number')
                                <div class="mt-2 text-danger">{{ $message }}</div>
                            @enderror
                          </div>


                        <!-- Form Button -->
                        <div class="col-md-12 mt-10">
                            <button type="submit" class="btn btn-sm btn-red tra-red-hover submit">Next</button>
                        </div>
                    </form>

                 </div>
             </div>	<!-- END BOOKING FORM -->

        </div>	<!-- End row -->
    </div>	   <!-- End container -->
</div>
@endsection

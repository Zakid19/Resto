@extends('layouts.front')
@section('content')
<section id="" class="book-a-table">
    <div class="container mt-5" data-aos="fade-up">

      <div class="section-header">
        <h2>Book A Table</h2>
        <p>Book <span>Your Stay</span> With Us</p>
      </div>

      <div class="row g-0">

        {{-- <div class="col-lg-6 reservation-img" style="background-image: url(/admin/assets/img/reservation.jpg);" data-aos="zoom-out" data-aos-delay="200"></div> --}}

        {{-- <div class="col-lg-6 d-flex align-items-center reservation-form-bg">
            <form action="{{ route('reservation.storeStepOne') }}" method="post" >
                @csrf
                <div class="mb-3">
                    <label for="Name">Name</label>
                    <input class="form-control" id="name" name="name" type="text" placeholder="" value="{{ $reservation->name ?? '' }}">>
                    @error('name')
                        <div class="mt-2 text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="Name">Email</label>
                    <input class="form-control" id="email" name="email" type="email" placeholder=""
                    value="{{ $reservation->email ?? '' }}">
                    @error('email')
                        <div class="mt-2 text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="Name">No Telp</label>
                    <input class="form-control" id="no_tlp" name="no_tlp" type="tel" placeholder="" value="{{ $reservation->no_tlp ?? '' }}">
                    @error('no_tlp')
                        <div class="mt-2 text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="Name">Res Date</label>
                    <input class="form-control" id="res_date" name="res_date" type="datetime-local" placeholder="" value="{{ $reservation->res_date ?? '' }}">
                    @error('res_date')
                        <div class="mt-2 text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="Name">Guest</label>
                    <input class="form-control" id="guest_number" name="guest_number" type="number" placeholder="" value="{{ $reservation->guest_number ?? '' }}">
                    @error('guest_number')
                        <div class="mt-2 text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-0">
                    <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                </div>
            </form>
        </div> --}}

        <div class="col-lg-6 reservation-img" style="background-image: url(/admin/assets/img/reservation.jpg);" data-aos="zoom-out" data-aos-delay="200"></div>

        <div class="col-lg-6 d-flex align-items-center reservation-form-bg">
          <form action="{{ route('reservation.storeStepOne') }}" method="post" >
            @csrf
            <div class="row gy-4 mb-3 p-3">
              <div class="col-lg-12 col-md-6">
                <label class="mb-1" for="Name">Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                value="{{ $reservation->name ?? '' }}">
                @error('name')
                    <div class="mt-2 text-danger">{{ $message }}</div>
                @enderror
              </div>
              <div class="col-lg-12 col-md-6">
                <label class="mb-1" for="Email">Email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Email"
                value="{{ $reservation->email ?? '' }}">
                @error('email')
                    <div class="mt-2 text-danger">{{ $message }}</div>
                @enderror
              </div>
              <div class="col-lg-12 col-md-6">
                <label class="mb-1" for="No Tlp">No Tlp</label>
                <input type="tel" name="no_tlp" class="form-control" id="no_tlp" placeholder="No Tlp"
                value="{{ $reservation->no_tlp ?? '' }}">
                @error('no_tlp')
                    <div class="mt-2 text-danger">{{ $message }}</div>
                @enderror
              </div>
              <div class="col-lg-12 col-md-6">
                <label class="mb-1" for="Res Date">Res Date</label>
                <input type="datetime-local" name="res_date" class="form-control" id="res_date"
                min="{{ $min_date->format('Y-m-d\TH:i:s') }}"
                max="{{ $max_date->format('Y-m-d\TH:i:s') }}"
                value="{{ $reservation ? $reservation->res_date->format('Y-m-d\TH:i:s') : '' }}">
                @error('res_date')
                    <div class="mt-2 text-danger">{{ $message }}</div>
                @enderror
              </div>
              <div class="col-lg-12 col-md-6">
                <label class="mb-1" for="Guest Number">Guest Number</label>
                <input type="number" name="guest_number" class="form-control" id="guest_number" placeholder="Guest Number"
                value="{{ $reservation->guest_number ?? '' }}">
                @error('guest_number')
                    <div class="mt-2 text-danger">{{ $message }}</div>
                @enderror
              </div>
            </div>
            <div class="text-center"><button type="submit" class="btn btn-danger">Next</button></div>
          </form>
        </div><!-- End Reservation Form -->

      </div>

    </div>
</section>
@endsection

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
                    <input class="form-control" id="name" name="name" type="text" placeholder="" value="{{ old('name') }}">
                    @error('name')
                        <div class="mt-2 text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="Name">Email</label>
                    <input class="form-control" id="email" name="email" type="email" placeholder="" value="{{ old('email') }}">
                    @error('email')
                        <div class="mt-2 text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="Name">No Telp</label>
                    <input class="form-control" id="no_tlp" name="no_tlp" type="tel" placeholder="" value="{{ old('no_tlp') }}">
                    @error('no_tlp')
                        <div class="mt-2 text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="Name">Res Date</label>
                    <input class="form-control" id="res_date" name="res_date" type="datetime-local" placeholder="" value="{{ old('res_date') }}">
                    @error('res_date')
                        <div class="mt-2 text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="Name">Guest</label>
                    <input class="form-control" id="guest_number" name="guest_number" type="number" placeholder="" value="{{ old('guest_number') }}">
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

        <div class="col-lg-6 align-items-center reservation-form-bg">
          <form action="{{ route('reservation.storeStepTwo') }}" method="post" >
            @csrf
            <div class="row gy-4 mb-3 p-3">
              <div class="col-lg-12 col-md-6 pt-3">
                <label class="mb-1" for="Table">Table</label>
                <select name="table_id" class="form-control" id="table_id"
                value="{{ $reservation->name ?? '' }}">
                @foreach($tables as $table)
                    <option value="{{ $table->id }}">{{ $table->name }} ({{ $table->guest_number }}) </option>
                @endforeach
                </select>
                @error('table_id')
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

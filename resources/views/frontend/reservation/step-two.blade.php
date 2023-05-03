@extends('layouts.front')
@section('content')
<div id="booking-2" class="wide-70 booking-section division">
    <div class="container">
         <div class="row">

            <!-- BOOKING FORM -->
             <div class="col-lg-10 col-xl-8 offset-lg-1 offset-xl-2">
                 <div class="form-holder">

                    <form action="{{ route('reservation.storeStepTwo') }}" method="post" >
                        @csrf
                          <div class="mb-3">
                            <label for="name" class="form-label">Table</label>
                            <select class="form-control" name="table_id" id="table_id" placeholder="Your Name ..">
                                @foreach($tables as $table)
                                    <option value="{{ $table->id }}">{{ $table->name }} ({{ $table->guest_number }} Guest)</option>
                                @endforeach
                            </select>
                            @error('table_id')
                                <div class="mt-2 text-danger">{{ $message }}</div>
                            @enderror
                          </div>


                        <!-- Form Button -->
                        <div class="col-md-12 mt-10">
                            <button type="submit" class="btn btn-sm btn-red tra-red-hover submit">Make a Reservation</button>
                        </div>
                    </form>

                 </div>
             </div>	<!-- END BOOKING FORM -->

        </div>	<!-- End row -->
    </div>	   <!-- End container -->
</div>

@endsection

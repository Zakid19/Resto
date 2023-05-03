@extends('layouts.master')

@section('content')
<div class="container-xl px-4 mt-n10">
    <div class="row">
        <div class="col-lg-12">
            <!-- Default Bootstrap Form Controls-->
            @include('layouts.alert')
            <div id="default">
                <div class="card mb-4">
                    <div class="card-header">Reservation Create</div>
                    <div class="card-body">
                        <!-- Component Preview-->
                        <div class="sbp-preview">
                            <div class="sbp-preview-content">
                                <form action="{{ route('admin.reservation.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="Table">Table</label>
                                        <select class="form-control" id="table_id" name="table_id">
                                        @foreach($tables as $table)
                                            <option value="{{ $table->id }}">{{ $table->name }} ( {{ $table->guest_number }} guest )</option>
                                        @endforeach
                                        </select>
                                        @error('table_id')
                                            <div class="mt-2 text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

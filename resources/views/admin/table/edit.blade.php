@extends('layouts.master')

@section('content')
<div class="container-xl px-4 mt-n10">
    <div class="row">
        <div class="col-lg-12">
            <!-- Default Bootstrap Form Controls-->
            <div id="default">
                <div class="card mb-4">
                    <div class="card-header">Table Edit</div>
                    <div class="card-body">
                        <!-- Component Preview-->
                        <div class="sbp-preview">
                            <div class="sbp-preview-content">
                                <form action="{{ route('admin.table.update', $table) }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('put')
                                    <div class="mb-3">
                                        <label for="Name">Name</label>
                                        <input class="form-control" id="name" name="name" type="text" placeholder="" value="{{ old('name', $table->name) }}">
                                        @error('name')
                                            <div class="mt-2 text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="Name">Guest Number</label>
                                        <input class="form-control" id="guest_number" name="guest_number" type="number" placeholder="" value="{{ old('guest_number', $table->guest_number) }}">
                                        @error('guest_number')
                                            <div class="mt-2 text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="Name">Location</label>
                                        <select class="form-control" id="location" name="location">
                                        @foreach(App\Enums\TableLocation::cases() as $location)
                                            <option {{ $table->location->value == $location->value ? 'selected' : '' }} value="{{ $location->value }}">{{ $location->name }}</option>
                                        @endforeach
                                        </select>
                                        @error('location')
                                            <div class="mt-2 text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="Name">Status</label>
                                        <select class="form-control" id="status" name="status">
                                        @foreach(App\Enums\TableStatus::cases() as $status)
                                            <option {{ $table->status->value == $status->value ? 'selected' : '' }} value="{{ $status->value }}">{{ $status->name }}</option>
                                        @endforeach
                                        </select>
                                        @error('status')
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

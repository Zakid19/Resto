@extends('layouts.master')

@section('content')
<div class="container-xl px-4 mt-n10">
    <div class="row">
        <div class="col-lg-12">
            <!-- Default Bootstrap Form Controls-->
            <div id="default">
                <div class="card mb-4">
                    <div class="card-header">Menu Create</div>
                    <div class="card-body">
                        <!-- Component Preview-->
                        <div class="sbp-preview">
                            <div class="sbp-preview-content">
                                <form action="{{ route('admin.menu.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="Name">Name</label>
                                        <input class="form-control" id="name" name="name" type="text" placeholder="" value="{{ old('name') }}">
                                        @error('name')
                                            <div class="mt-2 text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="Name">Category</label>
                                        <select class="form-control" id="categories" name="categories[]">
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                        </select>
                                        @error('category')
                                            <div class="mt-2 text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="Image" class="form-label">Image</label>
                                        <input class="form-control" type="file" id="image" name="image">
                                      </div>
                                      @error('image')
                                            <div class="mt-2 mb-3 text-danger">{{ $message }}</div>
                                      @enderror
                                    <div class="mb-3">
                                        <label for="Description">Description</label>
                                        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                                        @error('description')
                                            <div class="mt-2 text-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="Name">Price</label>
                                        <input class="form-control" id="price" name="price" type="number" placeholder="" value="{{ old('price') }}">
                                        @error('name')
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

@extends('layouts.master')

@section('content')
<div class="container-xl px-4 mt-n10">
    <div class="row">
        <div class="col">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="d-flex justify-content-between">
                        <h6 class="m-0 font-weight-bold">List Category</h6>
                        <a href="{{ route('admin.category.create') }}" class="btn btn-sm btn-primary">Create</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="datatablesSimple" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Description</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                            <tr>
                                <td>{{ $category->name }}</td>
                                <td>
                                    <img src="{{ Storage::url( $category->image) }}" alt="" style="width: 100%" height="100px" class="rounded">
                                </td>
                                <td>{{ $category->description }}</td>
                                <td class="d-flex">
                                    <a href="{{ route('admin.category.edit', $category) }}" class="btn btn-primary btn-sm" style="margin-right: 2px">Edit</a>
                                    <form action="{{ route('admin.category.delete', $category) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

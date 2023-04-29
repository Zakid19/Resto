@extends('layouts.master')

@section('content')
<div class="container-xl px-4 mt-n10">
    <div class="row">
        <div class="col">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="d-flex justify-content-between">
                        <h6 class="m-0 font-weight-bold">List Menu</h6>
                        <a href="{{ route('admin.menu.create') }}" class="btn btn-sm btn-primary">Create</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="datatablesSimple" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Category</th>
                                    <th>Image</th>
                                    <th>Description</th>
                                    <th>Price</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($menus as $menu)
                            <tr>
                                <td>{{ $menu->name }}</td>
                                <td>{{ $menu->categories->implode('name', ' ' ) }}</td>
                                <td>
                                    <img src="{{ Storage::url( $menu->image) }}" alt="" style="width: 100%" height="100px" class="rounded">
                                </td>
                                <td>{{ $menu->description }}</td>
                                <td>{{ $menu->price }}</td>
                                <td class="d-flex">
                                    <a href="{{ route('admin.menu.edit', $menu) }}" class="btn btn-primary btn-sm" style="margin-right: 2px">Edit</a>
                                    <form action="{{ route('admin.menu.delete', $menu) }}" method="post">
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

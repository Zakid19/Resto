@extends('layouts.master')

@section('content')
<div class="container-xl px-4 mt-n10">
    <div class="row">
        <div class="col">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="d-flex justify-content-between">
                        <h6 class="m-0 font-weight-bold">List Table</h6>
                        <a href="{{ route('admin.table.create') }}" class="btn btn-sm btn-primary">Create</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="datatablesSimple" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Guest Number</th>
                                    <th>Location</th>
                                    <th>Status</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($tables as $table)
                            <tr>
                                <td>{{ $table->name }}</td>
                                <td>{{ $table->guest_number }}</td>
                                <td>{{ $table->location->name }}</td>
                                <td>{{ $table->status->name }}</td>
                                <td class="d-flex justify-content-center">
                                    <a href="{{ route('admin.table.edit', $table) }}" class="btn btn-primary btn-sm" style="margin-right: 2px">Edit</a>
                                    <form action="{{ route('admin.table.delete', $table) }}" method="post">
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

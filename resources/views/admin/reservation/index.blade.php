@extends('layouts.master')

@section('content')
<div class="container-xl px-4 mt-n10">
    <div class="row">
        <div class="col">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <div class="d-flex justify-content-between">
                        <h6 class="m-0 font-weight-bold">List Reservation</h6>
                        <a href="{{ route('admin.reservation.create') }}" class="btn btn-sm btn-primary">Create</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="datatablesSimple" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Table</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Date</th>
                                    <th>Guest</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($reservations as $reservation)
                            <tr>
                                <td>{{ $reservation->table->name }}</td>
                                <td>{{ $reservation->name }}</td>
                                <td>{{ $reservation->email }}</td>
                                <td>{{ $reservation->res_date }}</td>
                                <td>{{ $reservation->guest_number }}</td>
                                <td class="d-flex">
                                    <a href="{{ route('admin.reservation.edit', $reservation) }}" class="btn btn-primary btn-sm" style="margin-right: 2px">Edit</a>
                                    <form action="{{ route('admin.reservation.delete', $reservation) }}" method="post">
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

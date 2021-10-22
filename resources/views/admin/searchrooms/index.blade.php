
@extends('layouts.admin')

@section('content')

<div class="card">
    <div class="card-header">
        Search Room
    </div>

    <div class="card-body">
        <form method="POST" action="{{route('admin.searchRoom')}}">
            @csrf
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <input class="form-control" type="date" name="startDate" id="start_time" value="{{ request()->input('startDate') }}" placeholder="start date" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <input class="form-control" type="date" name="endDate" id="end_time" value="{{ request()->input('endDate') }}" placeholder="end date" required>
                    </div>
                </div>
                <div class="col-md-3">
                    <select class="custom-select mb-2 mr-sm-2" id="room_type" name="room_type">
                        <option value="">Choose room type</option>
                        @foreach($roomTypes as $id=>$type)
                            <option value="{{ $id }}" {{ request()->input('room_type') == $id ? 'selected' : '' }}>{{ $type }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-1">
                    <button class="btn btn-success">
                        Search
                    </button>
                </div>
            </div>
        </form>
        @if($rooms !== null)
            @if($rooms->count())
                <div class="table-responsive">
                    <table class=" table table-bordered table-striped table-hover datatable datatable-Event">
                        <thead>
                            <tr>
                                <th>
                                    ID
                                </th>
                                <th>
                                    Room Type
                                </th>
                                <th>
                                    Price
                                </th>
                                <th>
                                    Number of Room
                                </th>
                                <th>
                                    &nbsp;
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($rooms as $room)
                                <tr>
                                    <td>
                                        {{ $room->id}}
                                    </td>
                                    <td class="room-name">
                                        {{ $room->roomType->type }}
                                    </td>
                                    <td>
                                        {{ number_format($room->price)}}đ
                                    </td>
                                    <td>
                                        {{$room->room_number}}
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#bookRoom{{$room->id}}" data-room-id="{{ $room->id }}">
                                            Book Room
                                        </button>
                                    </td>

                                </tr>
                                <div class="modal" tabindex="-1" role="dialog" id="bookRoom{{$room->id}}">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Booking of a room</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ route("admin.bookings.store") }}" method="POST" id="bookingForm">
                                                    @csrf
                                                    <input type="hidden" name="room_id" id="room_id" value="{{$room->id}}">
                                                    <input type="hidden" name="start_date" value="{{ request()->input('startDate') }}">
                                                    <input type="hidden" name="end_date" value="{{ request()->input('endDate') }}">
                                                    <div class="form-group">
                                                        <label class="required" for="name">Name Customer</label>
                                                        <input class="form-control" type="text" name="name" id="name" value="{{ old('name', '') }}" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="email">Email</label>
                                                        <input class="form-control" name="email" id="email">{{ old('email') }}</input>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="phone">Phone</label>
                                                        <input class="form-control" name="phone" id="phone">{{ old('phone') }}</input>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="address">Address</label>
                                                        <input class="form-control date" type="text" name="address" id="address" value="{{ old('address') }}">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="note">Note</label>
                                                        <textarea class="form-control" name="note" id="note">{{ old('note') }}</textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="required" for="coupon_id">Coupon</label>
                                                        <select class="form-control" name="coupon_id" id="coupon_id">
                                                            @foreach($coupons as $id => $coupon)
                                                                <option value="{{ $id }}" {{ ( old('coupon_id')) == $id ? 'selected' : '' }}>{{ $coupon }}</option>
                                                            @endforeach
                                                        </select>
                                                        @if($errors->has('coupon_id'))
                                                            <div class="invalid-feedback">
                                                                {{ $errors->first('coupon_id') }}
                                                            </div>
                                                        @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="required" for="coupon_id">Coupon</label>
                                                        <select name="payment_status" class="custom-select" required id="inputGroupSelect02">
                                                            <option value="">Payment</option>
                                                            <option value="0">UnPaid</option>
                                                            <option value="1">Paid</option>
                                                            <option value="2">Paid Online</option>
                                                        </select>
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Đặt</button>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary" id="submitBooking">Submit</button>
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <p class="text-center">There are no rooms available at the time you have chosen</p>
            @endif
        @endif
    </div>
</div>


@endsection

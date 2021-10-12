@extends('layouts.admin')
@section('content')

<div class="modal fade" id="CompleteOrderModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Complete Booking</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @if($booking->booking_msg == "Đã xác nhận")
                <div class="modal-body">
                    <h5>Không thể hoàn thành booking này! Khách chưa check-in</h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            @else
            <form  action="{{route('admin.complete.booking',$booking->id)}}" method="POST">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="modal-body">
                    @if($booking->payment_status == "0" or $booking->payment_status == "1")
                        <h6>
                            <input type="checkbox" name="cash_received" required>Thanh toán khi check-in hotel
                        </h6>
                        <p>Nhấn đồng ý khi bạn đã nhận được tiền từ khách hàng</p>
                    @else
                        <h5>Thanh toán bằng hình thức trực tuyến</h5>
                    @endif
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    <button type="submit" class="btn btn-primary">Yes</button>
                </div>
            </form>
            @endif
        </div>
    </div>
</div> 
@if(session('status'))
    <div class="alert alert-success">
        {{session('status')}}
    </div>
@endif 
<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.booking.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
        <h2>Thông tin khách hàng</h2>
        <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            Customer Name
                        </th>
                        <td>
                            {{ $booking->user->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Email
                        </th>
                        <td>
                            {{ $booking->user->email}}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Phone
                        </th>
                        <td>
                        {{ $booking->user->phone }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Address
                        </th>
                        <td>
                            {{ $booking->user->address }}
                        </td>
                    </tr>                   
                </tbody>                
            </table>
            <h2>Thông tin phòng</h2>
            <table class="table table-bordered table-striped">
                <tr>
                    <th>Room Number</th>
                    <th>start Date</th>
                    <th>end Date</th>
                    <th>Num Day</th>
                    <th>Note</th>
                </tr>
                @foreach($booking->bookingRooms as $bookingroom)
                <tr>
                    <td>{{$bookingroom->room->room_number}}</td>
                    <td>{{$bookingroom->startDate}}</td>
                    <td>{{$bookingroom->endDate}}</td>
                    <td>{{$bookingroom->num_days}}</td>
                    <td>{{$bookingroom->note}}</td>
                </tr>
                @endforeach
            </table>
           
            <div class="row">
               <div class="col-md-4">
                   <div class="card shadow-sm border">
                       <h6 class="card-header">Booking Status</h6>
                        <div class="card-body">
                            <p>
                                @if($booking->booking_msg ==NULL)
                                    No Status Update
                                @else
                                    {{$booking->booking_msg}}
                                @endif

                            </p>
                        </div>
                   </div>
                </div>
                <div class="col-md-4">
                   <div class="card shadow-sm border">
                       <h6 class="card-header">Current Status</h6>
                        <div class="card-body">
                            <p>
                                @if($booking->status == "0")
                                    Booking room đang hoạt động
                                @elseif($booking->status == "1")
                                    Booking room đã hoàn thành
                                @elseif($booking->status == "2")
                                    Booking room đã hủy:{{ $booking->cancel_reason }}
                                @endif
                            </p>
                        </div>
                   </div>
                </div>
                <div class="col-md-4">
                   <div class="card shadow-sm border">
                       <h6 class="card-header">Payment Status</h6>
                        <div class="card-body">
                            <p>
                                @if($booking->payment_status == '0')
                                    Status:{{_('Đang chờ thanh toán')}}<br>
                                    Mode:{{$booking->payment_mode}}
                                @elseif($booking->payment_status == '1')
                                    Status:{{_('Thanh toán khi check-in hotel')}}<br>
                                    Mode:{{$booking->payment_mode}}
                                @else
                                    {{_('Thanh toán trực tuyến')}}
                                @endif
                            </p>
                        </div>
                   </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card mt-3">
                        <div class="card-body">
                            <h5>Booking Status Update</h5>
                            <hr>
                            @if($booking->status == "1")
                                {{$booking->booking_msg}}
                            @elseif($booking->status =="2")
                                {{$booking->booking_msg}}   
                            @else
                                <form  action="{{route('admin.update.status',$booking->id)}}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('PUT') }}
                                    <div class="input-group mb-3">
                                        <select name="booking_msg" class="custom-select" required id="inputGroupSelect02">
                                            <option value="">--Status--</option>
                                            <option value="Đã xác nhận" {{ $booking->booking_msg == "Đã xác nhận" ? 'selected':''}}>Confirmed</option>
                                            <option value="Khách đã nhận phòng" {{ $booking->booking_msg == "Khách đã nhận phòng" ? 'selected':''}}>Operational</option>
                                        </select>
                                        <div class="input-group-append">
                                            <button type="submit" class="input-group-text bg-info text-white" for="inputGroup">Update</button>
                                        </div>
                                    </div>
                                </form>         
                            @endif
                        </div>
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="card mt-3">
                        <div class="card-body">
                            <h5>Cancel Booking Room</h5>
                            <hr>
                            @if($booking->status == "1")
                                Book - Completed
                            @elseif($booking->status =="2")
                                {{$booking->cancel_reason}}   
                            @else
                                <form  action="{{route('admin.cancel.booking',$booking->id)}}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('PUT') }}
                                    <div class="input-group mb-3">
                                        <select name="cancel_reason" class="custom-select" required id="inputGroupSelect02">
                                            <option value="">--Cancel--</option>
                                            <option value="Khách hàng đã hủy phòng">Cancel By Customers</option>
                                            <option value="Khách đã đặt phòng nhưng không đến nhận">No Show</option>
                                            <option value="Không còn phòng trống">On Request</option>
                                        </select>
                                        <div class="input-group-append">
                                            <button type="submit" class="input-group-text bg-info text-white" for="inputGroup">Cancel</button>
                                        </div>
                                    </div>
                                </form>         
                            @endif
                        </div>
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="card mt-3">
                        <div class="card-body">
                            <h5>Complete Booking</h5>
                            <hr>
                            @if($booking->status == "0")
                                <a href="javascript:void(0)" data-toggle="modal" data-target="#CompleteOrderModal"
                                class="badge badge-pill badge-primary px-3 py-2">
                                    Booking room đang hoạt động
                                </a>
                            @elseif($booking->status =="1")
                                Booking room hoàn thành! khách đã check-out.
                            @elseif($booking->status =="2")
                                Booking room đã hủy! Không được phép hoàn thành 
                            @else
                                Không có gì khác   
                            @endif
                        </div>
                    </div>

                </div>
            </div>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.bookings.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection
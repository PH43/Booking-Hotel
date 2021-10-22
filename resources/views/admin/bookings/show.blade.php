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
            @if($booking->status == "2")
            <form  action="{{route('admin.complete.booking',$booking->id)}}" method="POST">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <div class="modal-body">
                    @if($booking->payment_status == "0" )
                        <h6>
                            <input type="checkbox" name="cash_received" required>Thanh toán khi check-in hotel
                        </h6>
                        <p>Nhấn đồng ý khi bạn đã nhận được tiền từ khách hàng</p>
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
@if(session('error'))
    <div class="alert alert-danger">
        {{session('error')}}
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
                            @if($booking->status == '0')
                                Pending
                            @elseif($booking->status == '1')
                                Confirmed
                            @elseif($booking->status == '2' )
                                @if($booking->payment_status=="0")
                                    Payment confirmation !!!                                   
                                @else
                                    Completed
                                @endif
                            @else
                                @if( $booking->cancel_reason != NULL)
                                    Cancelled <br>
                                    Lý do: {{$booking->cancel_reason}}
                                @else
                                    Hãy điền lý do
                                @endif
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
                                    Đang chờ thanh toán
                                @elseif($booking->payment_status == '1')
                                    Đã thanh toán
                                @elseif($booking->payment_status == '2')
                                   Thanh toán trực tuyến
                                @else
                                    Không có
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
                            @if($booking->status == "2")
                                Yêu cầu hoàn thành
                            @elseif($booking->status =="3")
                                Yêu cầu hủy
                            @else 
                                <form  action="{{route('admin.update.status',$booking->id)}}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('PUT') }}
                                    <div class="input-group mb-3">
                                        <select name="status" class="custom-select" required id="inputGroupSelect02">
                                            <option value="">--Status--</option>
                                            <option value="1" {{ $booking->status == "1" ? 'selected':''}}>Confirmed</option>
                                            <!-- <option value="Khách đã nhận phòng" {{ $booking->booking_msg == "Khách đã nhận phòng" ? 'selected':''}}>Operational</option> -->
                                            <option value="2" {{ $booking->status == "2" ? 'selected':''}}>Completed</option>
                                            </option>
                                            <option value="3" {{ $booking->status == "3" ? 'selected':''}}>Cancel</option>
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
                @if($booking->status == "3")
                    
                        <div class="col-md-6">
                            <div class="card mt-3">
                                <div class="card-body">
                                    <h5>Complete Booking</h5>                    
                                    <form  action="{{route('admin.cancel.booking',$booking->id)}}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('PUT') }}
                                        <div class="form-group">
                                            <input class="form-control" type="text" name="cancel"  value="{{ old('cancel', '') }}" required placeholder="nhập lý do hủy">
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-danger" type="submit">
                                                Submit
                                            </button>
                                        </div>
                                    </form>         
                                </div>
                            </div>
                        </div> 
                                
                @endif

                @if($booking->status=="2")
                    @if($booking->payment_status == "0")
                        <div class="col-md-6">
                            <div class="card mt-3">
                                <div class="card-body">
                                    <h5>Complete Booking</h5>
                                    <hr>                            
                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#CompleteOrderModal"
                                    class="badge badge-pill badge-primary px-3 py-2">
                                        Xác nhận thanh toán
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endif
                @endif
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
<?php

namespace App\Http\Controllers\Admin;

use App\Models\Booking;
use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyBookingRequest;
use App\Http\Requests\StoreBookingRequest;
use App\Http\Requests\UpdateBookingRequest;
use App\Models\Room;
use App\Models\Coupon;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class BookingsController extends Controller
{
    public function index(Request $request)
    {
    
        $bookings= Booking::with('user','coupon')->get();
        return view('admin.bookings.index',compact('bookings'));
    }

    public function create()
    {
        abort_if(Gate::denies('booking_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $coupons = Coupon::all()->pluck('reduction', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.bookings.create', compact('coupons'));
    }

    public function store(Request $request)
    {
        $booking = Booking::create($request->all());

        return redirect()->route('admin.bookings.index')->with(['messages'=>'create booking success']);
    }

    public function edit(Booking $booking)
    {
        abort_if(Gate::denies('booking_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $coupons = Coupon::all()->pluck('reduction', 'id')->prepend(trans('global.pleaseSelect'), '');

        $booking->load('coupon');

        return view('admin.bookings.edit', compact('coupons', 'booking'));
    }

    public function update(UpdateBookingRequest $request, Booking $booking)
    {
        $booking->update($request->all());

        return redirect()->route('admin.bookings.index');
    }

    public function show($id)
    {
        abort_if(Gate::denies('booking_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $booking = Booking::with('bookingRooms')->findOrFail($id);
        
        return view('admin.bookings.show', compact('booking'));
    }

    public function destroy(Booking $booking)
    {
        abort_if(Gate::denies('booking_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $booking->delete();

        return back()->with(['messages'=>'delete booking success']);
    }

    public function massDestroy(MassDestroyBookingRequest $request)
    {
        Booking::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
    
    public function bookingStatus(Request $request,$id)
    {
        $booking=Booking::find($id);
        if($request->status == "1")
        {
            if($booking->status =="1")
            {
                return redirect()->back()->with('error','confirmed');
            }
            $booking->status = "1";
            $booking->update();
            return redirect()->back()->with('status','Comfirmed success');
        }elseif($request->status == "2")
        {
            if($booking->payment_status == "0")
            {
                $booking->status = "2";
                $booking->update();
                return redirect()->back();
            }
            else
            {
                if($booking->status == "1")
                {
                $booking->status = "2";
                $booking->update();
                return redirect()->back()->with('status','Completed success');
                }
                else
                {
                    return redirect()->back()->with('error','unconfimred ! cannot be completed');
                }
            }
            
        }elseif($request->status =="3")
        {          
            $booking->status = "3";
            $booking->update();
            return redirect()->back();
        }
    }

    public function cancelBooking(Request $request,$id)
    {
        $booking = Booking::find($id);
        $booking->cancel_reason = $request->cancel;
        $booking->update();
        return redirect()->back()->with('status','Cancel success');
    }

    public function completeBooking(Request $request,$id)
    {
        $booking = Booking::find($id); 
        if($booking->payment_status=="0")
        {
            $booking->payment_status = $request->input('cash_received') == TRUE ? '1' : '0';
        }
        $booking->update();
        return redirect()->back()->with('status','Booking room này đã hoàn thành');


    }

}

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
        if ($request->ajax()) {
            $query = Booking::with(['room'])->select(sprintf('%s.*', (new Booking)->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate      = 'booking_show';
                $editGate      = 'booking_edit';
                $deleteGate    = 'booking_delete';
                $crudRoutePart = 'bookings';

                return view('partials.datatablesActions', compact(
                    'viewGate',
                    'editGate',
                    'deleteGate',
                    'crudRoutePart',
                    'row'
                ));
            });

            $table->editColumn('id', function ($row) {
                return $row->id ? $row->id : "";
            });
            $table->addColumn('room_name', function ($row) {
                return $row->room ? $row->room->name : '';
            });

            $table->rawColumns(['actions', 'placeholder', 'room']);

            return $table->make(true);
        }
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
        $booking = Booking::find($id);
        if($booking->status != "2")
        {
            $booking->booking_msg = $request->input('booking_msg');
            $booking->update();
            return redirect()->back()->with('status','Cập nhật status booking thành công');
        }
        else
        {
            return redirect()->back()->with('status','Booking room này đã  hủy bỏ');
        }
    }

    public function cancelBooking(Request $request,$id)
    {
        $booking = Booking::find($id);
        if($booking->booking_msg!= NULL)
        {
            $booking->cancel_reason = $request->input('cancel_reason');
            $booking->booking_msg = "Booking room đã hủy";
            $booking->status = "2";
            $booking->update();
            return redirect()->back()->with('status','Booking room hủy thành công');
        }
        else
        {
            return redirect()->back()->with('status','Cập nhật trạng thái booking room thành công');
        }
    }

    public function completeBooking(Request $request,$id)
    {
        $booking = Booking::find($id);
        if($booking->booking_msg != NULL) {
            if($booking->status !="2")
            {
                $booking->booking_msg = "Booking room đã hoàn thành khi khách đã thanh toán ";
                if($booking->payment_status=="0")
                {
                    $booking->payment_status = $request->input('cash_received') == TRUE ? '1' : '0';
                }
                $booking->status = "1";
                $booking->update();
                return redirect()->back()->with('status','Booking room này đã hoàn thành');

            }
            else
            {
                return redirect()->back()->with('status','Booking room này đã  hủy bỏ');
            }
        }
        else
        {
            return redirect()->back()->with('status','Cập nhật trạng thái booking room thành công');
        }
    }

}

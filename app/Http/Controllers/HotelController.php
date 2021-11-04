<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Role;
use App\Models\Room;
use App\Models\Coupon;
use App\Models\Image;
use App\Models\HotelRate;
use App\Models\BookingRoom;
use Illuminate\Http\Request;
use DB, Session, Auth;


class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {   
        $startDate = $request->input('startDate');
        $endDate = $request->input('endDate');
        $days= floor((strtotime($endDate) - strtotime($startDate))/(60*60*24));
         if ($request->isMethod('GET')) {
            
            $availableRoom = BookingRoom::join('rooms','rooms.id','=','booking_rooms.room_id')
                            ->where('hotel_id', '=', $id)
                            ->select("room_id", "qty",  DB::raw('(sum(qty_total)) as total_qty'))
                        ->where(function ($q) use ($startDate, $endDate) {
                            $q->where('startDate', '<',$endDate)
                            ->orWhere('endDate', '>', $startDate);})
                            ->groupBy(DB::raw('room_id'), 'qty')
                            ->havingRaw('(sum(qty_total)) < qty')
                            ->pluck('room_id');
            $availableRoom = Room::with('roomType','bookingRooms', 'images')
                        ->whereDoesntHave('bookingRooms', function ($q) use ($startDate, $endDate) {
                            $q->where('startDate', '<',$endDate)
                            ->orWhere('endDate', '>', $startDate);})
                            ->orWhereIn('id', $availableRoom)->get();        
            $rooms = $availableRoom->where('hotel_id', '=', $id);
        }else{
            $rooms = null;
        }
            //  $rooms = $rooms->toArray();
            $hotel= Hotel::where('id', '=', $id)->with('city', 'category', 'hotelRates','img_nearloca')->get();
            // $hotel = $hotel->toArray();
            // dd($rooms);
            $codes = Coupon::all();
        return view('hotelDetail', compact('rooms', 'hotel', 'startDate', 'endDate', 'days', 'codes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\HotelRate;
use App\Models\Role;
use App\Models\Room;
use Illuminate\Http\Request;
use Session, Auth;

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
        $hotelRates = HotelRate::where('hotel_id', $id)->orderBy('created_at','desc')->get();
        // if($hotelRates->toArray() ==NULL) {
        //     dd('không có cmt');
        // }
        $rating = HotelRate::where('hotel_id',$id)->avg('rate');
        $rating = round($rating*2,1);
        $numbers_review = HotelRate::all()->count('user_id');
        $startDate = $request->input('startDate');
        $endDate = $request->input('endDate');
         $days= floor((strtotime($endDate) - strtotime($startDate))/(60*60*24));

        //  DB::enableQueryLog();
         if ($request->isMethod('GET')) {
            
            $rooms = Room::leftjoin('room_types', 'room_types.id', '=', 'rooms.roomtype_id')
            ->leftjoin('hotels', 'hotels.id', '=', 'rooms.hotel_id')
            ->leftjoin('cities', 'cities.id', '=', 'hotels.city_id')
            ->leftjoin('categories', 'categories.id', '=', 'hotels.category_id')
            ->with('bookingRooms')->whereHas('bookingRooms', function ($q) use ($startDate, $endDate) {
                $q->where(function ($q2) use ($startDate, $endDate) {
                    $q2->where('startDate', '>=', $endDate)
                       ->orWhere('endDate', '<=', $startDate);
                });
    
            })->orWhereDoesntHave('bookingRooms')->where('hotel_id', '=', $id)->orderBy('price')->get();
            
           $hotels = $rooms->toArray();
            
            $temp = array_unique(array_column($hotels, 'hotel_id'));
            $hotels = array_intersect_key($hotels, $temp);
            // dd(array_values($hotels)[0]);
        } else {
            $rooms = null;
        }


        return view('hotelDetail', compact('rooms', 'hotels', 'startDate', 'endDate', 'days','hotelRates','rating','numbers_review'));

        
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

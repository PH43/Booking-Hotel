<?php

namespace App\Http\Controllers;
use App\Models\Room;
use App\Models\City;
use App\Models\Hotel;
use App\Models\HotelRate;
use Carbon\Carbon;
use Illuminate\Http\Request;
use DB, Session, Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $dtnow = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
        $dt = Carbon::now('Asia/Ho_Chi_Minh')->addDay()->toDateString();
        $cities = City::all()->take(8);
        $rooms = Room::with('hotel','roomType')->orderBy('price')->take(12)->get();
        return view('index', compact('rooms','cities', 'dtnow', 'dt' ));
    }


    //post
    public function searchhotel(Request $request){
        $namecity = $request->input('city');
        $city = City::where('city', 'like' , $namecity)->pluck('id');
        $startDate = $request->input('startDate');
        $endDate = $request->input('endDate');
        $days= floor((strtotime($endDate) - strtotime($startDate))/(60*60*24));

         if ($request->isMethod('POST')) {
            
            $rooms = Room::leftjoin('room_types', 'room_types.id', '=', 'rooms.roomtype_id')
            ->leftjoin('hotels', 'hotels.id', '=', 'rooms.hotel_id')
            ->leftjoin('cities', 'cities.id', '=', 'hotels.city_id')
            ->with('bookingRooms')->whereHas('bookingRooms', function ($q) use ($startDate, $endDate) {
                $q->where(function ($q2) use ($startDate, $endDate) {
                    $q2->where('startDate', '>=', $endDate)
                       ->orWhere('endDate', '<=', $startDate);
                });
    
            })->orWhereDoesntHave('bookingRooms')->where('city_id', '=', $city)->get();
            
           
           
        } else {
            $rooms = null;
        }


        $rooms = $rooms->toArray();
        
        $temp = array_unique(array_column($rooms, 'hotel_id'));
        $hotels = array_intersect_key($rooms, $temp);
        $sohotels = count($hotels);

        foreach ($city as $id ) {
               $id = $id;
        }
       
        return view('searchhotel', compact('hotels','id','namecity', 'startDate', 'endDate', 'days', 'sohotels'));
    }


    //get
    public function searchwithcity(Request $request, $id){
        $orderBy =  $request->input('orderBy');
        $condition = $request->input('condition');
        $namecity = $request->input('city');
        $startDate =  Carbon::now('Asia/Ho_Chi_Minh');
        $endDate = Carbon::now('Asia/Ho_Chi_Minh')->addDay();
        $days= floor((strtotime($endDate) - strtotime($startDate))/(60*60*24));
        if (isset($condition)) {
            $rooms = Room::leftjoin('room_types', 'room_types.id', '=', 'rooms.roomtype_id')
            ->leftjoin('hotels', 'hotels.id', '=', 'rooms.hotel_id')
            ->leftjoin('cities', 'cities.id', '=', 'hotels.city_id')
            ->with('bookingRooms')->whereHas('bookingRooms', function ($q) use ($startDate, $endDate) {
                $q->where(function ($q2) use ($startDate, $endDate) {
                    $q2->where('startDate', '>=', $endDate)
                       ->orWhere('endDate', '<=', $startDate);
                });
            })->orWhereDoesntHave('bookingRooms')->where('city_id', '=', $id)->orderBy($condition, $orderBy)->get();
        } elseif (isset($id)) {
            $rooms = Room::leftjoin('room_types', 'room_types.id', '=', 'rooms.roomtype_id')
            ->leftjoin('hotels', 'hotels.id', '=', 'rooms.hotel_id')
            ->leftjoin('cities', 'cities.id', '=', 'hotels.city_id')
            ->with('bookingRooms')->whereHas('bookingRooms', function ($q) use ($startDate, $endDate) {
                $q->where(function ($q2) use ($startDate, $endDate) {
                    $q2->where('startDate', '>=', $endDate)
                       ->orWhere('endDate', '<=', $startDate);
                });
    
            })->orWhereDoesntHave('bookingRooms')->where('city_id', '=', $id)->get();
        } else {
            $rooms = null;
        }
        $rooms = $rooms->toArray();
        $temp = array_unique(array_column($rooms, 'hotel_id'));
        $hotels = array_intersect_key($rooms, $temp);
        $startDate =  $startDate->toDateString();
        $endDate =$endDate->addDay()->toDateString();
        $sohotels = count($hotels);

        // $mode[1] =  current($hotels);
        //      for($i= 1; $i <= 2;$i++){
        //         $mode[$i] = next($hotels);
        //     }
        // for($i = $age; $i <= ( 2 * $age); $i++){
        //             $test[$i] = $mode[$i];
        //         }
        

        return view('searchhotel', compact('hotels','id', 'namecity', 'startDate', 'endDate', 'days', 'sohotels'));
    }

}

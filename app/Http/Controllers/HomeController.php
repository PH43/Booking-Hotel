<?php

namespace App\Http\Controllers;
use App\Models\Room;
use App\Models\City;
use App\Models\Coupon;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Session, Auth;
use Illuminate\Support\Facades\DB;


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
        foreach ($city as $id ) {
               $id = $id;
        }
        
        $startDate = $request->input('startDate');
        $endDate = $request->input('endDate');
        $days= floor((strtotime($endDate) - strtotime($startDate))/(60*60*24));

         if (isset($namecity)) {
            
            $rooms = Room::leftjoin('room_types', 'room_types.id', '=', 'rooms.roomtype_id')
            ->leftjoin('hotels', 'hotels.id', '=', 'rooms.hotel_id')
            ->leftjoin('cities', 'cities.id', '=', 'hotels.city_id')
            ->with('bookingRooms')->whereHas('bookingRooms', function ($q) use ($startDate, $endDate) {
                $q->where(function ($q2) use ($startDate, $endDate) {
                    $q2->where('startDate', '>=', $endDate)
                       ->orWhere('endDate', '<=', $startDate);
                });
    
            })->orWhereDoesntHave('bookingRooms')->where('city_id', '=', $id)->where('city_id', '=', $id)->get();
        } else {
            $rooms = null;
        }

        //  dd($rooms);
        $rooms = $rooms->toArray();
        
        $temp = array_unique(array_column($rooms, 'hotel_id'));
        $hotels = array_intersect_key($rooms, $temp);
        $sohotels = count($hotels);

        
        
          // $mode[1] =  current($hotels);
        //      for($i= 1; $i <= 2;$i++){
        //         $mode[$i] = next($hotels);
        //     }
        // for($i = $age; $i <= ( 2 * $age); $i++){
        //             $test[$i] = $mode[$i];
        //         }

        return view('searchhotel', compact('hotels','id','namecity', 'startDate', 'endDate', 'days', 'sohotels'));
    }


    //get
    public function searchwithcity(Request $request, $id){
        $orderBy =  $request->input('orderBy');
        $namecity = $request->input('city');
        if($orderBy == 'STARDEFAULT' || $orderBy == 'DEFAULT'){
            $orderBy = 'DESC';
        }
        $condition = $request->input('condition');
        $price = $request->input('price');
        $startDate =  Carbon::now('Asia/Ho_Chi_Minh');
        $endDate = Carbon::now('Asia/Ho_Chi_Minh')->addDay();
        $startDate =  $startDate->toDateString();
        $endDate =$endDate->toDateString();
        if (isset($price)) {
            
            switch ($price) {
                case '1':
                    $price_min = 0;
                    $price_max = 5000000;
                    break;
                case '2':
                    $price_min = 500000;
                    $price_max = 1000000;
                    break;
                case '3':
                    $price_min = 1000000;
                    $price_max = 3000000;
                    break;
                case '4':
                    $price_min = 3000000;
                    $price_max = 5000000;
                    break;
                case '5':
                    $price_min = 5000000;
                    $price_max = 7000000;
                    break;
                case '6':
                    $price_min = 7000000;
                    $price_max = 10000000;
                    break;
                case '7':
                    $price_min = 10000000;
                    $price_max = 100000000;
                    break;   
            }
            
        }else{
            $price_min = 0;
            $price_max = 5000000;
        }
        
        if (isset($condition)) {
            $startDate = $request->input('startDate');
            $endDate = $request->input('endDate');
            $rooms = Room::leftjoin('room_types', 'room_types.id', '=', 'rooms.roomtype_id')
            ->leftjoin('hotels', 'hotels.id', '=', 'rooms.hotel_id')
            ->leftjoin('cities', 'cities.id', '=', 'hotels.city_id')
            ->with('bookingRooms')->whereHas('bookingRooms', function ($q) use ($startDate, $endDate) {
                $q->where(function ($q2) use ($startDate, $endDate) {
                    $q2->where('startDate', '>=', $endDate)
                       ->orWhere('endDate', '<=', $startDate);
                       
                });
                
            })->orWhereDoesntHave('bookingRooms')->where('city_id', '=', $id)->orderBy($condition, $orderBy)
            ->whereBetween('price',[$price_min, $price_max])->get();
        } elseif (empty($condition)) {
            $rooms = Room::leftjoin('room_types', 'room_types.id', '=', 'rooms.roomtype_id')
            ->leftjoin('hotels', 'hotels.id', '=', 'rooms.hotel_id')
            ->leftjoin('cities', 'cities.id', '=', 'hotels.city_id')
            ->with('bookingRooms')->whereHas('bookingRooms', function ($q) use ($startDate, $endDate) {
                $q->where(function ($q2) use ($startDate, $endDate) {
                    $q2->where('startDate', '>=', $endDate)
                       ->orWhere('endDate', '<=', $startDate);
                });
                
            })->orWhereDoesntHave('bookingRooms')->where('city_id', '=', $id)
            ->whereBetween('price',[$price_min, $price_max])->get();
        } else {
            $rooms = null;
        }
        
        $rooms = $rooms->toArray();
        $temp = array_unique(array_column($rooms, 'hotel_id'));
        $hotels = array_intersect_key($rooms, $temp);
        $sohotels = count($hotels);
        $days= floor((strtotime($endDate) - strtotime($startDate))/(60*60*24));
        

        return view('searchhotel', compact('hotels','id', 'namecity', 'startDate', 'endDate', 'days', 'sohotels'));
    }
    public function booking(Request $request){
        $roomid = $request -> input('roomid');
        $qty = $request-> input('qty');
        $startDate = $request->input('startDate');
        $endDate = $request->input('endDate');
        $code = $request->input('code');
        $days= floor((strtotime($endDate) - strtotime($startDate))/(60*60*24));
        $code_id = Coupon::where('code', 'like' , $code)->pluck('id');
        foreach ($code_id as $id ) {
               $code_id = $id;
        }
        
        if(Auth::check()){
            $user_id = Auth::user()->id;
            $name = Auth::user()->name;
            $phone = Auth::user()->phone;
            $email = Auth::user()->email;
            //  dd($user_id);

            DB::insert("insert into bookings (user_id, coupon_id) values ($user_id,  $code_id )");
            return view('bookinginfor', compact('name', 'phone', 'email','code', 'startDate', 'endDate', 'days'));
        }
        else{
            // dd('chưa đăng nhập');
            $user_id ='null';
            DB::insert("insert into bookings (user_id, coupon_id) values ($user_id,  $code_id )");
            return view('bookinginfor', compact('code', 'startDate', 'endDate', 'days'));
        }

        
       

    }
    public function thanhtoan(Request $request){
        
        
       

    }
}

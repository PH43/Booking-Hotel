<?php

namespace App\Http\Controllers;
use App\Models\Room;
use App\Models\BookingRoom;
use App\Models\City;
use App\Models\Hotel;
use App\Models\HotelRate;
use App\Models\Category;
use App\Models\Coupon;
use App\Models\Booking;
use App\Models\BookingInfo;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
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
        $rooms = Room::with('hotel','roomType', 'images')->orderBy('price')->take(12)->get();
        // $rooms = $rooms ->toArray();
        // dd($rooms);
        return view('index', compact('rooms','cities', 'dtnow', 'dt' ));
    }



    //post
    public function searchhotel(Request $request){
        $namecity = $request->input('city');
        $city = City::where('city', 'like' , $namecity)->pluck('id');
        
        $startDate = $request->input('startDate');
        $endDate = $request->input('endDate');
        
        $days= floor((strtotime($endDate) - strtotime($startDate))/(60*60*24));
        //
            foreach($city as $id){
                $city = $id;
            }
        //
        if (isset($namecity)) {   
            $rooms = Room::with('roomType','bookingRooms')
            ->join('hotels', 'hotels.id', '=', 'rooms.hotel_id')
            ->join('cities', 'cities.id', '=', 'hotels.city_id')
            ->whereHas('bookingRooms', function ($q) use ($startDate, $endDate) {
                $q->where(function ($q2) use ($startDate, $endDate) {
                    $q2->where('startDate', '>=', $endDate)
                       ->orWhere('endDate', '<=', $startDate);
                });
            })->orWhereDoesntHave('bookingRooms')->get();
            $rooms = $rooms->whereIn('city_id', $city);
           
        } else {
            $rooms = null;
        }
        
          
        $rooms = $rooms->toArray();
        
        $temp = array_unique(array_column($rooms, 'hotel_id'));
        $hotels = array_intersect_key($rooms,$temp);
        // dd($rooms);
        $sohotels = count($hotels);
        

        $hotels = $this->arrayPaginator($hotels, $request);
        
        $categories = Category::all();
        $codes = Coupon::all();
        $hotelsnear = Hotel::where('city_id','=', $city)->get();
        // dd($hotelsnear);
        
        return view('searchhotel', compact('hotels','city','namecity', 'startDate', 'endDate', 'days', 'sohotels','categories','codes', 'hotelsnear' ));
    }


    //get
    public function searchwithcity(Request $request, $city){
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
                case '0':
                    $price_min = 0;
                    $price_max = 10000000;
                    break;
                case '1':
                    $price_min = 0;
                    $price_max = 500000;
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
            
        }
        else{
            $price_min = 0;
            $price_max = 10000000;
        }
        
        if (isset($condition)) {
            $startDate = $request->input('startDate');
            $endDate = $request->input('endDate');
            $rooms = Room::with('roomType','bookingRooms')
            ->join('hotels', 'hotels.id', '=', 'rooms.hotel_id')
            ->join('cities', 'cities.id', '=', 'hotels.city_id')
            ->whereHas('bookingRooms', function ($q) use ($startDate, $endDate) {
                $q->where(function ($q2) use ($startDate, $endDate) {
                    $q2->where('startDate', '>=', $endDate)
                       ->orWhere('endDate', '<=', $startDate);
                });
                
            })->orWhereDoesntHave('bookingRooms')->orderBy($condition, $orderBy)->whereBetween('price', [$price_min, $price_max] )
            ->get();
            $rooms = $rooms->whereIn('city_id', $city);
            
            // dd($rooms);
        } elseif (empty($condition)) {
            $rooms = Room::with('roomType','bookingRooms')
            ->join('hotels', 'hotels.id', '=', 'rooms.hotel_id')
            ->join('cities', 'cities.id', '=', 'hotels.city_id')
            ->whereHas('bookingRooms', function ($q) use ($startDate, $endDate) {
                $q->where(function ($q2) use ($startDate, $endDate) {
                    $q2->where('startDate', '>=', $endDate)
                       ->orWhere('endDate', '<=', $startDate);
                });
                
            })->orWhereDoesntHave('bookingRooms')->whereBetween('price', [$price_min, $price_max] )->get();
            $rooms = $rooms->whereIn('city_id', $city);
        } else {
            $rooms = null;
        }
        
        $rooms = $rooms->toArray();
        $temp = array_unique(array_column($rooms, 'hotel_id'));
        $hotels = array_intersect_key($rooms, $temp);
        $sohotels = count($hotels);

        $hotels = $this->arrayPaginator($hotels, $request);
        $days= floor((strtotime($endDate) - strtotime($startDate))/(60*60*24));
         $codes = Coupon::all();
         $hotelsnear = Hotel::where('city_id','=', $city)->get();

        return view('searchhotel', compact('hotels','city', 'namecity', 'startDate', 'endDate', 'days', 'sohotels', 'codes','hotelsnear'));
    }
    public function booking(Request $request){
        $roomid = $request -> input('roomid');
        $hotelid = $request -> input('hotelid');
        $qty = $request-> input('qty');
        if($qty == 0){
            return redirect()->back(); 
        }
        $startDate = $request->input('startDate');
        $endDate = $request->input('endDate');
        $days= floor((strtotime($endDate) - strtotime($startDate))/(60*60*24));
        $code = $request->input('code');
        $reduction = $request -> input('reduction');
        $subtotal = $request -> input('subtotal');
        $hotel= Hotel::where('id', '=', $hotelid)->with('city', 'category')->get();
        $rooms = Room::where('id', '=',$roomid )->with('roomType', 'images')->get();
        // dd($rooms);
        if(Auth::check()){
            $user_id = Auth::user()->id;
            $name = Auth::user()->name;
            $phone = Auth::user()->phone;
            $email = Auth::user()->email;
            //  dd($user_id);
            $sessions = Session::put("bookings", [['roomid' =>  $roomid, 'qty' => $qty,'startDate' => $startDate,'endDate' => $endDate, 'subtotal'=> $subtotal]]);
            $bookings = $request->session()->pull('bookings');
            // DB::insert("insert into bookings (user_id, coupon_id) values ($user_id,  $code_id )");
            
            return view('bookinginfor', compact('hotel','rooms', 'bookings','name', 'phone', 'email','code','reduction', 'days'));
            
        }
        else{
            // dd('chưa đăng nhập');
            $user_id ='null';
            $sessions = Session::put("bookings", [['roomid' =>  $roomid, 'qty' => $qty,'startDate' => $startDate,'endDate' => $endDate, 'subtotal'=> $subtotal]]);
            $bookings = $request->session()->pull('bookings');
            // dd($rooms);
            // DB::insert("insert into bookings (user_id, coupon_id) values ($user_id,  $code_id )");
            return view('bookinginfor', compact('hotel','rooms','bookings','code', 'days','reduction'));
        }
       
    }
    public function thanhtoan(Request $request){
        $roomid = $request -> input('roomid');
        $qty = $request-> input('qty');
        $startDate = $request->input('startDate');
        $endDate = $request->input('endDate');

         $startDate = date("Y-m-d", strtotime($startDate));
        
         $endDate = date("Y-m-d", strtotime($endDate));

        $days= floor((strtotime($endDate) - strtotime($startDate))/(60*60*24));
        $code = $request->input('code');
        $reduction = Coupon::where('code', 'like' , $code)->pluck('reduction')->first();
        $note = $request->input('note');
        $subtotal = $request->input('subtotal');
        $totalqty =  $subtotal * $qty*$days;
        $code_id = Coupon::where('code', 'like' , $code)->pluck('id');
        //
            $rooms = Room::where('id', '=',$roomid )->with('hotel','roomType', 'images')->get();
            foreach ($code_id as $id ) {
                $code_id = $id;
            }
        //
        $total = $totalqty - ($totalqty*$reduction/100);
        if(Auth::check()){
            $user_id = Auth::user()->id;

            $name = $request->input('name');
            $phone = $request->input('phone');
            $email = $request->input('email');
            DB::insert("insert into bookings (user_id, coupon_id) values ($user_id,  $code_id )");
            $booking_id = Booking::where('user_id', '=' , $user_id)->orderBy('id', 'DESC')->pluck('id')->first();
            // return view('bookinginfor', compact('booking','name', 'phone', 'email','code', 'startDate', 'endDate', 'days'));
        }
        else{
            $user_id ='null';
            DB::insert("insert into bookings (user_id, coupon_id) values ($user_id,  $code_id)");
            $booking_id = Booking::orderBy('id', 'DESC')->pluck('id')->first();
            $name = $request->input('name');
            $phone = $request->input('phone');
            $email = $request->input('email');
           
        }
        if(isset($note)){
            $note = $note;
        }else{
            $note = 'null';
        }
        $booking_room = new BookingRoom();
        $booking_room->booking_id = $booking_id;
        $booking_room->qty_total = $qty;
        $booking_room->room_id = $roomid;
        $booking_room->subtotal= $subtotal;
        $booking_room->startDate= $request->startDate;
        $booking_room->endDate= $request->endDate;
        $booking_room->num_days = $days;
        $booking_room->reduction = $reduction; 
        $booking_room->total = $total; 
        $booking_room->note = $note; 
        $booking_room->save();

        $booking_info = new BookingInfo();
        $booking_info->booking_id = $booking_id;
        $booking_info->name = $name;
        $booking_info->phone = $phone;
        $booking_info->email = $email;
        $booking_info->save();
        // dd($rooms);
        return view('bill', compact('rooms','startDate', 'endDate', 'qty','days','subtotal','total', 'reduction'));
    }

    // public function searchrate(Request $request, $city){
        
    //     $rateavg = Hotel::join('hotel_rates', 'hotel_rates.hotel_id', '=', 'hotels.id')
    //                         ->where('city_id', '=', $city)
    //                         ->select( "hotels.id", "hotels.name","hotels.star","hotels.address","hotels.image", DB::raw('(avg(rate)) as rateavg'),DB::raw('(count(rate)) as qtyrate') )
    //                         ->groupBy(DB::raw('hotels.id'),"hotels.name","hotels.star","hotels.address","hotels.image")
    //                         ->with('rooms')
    //                         ->orderBy('rateavg', 'ASC')
    //                         ->get();
                            
       
    //                         dd($rateavg);
        
    //     //  return view('searchhotel', compact('hotels','city', 'namecity', 'startDate', 'endDate', 'days', 'sohotels', 'codes','hotelsnear'));
    // }

    public function arrayPaginator($hotels, $request) {
        $page = $request->input('page', 1);
        $perPage = 2;
        $offset = ($page * $perPage) - $perPage;

        return new LengthAwarePaginator(array_slice($hotels, $offset, $perPage, true), count($hotels), $perPage, $page,
            ['path' => $request->url(), 'query' => $request->query()]);
    }


    public function searchhotelform(Request $request){
        $idhotel = $request->input('idhotel');
        if(isset($idhotel)){
            $id = $idhotel;
        }
        $startDate = $request->input('startDate');
        $endDate = $request->input('endDate');

        $days= floor((strtotime($endDate) - strtotime($startDate))/(60*60*24));
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

            // $rooms = $rooms->toArray();
            $hotel= Hotel::where('id', '=', $id)->with('city', 'category', 'hotelRates','img_nearloca')->get();
            // dd($hotel);
            $codes = Coupon::all();
        return view('hotelDetail', compact('rooms', 'hotel', 'startDate', 'endDate', 'days', 'codes'));
    }

    


   
}

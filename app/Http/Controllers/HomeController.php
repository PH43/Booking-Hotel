<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Room;
use App\Models\City;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $cities = City::all()->take(8);
        $rooms = Room::with('hotel','roomType','images')->orderBy('price')->limit(8)->get();
        return view('index', compact('cities','rooms'));
    }

    public function storeAdvise(Request $request)
    {
        $advise = Customer::create($request->all());
        return redirect()->back()->with(['messages'=>'Gởi thông tin thành công']);
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Models\Hotel;
use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyRoomRequest;
use App\Http\Requests\StoreRoomRequest;
use App\Http\Requests\UpdateRoomRequest;
use App\Models\Room;
use App\Models\RoomType;
use Gate;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class RoomsController extends Controller
{
    public function index(Request $request)
    {
        
        $rooms = Room::with('hotel','roomType')->get();
        return view('admin.rooms.index',compact('rooms'));
    }

    public function create()
    { 
        abort_if(Gate::denies('room_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $hotels = Hotel::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $room_types = RoomType::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.rooms.create', compact('hotels', 'room_types'));
    }

    public function store(StoreRoomRequest $request)
    {
        $room = Room::create($request->all());
        return redirect()->route('admin.rooms.index')->with(['success'=>'create room success']);
    }

    public function edit(Room $room)
    {
        abort_if(Gate::denies('room_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $hotels = Hotel::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $room_types = RoomType::all()->pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $room->load('hotel', 'roomType');

        return view('admin.rooms.edit', compact('hotels', 'room_types', 'room'));
    }

    public function update(UpdateRoomRequest $request,$id)
    {
        $room = new Room;
        $arr['price'] = $request->price;
        $arr['status'] = $request->status;
        $arr['room_number'] = $request->room_number;
        $arr['description'] = $request->description;
        $arr['hotel_id'] = $request->hotel_id;
        $arr['roomtype_id'] = $request->roomtype_id;
        $room::where('id',$id)->update($arr);
        return redirect()->route('admin.rooms.index')->with(['success'=>'update room success']);
    }

    public function show($id)
    {
        abort_if(Gate::denies('room_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        // $room->load('hotel', 'roomType', 'bookingRooms','images');
        $room = Room::with('hotel', 'roomType', 'bookingRooms','images')->findOrFail($id);
        return view('admin.rooms.show', compact('room'));
    }

    public function destroy(Room $room)
    {
        abort_if(Gate::denies('room_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $room->delete();

        return back()->with(['success'=>'delete booking success']);
    }

    public function massDestroy(MassDestroyRoomRequest $request)
    {
        Room::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function changeStatus(Request $request){
        $room = Room::find($request->id);
        $room->status = $request->status;
        $room->save();
        return response()->json(['success' => 'Status Changed Successfully']);
    }

    public function searchRoom(Request $request)
    {
        $rooms = null;
        // if($request->filled(['start_time', 'end_time', 'capacity'])) 
        // {
        //     $times = [
        //         Carbon::parse($request->input('startDate')),
        //         Carbon::parse($request->input('endDate')),
        //     ];
        //     $rooms = Room::with('bookingRooms')->whereHas('bookingRooms',function($q) use ($startDate,$endDate){
        //         $q->where(function($q2) use ($startDate,$endDate){
        //             $q2->where('startDate','>=',$endDate)
        //             ->orwhere('endDate','<=',$startDate);
        //         });
        //     })->orWhereDoesntHave('bookingRooms')->get();   
        // }
        return view('admin.searchrooms.index', compact('rooms'));
    }
}

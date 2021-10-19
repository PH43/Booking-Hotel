@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.room.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.rooms.update", [$room->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="price">Price</label>
                <input class="form-control" type="text" name="price" id="price" value="{{ old('price', $room->price) }}" required>
                @if($errors->has('price'))
                    <p style="color:red">{{$errors->first('price')}}</p>
                @endif  
            </div>
            <div class="form-group">
                <label class="required" for="status">Status</label>
                <input class="form-control" type="text" name="status" id="status" value="{{ old('status', $room->status) }}" required>
                
            </div>
            <div class="form-group">
                <label class="required" for="room_number">Room Number</label>
                <input class="form-control" type="text" name="room_number" id="room_number" value="{{ old('room_number', $room->room_number) }}" required>
                @if($errors->has('room_number'))
                    <p style="color:red">{{$errors->first('room_number')}}</p>
                @endif 
            </div>
            <div class="form-group">
                <label class="required" for="description">Description</label>
                <input class="form-control" type="text" name="description" id="description" value="{{ old('description', $room->description) }}" required>
                @if($errors->has('description'))
                    <p style="color:red">{{$errors->first('description')}}</p>
                @endif 
            </div>
            <div class="form-group">
                <label class="required" for="hotel_id">{{ trans('cruds.room.fields.hotel') }}</label>
                <select class="form-control select2 {{ $errors->has('hotel') ? 'is-invalid' : '' }}" name="hotel_id" id="hotel_id" required>
                    @foreach($hotels as $id => $hotel)
                        <option value="{{ $id }}" {{ ($room->hotel ? $room->hotel->id : old('hotel_id')) == $id ? 'selected' : '' }}>{{ $hotel }}</option>
                    @endforeach
                </select>
                @if($errors->has('hotel_id'))
                    <div class="invalid-feedback">
                        {{ $errors->first('hotel_id') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.room.fields.hotel_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="roomtype_id">{{ trans('cruds.room.fields.room_type') }}</label>
                <select class="form-control select2 {{ $errors->has('room_type') ? 'is-invalid' : '' }}" name="roomtype_id" id="roomtype_id" required>
                    @foreach($room_types as $id => $room_type)
                        <option value="{{ $id }}" {{ ($room->roomType ? $room->roomType->id : old('roomtype_id')) == $id ? 'selected' : '' }}>{{ $room_type }}</option>
                    @endforeach
                </select>
                @if($errors->has('roomtype_id'))
                    <div class="invalid-feedback">
                        {{ $errors->first('roomtype_id') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.room.fields.room_type_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection
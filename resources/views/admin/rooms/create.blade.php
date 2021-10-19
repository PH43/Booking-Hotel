@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.room.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.rooms.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="price">Price</label>
                <input class="form-control" type="text" name="price" id="price" value="{{ old('price', '') }}" required>
                @if($errors->has('price'))
                <div class="invalid-feedback">
                    {{$errors->first('price')}}
                </div>
                @endif  
            </div>
            <div class="form-group">
                <label class="required" for="room_number">Room Number</label>
                <input class="form-control" type="text" name="room_number" id="room_number" value="{{ old('room_number', '') }}" required>
                @if($errors->has('room_number'))
                <div class="invalid-feedback">
                    {{$errors->first('room_number')}}</p>
                </div>
                @endif 
            </div>
            <div class="form-group">
                <label class="required" for="description">Description</label>
                <input class="form-control" type="text" name="description" id="description" value="{{ old('description', '') }}" required>
                @if($errors->has('description'))
                    <div class="invalid-feedback">
                        {{$errors->first('description')}}
                    </div>
                @endif 
            </div>
            <div class="form-group">
                <label class="required" for="hotel_id">{{ trans('cruds.room.fields.hotel') }}</label>
                <select class="form-control select2 {{ $errors->has('hotel') ? 'is-invalid' : '' }}" name="hotel_id" id="hotel_id" required>
                    @foreach($hotels as $id => $hotel)
                        <option value="{{ $id }}" {{ old('hotel_id') == $id ? 'selected' : '' }}>{{ $hotel }}</option>
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
                        <option value="{{ $id }}" {{ old('roomtype_id') == $id ? 'selected' : '' }}>{{ $room_type }}</option>
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
                <label class="required" for="status">Status</label><br>
                <!-- <input class="form-control" type="text" name="status" id="status" value="{{ old('status', '') }}" required> -->
                Display <input type="radio" name="status" value="Display" {{old('status','Display')}}>
                No Display <input type="radio" check name="status" value="No Display" {{old('status','Display')}}>
                 @if($errors->has('status'))
                    <div class="invalid-feedback">
                    {{$errors->first('status')}}
                </div>
                @endif
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
        <div class="form-group">
            <a class="btn btn-default" href="{{ route('admin.rooms.index') }}">
                {{ trans('global.back_to_list') }}
            </a>
        </div>
    </div>
</div>



@endsection
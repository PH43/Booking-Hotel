@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.image.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.images.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="path">Image<i style="color:red"> *</i></label>
                <input class="form-control" type="file" name="path" id="path" value="{{ old('path', '') }}" required>
            </div>
            <!-- Image -->
            <!-- <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile">
                <label class="custom-file-label" for="customFile">Choose file</label>
            </div> -->
            <div class="form-group">
                <label class="required" for="room_id">Room Number</label>
                <select class="form-control" name="room_id" id="room_id">
                    @foreach($rooms as $id => $room)
                        <option value="{{ $id }}" {{ ( old('room_id')) == $id ? 'selected' : '' }}>{{ $room }}</option>
                    @endforeach
                </select>
                <!-- @if($errors->has('coupon_id'))
                    <div class="invalid-feedback">
                        {{ $errors->first('coupon_id') }}
                    </div>
                @endif -->
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
@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.coupon.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.coupons.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="code">Code<i style="color:red"> *</i></label>
                <input class="form-control" type="text" name="code" id="code" value="{{ old('code', '') }}" required>
            </div>
            <div class="form-group">
                <label class="required" for="remain">Remain <i style="color:red"> *</i></label>
                <input class="form-control" type="text" name="remain" id="remain" value="{{ old('remain', '') }}" required>
            </div>
            <div class="form-group">
                <label class="required" for="reduction">Reduction <i style="color:red"> *</i></label>
                <input class="form-control" type="text" name="reduction" id="reduction" value="{{ old('reduction', '') }}" required>
            </div>
            <div class="form-group">
                <label class="required" for="startDate">Start Date <i style="color:red"> *</i></label>
                <input class="form-control" type="date" name="startDate" id="startDay" value="{{ old('startDate', '') }}" required>
            </div>
            <div class="form-group">
                <label class="required" for="endDate">End Date <i style="color:red"> *</i></label>
                <input class="form-control" type="date" name="endDate" id="endDate" value="{{ old('endDate', '') }}" required>
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
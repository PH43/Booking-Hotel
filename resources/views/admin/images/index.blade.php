@extends('layouts.admin')
@section('content')
@can('image_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.images.create") }}">
                {{ trans('global.add') }} {{ trans('cruds.image.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.image.title_singular') }} {{ trans('global.list') }}
    </div>
    @if(session()->has('success'))
        <div class="alert alert-success">{{session()->get('success')}}</div> 
    @endif
    <div class="card-body">
        <table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-Image">
           
            <thead>
                <tr>
                    <th width="10">

                    </th>                   
                    <th>
                        ID
                    </th>
                    <th>
                        Image
                    </th>
                    <th>
                        Room Number
                    </th>
                    <th>
                        &nbsp;
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($images as $image)
                <tr>
                    <td></td>
                    <td>
                        {{ $image->id}}
                    </td>                   
                    <td>
                        <img height="80px" src="../../resources/images/rooms/{{$image->path}}" alt="">
                    </td>
                    <td>
                        @if($image->room !=NULL)                
                        <a href="{{ route('admin.rooms.show',$image->room->id)}}">{{ $image->room->room_number }}</a>
                        @endif
                    </td>
                    
                    <td>
                        
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('booking_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}';
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.bookings.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).data(), function (entry) {
          return entry.id
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  let dtOverrideGlobals = {
    buttons: dtButtons,
    processing: true,
    serverSide: true,
    retrieve: true,
    aaSorting: [],
    ajax: "{{ route('admin.bookings.index') }}",
    columns: [
        { data: 'placeholder', name: 'placeholder' },
        { data: 'id', name: 'id' },
        { data: 'room_name', name: 'room.name' },
        { data: 'booking_date', name: 'booking_date' },
        { data: 'actions', name: '{{ trans('global.actions') }}' }
    ],
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  };
  $('.datatable-Booking').DataTable(dtOverrideGlobals);
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e){
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust();
    });
});

</script>
@endsection
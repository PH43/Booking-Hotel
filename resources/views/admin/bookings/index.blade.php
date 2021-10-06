@extends('layouts.admin')
@section('content')
@can('booking_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.bookings.create") }}">
                {{ trans('global.add') }} {{ trans('cruds.booking.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.booking.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-Booking">
           
            <thead>
                <tr>
                    <th width="10">

                    </th>                   
                    <th>
                        ID
                    </th>
                    <th>
                        Customer Name
                    </th>
                    <th>
                        Date
                    </th>
                    <th>
                        Qty Room
                    </th>
                    <th>
                        Coupon
                    </th>
                    <th>
                        &nbsp;
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach($bookings as $booking)
                <tr>
                    <td></td>
                    <td>
                        {{ $booking->id}}
                    </td>                   
                    <td>
                       {{ $booking->user->name}}
                    </td>
                    <td>
                        {{ $booking->booking_date}}
                    </td>
                    <td>
                        {{ $booking->qty_room}}
                    </td>
                    <td>
                        {{ $booking->coupon->code }}
                    </td>
                    
                    <td>
                        @can('booking_show')
                            <a class="btn btn-xs btn-primary" href="{{ route('admin.bookings.show', $booking->id) }}">
                                {{ trans('global.view') }}
                            </a>
                        @endcan

                        @can('booking_edit')
                            <a class="btn btn-xs btn-info" href="{{ route('admin.bookings.edit', $booking->id) }}">
                                {{ trans('global.edit') }}
                            </a>
                        @endcan

                        @can('booking_delete')
                            <form action="{{ route('admin.bookings.destroy', $booking->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                            </form>
                        @endcan
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
@extends('layouts.app')
@section('content')

<script src="<?=asset('js/angular_controllers/hotel.js')?>"></script>
<div ng-controller="JSHotelController as $main">
    @include('hotel.detail')
    <div ngif="msg" class="alert alert-[[msg_type]] alert-dismissible" role="alert">
       <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
       <strong>[[msg_title]]</strong> [[msg]]
   </div>
    <table st-table="displayedCollection" st-safe-src="rowCollection" class="table table-striped">
    <thead>
    <tr>
        <th st-sort="id">@lang('app.id')</th>
        <th st-sort="name">@lang('app.name')</th>
        <th st-sort="active">@lang('app.active')</th>
        <th st-sort="created_at">@lang('app.created_at')</th>
        <th st-sort="update_at">@lang('app.update_at')</th>
    </tr>
    <tr>
       <th colspan="5"><input st-search="" class="form-control" placeholder="@lang('app.global_search')" type="text"/></th>
       <th>
            <button type="button" ng-click="new()" class="btn btn-sm btn-success">
                    <i class="glyphicon glyphicon-plus-sign">
                    </i>
                </button>

       </th>
    </tr>
    </thead>
    <tbody>
    <tr ng-repeat="row in displayedCollection">
        <td>[[row.id]]</td>
        <td>[[row.name]]</td>
        <td>[[row.active]]</td>
        <td>[[row.created_at]]</td>
        <td>[[row.update_at]]</td>
        <td>
                <button type="button" ng-click="delete(row)" class="btn btn-sm btn-danger">
                    <i class="glyphicon glyphicon-remove-circle">
                    </i>
                </button>
         </td>
           <td>
                <button type="button" ng-click="update(row)" class="btn btn-sm btn-primary">
                    <i class="glyphicon glyphicon-pencil">
                    </i>
                </button>
         </td>
        
    </tr>
    </tbody>
</table>
</div>


@endsection

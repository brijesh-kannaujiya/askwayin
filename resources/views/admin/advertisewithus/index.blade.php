@extends('layouts.admin')

@section('content')
<?php
//dd($data);
?>
<div class="card">
	<div class="d-sm-flex align-items-center justify-content-between">
        <h5 class=" mb-0 text-gray-800 pl-3">{{ __('Directory enquiry') }}</h5>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">{{ __('Dashboard') }}</a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.listing.enquiry') }}">{{ __('Enquiry') }}</a></li>
        </ol>
	</div>
</div>


<div class="row mt-3">
    <div class="col-lg-12">
        @include('includes.admin.form-success')
        <div class="card mb-4">
            <div class="row px-3 py-3">
                <div class="bulk-delete-section">
                    <div class="select-box-section">
                        <select id="bulk_option">
                            <option value="">@lang('Bulk Action')</option>
                            <option value="delete">@lang('Delete')</option>
                        </select>

                        <button class="btn btn-primary btn-sm" data-toggle="modal" data-href="{{ route('admin.advertisewithus.bulk.delete') }}" data-target="" id="bulk_apply">@lang('Apply')</button>
                    </div>
                </div>
            </div>
            <div class="table-responsive p-3">
                <table id="" class="table table-hover dt-responsive" cellspacing="0" width="100%">
                    <thead class="thead-light">
                        <tr>
                            <th>
                                <input type="checkbox" class="" id="headercheck">
                            </th>
                            <th>{{ __('Name') }}</th>
                            <th>{{ __('Email') }}</th>
                            <th>{{ __('Subject') }}</th>
                            <th>{{ __('Message') }}</th>
                            <th>{{ __('Phone') }}</th>
                            <th>{{ __('Options') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $datas)
                        <tr>
                        <td>{{ $datas->id }}</td>
                        <td>{{ $datas->name }}</td>
                        <td>{{ $datas->email }}</td>
                        <td>{{ $datas->subject }}</td>
                        <td>{{ $datas->message }}</td>
                        <td>{{ $datas->phone_number }}</td>
                        <td>
                        <div class="btn-group mb-1">
                        <button type="button" class="btn btn-primary btn-sm btn-rounded dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Actions
                        </button>
                        <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 31px, 0px);">
                        <!--<a href="" class="dropdown-item">Edit</a>-->
      <a href="javascript:;" data-toggle="modal" data-target="#deleteModal" class="dropdown-item" data-href="{{ route('admin.advertisewithus.delete',$datas->id) }}">Delete</a>
                        </div>
                        </div>
                        </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@includeIf('partials.admin.status')
<div class="modal fade confirm-modal" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">{{ __("Confirm Delete") }}</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<p class="text-center">{{__("You are about to delete this Enquiry. Every informtation under this enquiry will be deleted.")}}</p>
				<p class="text-center">{{ __("Do you want to proceed?") }}</p>
			</div>
			<div class="modal-footer">
				<a href="javascript:;" class="btn btn-secondary" data-dismiss="modal">{{ __("Cancel") }}</a>
				<a href="javascript:;" class="btn btn-danger btn-ok">{{ __("Delete") }}</a>
			</div>
		</div>
	</div>
</div>

@endsection


@section('scripts')

 
@endsection

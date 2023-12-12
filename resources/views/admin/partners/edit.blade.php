@extends('layouts.admin')

@section('content')
<div class="card">
  <div class="d-sm-flex align-items-center justify-content-between">
    <h5 class=" mb-0 text-gray-800 pl-3">{{ __('Edit Partner') }} <a class="btn btn-primary btn-rounded btn-sm" href="{{route('admin.partner.index')}}"><i class="fas fa-arrow-left"></i> {{ __('Back') }}</a></h5>
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">{{ __('Dashboard') }}</a></li>
        <li class="breadcrumb-item"><a href="javascript:;">{{ __('Homepage setting') }}</a></li>>
    </ol>
  </div>
</div>

<div class="row justify-content-center mt-3">
  <div class="col-md-10">
    <div class="card mb-4">
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">{{ __('Edit Partner Form') }}</h6>
      </div>

      <div class="card-body">
        <div class="gocover" style="background: url({{asset('assets/images/'.$gs->admin_loader)}}) no-repeat scroll center center rgba(45, 45, 45, 0.5);"></div>
        <form class="geniusform" action="{{route('admin.partner.update',$data->id)}}" method="POST" enctype="multipart/form-data">

            @include('includes.admin.form-both')

            {{ csrf_field() }}

             
            <div class="form-group">
                <label for="title">{{ __('Brand Name') }}</label>
                <input type="text" class="form-control" id="brand_name" name="brand_name" value="{{$data->brand_name}}"  placeholder="{{ __('Brand Name') }}" required>
            </div>
            
             <div class="form-group">
                <label for="title">{{ __('Brand Url') }}</label>
                <input type="text" class="form-control" id="brand_url" name="brand_url" value="{{$data->brand_url}}"  placeholder="{{ __('Brand Url') }}" required>
            </div>
            
            
            <div class="form-group">
                <label>{{ __('Brand App Icon') }} </label>
                <div class="wrapper-image-preview">
                    <div class="box">
                        <div class="back-preview-image" style="background-image: url({{$data->brand_img ? asset('assets/images/'.$data->brand_img) : asset('assets/images/placeholder.jpg') }});"></div>
                        <div class="upload-options">
                            <label class="img-upload-label" for="img-upload1"> <i class="fas fa-camera"></i> {{ __('Brand App Icon') }} </label>
                            <input id="img-upload1" type="file" class="image-upload" name="brand_img" accept="image/*">
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="form-group">
                <label>{{ __('Set Picture') }} </label>
                <div class="wrapper-image-preview">
                    <div class="box">
                        <div class="back-preview-image" style="background-image: url({{$data->photo ? asset('assets/images/'.$data->photo) : asset('assets/images/placeholder.jpg') }});"></div>
                        <div class="upload-options">
                            <label class="img-upload-label" for="img-upload"> <i class="fas fa-camera"></i> {{ __('Upload Picture') }} </label>
                            <input id="img-upload" type="file" class="image-upload" name="photo" accept="image/*">
                        </div>
                    </div>
                </div>
            </div>
            


          <button type="submit" id="submit-btn" class="btn btn-primary w-100">{{ __('Submit') }}</button>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection

@section('scripts')

@endsection

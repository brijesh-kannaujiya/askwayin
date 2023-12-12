@extends('layouts.admin')

@section('content')
<div class="card">
  <div class="d-sm-flex align-items-center justify-content-between">
    <h5 class=" mb-0 text-gray-800 pl-3">{{ __('Add New Appadds') }} <a class="btn btn-primary btn-rounded btn-sm" href="{{route('admin.appadds.index')}}"><i class="fas fa-arrow-left"></i> {{ __('Back') }}</a></h5>
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
        <h6 class="m-0 font-weight-bold text-primary">{{ __('Add New Appadds Form') }}</h6>
      </div>

      <div class="card-body">
        <div class="gocover" style="background: url({{asset('assets/images/'.$gs->admin_loader)}}) no-repeat scroll center center rgba(45, 45, 45, 0.5);"></div>
        <form class="geniusform" action="{{route('admin.appadds.store')}}" method="POST" enctype="multipart/form-data">

            @include('includes.admin.form-both')

            {{ csrf_field() }}

                <div class="form-group d-none">
                <label for="title">{{ __('Brand Name') }}</label>
                <input type="text" class="form-control" id="name" name="name" value=""  placeholder="{{ __('Brand Name') }}">
            </div>
            
            <div class="form-group">
                <label for="title">{{ __('category') }}</label>
            <select name="category_id" class="input-field">
            <?php
            $categoriesubID = DB::table('categories')->where('parent_id', NULL)->get();
            ?>
            @foreach ($categoriesubID as $key=>$category)
            <option value="{{$category->id}}">{{$category->title}}</option>
            @endforeach
            </select>
            </div>
           
            
            
             <div class="form-group">
                <label for="title">{{ __('Adds Url') }}</label>
                <input type="text" class="form-control" id="appadds_url" name="appadds_url" value=""  placeholder="{{ __('Adds Url') }}" required>
            </div>
            
            
            <div class="form-group">
                <label>{{ __('Adds App Icon') }} </label>
                <div class="wrapper-image-preview">
                    <div class="box">
                        <div class="back-preview-image" style="background-image: url({{ asset('assets/images/placeholder.jpg') }});"></div>
                        <div class="upload-options">
                            <label class="img-upload-label" for="img-upload1"> <i class="fas fa-camera"></i> {{ __('Adds App Icon') }} </label>
                            <input id="img-upload1" type="file" class="image-upload" name="appadds_img" accept="image/*">
                        </div>
                    </div>
                </div>
            </div>


            <div class="form-group">
                <label>{{ __('Set Picture') }} </label>
                <div class="wrapper-image-preview">
                    <div class="box">
                        <div class="back-preview-image" style="background-image: url({{ asset('assets/images/placeholder.jpg') }});"></div>
                        <div class="upload-options">
                            <label class="img-upload-label" for="img-upload2"> <i class="fas fa-camera"></i> {{ __('Upload Picture') }} </label>
                            <input id="img-upload2" type="file" class="image-upload" name="photo" accept="image/*">
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

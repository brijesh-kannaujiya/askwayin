@extends('layouts.admin')

@section('content')

<div class="card">
    <div class="d-sm-flex align-items-center justify-content-between">
        <h5 class=" mb-0 text-gray-800 pl-3">{{ __('Add New Category') }} <a class="btn btn-primary btn-rounded btn-sm"
                href="{{route('admin.categories.index')}}"><i class="fas fa-arrow-left"></i> {{ __('Back') }}</a></h5>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">{{ __('Dashboard') }}</a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.categories.create') }}">{{ __('Add New Category')
                    }}</a></li>
        </ol>
    </div>
</div>

<div class="row justify-content-center mt-3">
    <div class="col-md-10">
        <!-- Form Basic -->
        <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">{{ __('Add New Category Form') }}</h6>
            </div>

            <div class="card-body">
                <div class="gocover"
                    style="background: url({{asset('assets/images/'.$gs->admin_loader)}}) no-repeat scroll center center rgba(45, 45, 45, 0.5);">
                </div>
                <form class="geniusform" action="{{route('admin.categories.store')}}" method="POST"
                    enctype="multipart/form-data">

                    @include('includes.admin.form-both')

                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="inp-name">{{ __('Name') }}</label>
                        <input type="text" class="form-control" id="inp-name" name="title"
                            placeholder="{{ __('Enter Name') }}" value="" required>
                    </div>
                    <div class="form-group">
                        <label for="inp-name">{{ __('Name arbic') }}</label>
                        <input type="text" class="form-control" id="inp-name" name="title_arbic"
                            placeholder="{{ __('Enter Name') }}" value="" required>
                    </div>

                    <div class="form-group">
                        <label for="inp-slug">{{ __('Slug') }}</label>
                        <input type="text" class="form-control" id="inp-slug" name="slug"
                            placeholder="{{ __('Enter Slug') }}" value="" required>
                    </div>

                    <div class="form-group">
                        <label for="count">{{ __('Icon') }}</label>
                        <div class="input-group">
                            <span class="input-group-prepend">
                                <button class="btn btn-secondary" name="icon" data-icon="fas fa-moon"
                                    role="iconpicker"></button>
                            </span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>{{ __('Category thumbnail') }} </label>
                        <div class="wrapper-image-preview">
                            <div class="box">
                                <div class="back-preview-image"
                                    style="background-image: url({{ asset('assets/images/placeholder.jpg') }});"></div>
                                <div class="upload-options">
                                    <label class="img-upload-label" for="img-upload"> <i class="fas fa-camera"></i> {{
                                        __('Upload Picture') }} </label>
                                    <input id="img-upload" type="file" class="image-upload" name="photo"
                                        accept="image/*">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>{{ __('Category thumbnail2') }} </label>
                        <div class="wrapper-image-preview">
                            <div class="box">
                                <div class="back-preview-image"
                                    style="background-image: url({{ asset('assets/images/placeholder.jpg') }});"></div>
                                <div class="upload-options">
                                    <label class="img-upload-label" for="img-upload1"> <i class="fas fa-camera"></i> {{
                                        __('Upload Picture') }} </label>
                                    <input id="img-upload1" type="file" class="image-upload" name="photo1"
                                        accept="image/*">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>{{ __('Category Banner') }} </label>
                        <div class="wrapper-image-preview">
                            <div class="box">
                                <div class="back-preview-image"
                                    style="background-image: url({{ asset('assets/images/placeholder.jpg') }});"></div>
                                <div class="upload-options">
                                    <label class="img-upload-label" for="img-upload2"> <i class="fas fa-camera"></i> {{
                                        __('Upload Picture') }} </label>
                                    <input id="img-upload2" type="file" class="image-upload" name="photo_banner"
                                        accept="image/*">
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <label>{{ __('App Image') }} </label>
                        <div class="wrapper-image-preview">
                            <div class="box">
                                <div class="back-preview-image"
                                    style="background-image: url({{ asset('assets/images/placeholder.jpg') }});"></div>
                                <div class="upload-options">
                                    <label class="img-upload-label" for="img-upload3"> <i class="fas fa-camera"></i> {{
                                        __('Upload Picture') }} </label>
                                    <input id="img-upload3" type="file" class="image-upload" name="photo3"
                                        accept="image/*">
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="cp-container cp-contain" id="cp3-container">
                            <div class="input-group" title="Using input value">
                                <input type="color" name="bg_color" class="form-control" value=""
                                    id="exampleInputPassword1">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-check">
                            <input type="checkbox" name="is_top" class="form-check-input" value="1" id="is_top">
                            <label class="form-check-label" for="is_top">{{ __('Check if this category is featured')
                                }}</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-check">
                            <input type="checkbox" name="pop_cat" class="form-check-input" value="1" id="pop_cat">
                            <label class="form-check-label" for="pop_cat">{{ __('Check if this category is Popular')
                                }}</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="form-check">
                            <input type="checkbox" name="pop_home_cat" class="form-check-input" value="1"
                                id="pop_home_cat">
                            <label class="form-check-label" for="pop_cat">{{ __('Check if Home category is Popular')
                                }}</label>
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
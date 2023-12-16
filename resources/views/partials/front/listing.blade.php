<form method="POST" class="flex-filter">
    <div class="cat d-none">
        <select name="category">
            <option selected="" disabled="">Category</option>
            <?php
                    $allcategories = DB::table('categories')->where('parent_id',NULL)->get();
                    foreach($allcategories as $allcategories_data){
                    ?>
            <option value="{{$allcategories_data->id}}">{{$allcategories_data->title}}</option>
            <?php } ?>
        </select>
    </div>
    <div class="cat">
        <select name="sort_by">
            <option selected="" disabled="">Sort by</option>
            <option value="Relevance">Relevance</option>
            <option value="Rating">Rating</option>
            <option value="Popular">Popular</option>
            <option value="Distance">Distance</option>
        </select>
    </div>
    <!--<div class="cat action">-->
    <!--   <label>-->
    <!--      <input type="checkbox" value="1"><span>Book a Table</span>-->
    <!--   </label>-->
    <!--</div>-->
    <div class="cat action">
        <label>
            <input type="checkbox" value="1"><span>Online Ordering</span>
        </label>
    </div>
    <div class="cat action">
        <label>
            <input type="checkbox" value="1"><span>Open Now</span>
        </label>
    </div>
    <div class="cat action">
        <label>
            <input type="checkbox" class="highlight_type" value="Tranding"><span>Trending</span>
        </label>
    </div>
    <div class="cat action">
        <label>
            <input type="checkbox" class="highlight_type" value="Top Rated"><span>Top Rated</span>
        </label>
    </div>

    <div class="cat action">
        <label>
            <input type="checkbox" class="is_verify" value="1"><span>Verified</span>
        </label>
    </div>
    <div class="cat action">
        <label>
            <input type="checkbox" class="is_verify" value="1"><span>Deals</span>
        </label>
    </div>
</form>


{{-- @dd($listings); --}}


@if (count($listings)>0)
@foreach ($listings as $key => $data)
<div class="col-xl-3 col-lg-3 col-md-6 col-sm-3">
    <div class="Rego-grid-wrap">
        <div class="Rego-grid-upper">
            <div class="Rego-bookmark-btn">
                <button type="button" class="wishList" data-listing="{{ $data->id }}" data-user={{ auth()->id() }}>
                    <i
                        class="lni lni-heart{{ $data->userFavourite(auth()->id(),$data->id) ? '-filled' : ''}} position-absolute"></i>
                </button>
            </div>
            <div class="Rego-pos ab-left">
                <div class="Rego-status open me-2">{{ $data->openClose($data->id) }}</div>
                @if ($data->is_feature)
                <div class="Rego-featured-tag">@lang('Featured')</div>
                @endif
            </div>

            <div class="Rego-grid-thumb">
                <a href="{{ route('front.listing.details',$data->slug) }}" class="d-block text-center m-auto">
                    <img src="{{ asset('assets/images/'.$data->photo) }}" class="img-fluid" alt="" />
                </a>
            </div>
        </div>
        <div class="Rego-grid-fl-wrap">
            <div class="Rego-caption px-3 py-2">
                {{--
                <!--<div class="Rego-author">-->
                <!--    @if ($data->user_id == NULL && $data->admin_id == NULL)-->
                <!--        <a href="{{ route('front.author.details','admin') }}">-->
                <!--            <img src="{{ asset('assets/images/'.getAdmin()->photo)}}" class="img-fluid circle" alt="">-->
                <!--        </a>-->
                <!--    @else-->
                <!--        <a href="{{ route('front.author.details',$data->user->username) }}">-->
                <!--            <img src="{{ asset('assets/images/'.$data->user->photo)}}" class="img-fluid circle" alt="">-->
                <!--        </a>-->
                <!--    @endif-->
                <!--</div>--> --}}
                <div class="Rego-cates"><a
                        href="{{ route('front.listing',['category' => $data->category->slug]) }}">@lang($data->category->title)</a>
                </div>
                <h4 class="mb-0 ft-medium medium"><a href="{{ route('front.listing.details',$data->slug) }}"
                        class="text-dark fs-md">@lang($data->name)
                    </a></h4>
                <div class="Rego-middle-caption mt-3">
                    <div class="Rego-location"><i class="fas fa-map-marker-alt"></i>@lang($data->real_address)</div>
                    <div class="Rego-call"><i class="fas fa-phone-alt"></i>@lang($data->phone_number)</div>
                </div>
            </div>
            <div class="Rego-grid-footer py-3 px-3">
                <div class="Rego-ft-first">
                    @if (count($data->reviews)>0)
                    <div class="Rego-rating">
                        <div class="Rego-pr-average high">{{ceil($data->directoryRatting($data->id))}}</div>
                        <div class="Rego-rates">
                            @php
                            $rate = ceil($data->directoryRatting($data->id));
                            @endphp

                            @for($i=1; $i<=$rate; $i++) <i class="fas fa-star active"></i>
                                @endfor

                                @for($i=1; $i<=(5-$rate); $i++) <i class="fas fa-star"></i>
                                    @endfor
                        </div>
                    </div>
                    @endif
                </div>

                <div class="Rego-ft-last">
                    <span class="small">{{ count($data->reviews) }} @lang('Reviews')</span>
                </div>

            </div>
            <div class="Rego-ft-last">
                <span class="small">{{ $data->created_at->diffForHumans() }}</span>
            </div>
        </div>
    </div>
</div>
@endforeach
@else
<div class="col-lg-12 col-md-12">
    <h5 class="text-center">
        @lang('No Directory Found!')
    </h5>
</div>
@endif
<?php
///dd($listings);
?>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        @if($listings->hasPages())
        {{ $listings->links() }}
        @endif
    </div>
</div>
@php
if (request()->get('category')) {
$cat = request()->get('category')[0];
}else{
$cat = null;
}
@endphp
<form id="search_item" class="d-none" action="{{route('front.filter')}}" method="get">
    <input type="text" name="is_verify" id="is_verify" value="">
    <input type="text" name="highlight_type[]" id="highlight_type" value="">
    <input type="text" name="category[]" id="category" value="{{$cat}}">

    <button type="submit" id="search_btn_submit" class="d-none"></button>
</form>

@push('js')
<script>
    'use strict';

    $(document).on('click','.is_verify',function(){
       let is_verify = [];
       $.each($('.is_verify'), function( index, value ) {
            if($(this).is(':checked')){
                is_verify.push($(this).val());
            }
		});

        $('#search_item #is_verify').val(is_verify);
        $('#search_btn_submit').click();
	})

    $(document).on('click','.highlight_type',function(){
        let highlight_type = [];
        $.each($('.highlight_type'), function( index, value ) {
            if($(this).is(':checked')){
                console.log($(this).val());
                highlight_type.push($(this).val());
            }
		});
        $('#search_item #highlight_type').val(highlight_type);
        $('#search_btn_submit').click();
    })
</script>
@endpush
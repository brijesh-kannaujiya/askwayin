@extends('layouts.front')

@push('css')

@endpush

@section('content')
 

   <style>
	.flex-xy
	{
		display: flex;
		background: #f1f1f1;
	    padding: 10px;
	    border-radius: 5px;
	    margin-bottom: 20px;
	}

	.flex-xy p
	{
		font-size: 17px;
		color: #000;
	}

	.flex-left
	{
		display: flex;flex-wrap: wrap;
			margin-bottom: 60px;
	}

	.flex-left div
	{
		/*background: #f1f1f1;*/
		/*border-radius: 50px;*/
		/*padding: 10px 20px;*/
		margin-bottom: 5px;
		margin-right: 10px;
	}

	.flex-left div:hover
	{
		color: #029d9f;
		/*transition: 0.5s ease-in-out;*/
	}

	.flex-left div:hover a
	{
		color: #029d9f;
	}
</style>
<?php
$slug = request('slug');
$banner= DB::select("SELECT * FROM categories where slug='$slug'");
//dd($banner);
?>
@foreach ($banner as $key => $bannerss)
<div class="bread">
				<img src="{{ asset('assets/images') }}/{{ $bannerss->photo_banner }}" class="img-fluid" style="width: 100%;">
			</div>
	@endforeach

<div class="container">
	
	<div class="row">
	    <div class="col-md-12">
	        
	        @include('frontend.breadcrumb')
	    </div>
	</div>
	
	
	<div class="row">
		<div class="col-md-4">
			
				<div class="input-group my-4">
				  <span class="input-group-text"><i class="ri-search-line"></i></span>
				  <input type="text" class="form-control" placeholder="Search Category" aria-label="Username" id="myInput"  aria-describedby="basic-addon1">
				</div>
			
		</div>
	</div>
	<div class="row" style="margin-bottom: 60px" id="myDIV">
        

	    @if ($categoriesub)
                    @foreach ($categoriesub as $key => $categorysub)
		<div class="col-md-4">
		    <a href="{{ route('front.listing',['category'=>[$categorysub->slug]]) }}">
			<div class="flex-xy">
				<div>
					<img src="{{ asset('assets/images') }}/{{ $categorysub->photo }}" class="img-fluid me-3" style="width: 30px;">
				</div>
				<div>
					<p class="mb-0">@lang($categorysub->title)</p>
				</div>
			</div>
			</a>
		</div>
		@endforeach
	    		@endif
	 
		
	</div>

	<div class="">
		<div class="row">
			<div class="col-md-12">
				<h3>@lang('Explore more A to Z')</h3>
				<div class="flex-left">
                <?php
                $popularcat= DB::select('SELECT * FROM categories where pop_cat=0');
                ?>
				    @if ($popularcat)
                       @foreach ($popularcat as $key => $popularcat_data)
					<div>
						<a href="{{ route('front.listing',['category'=>[$popularcat_data->slug]]) }}" class="bg-round">@lang($popularcat_data->title) |</a>
					</div>
					@endforeach
	    		@endif
					 
				</div>
			</div>
		</div>
	</div>
	
	
		<div class="">
		<div class="row">
			<div class="col-md-12">
				<h3>@lang('Popular Category')</h3>
				<div class="flex-left">
                <?php
                $popularcat1= DB::select('SELECT * FROM categories where pop_cat=1');
                ?>
				    @if ($popularcat1)
                       @foreach ($popularcat1 as $key => $popularcat_data1)
					<div>
						<a href="{{ route('front.listing',['category' => [$popularcat_data1->slug]]) }}" class="bg-round">@lang($popularcat_data1->title) |</a>
					</div>
					@endforeach
	    		@endif
					 
				</div>
			</div>
		</div>
	</div>
	
	
		<div class="">
		<div class="row">
			<div class="col-md-12">
				<h3>@lang('Popular Cities')</h3>
				<div class="flex-left">
                      <?php
                      $locations= DB::select('SELECT * FROM locations where status=1');
                      ?>
                       @foreach ($locations as $key => $location)
					<div>
						<a href="{{ route('front.listing',['location' => [$location->slug]]) }}" class="bg-round">@lang($location->name) |</a>
					</div>
					@endforeach
	    		
				</div>
			</div>
		</div>
	</div>
	
	 
	
	
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myDIV *").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
    <!-- ======================= Newsletter Start ============================ -->
        @include('partials.front.cta')
    <!-- ======================= Newsletter Start ============================ -->

    <!-- ============================ Footer Start ================================== -->
    @include('partials.front.footer')
    <!-- ============================ Footer End ================================== -->

@endsection

@push('js')

@endpush

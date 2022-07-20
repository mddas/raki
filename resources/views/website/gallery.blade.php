
	 

	@extends('layouts.master')
    @section("contents")
		
			<div class="theme-inner-banner">
				<div class="overlay">
					<div class="container">
						<h2>Gallery</h2>
					</div> <!-- /.container -->
				</div> <!-- /.overlay -->
			</div> <!-- /.theme-inner-banner -->


			<!-- 
			=============================================
				gallery
			============================================== 
			-->
			@if(isset($photos))
			<section class="section-spacing">
				<div class="container">
					<div class="gallery-view">
		                <div class="row" id="lightgallery"> 
							<!----gallary data----->
							@foreach($photos as $photo)
								<div class="item col-md-3" data-src="{{$photo->banner_image}}" data-sub-html="{{$photo->caption}}">
									<a href="">
										<img src="{{$photo->banner_image}}" alt="{{$photo->caption}}"/>
										<div class="gallery-overlay"><img src="/website/images/home/plus.png"></div>
									</a>
								</div>
							@endforeach
						  <!----gallary data close----->
		                </div>
		            </div>
          		</div>
			</section>
		  @endif
        @include("website.company_success")
        @include("website.partner")
    @endsection
    
@extends('layouts.master')
    @section("contents")
        @include("website.main_slider")
		  @php 
			if(app\Models\Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%message%")->where('page_type','Group')->latest()->first()!=null){
				$message_id = app\Models\Navigation::query()->where('nav_category','Home')->where('nav_name', 'LIKE', "%message%")->where('page_type','Group')->latest()->first()->id;
				$message = app\Models\Navigation::query()->where('parent_page_id',$message_id)->latest()->first();
       		 }
        else{
            $message = null;
        }
		  @endphp
			<!-------common page------>
			@if($message!=null)
				<div class="callout-banner">
				<div class="container clearfix">
					<h3 class="title">{{$message->caption}}<br> <span>Chairman</span></h3>
					<p>{{$message->short_content}}</p>
					<a href="/contact" class="theme-button-one" target="_blank">Contact us</a>
				</div>
			  </div> <!-- /.callout-banner -->
			@endif

			<!-- 
			=============================================
				About Company Stye Two
			============================================== 
			-->
			<div class="about-compnay section-spacing">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-12 text order-lg-last">
							<div class="theme-title-one mb-20">
								<h2>{{$normal->caption}}</h2>
							</div> <!-- /.theme-title-one -->
							<p class="mb-20">{{$normal->short_content}}</p>
							<p>{{$normal->main_content}}</p>
						</div> <!-- /.col- -->
						<div class="col-lg-6 col-12 order-lg-first">
							<img src="{{$normal->banner_image}}" alt="" class="left-img">
						</div>
					</div> <!-- /.row -->
				</div> <!-- /.container -->
			</div> <!-- /.about-compnay-two -->
			<!------common page end----->
        @include("website.company_success")
        @include("website.partner")
    @endsection
    
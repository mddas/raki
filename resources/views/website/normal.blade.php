@extends('layouts.master')
    @section("contents")
        <!-- @include("website.main_slider") -->
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
			@if($message=="block")
				<div class="callout-banner">
				<div class="container clearfix">
					<h3 class="title">{{$message->caption}}<br> <!---<span>Chairman</span>----></h3>
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
			<style>
				.wrapingimage  
					{  
					float: left;   
					margin: 30px 12px 3px 4px;   
					border: 2px solid blue;  
					}   
			</style>
			<div class="about-compnay section-spacing">
				<div class="container">
					<center><h3><u>{{$normal->caption}}</u></h3></center>
					<div class="row">
						<div class="col-lg-12 col-12">
							@if($normal->banner_image!=null)
							<div class="wrapingimage">   
								<img src="{{$normal->banner_image}}" class="left-img" onerror="this.style.display='none'">
							</div>
							@endif
							 <!-- /.theme-title-one -->
							<p class="mb-20">{{$normal->short_content}}</p>
							@php echo $normal->long_content; @endphp
						</div> 
					</div> <!-- /.row -->
				</div> <!-- /.container -->
			</div> <!-- /.about-compnay-two -->
			<!------common page end----->
        @include("website.partner")
    @endsection
    
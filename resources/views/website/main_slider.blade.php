		@if(isset($sliders))
		<div id="theme-main-banner" class="banner-one">
			@foreach($sliders as $slider)
				<div data-src="{{$slider->banner_image}}">
					<div class="camera_caption">
						<div class="container">
							<h1 class="wow fadeInUp animated" data-wow-delay="0.2s">{{$slider->caption}}</h1>
						</div> <!-- /.container -->
					</div> <!-- /.camera_caption -->
				</div>
			@endforeach
		</div> <!-- /#theme-main-banner -->
		@endif


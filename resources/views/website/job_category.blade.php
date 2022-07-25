            <div class="service-style-one section-spacing bg-gray">
				<div class="container">
					<div class="theme-title-one">
						<h2>Job Category</h2>
					</div> <!-- /.theme-title-one -->
					<div class="wrapper">
						<div class="row">
                          @foreach($job_categories as $cat)
							<div class="col-xl-4 col-lg-6 col-12">
								<div class="single-service">
									<div class="img-box"> <img src="{{$cat->banner_image}}" alt=""/></div>
									<div class="text">
										<h5><a href="/{{$cat->nav_name}}">{{$cat->caption}}</a></h5>
										<!-- <p>If the job requirement</p> -->
										<a href="/{{$cat->nav_name}}" class="read-more">View Job<i class="fa fa-angle-right" aria-hidden="true"></i></a>
									</div> <!-- /.text -->
								</div> <!-- /.single-service -->
							</div> <!-- /.col- -->
						  @endforeach
						</div> <!-- /.row -->
						<div class="view-all-btn">
						<a href="{{route('viewall')}}" class="theme-button-one">View All</a>
						</div>
					</div> <!-- /.wrapper -->
				</div> <!-- /.container -->
			</div> <!-- /.Job Category -->
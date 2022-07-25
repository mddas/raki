@extends('layouts.master')
    @section("contents")
			<div class="theme-inner-banner">
				<div class="overlay">
					<div class="container">
						<h2>JOB CATEGORY</h2>
					</div> <!-- /.container -->
				</div> <!-- /.overlay -->
			</div> <!-- /.theme-inner-banner -->

			<div class="service-style-one section-spacing">
				<div class="container">
					<p class="mb-20" style="text-align: justify; font-size: 16px;">
					Here is a list of job categories with job posts in Top Job. The list shows the latest online job vacancy by categories. Click on the view job to view list of latest jobs posted by Top Job.
					</p>
					<div class="row">
						<div class="col-xl-9 col-lg-8 col-md-8 col-sm-7 col-12">
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
						</div>
					</div>
				</div> <!-- /.container -->
			</div> <!-- /.service-style-one -->
	@include("website.partner")
@endsection
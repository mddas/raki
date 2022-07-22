@extends('layouts.master')
    @section("contents")
        @include("website.main_slider")
			<!-------common page------>
							<div class="callout-banner">
				<div class="container clearfix">
					<h3 class="title">ROHAN GURUNG<br> <span>Chairman</span></h3>
					<p>Our commitment is finding the right person for the right job as per the request of our valued clients around the world. We are focusing, ethical and fair recruitment procedures. We are always happy to provide our Services.</p>
					<a href="/jobapply/{{$job->nav_name}}" class="theme-button-one" target="_blank">Apply Now</a>
				</div>
			</div> <!-- /.callout-banner -->

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
								<h2>{{$job->getJob->company_name}}</h2>
							</div> <!-- /.theme-title-one -->
                            <div class="theme-title-one mb-20">
								<h4>{{$job->getJob->caption}}</h4>
							</div> <!-- /.theme-title-one -->
                            <center>
                            <div class="card" style="width: 18rem;">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Salary :Rs {{$job->getJob->salary}} per month</li>
                                    <li class="list-group-item">Country : {{$job->getJob->salary}}n</li>
                                    <li class="list-group-item">Contract time : {{$job->getJob->salary}} years</li>
                                </ul>
                           </div>
                            </center>

							<p class="mb-20">{{$job->short_content}}</p>
							<p>{{$job->main_content}}</p>
						</div> <!-- /.col- -->
						<div class="col-lg-6 col-12 order-lg-first">
							<img src="{{$job->banner_image}}" alt="" class="left-img">
						</div>
					</div> <!-- /.row -->
				</div> <!-- /.container -->
			</div> <!-- /.about-compnay-two -->
			<!------common page end----->
       
        @include("website.partner")
    @endsection
    
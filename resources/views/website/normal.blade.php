@extends('layouts.master')
    @section("contents")
        @include("website.main_slider")
			<!-------common page------>
							<div class="callout-banner">
				<div class="container clearfix">
					<h3 class="title">ROHAN GURUNG<br> <span>Chairman</span></h3>
					<p>Our commitment is finding the right person for the right job as per the request of our valued clients around the world. We are focusing, ethical and fair recruitment procedures. We are always happy to provide our Services.</p>
					<a href="apply-form.html" class="theme-button-one" target="_blank">Apply Now</a>
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
								<h2>Top Job Pvt Ltd</h2>
							</div> <!-- /.theme-title-one -->
							<p class="mb-20">Top jobs (P) Ltd have been supplying human resources since 2006. In the numerous overseas manpower agency, Top Jobs P. Ltd is an ethical and reliable manpower recruitment company in Nepal with demonstrated history of serving as one of premier recruitment agency for the past 16 years.</p>
							<p>Our commitment is finding the right person for the right job as per the request of our valued clients around the world. We are focusing, ethical and fair recruitment procedures. We are always happy to provide our Services.</p>
						</div> <!-- /.col- -->
						<div class="col-lg-6 col-12 order-lg-first">
							<img src="/website/images/home/1.jpg" alt="" class="left-img">
						</div>
					</div> <!-- /.row -->
				</div> <!-- /.container -->
			</div> <!-- /.about-compnay-two -->
			<!------common page end----->
        @include("website.company_success")
        @include("website.partner")
    @endsection
    
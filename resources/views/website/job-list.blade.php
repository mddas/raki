@extends('layouts.master')
    @section("contents")
        @include("website.main_slider")
        @include("website.about_company")
						<div class="theme-inner-banner">
				<div class="overlay">
					<div class="container">
						<h2>{{$slug_detail->first()->caption}}</h2>
					</div> <!-- /.container -->
				</div> <!-- /.overlay -->
			</div> <!-- /.theme-inner-banner -->

			<div class="service-style-one section-spacing">
				<div class="container">
					<p class="mb-20" style="text-align: justify; font-size: 16px;">
					Here is a list of jobs for <b>{{$slug_detail->first()->caption}}</b> sector. The list shows the latest online job vacancy in <b>{{$slug_detail->first()->caption}}</b> with job details. If the job requirement matches your skills and experience, click on “Apply Now” button to send your job application.
					</p>
					<div class="row">
						<div class="col-xl-9 col-lg-8 col-md-8 col-sm-7 col-12">
							<!---total job of category displayed here------>
							@foreach($jobs as $job)
								<div class="job-detail">
									<div class="row">
										<div class="col-sm-3">
											<div class="img-box">
												<a href="{{route('single_job',$job->nav_name)}}"><img src="{{$job->banner_image}}" alt=""></a>
											</div>
										</div>
										<div class="col-sm-5">
											<div class="text">
												<h6>{{$job->caption}}</h6>
												<span class="job_company">{{$job->getJob->company_name ?? 'null'}}</span>
												<span><i class="fa fa-map-marker"></i>{{$job->getJob->country ?? 'null'}}</span>
												<p>{{$slug_detail->first()->caption}}</p>
											</div> <!-- /.text -->
										</div>
										<div class="col-sm-4">
											<div class="text">
												<span class="job_company">Salary : MYR {{$job->getJob->salary ?? ''}} Monthly</span>
												<span>Contract : {{$job->getJob->contract_time ?? ''}} Year(s)</span>
												<a href="/jobapply/{{$job->nav_name}}" class="apply-button" target="_blank">Apply Now</a>
											</div> <!-- /.text -->
										</div>
									</div>
								</div>
							@endforeach
							<!---total job of category displayed here------>
						</div> <!-- /.Job -->
						<div class="col-xl-3 col-lg-4 col-md-4 col-sm-5 col-12 blog-sidebar">
							<!-- <div class="sidebar-container sidebar-categories">
								<ul>
									@foreach($menus as $menu)
										<li><a href="#">$menu->caption</a></li>
									@endforeach
								</ul>
							</div> /.sidebar-categories -->
							<div class="sidebar-container sidebar-recent-post">
								<h5 class="title">Job Categorey</h5>
								<ul>
									<!----category List---->
									@foreach($menus as $menu)
										<li class="clearfix">
											<a href="#">
											<img src="{{$menu->banner_image}}" alt="" class="float-left">
											<div class="post float-left">
												<h6>{{$menu->caption}}</h6>
												<p>View Job</p>
											</div>
											</a>
										</li>
									@endforeach
									<!---category list closed---->
								</ul>
							</div> <!-- /.sidebar-recent-post -->
							<div class="company-slogon">
								<p class="text-white">we practice Ethical Recruitment and comply to various Business Code of Conducts.</p>
							</div>
						</div>
					</div>
				</div> <!-- /.container -->
			</div> <!-- /.service-style-one -->
			

	<!-- include("website.company_success") -->
	@include("website.partner")

@endsection
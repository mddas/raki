@extends('layouts.master')
    @section("contents")
        
			<div class="theme-inner-banner">
				<div class="overlay">
					<div class="container">
						<h2>Notice</h2>
					</div> <!-- /.container -->
				</div> <!-- /.overlay -->
			</div> <!-- /.theme-inner-banner -->
			<div class="faq-page section-spacing">
				<div class="container">
					<div class="row">
						<div class="col-xl-8 col-lg-8 col-md-8 col-sm-7 col-12">
							<div class="theme-title-one">
								<h2>{{$notice_heading->caption}}</h2>
							</div> <!-- /.theme-title-one -->
							<div class="faq-panel">
								<div class="panel-group theme-accordion" id="accordion">
									<!----panel---->
								  @foreach($notices as $key=>$notice)	
									<div class="panel">
										<div class="panel-heading active-panel">
										<h6 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$key+1}}">
											{{$notice->short_content}}</a>
										</h6>
										</div>
										<div id="collapse{{$key+1}}" class="panel-collapse collapse show">
										<div class="panel-body">
											<p>{{$notice->short_content}}</p>
										</div>
										</div>
									</div> <!-- /panel 1 -->									
								  @endforeach								  
								  <!----panel---->
								  
								</div> <!-- end #accordion -->
							</div>
						</div>
						<div class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-12 blog-sidebar">
							<div class="sidebar-container sidebar-categories">
								<ul>
									<li class="active"><a href="#">Company Profile</a></li>
									<li><a href="#">Vision & Values</a></li>
									<li><a href="#">Our Approach</a></li>
									<li><a href="#">Industries We Serve</a></li>
									<li><a href="#">Industries We Serve</a></li>
									<li><a href="#">Organization Chart</a></li>
									<li><a href="#">Message from Chairman</a></li>
									<li><a href="#">License & Certificates</a></li>
									<li><a href="#">Awards</a></li>
								</ul>
							</div> <!-- /.sidebar-categories -->
							<div class="sidebar-container sidebar-recent-post">
								<h5 class="title">Job Categorey</h5>
								<ul>
									<li class="clearfix">
										<a href="#">
										<img src="/website/images/blog/1.jpg" alt="" class="float-left">
										<div class="post float-left">
											<h6>Security Company</h6>
											<p>View Job</p>
										</div>
										</a>
									</li>
									<li class="clearfix">
										<a href="#">
										<img src="/website/images/blog/2.jpg" alt="" class="float-left">
										<div class="post float-left">
											<h6>Supermarket</h6>
											<p>View Job</p>
										</div>
										</a>
									</li>
									<li class="clearfix">
										<a href="#">
										<img src="/website/images/blog/3.jpg" alt="" class="float-left">
										<div class="post float-left">
											<h6>Oil & Gas</h6>
											<p>View Job</p>
										</div>
										</a>
									</li>
									<li class="clearfix">
										<a href="#">
										<img src="/website/images/blog/4.jpg" alt="" class="float-left">
										<div class="post float-left">
											<h6>Constructions Field</h6>
											<p>View Job</p>
										</div>
										</a>
									</li>
									<li class="clearfix">
										<a href="#">
										<img src="/website/images/blog/5.jpg" alt="" class="float-left">
										<div class="post float-left">
											<h6>Hotels / Resorts</h6>
											<p>View Job</p>
										</div>
										</a>
									</li>
								</ul>
							</div> <!-- /.sidebar-recent-post -->
							<div class="company-slogon">
								<p class="text-white">Premier human resource agency & placement consultants that partner with global clients to provide them with best talents from Nepal.</p>
							</div>
						</div>
					</div>
				</div> <!-- /.container -->
			</div> <!-- /.faq-page -->

    @include("website.company_success")
    @include("website.partner")
@endsection
    
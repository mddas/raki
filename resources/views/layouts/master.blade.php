<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<!-- For IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<!-- For Resposive Device -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- For Window Tab Color -->
		<!-- Chrome, Firefox OS and Opera -->
		<meta name="theme-color" content="#061948">
		<!-- Windows Phone -->
		<meta name="msapplication-navbutton-color" content="#061948">
		<!-- iOS Safari -->
		<meta name="apple-mobile-web-app-status-bar-style" content="#061948">
		<title>Raki International | WelCome and Namaste</title>
		<!-- Favicon -->
		<link rel="icon" type="image/png" sizes="56x56" href="/website/images/fav-icon/icon.png">
		<!-- Main style sheet -->
		<link rel="stylesheet" type="text/css" href="/website/css/style.css">
		<!-- responsive style sheet -->
		<link rel="stylesheet" type="text/css" href="/website/css/responsive.css">
        <link rel="stylesheet" href='https://cdn.rawgit.com/sachinchoolur/lightgallery.js/master/dist/css/lightgallery.css'>

	</head>

	<body>
		<div class="main-page-wrapper">
			<header class="header-one">
				<div class="top-header">
					<div class="container clearfix">
						<div class="logo float-left"><a href="/"><img src="uploads/icons/{{$global_setting->site_logo}}" alt=""></a></div>
						<div class="address-wrapper float-right">
							<ul>
								<li class="address">
									<i class="icon flaticon-placeholder"></i>
									  <h6>{{$global_setting->website_full_address}}</h6>
                                      <p>Kathmandu Nepal</p>
								</li>
								<li class="address">
									<i class="icon flaticon-multimedia"></i>
									<h6><a href="tel:015224502">{{$global_setting->phone}}</a>	/	<a href="tel:015224503">{{$global_setting->phone_ne}}</a></h6>
									<p><a href="mailto:info@rakiint.com.np">{{$global_setting->site_email}}</a></p>
								</li>
								<li class="quotes"><a href="apply-form.html" target="_blank">Apply Now</a></li>
							</ul>
						</div> <!-- /.address-wrapper -->
					</div> <!-- /.container -->
				</div> <!-- /.top-header -->

				<div class="theme-menu-wrapper">
					<div class="container">
						<div class="bg-wrapper clearfix">
							<!-- ============== Menu Warpper ================ -->
					   		<div class="menu-wrapper float-left">
					   			<nav id="mega-menu-holder" class="clearfix">
								   <ul class="clearfix">
									    <li class="active"><a href="/">Home</a></li>
									  
                                        @foreach($menus as $menu)
                                            @php $submenus = $menu->childs; @endphp
									        <li>
                                                <a href="{{route('category',$menu->nav_name)}}">{{$menu->caption}}</a>
                                                <ul class="dropdown">
                                                    @foreach($submenus as $sub)
                                                        <li><a href="{{route('subcategory',[$menu->nav_name,$sub->nav_name])}}">{{$sub->caption}}</a></li>
                                                    @endforeach
									            </ul>
                                            </li>
									    @endforeach
								   </ul>
								</nav> <!-- /#mega-menu-holder -->
					   		</div> <!-- /.menu-wrapper -->

					   		<div class="right-widget float-right">
					   			<ul>
					   				<li class="social-icon">
					   					<ul>
											<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
										</ul>
					   				</li>
					   			</ul>
					   		</div> <!-- /.right-widget -->
						</div> <!-- /.bg-wrapper -->
					</div> <!-- /.container -->
				</div> <!-- /.theme-menu-wrapper -->
			</header> <!-- /.header-one -->

			<!-------contents------->

			@yield("contents")


			<!------contents end------>

			<footer class="theme-footer-two">
                <div class="top-footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-sm-6 col-12 logo-widget">
                                <p>
                                    Premier human resource agency & placement
                                    consultants
                                </p>
                                <ul class="social-icon">
                                    <li>
                                        <a href="#"
                                            ><i
                                                class="fa fa-facebook"
                                                aria-hidden="true"
                                            ></i
                                        ></a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            ><i
                                                class="fa fa-twitter"
                                                aria-hidden="true"
                                            ></i
                                        ></a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            ><i
                                                class="fa fa-linkedin"
                                                aria-hidden="true"
                                            ></i
                                        ></a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            ><i
                                                class="fa fa-pinterest"
                                                aria-hidden="true"
                                            ></i
                                        ></a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            ><i
                                                class="fa fa-google-plus"
                                                aria-hidden="true"
                                            ></i
                                        ></a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.logo-widget -->
                            <div class="col-lg-2 col-sm-6 col-12 footer-list">
                                <h6 class="title">EXPLORE</h6>
                                <ul>
                                    <li><a href="inner.html">About us</a></li>
                                    <li><a href="why-us.html">Why Us?</a></li>
                                    <li>
                                        <a href="job-category.html"
                                            >Job Category</a
                                        >
                                    </li>
                                    <li><a href="gallery.html">Gallery</a></li>
                                </ul>
                            </div>
                            <!-- /.footer-list -->

                            <div
                                class="col-lg-3 col-sm-6 col-12 contact-widget"
                            >
                                <h6 class="title">CONTACT</h6>
                                <ul>
                                    <li>
                                        <i class="flaticon-direction-signs"></i>
                                       {{$global_setting->website_full_address}} , Kathmandu Nepal
                                    </li>
                                    <li>
                                        <i class="flaticon-multimedia-1"></i>
                                        <a href="{{$global_setting->site_email}}">{{$global_setting->site_email}}</a>
                        
                                    </li>
                                    <li>
                                        <i
                                            class="fa fa-phone"
                                            aria-hidden="true"
                                        ></i>
                                        <a href="tel:{{$global_setting->phone}}">{{$global_setting->phone}}</a> /
                                        <a href="tel:{{$global_setting->phone_ne}}">{{$global_setting->phone_ne}}</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.contact-widget -->

                            <div class="col-lg-3 col-sm-6 col-12 location">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7065.511178424314!2d85.281466!3d27.693948!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe25fdd5d858e0cbe!2sKalanki%20Bus%20Stop!5e0!3m2!1sen!2snp!4v1657621704385!5m2!1sen!2snp"
                                    width="100%"
                                    height="200"
                                    style="border: 0"
                                    allowfullscreen=""
                                    loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"
                                ></iframe>
                            </div>
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container -->
                </div>
                <!-- /.top-footer -->
                <div class="bottom-footer">
                    <div class="container">
                        <div class="copy-right">
                            <p>
                                All Rights Reserved 2022 © Raki International
                                Pvt. Ltd. Developed by
                                <a
                                    href="http://www.radiantnepal.com/"
                                    target="_blank"
                                    >Radiant Infotech Nepal</a
                                >
                            </p>
                        </div>
                    </div>
                </div>
                <!-- /.bottom-footer -->
            </footer>
            <!-- /.theme-footer -->

            <!-- Scroll Top Button -->
            <button class="scroll-top tran3s">
                <i class="fa fa-angle-up" aria-hidden="true"></i>
            </button>

            <!-- Optional JavaScript _____________________________  -->

            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <!-- jQuery -->
            <script src="/website/vendor/jquery.2.2.3.min.js"></script>
            <!-- Popper js -->
            <script src="/website/vendor/popper.js/popper.min.js"></script>
            <!-- Bootstrap JS -->
            <script src="/website/vendor/bootstrap/js/bootstrap.min.js"></script>
            <!-- Camera Slider -->
            <script src="/website/vendor/Camera-master/scripts/jquery.mobile.customized.min.js"></script>
            <script src="/website/vendor/Camera-master/scripts/jquery.easing.1.3.js"></script>
            <script src="/website/vendor/Camera-master/scripts/camera.min.js"></script>
            <!-- menu  -->
            <script src="/website/vendor/menu/src/js/jquery.slimmenu.js"></script>
            <!-- WOW js -->
            <script src="/website/vendor/WOW-master/dist/wow.min.js"></script>
            <!-- owl.carousel -->
            <script src="/website/vendor/owl-carousel/owl.carousel.min.js"></script>
            <!-- js count to -->
            <script src="/website/vendor/jquery.appear.js"></script>
            <script src="/website/vendor/jquery.countTo.js"></script>
            <!-- Fancybox -->
            <script src="/website/vendor/fancybox/dist/jquery.fancybox.min.js"></script>

            <!-- Theme js -->
            <script src="/website/js/theme.js"></script>
            	<!-- gllery js -->
	    <script src="/website/js/gallery/picturefill.min.js"></script>
	    <script src="/website/js/gallery/lightgallery.js"></script>
	    <script src="/website/js/gallery/lg-pager.js"></script>
	    <script src="/website/js/gallery/lg-autoplay.js"></script>
	    <script src="/website/js/gallery/lg-fullscreen.js"></script>
	    <script src="/website/js/gallery/lg-zoom.js"></script>
	    <script src="/website/js/gallery/lg-hash.js"></script>
	    <script src="/website/js/gallery/lg-share.js"></script>
        <script>
        lightGallery(document.getElementById('lightgallery'));

        $(function() {
        var selectedClass = "";
        $(".filter").click(function(){
        selectedClass = $(this).attr("data-rel");
        $("#lightgallery").fadeTo(100, 0.1);
        $("#lightgallery div").not("."+selectedClass).fadeOut().removeClass('animation');
        setTimeout(function() {
        $("."+selectedClass).fadeIn().addClass('animation');
        $("#lightgallery").fadeTo(300, 1);
        }, 300);
        });
        });
    	</script>
	    <!--End gllery js -->
        
    
    
    </div>
    <!-- /.main-page-wrapper -->
    </body>
</html>

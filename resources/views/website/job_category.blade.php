
            <div class="job-category our-blog latest-news section-spacing">
                <div class="container">
                    <div class="theme-title-one">
                        <h2>JOB CATEGORY</h2>
                    </div>
                    <!-- /.theme-title-one -->
                    <div class="wrapper">
                        <div class="clearfix">
                            <div class="latest-news-slider">
                                @foreach($job_categories as $cat)
                                <div class="item">
                                    <div class="single-job">
                                        <div class="image-box">
                                            <img
                                                src="{{$cat->banner_image}}"
                                                alt=""
                                            />
                                            <div class="overlay">
                                                <a
                                                    href="/{{$cat->nav_name}}"
                                                    class="date"
                                                    >{{$cat->caption}}</a
                                                >
                                            </div>
                                        </div>
                                        <!-- /.image-box -->
                                    </div>
                                    <!-- /.job-category-single -->
                                </div>
                                <!-- /.col- -->
                                @endforeach
                            </div>
                            <!-- /.job-category -slider -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.wrapper -->
                </div>
                <!-- /.container -->
            </div>
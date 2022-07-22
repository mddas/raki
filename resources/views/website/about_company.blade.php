
            <div class="about-compnay section-spacing">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <div class="text">
                                <div class="theme-title-one">
                                    <h2>{{$about->caption ?? ''}}</h2>
                                    <p>{{$about->short_content ?? ''}}</p>
                                    <a
                                        href="{{route('readmore',$about->id)}}"
                                        class="theme-button-one"
                                        >Read More</a
                                    >
                                </div>
                                <!-- /.theme-title-one -->
                            </div>
                            <!-- /.text -->
                        </div>
                        <!-- /.col- -->
                        <div class="col-lg-6 col-12">
                            <img src="{{$about->banner_image ?? ''}}" alt="" />
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container -->
            </div>
            <!-- /.about-compnay -->

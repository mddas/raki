   <div class="message-sec">
                <div class="overlay">
                    <div class="container">
                        <div class="row no-gutters">
                            <div class="col-lg-7 col-12 text">
                                <div class="theme-title-one">
                                    <h2>{{$message->caption}}</h2>
                                </div>
                                <!-- /.theme-title-one -->
                                <p>
                                    {{$message->short_content}}
                                </p>
                                <a
                                    href="#"
                                    class="theme-button-one white-outline"
                                    >Read More</a
                                >
                            </div>
                            <!-- /.col- -->
                            <div class="col-lg-5 col-12">
                                <div class="person-img">
                                    <img src="{{$message->banner_image}}" />
                                </div>
                            </div>
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container -->
                </div>
                <!-- /.overlay -->
            </div>
     @if($process!=null)
     <div class="requirement-process section-spacing">
                <div class="container">
                    <div class="theme-title-one">
                        <h2>Our Unique Process</h2>
                    </div>
                    <!-- /.theme-title-one -->
                    <div class="wrapper">
                        <div class="clearfix">
                            <div class="process-slider">
                              @foreach($process as $proc)
                                <div class="item">
                                    <div class="step-content">
                                        <h4>{{$proc->caption}}</h4>
                                        <h6>{{$proc->short_content}}</h6>
                                    </div>
                                </div>
                               @endforeach                      
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
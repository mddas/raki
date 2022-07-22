
    @if($missons!=null)
    
    <div class="section-spacing mission-sec bg-gray">
                <div class="container">
                    <div class="row">
                       @foreach($missons as $key=>$misson)
                        @if($key<=2) 
                        <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="mission-box">
                                <h3>{{$misson->caption}}</h3>
                                <p>
                                    {{$misson->short_content}}
                                </p>
                                <a href="{{route('readmore',$misson->id)}}">Read More +</a>
                            </div>
                        </div>
                        @else
                            @php break; @endphp
                        @endif
                     @endforeach                       
                    </div>
                </div>
            </div>
        @endif
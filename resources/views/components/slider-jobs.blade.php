<div class="carousel-testimony owl-carousel ftco-owl">
                        @foreach($jobsr as $js)
                            <div class="item">
                            <div class="card mb-4 shadow-sm" style="height:300px; border-radius: 30px;">
                                <img class="card-img-top mx-auto mt-2" src="{{asset('/img-jobs/'.$js->url)}}" style="height:50%; width:50%">
                                <div class="card-body">
                                <div class="troga"><p style="font-size: 21px;  text-align: center;  padding-top: 4px;  color: white;">New</p></div>
                                <p class="card-text"> {{$js->title}}</p>
                                <hr>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                    <a href="{{asset('/job/'.$js->id)}}" class="btn btn-md btn-primary">View more</a>
                                    </div>
                                    <small class="text-muted">Posted on: {{$js->created_at->format('Y-m-d')}}<br>
                                        Posted by: {{$js->company_name}}
                                    </small>
                                </div>
                                </div>
                                </div>
                            </div>
                            @endforeach
                       
                        </div>

                        <Style>
                        .troga{
                        background:  #fdab44;
                        position: absolute;
                        width: 75px;
                        height: 50px;
                        border-bottom-left-radius: 30px;
                        right: 0;
                        top: 0;
                        border-top-right-radius: 30px;
                        }
                        </style>
<div class="carousel-testimony owl-carousel ftco-owl">
                        @foreach($blogs as $blog)
                            <div class="item">
                            <div class="card mb-4 shadow-sm">
                                <img class="card-img-top mx-auto" src="{{asset('/img-blogs/'.$blog->url)}}">
                                <div class="card-body">
                                <p class="card-text"> {{$blog->title}}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                    <a href="{{asset('/blog/'.$blog->id)}}" class="btn btn-md text-white" style="background:#fdab44">View</a>
                                    </div>
                                    <small class="text-muted"><i class="fas fa-comment-dots text-secondary"></i> &nbsp;Posted by admin <br>
                                        Posted on: {{$blog->created_at->format('m-d-Y')}}
                                     </small>
                                </div>
                                </div>
                                </div>
                            </div>
                            @endforeach
                       
                        </div>
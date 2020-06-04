@foreach($posts as $post)
              @foreach($post->posta as $p)
              <div class="job-post-item shadow col-lg-5 mr-5">
                    <div class="row">
                            <div class="col-lg-6 border-right">
                                <div class="rounded-circle  image-background2 mt-2 shadow mx-auto"  style="background-image: url({{asset('/img-users/'.$p->image)}});     background-size: cover;">
                                </div>
                               
                              </div>
                          
                              <div class="col-lg-6">
                              <p class="text-dark mt-2">{{$p->user->name}}, from {{$p->city->name}}, </p>
                                <p class="mt-2">@isset($categoryname){{$categoryname}}@endisset,&nbsp;{{$p->category->name}}</p>
                                <p class="mt-2">Email:{{$p->user->email}}</p>
                              
                            </div>
                            </div>
                            <hr>
                            <div class="row">
                            <a href="{{asset('/user/'.$p->user_id)}}" class="btn btn-warning text-white mx-auto m-2">View more about  <span class="icon-heart text-danger"></span></a>
                            </div>
                        </div>
                @endforeach    
          @endforeach
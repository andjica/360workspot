@foreach($users as $user)
        <div class="job-post-item shadow col-lg-5 m-2">
                    <div class="row">
                            <div class="col-lg-6 border-right">
                                <div class="rounded-circle  image-background2 mt-2 shadow mx-auto"  style="background-image: url({{asset('/img-users/'.$user->post->image)}});     background-size: cover;">
                                </div>
                               
                              </div>
                          
                              <div class="col-lg-6">
                              <p class="text-dark mt-2">{{$user->name}}, from {{$user->post->city->name}}</p>
                             <p class="mt-2"> Category: {{$user->post->category->name}} <Br>Status: {{$user->post->status}} </p>
                            
                               
                            </div>
                            </div>
                            <hr>
                            <div class="row">
                            <a href="{{asset('/user/'.$user->id)}}" class="btn btn-warning text-white mx-auto m-2">View more about {{$user->name}} <span class="icon-heart text-danger"></span></a>
                            </div>
                        </div>
                  
          
                @endforeach
@foreach($posts as $post)
        <div class="job-post-item shadow col-lg-5 mr-5">
                    <div class="row">
                            <div class="col-lg-6 border-right">
                                <div class="rounded-circle  image-background2 mt-2 shadow mx-auto"  style="background-image: url({{asset('/img-users/'.$post->image)}});     background-size: cover;">
                                </div>
                               
                              </div>
                          
                              <div class="col-lg-6">
                              <p class="text-dark mt-2">{{$post->user->name}}, from {{$post->city->name}}, </p>
                                <p class="mt-2"> Category: {{$post->category->name}}, {{$post->category->subcategory->name}} <Br>Status: {{$post->status}} </p>
                                <p class="mt-2">Email:{{$post->user->email}}</p>
                              
                            </div>
                            </div>
                            <hr>
                            <div class="row">
                            <a href="" class="btn btn-warning text-white mx-auto m-2">View more about {{$post->name}} <span class="icon-heart text-danger"></span></a>
                            </div>
                        </div>
                  
          
                @endforeach
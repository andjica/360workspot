@foreach($posts as $post)
              @foreach($post->posta as $p)
              <div class="job-post-item shadow col-lg-4 mb-5" style="    border-radius: 20px;">
                    <div class="row">
                            <div class="col-lg-12 border-right">
                                <div class="rounded-circle  image-background2 mt-2 shadow mx-auto"  style="    position: relative;
    top: -20px; background-image: url({{asset('/img-users/'.$p->image)}});      width: 100%;
    border-radius: 20px !important;
    background-size: cover;
    height: 300px;
    background-position: top;">
                                </div>
                               <img src="./img/iconprofile.png" style="position: absolute;
    top: 0;
    height: 24%;
    left: 30px;">
                              </div>
                          
                              <div class="col-lg-12">
                              <p class="text-dark mt-2">{{$p->user->name}}, from {{$p->city->name}}, </p>
                                <p class="mt-2">@isset($categoryname){{$categoryname}}@endisset,&nbsp;{{$p->category->name}}</p>
                                <p class="mt-2">Email:{{$p->user->email}}</p>
                              
                            </div>
                            </div>
                            <hr>
                            <div class="row">
                            <a href="{{asset('/user/'.$p->user_id)}}" class="btn btn-warning text-white mx-auto m-2">View more about {{$p->user->name}} <span class="icon-heart text-danger"></span></a>
                            </div>
                        </div>
                @endforeach    
          @endforeach
@include('components.header')
@include('components.nav')


        <div class="container mt-5 bg-light" style="margin-top:120px !important;">
        <div class="row">
        <div class="col-lg-12 justify-content-center p-2 bg-white shadow" style="border-radius: 20px;">
        <div class="tag-widget post-tag-container text-center">
                    <div class="tagcloud">
                    <h3 class="tag-cloud-link bg-white p-2" style="    font-size: 17px;"><i class="fas fa-sort fa-1x"></i> 
                    &nbsp;Category : @isset($categoryname){{$categoryname}}@endisset ,  @isset($subname){{$subname}}@endisset&nbsp;
                    <i class="fas fa-city"></i> City : @isset($cityname){{$cityname}}@endisset
                    <i class="fab fa-pagelines text-success"></i>
                    </h3>
                    <hr class="mt-0">
                    
                        @foreach($subcats as $sub)
                        <form action="{{route('search-company-category-subcategory')}}" method="GET">
                    
                        <input type="hidden" name="categoryId" value="{{$cat}}">
                        <input type="hidden" name="cityId" value="{{$cit}}">
                        <input type="hidden" name="subcatId" value="{{$sub->id}}">
                       <ul style="    float: left; list-style:none;">
                        <li><button type="submit" class="btn border bg-light">{{$sub->name}}</button></li>
                        </ul>
                        </form>
                        @endforeach
                        
                    </div>
                    </div>
        </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-12 justify-content-center">
                <div class="row justify-content-center">
                   
                        
                       @foreach($posts as $post)
        <div class="job-post-item shadow col-lg-5 mr-5">
                    <div class="row">
                            <div class="col-lg-6 border-right">
                                <div class="rounded-circle  image-background2 mt-2 shadow mx-auto"  style="background-image: url({{asset('/img-users/'.$post->image)}});     background-size: cover;">
                                </div>
                               
                              </div>
                          
                              <div class="col-lg-6">
                              <p class="text-dark mt-2">{{$post->user->name}}, from {{$post->city->name}}, </p>
                                <p class="mt-2">@isset($categoryname){{$categoryname}}@endisset ,  @isset($subname){{$subname}}@endisset  <Br>Status: {{$post->status}} </p>
                                <p class="mt-2">Email:{{$post->user->email}}</p>
                              
                            </div>
                            </div>
                            <hr>
                            <div class="row">
                            <a href="{{asset('/user/'.$post->user_id)}}" class="btn btn-warning text-white mx-auto m-2">View more about  <span class="icon-heart text-danger"></span></a>
                            </div>
                        </div>
                  
          
                @endforeach
                
                </div>
            </div>
            
            </div>
            <div class="row mt-5">
                <div class="col text-center">
                <div class="block-27">
                <ul>
                <li>  {{$posts->links()}}</li>

                </ul>
                </div>
                </div>
                </div>
            </div>

       
            @include('components.footer')

            <style>
                .text-dark{
                    font-size:14px;
                }
            </style>
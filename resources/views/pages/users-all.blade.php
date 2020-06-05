@include('components.header')
@include('components.nav')
@include('components.search-users-bar')
<section class="ftco-section bg-light no-padding m-5">
        <div class="container mt-5">
            <div class="col-lg-12 pt-5">
            <div class="row">
            @foreach($posts as $post)
            <div class="job-post-item shadow col-lg-4 ml-0 mb-5">
                        <div class="row" style="    display: grid;">
                                <div class="col-lg-12 ">
                                    <div class="rounded-circle  image-background2 mt-2 shadow mx-auto"  style="background-image: url({{asset('/img-users/'.$post->image)}});        height: 320px;
    width: 100%;
    position: relative;
    top: -26px;
    border-radius: 10px !important;">
                                    </div>
                                    <img src="./img/iconprofile.png" style="position: absolute;
    top: -15px;
    height: 24%;
    left: 30px;">
                                </div>
                            
                                <div class="col-lg-12">
                                <p class="text-dark mt-2">{{$post->user->name}}, from {{$post->city->name}}</p>
                                <p class="mt-2"> Category: {{$post->category->name}} <Br>Status: {{$post->status}} </p>
                                
                                
                                </div>
                                </div>
                                <hr>
                                <div class="row">
                                <a href="{{asset('/user/'.$post->id)}}" class="btn btn-warning text-white mx-auto m-2">View more about {{$post->user->name}} {{$post->name}} <span class="icon-heart text-danger"></span></a>
                                </div>
                            </div>
                    
            
                    @endforeach
                    <div>
                    </div>
                  
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
            </section>
       
            @include('components.footer')

            <style>
                .text-dark{
                    font-size:14px;
                }

                .job-post-item{
                    border-radius: 20px;
                }
            </style>
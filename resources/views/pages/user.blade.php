@include('components.header')
@include('components.nav')
<div class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
        <div class="col-md-12 ftco-animate text-center mb-5">
        <h3 class="text-white" style="    margin-top: -141px;">{{$post->user->name}}, {{$post->category->name}}</h3>
        <p class="breadcrumbs mb-0"><span class="mr-3"><a href="{{route('index')}}">
       
            </p>
        
      
        
        
        </div>
        </div>
        </div>
</div>

<section>
    <div class="container">
    
        <div class="row">
            
                    <div class="col-lg-6 tacn012 bg-white shadow d-flex mr-5" >
                    <div class="rounded-circle mx-auto image-background5 m-2 shadow"  style="background-image: url({{asset('/img-users/'.$post->image)}});     background-size: cover;">
                     </div>
                     <p style="    padding-top: 60px;
    text-align: left;">Category: {{$post->category->name}}<br>
                        City: {{$post->city->name}} <br>
                        Status: {{$post->status}}<br>
                        Email: {{$post->user->email}}<br>
                        Age: @isset($agenumber) {{$agenumber}} @endisset
                        </p>
                    </div>

                    <div class="col-lg-5 bg-white shadow tacn012 d-flex">
                        <div class=" row d-flex">

                            <div class="col-lg-4">
                            <img src="../images/lion.jpg" style="    width: 100%;">
                            </div>

                            <div class="col-lg-4">
                            <img src="../images/lion.jpg" style="    width: 100%;">
                            </div>

                            <div class="col-lg-4">
                            <img src="../images/lion.jpg" style="    width: 100%;">
                            </div>

                            <div class="col-lg-4">
                            <img src="../images/lion.jpg" style="    width: 100%;">
                            </div>

                            <div class="col-lg-4">
                            <img src="../images/lion.jpg" style="    width: 100%;">
                            </div>

                            <div class="col-lg-4">
                            <img src="../images/lion.jpg" style="    width: 100%;">
                            </div>
                        </div>

                       
                        </div>    
                        
                            
                    </div>
             
        </div>
    </div>
</section>

<section>
    <div class="container">
    <h1 style="text-align: center;
    font-weight: 700;
    font-family: sans-serif;
    letter-spacing: 4px;
    margin-top: 74px;
">My Information and Skills</h1>
        <div class="row">
        <div class="col-lg-4 mr-4 bg-white shadow " style="    border-radius: 20px;">
        <h4 style="text-align: center;
    border: 1px solid;
    border-left-color: transparent;
    border-top-color: transparent;
    border-right-color: transparent;     font-weight: 700;
    padding: 20px;">My information</h4>

        <p style="  text-align: left;  font-size: 18px;  font-family: sans-serif;  font-weight: 700;   color: black;
    padding-left: 80px;">
    

                        <br>
Category: {{$post->category->name}}<br>
                        City: {{$post->city->name}} <br>
                        Status: {{$post->status}}<br>
                        Email: {{$post->user->email}}<br>
                        Age: @isset($agenumber) {{$agenumber}} @endisset
                        </p>
        </div>
                    <div class="col-lg-7 bg-white shadow ml-4" style="    border-radius: 20px;">
                            <h4 style="text-align: center;
    border: 1px solid;
    border-left-color: transparent;
    border-top-color: transparent;
    border-right-color: transparent;     font-weight: 700;
    padding: 20px;">Biography</h4>
                            <p style="color: black;
    padding: 20px;
    font-weight: 600;">{{$post->short_biography}}</p>
                            
                    </div>

                  
             
        </div>
    </div>
</section>

<section style="    margin-top: 120px; ">
    <div class="container">
    <h1 style="text-align: center;
    font-weight: 700;
    font-family: sans-serif;
    letter-spacing: 4px;
    margin-top: 74px; margin-bottom:40px;
">My Biography</h1>
        <div class="row">
            <div class="col-lg-5  mr-5">
            <div class="rounded-circle mx-auto image-background5 m-2 shadow"  style="background-image: url({{asset('/img-users/'.$post->image)}});        background-size: auto;
    height: 420px;
    background-position: top;
    width: 420px;
    border-radius: 33px !important;">
                     </div>
                     </div>
                     <div class="col-lg-6 shadow">
                     <h4 style="text-align: center;
    border: 1px solid;
    border-left-color: transparent;
    border-top-color: transparent;
    border-right-color: transparent;">More about you</h4>
                            <p style="    font-weight: 700;
    padding: 20px;  padding: 26px; color: black;">{{$post->more_about}}</p>
                     </div>
           
        </div>  
    </div>
</section>



<section>
    <div class="container">
        <div class="row">
     
        <div class="col-lg-12 " style="max-width: 100%;
    margin-left: -16px;
    margin-top: 40px">
       <h1 style="text-align: center;
    font-weight: 700;
    font-family: sans-serif;
    letter-spacing: 4px;
    margin-top: 74px;
">My Portfolio</h1>
                    @if($post->video)
                            <header>
                                <div class="overlay"></div>
                                <video playsinline="playsinline" style="    width: 100%;" autoplay="autoplay" muted="muted" loop="loop">
                                    <source src="{{asset('/video-fromusers/'.$post->video)}}" type="video/mp4">
                                </video>
                                <div class="container h-100">
                                    <div class="d-flex h-100 text-center align-items-center">
                                    <div class="w-100 text-white">
                                        <h1 class="display-3" style="    visibility: hidden;">Video Header</h1>
                                        <p class="lead mb-0" style="    visibility: hidden;">With HTML5 Video and Bootstrap 4</p>
                                    </div>
                                    </div>
                                </div>
                                </header>
                            
                            @else
                            <ul class="list-group mt-2">
                                        @if($skillcount > 0)
                                            @foreach($skill as $sk)
                                            <li class="list-group-item">
                                            {{$sk->skill_one}} {{$sk->percent_one}}%
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: {{$sk->percent_one}}%" aria-valuenow="{{$sk->percent_one}}%" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                            {{$sk->skill_two}} {{$sk->percent_two}}%
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: {{$sk->percent_two}}%" aria-valuenow="{{$sk->percent_two}}%" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </li>
                                            
                                            @endforeach
                                        @else
                                    @endif
                                    
                                    </ul>
                            @endif

                    </div>
        </div>
    </div>
</section>


<section>
    <div class="container">
        <div class="row">
            @foreach($images as $img)
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <img class="card-img-top" src="{{asset('/img-fromusers/'.$img->url)}}" alt="{{$img->alt}}">
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
       
            @include('components.footer')

            <style>
                .text-dark{
                    font-size:14px;
                }
                .back-sg
                {
                   background: linear-gradient(to right, #207dff 0%, #a16ae8 100%);
                }

                @media screen and (min-width:768px){
                    .tacn012{
                        background: grey;
                        border-radius: 20px;
                        position: relative;
                        top: -92px;
                        text-align: left;
                        padding: 10px;
                        color: black;
                        font-weight: 700;
                                        }
                    
                }

                





@media (pointer: coarse) and (hover: none) {
  header {
    background: url('https://source.unsplash.com/XT5OInaElMw/1600x900') black no-repeat center center scroll;
  }
  header video {
    display: none;
  }
}
</style>
         
@include('components.header')
@include('components.nav')
<div class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
        <div class="col-md-12 ftco-animate text-center mb-5">
        <h2 class="text-white"><i class="fas fa-briefcase fa-2x text-white"></i>&nbsp;Brows Jobs </h2>
<p>360 Find a perfect Job for you
</p>
       
        </div>
        </div>
        </div>
        </div>
        <section class="ftco-section ftco-degree-bg">
            <div class="container">
                <div class="row">
                @if($countjobs == 0)

                @else
                <div class="col-md-9 ftco-animate">
                <div class="row">
                @foreach($jobs as $job)
                <div class="col-md-4">
                <div class="card mb-4 shadow-sm" style="    height: 320px;">
                                <img class="card-img-top mx-auto"  style="background-image:url({{asset('/img-jobs/'.$job->url)}});     height: 100%;
    width: 100%;
    background-size: cover;
    background-repeat: no-repeat;
    text-align: center;
    background-position: center;">
                                <div class="card-body">
                                <p class="card-text"> {{$job->title}}</p>
                                <div class=" align-items-center" style="    display: grid;">
                                    
                                    <small class="text-muted"><i class="fas fa-comment-dots text-secondary"></i> &nbsp;Posted by {{$job->company_name}} <br>
                                        Posted on: {{$job->created_at->format('m-d-Y')}}
                                     </small>
                                     <div class="btn-group">
                                    <a href="{{asset('/job/'.$job->id)}}" class="btn btn-md text-white" style="background:#fdab44">View</a>
                                    </div>
                                </div>
                                </div>
                                </div>
                    </div>
                    @endforeach
                <div class="col-lg-6">
                    <ul class="list-group">
                        <li class="list-group">  {{$jobs->links()}}</li>
                    </ul> 
                </div>
                <br><br>
                </div>
                </div>
               <div class="col-lg-3 pl-md-5 sidebar ftco-animate">
                    @include('components.filter-blog')
               </div>
               @endif
        </div>
               
 
            </div>
        </section>
        @include('components.footer')
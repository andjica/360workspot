@include('components.header')
@include('components.nav')
<div class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
        <div class="col-md-12 ftco-animate text-center mb-5">
        <h2 class="text-white"><i class="fas fa-blog fa-2x text-white"></i>&nbsp;Welcome to Blog page</h2>
<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in<br>
    360WorkSpot
</p>
       
        </div>
        </div>
        </div>
        </div>
        <section class="ftco-section ftco-degree-bg">
            <div class="container">
                <div class="row">
                @if($countblogs == 0)

                @else
                <div class="col-md-8 ftco-animate">
                <div class="row">
                @foreach($blogs as $blog)
                <div class="col-md-4">
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

                <ul class="list-group">
                <li class="list-group">  {{$blogs->links()}}</li>
                </ul> <br><br>
                </div>
                </div>
               <div class="col-lg-4 pl-md-5 sidebar ftco-animate">
                    @include('components.filter-blog')
               </div>
               @endif
        </div>
               
 
            </div>
        </section>
        @include('components.footer')
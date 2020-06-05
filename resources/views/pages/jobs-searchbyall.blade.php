@include('components.header')
@include('components.nav')
<div class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
<div class="overlay"></div>
<div class="container">
<div class="row no-gutters slider-text align-items-end justify-content-start">
<div class="col-md-12 ftco-animate text-center mb-5">
@isset($categoryname)
        <p class="breadcrumbs mb-0"><span class="mr-3"><a href="index.html">Home
             <i class="ion-ios-arrow-forward"></i></a></span> <span>Browse Job</span></p>
        <h1 class="mb-3 bread">{{$categoryname->name}},&nbsp; @isset($cityname) {{$cityname->name}} @endisset</h1>
        @endisset
        @foreach($subcats as $sub)
            <form action="{{route('search-byall')}}" method="GET">
            <input type="hidden" name="categoryId" value="{{$idcategory}}">
                <input type="hidden" name="cityId" value="{{$idcity}}">
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
@if(request()->all() && count($jobs) > 0)
    <section class="ftco-section bg-light no-padding m-5">
        <div class="container">
        <div class="row">
        <div class="col-lg-9 pr-lg-4">
        @include('components.backandall')
        
        <div class="row" id="jobsall">
                
                @foreach($jobs as $job)
                <div class="col-md-12 ftco-animate">
                
                    <div class="job-post-item p-4 d-block d-lg-flex align-items-center shadow">
                    <div class="one-third mb-4 mb-md-0">
                    <div class="job-post-item-header align-items-center">

                   
                    <img src="{{asset('/img-jobs/'.$job->url)}}" class="img-fluid" width="170px" style="width:15%;">
                    <h4 class="mr-3 text-dark">Category:@isset($categoryname) {{$categoryname->name}}@endisset, {{$job->category->name}} , &nbsp;
                     <Br>&nbsp;{{$job->title}}</h4>
                    </div>
                    <div class="job-post-item-body d-block d-md-flex">
                    <div class="mr-3">
                    
                    <span class="icon-my_location"></span>Location: {{$job->city->name}}, &nbsp;Posted on: {{$job->created_at->format('d-m-Y')}}</div>
                    
                    </div>
                    <span class="subadge text-muted"><i class="fas fa-euro-sign"> {{$job->salary->salary_between}} </i> Yearly based</span><br>
                    <span class="subadge text-muted">Posted by {{$job->company_name}} </span><br>
                    </div>
                    <div class="one-forth ml-auto d-flex align-items-center mt-4 md-md-0">
                    <div>
                    <a href="#" class="icon text-center d-flex justify-content-center align-items-center icon mr-2">
                    <span class="icon-heart"></span>
                    </a>
                    </div>
                    <a href="{{asset('/job/'.$job->id)}}" class="btn btn-primary py-2">Apply Job</a>
                    </div>
                    </div>
                </div>
              
                @endforeach
            </div>
        <div class="row mt-5">
        <div class="col text-center">
        <div class="block-27">
        <ul>
        <li>  {{$jobs->links()}}</li>

        </ul>
        </div>
        </div>
        </div>
           
        </div>
            @include('components.filter')
        </div>
        </div>
        </section>
       
        @else
      
        <section class="ftco-section bg-light no-padding m-5">
        <div class="container">
        <div class="row">
        <div class="col-lg-9 pr-lg-4">
            @include('components.backandall')
                
                <div class="alert alert-danger" role="alert">
                <h3>Sorry there is no jobs in this kind of filter </h3>
            </div>
        </div>
        @include('components.filter')
        </div>
        </div>
        </section>
@endif
@include('components.subscribe')

@include('components.footer')